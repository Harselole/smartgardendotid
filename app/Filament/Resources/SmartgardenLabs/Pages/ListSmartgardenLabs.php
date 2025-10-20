<?php

namespace App\Filament\Resources\SmartgardenLabs\Pages;

use App\Filament\Resources\SmartgardenLabs\SmartgardenLabResource;
use App\Models\SmartgardenLab;
use Filament\Actions\CreateAction;
use Filament\Resources\Pages\ListRecords;

class ListSmartgardenLabs extends ListRecords
{
    protected static string $resource = SmartgardenLabResource::class;

    protected function getHeaderActions(): array
    {
        // Cek apakah sudah ada data
        $dataExists = SmartgardenLab::exists();

        // Jika data sudah ada, jangan tampilkan tombol Create
        if ($dataExists) {
            return [];
        }

        return [
            CreateAction::make(),
        ];
    }
}
