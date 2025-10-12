<?php

namespace App\Filament\Resources\SmartgardenSensors\Pages;

use App\Filament\Resources\SmartgardenSensors\SmartgardenSensorResource;
use Filament\Actions\DeleteAction;
use Filament\Resources\Pages\EditRecord;

class EditSmartgardenSensor extends EditRecord
{
    protected static string $resource = SmartgardenSensorResource::class;

    protected function getHeaderActions(): array
    {
        return [
            DeleteAction::make(),
        ];
    }
}
