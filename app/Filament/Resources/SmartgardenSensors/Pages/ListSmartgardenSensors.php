<?php

namespace App\Filament\Resources\SmartgardenSensors\Pages;

use App\Filament\Resources\SmartgardenSensors\SmartgardenSensorResource;
use Filament\Actions\CreateAction;
use Filament\Resources\Pages\ListRecords;

class ListSmartgardenSensors extends ListRecords
{
    protected static string $resource = SmartgardenSensorResource::class;

    protected function getHeaderActions(): array
    {
        return [
            CreateAction::make(),
        ];
    }
}
