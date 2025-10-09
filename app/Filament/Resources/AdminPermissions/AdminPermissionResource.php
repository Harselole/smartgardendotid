<?php

namespace App\Filament\Resources\AdminPermissions;

use App\Filament\Resources\AdminPermissions\Pages\CreateAdminPermission;
use App\Filament\Resources\AdminPermissions\Pages\EditAdminPermission;
use App\Filament\Resources\AdminPermissions\Pages\ListAdminPermissions;
use App\Filament\Resources\AdminPermissions\Schemas\AdminPermissionForm;
use App\Filament\Resources\AdminPermissions\Tables\AdminPermissionsTable;
use App\Models\AdminPermission;
use BackedEnum;
use Filament\Resources\Resource;
use Filament\Schemas\Schema;
use Filament\Support\Icons\Heroicon;
use Filament\Tables\Table;
use UnitEnum;

class AdminPermissionResource extends Resource
{
    protected static ?string $model = AdminPermission::class;

    protected static string|BackedEnum|null $navigationIcon = Heroicon::OutlinedShieldCheck;

    protected static UnitEnum|string|null $navigationGroup = 'User Management';
    
    protected static ?int $navigationSort = 2;

    protected static ?string $navigationLabel = 'Menu Permissions';

    protected static ?string $modelLabel = 'Menu Permission';

    protected static ?string $pluralModelLabel = 'Menu Permissions';

    protected static ?string $recordTitleAttribute = 'menu_label';

    // Hanya Super Admin yang bisa akses
    public static function canAccess(): bool
    {
        return auth()->user()?->isSuperAdmin() ?? false;
    }

    public static function form(Schema $schema): Schema
    {
        return AdminPermissionForm::configure($schema);
    }

    public static function table(Table $table): Table
    {
        return AdminPermissionsTable::configure($table);
    }

    public static function getRelations(): array
    {
        return [];
    }

    public static function getPages(): array
    {
        return [
            'index' => ListAdminPermissions::route('/'),
            'create' => CreateAdminPermission::route('/create'),
            'edit' => EditAdminPermission::route('/{record}/edit'),
        ];
    }
}