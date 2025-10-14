<?php

namespace App\Filament\Resources\SmartgardenAgros;

use BackedEnum;
use Filament\Tables\Table;
use Filament\Schemas\Schema;
use App\Models\SmartgardenAgro;
use Filament\Resources\Resource;
use App\Traits\HasAdminPermission;
use Filament\Support\Icons\Heroicon;
use App\Filament\Resources\SmartgardenAgros\Pages\EditSmartgardenAgro;
use App\Filament\Resources\SmartgardenAgros\Pages\ListSmartgardenAgros;
use App\Filament\Resources\SmartgardenAgros\Pages\CreateSmartgardenAgro;
use App\Filament\Resources\SmartgardenAgros\Schemas\SmartgardenAgroForm;
use App\Filament\Resources\SmartgardenAgros\Tables\SmartgardenAgrosTable;

class SmartgardenAgroResource extends Resource
{
    use HasAdminPermission;
    protected static ?string $model = SmartgardenAgro::class;

    protected static string|BackedEnum|null $navigationIcon = Heroicon::OutlinedRectangleStack;

    protected static ?string $recordTitleAttribute = 'Agro';

    public static function form(Schema $schema): Schema
    {
        return SmartgardenAgroForm::configure($schema);
    }

    public static function table(Table $table): Table
    {
        return SmartgardenAgrosTable::configure($table);
    }

    public static function getRelations(): array
    {
        return [
            //
        ];
    }

    public static function getPages(): array
    {
        return [
            'index' => ListSmartgardenAgros::route('/'),
            'create' => CreateSmartgardenAgro::route('/create'),
            'edit' => EditSmartgardenAgro::route('/{record}/edit'),
        ];
    }
}
