<?php

namespace App\Filament\Resources\SmartgardenSensors\Pages;

use App\Filament\Resources\SmartgardenSensors\SmartgardenSensorResource;
use App\Models\SmartgardenSensor;
use Filament\Actions\CreateAction;
use Filament\Resources\Pages\ListRecords;

class ListSmartgardenSensors extends ListRecords
{
    protected static string $resource = SmartgardenSensorResource::class;

    protected function getHeaderActions(): array
    {
        // Cek apakah sudah ada data
        $dataExists = SmartgardenSensor::exists();

        // Jika data sudah ada, jangan tampilkan tombol Create
        if ($dataExists) {
            return [];
        }

        return [
            CreateAction::make(),
        ];
    }
}
