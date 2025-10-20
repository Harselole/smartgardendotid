<?php

namespace App\Filament\Resources\SmartgardenAgros\Pages;

use App\Filament\Resources\SmartgardenAgros\SmartgardenAgroResource;
use App\Models\SmartgardenAgro;
use Filament\Actions\CreateAction;
use Filament\Resources\Pages\ListRecords;

class ListSmartgardenAgros extends ListRecords
{
    protected static string $resource = SmartgardenAgroResource::class;

    protected function getHeaderActions(): array
    {
        // Cek apakah sudah ada data
        $dataExists = SmartgardenAgro::exists();

        // Jika data sudah ada, jangan tampilkan tombol Create
        if ($dataExists) {
            return [];
        }

        return [
            CreateAction::make(),
        ];
    }
}
