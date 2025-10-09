<?php

namespace App\Filament\Resources\Users\Schemas;

use App\Models\AdminPermission;
use App\Models\User;
use Filament\Forms;
use Illuminate\Support\Facades\Hash;

class UserForm
{
    public static function configure($form)
    {
        return $form
            ->schema([
                Forms\Components\TextInput::make('name')
                    ->label('Nama')
                    ->required()
                    ->maxLength(255),
                
                Forms\Components\TextInput::make('email')
                    ->label('Email')
                    ->email()
                    ->required()
                    ->unique(ignoreRecord: true)
                    ->maxLength(255),
                
                Forms\Components\TextInput::make('password')
                    ->label('Password')
                    ->password()
                    ->dehydrateStateUsing(fn ($state) => Hash::make($state))
                    ->dehydrated(fn ($state) => filled($state))
                    ->required(fn (string $context): bool => $context === 'create')
                    ->minLength(8)
                    ->maxLength(255)
                    ->helperText('Minimal 8 karakter. Kosongkan jika tidak ingin mengubah password.'),

                Forms\Components\Select::make('role')
                    ->label('Role')
                    ->options([
                        User::ROLE_SUPER_ADMIN => 'Super Admin',
                        User::ROLE_ADMIN => 'Admin',
                    ])
                    ->default(User::ROLE_ADMIN)
                    ->required()
                    ->live()
                    ->helperText('Super Admin memiliki akses penuh ke semua menu'),

                Forms\Components\CheckboxList::make('permissions')
                    ->label('Menu yang Dapat Diakses')
                    ->options(function () {
                        return AdminPermission::enabled()
                            ->ordered()
                            ->pluck('menu_label', 'menu_name')
                            ->toArray();
                    })
                    ->columns(2)
                    ->gridDirection('row')
                    ->visible(function ($get) {
                        return $get('role') == User::ROLE_ADMIN;
                    })
                    ->helperText('Pilih menu yang dapat diakses oleh admin ini')
                    ->bulkToggleable(),
            ]);
    }
}