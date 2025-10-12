<?php

namespace App\Filament\Resources\SmartgardenSensors;

use App\Filament\Resources\SmartgardenSensors\Pages\CreateSmartgardenSensor;
use App\Filament\Resources\SmartgardenSensors\Pages\EditSmartgardenSensor;
use App\Filament\Resources\SmartgardenSensors\Pages\ListSmartgardenSensors;
use App\Filament\Resources\SmartgardenSensors\Schemas\SmartgardenSensorForm;
use App\Filament\Resources\SmartgardenSensors\Tables\SmartgardenSensorsTable;
use App\Models\SmartgardenSensor;
use BackedEnum;
use Filament\Resources\Resource;
use Filament\Schemas\Schema;
use Filament\Support\Icons\Heroicon;
use Filament\Tables\Table;

class SmartgardenSensorResource extends Resource
{
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
