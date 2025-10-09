<?php

namespace App\Filament\Resources\AdminPermissions\Pages;

use App\Filament\Resources\AdminPermissions\AdminPermissionResource;
use Filament\Resources\Pages\CreateRecord;

class CreateAdminPermission extends CreateRecord
{
    protected static string $resource = AdminPermissionResource::class;
}
