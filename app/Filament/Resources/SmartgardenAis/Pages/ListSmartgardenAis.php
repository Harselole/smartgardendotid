<?php

namespace App\Filament\Resources\SmartgardenAis\Pages;

use App\Filament\Resources\SmartgardenAis\SmartgardenAiResource;
use Filament\Actions\CreateAction;
use Filament\Resources\Pages\ListRecords;

class ListSmartgardenAis extends ListRecords
{
    protected static string $resource = SmartgardenAiResource::class;

    protected function getHeaderActions(): array
    {
        return [
            CreateAction::make(),
        ];
    }
}
