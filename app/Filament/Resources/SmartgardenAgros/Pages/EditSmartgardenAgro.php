<?php

namespace App\Filament\Resources\SmartgardenAgros\Pages;

use App\Filament\Resources\SmartgardenAgros\SmartgardenAgroResource;
use Filament\Actions\DeleteAction;
use Filament\Resources\Pages\EditRecord;

class EditSmartgardenAgro extends EditRecord
{
    protected static string $resource = SmartgardenAgroResource::class;

    protected function getHeaderActions(): array
    {
        return [
            DeleteAction::make(),
        ];
    }
}
