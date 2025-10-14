<?php

namespace App\Filament\Resources\SmartgardenLabs;

use BackedEnum;
use Filament\Tables\Table;
use Filament\Schemas\Schema;
use App\Models\SmartgardenLab;
use Filament\Resources\Resource;
use App\Traits\HasAdminPermission;
use Filament\Support\Icons\Heroicon;
use App\Filament\Resources\SmartgardenLabs\Pages\EditSmartgardenLab;
use App\Filament\Resources\SmartgardenLabs\Pages\ListSmartgardenLabs;
use App\Filament\Resources\SmartgardenLabs\Pages\CreateSmartgardenLab;
use App\Filament\Resources\SmartgardenLabs\Schemas\SmartgardenLabForm;
use App\Filament\Resources\SmartgardenLabs\Tables\SmartgardenLabsTable;

class SmartgardenLabResource extends Resource
{
    use HasAdminPermission;
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
