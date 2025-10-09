<?php

namespace App\Filament\Resources\AdminPermissions\Pages;

use App\Filament\Resources\AdminPermissions\AdminPermissionResource;
use Filament\Actions\CreateAction;
use Filament\Resources\Pages\ListRecords;

class ListAdminPermissions extends ListRecords
{
    protected static string $resource = AdminPermissionResource::class;

    protected function getHeaderActions(): array
    {
        return [
            CreateAction::make(),
        ];
    }
}
