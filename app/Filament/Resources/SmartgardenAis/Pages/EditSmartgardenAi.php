<?php

namespace App\Filament\Resources\SmartgardenAis\Pages;

use App\Filament\Resources\SmartgardenAis\SmartgardenAiResource;
use Filament\Actions\DeleteAction;
use Filament\Resources\Pages\EditRecord;

class EditSmartgardenAi extends EditRecord
{
    protected static string $resource = SmartgardenAiResource::class;

    protected function getHeaderActions(): array
    {
        return [
            DeleteAction::make(),
        ];
    }
}
