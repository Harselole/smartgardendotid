<?php

namespace App\Filament\Resources\AdminPermissions\Schemas;

use Filament\Forms;
use Filament\Schemas\Schema;

class AdminPermissionForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->schema([
                Forms\Components\TextInput::make('menu_name')
                    ->label('Nama Menu (Resource)')
                    ->required()
                    ->unique(ignoreRecord: true)
                    ->maxLength(255)
                    ->helperText('Contoh: UserResource, ProductResource, dll')
                    ->placeholder('UserResource'),
                
                Forms\Components\TextInput::make('menu_label')
                    ->label('Label Menu')
                    ->required()
                    ->maxLength(255)
                    ->helperText('Label yang akan ditampilkan di admin')
                    ->placeholder('Users'),
                
                Forms\Components\TextInput::make('order')
                    ->label('Urutan')
                    ->numeric()
                    ->default(0)
                    ->required()
                    ->helperText('Urutan tampilan menu (semakin kecil semakin atas)'),
                
                Forms\Components\Toggle::make('is_enabled')
                    ->label('Aktif')
                    ->default(true)
                    ->helperText('Menu hanya akan muncul jika aktif'),
            ]);
    }
}