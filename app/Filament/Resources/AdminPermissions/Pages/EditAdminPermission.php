<?php

namespace App\Filament\Resources\AdminPermissions\Pages;

use App\Filament\Resources\AdminPermissions\AdminPermissionResource;
use Filament\Actions\DeleteAction;
use Filament\Resources\Pages\EditRecord;

class EditAdminPermission extends EditRecord
{
    protected static string $resource = AdminPermissionResource::class;

    protected function getHeaderActions(): array
    {
        return [
            DeleteAction::make(),
        ];
    }
}
