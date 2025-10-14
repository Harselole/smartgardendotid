<?php

namespace App\Traits;

trait HasAdminPermission
{
    public static function canAccess(): bool
    {
        $user = auth()->user();

        if ($user?->isSuperAdmin()) {
            return true;
        }

        if ($user?->isAdmin()) {
            $resourceName = class_basename(static::class);
            return $user->hasPermissionTo($resourceName);
        }

        return false;
    }
}