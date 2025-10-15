<?php

namespace App\Filament\Resources\BukuTamus\Pages;

use App\Filament\Resources\BukuTamus\BukuTamuResource;
use Filament\Actions\DeleteAction;
use Filament\Resources\Pages\EditRecord;

class EditBukuTamu extends EditRecord
{
    protected static string $resource = BukuTamuResource::class;

    protected function getHeaderActions(): array
    {
        return [
            DeleteAction::make(),
        ];
    }
}
