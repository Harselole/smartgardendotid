<?php

namespace App\Filament\Resources\SmartgardenAgros\Pages;

use App\Filament\Resources\SmartgardenAgros\SmartgardenAgroResource;
use Filament\Actions\CreateAction;
use Filament\Resources\Pages\ListRecords;

class ListSmartgardenAgros extends ListRecords
{
    protected static string $resource = SmartgardenAgroResource::class;

    protected function getHeaderActions(): array
    {
        return [
            CreateAction::make(),
        ];
    }
}
