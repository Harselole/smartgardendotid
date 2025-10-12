<?php

namespace App\Filament\Resources\SmartgardenLabs\Pages;

use App\Filament\Resources\SmartgardenLabs\SmartgardenLabResource;
use Filament\Actions\DeleteAction;
use Filament\Resources\Pages\EditRecord;

class EditSmartgardenLab extends EditRecord
{
    protected static string $resource = SmartgardenLabResource::class;

    protected function getHeaderActions(): array
    {
        return [
            DeleteAction::make(),
        ];
    }
}
