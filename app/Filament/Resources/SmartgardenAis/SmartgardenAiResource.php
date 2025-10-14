<?php

namespace App\Filament\Resources\SmartgardenAis;

use BackedEnum;
use Filament\Tables\Table;
use Filament\Schemas\Schema;
use App\Models\SmartgardenAi;
use Filament\Resources\Resource;
use App\Traits\HasAdminPermission;
use Filament\Support\Icons\Heroicon;
use App\Filament\Resources\SmartgardenAis\Pages\EditSmartgardenAi;
use App\Filament\Resources\SmartgardenAis\Pages\ListSmartgardenAis;
use App\Filament\Resources\SmartgardenAis\Pages\CreateSmartgardenAi;
use App\Filament\Resources\SmartgardenAis\Schemas\SmartgardenAiForm;
use App\Filament\Resources\SmartgardenAis\Tables\SmartgardenAisTable;

class SmartgardenAiResource extends Resource
{
    use HasAdminPermission;
    protected static ?string $model = SmartgardenAi::class;

    protected static string|BackedEnum|null $navigationIcon = Heroicon::OutlinedRectangleStack;

    protected static ?string $recordTitleAttribute = 'Ai';

    public static function form(Schema $schema): Schema
    {
        return SmartgardenAiForm::configure($schema);
    }

    public static function table(Table $table): Table
    {
        return SmartgardenAisTable::configure($table);
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
            'index' => ListSmartgardenAis::route('/'),
            'create' => CreateSmartgardenAi::route('/create'),
            'edit' => EditSmartgardenAi::route('/{record}/edit'),
        ];
    }
}
