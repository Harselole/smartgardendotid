<?php

namespace App\Filament\Resources\SmartgardenLabs;

use App\Filament\Resources\SmartgardenLabs\Pages\CreateSmartgardenLab;
use App\Filament\Resources\SmartgardenLabs\Pages\EditSmartgardenLab;
use App\Filament\Resources\SmartgardenLabs\Pages\ListSmartgardenLabs;
use App\Filament\Resources\SmartgardenLabs\Schemas\SmartgardenLabForm;
use App\Filament\Resources\SmartgardenLabs\Tables\SmartgardenLabsTable;
use App\Models\SmartgardenLab;
use BackedEnum;
use Filament\Resources\Resource;
use Filament\Schemas\Schema;
use Filament\Support\Icons\Heroicon;
use Filament\Tables\Table;

class SmartgardenLabResource extends Resource
{
    protected static ?string $model = SmartgardenLab::class;

    protected static string|BackedEnum|null $navigationIcon = Heroicon::OutlinedRectangleStack;

    protected static ?string $recordTitleAttribute = 'Lab';

    public static function form(Schema $schema): Schema
    {
        return SmartgardenLabForm::configure($schema);
    }

    public static function table(Table $table): Table
    {
        return SmartgardenLabsTable::configure($table);
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
            'index' => ListSmartgardenLabs::route('/'),
            'create' => CreateSmartgardenLab::route('/create'),
            'edit' => EditSmartgardenLab::route('/{record}/edit'),
        ];
    }
}
