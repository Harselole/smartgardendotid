<?php

namespace App\Filament\Resources\SmartgardenAis\Pages;

use App\Filament\Resources\SmartgardenAis\SmartgardenAiResource;
use App\Models\SmartgardenAi;
use Filament\Actions\CreateAction;
use Filament\Resources\Pages\ListRecords;

class ListSmartgardenAis extends ListRecords
{
    protected static string $resource = SmartgardenAiResource::class;

    protected function getHeaderActions(): array
    {
        // Cek apakah sudah ada data
        $dataExists = SmartgardenAi::exists();

        // Jika data sudah ada, jangan tampilkan tombol Create
        if ($dataExists) {
            return [];
        }

        return [
            CreateAction::make(),
        ];
    }
}
