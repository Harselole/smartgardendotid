<?php

namespace App\Filament\Resources\SmartgardenLabs\Pages;

use App\Filament\Resources\SmartgardenLabs\SmartgardenLabResource;
use Filament\Actions\CreateAction;
use Filament\Resources\Pages\ListRecords;

class ListSmartgardenLabs extends ListRecords
{
    protected static string $resource = SmartgardenLabResource::class;

    protected function getHeaderActions(): array
    {
        return [
            CreateAction::make(),
        ];
    }
}
