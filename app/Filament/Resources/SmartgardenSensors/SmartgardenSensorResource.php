<?php

namespace App\Filament\Resources\SmartgardenSensors;

use BackedEnum;
use Filament\Tables\Table;
use Filament\Schemas\Schema;
use Filament\Resources\Resource;
use App\Models\SmartgardenSensor;
use App\Traits\HasAdminPermission;
use Filament\Support\Icons\Heroicon;
use App\Filament\Resources\SmartgardenSensors\Pages\EditSmartgardenSensor;
use App\Filament\Resources\SmartgardenSensors\Pages\ListSmartgardenSensors;
use App\Filament\Resources\SmartgardenSensors\Pages\CreateSmartgardenSensor;
use App\Filament\Resources\SmartgardenSensors\Schemas\SmartgardenSensorForm;
use App\Filament\Resources\SmartgardenSensors\Tables\SmartgardenSensorsTable;

class SmartgardenSensorResource extends Resource
{
    use HasAdminPermission;
    protected static ?string $model = SmartgardenSensor::class;

    protected static string|BackedEnum|null $navigationIcon = Heroicon::OutlinedRectangleStack;

    protected static ?string $recordTitleAttribute = 'Sensor';

    public static function form(Schema $schema): Schema
    {
        return SmartgardenSensorForm::configure($schema);
    }

    public static function table(Table $table): Table
    {
        return SmartgardenSensorsTable::configure($table);
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
            'index' => ListSmartgardenSensors::route('/'),
            'create' => CreateSmartgardenSensor::route('/create'),
            'edit' => EditSmartgardenSensor::route('/{record}/edit'),
        ];
    }
}
