<?php

namespace App\Filament\Resources\Slideshows\Pages;

use App\Filament\Resources\Slideshows\SlideshowResource;
use Filament\Actions\CreateAction;
use Filament\Resources\Pages\ListRecords;
use Illuminate\Support\Facades\DB;

class ListSlideshows extends ListRecords
{
    protected static string $resource = SlideshowResource::class;

    protected function getHeaderActions(): array
    {
        return [
            CreateAction::make(),
        ];
    }

    public function moveUp($id)
{
    $record = $this->getResource()::getModel()::find($id);
    if (! $record) return;

    $above = $this->getResource()::getModel()
        ::where('urutan', '<', $record->urutan)
        ->orderByDesc('urutan')
        ->first();

    if ($above) {
        DB::transaction(function () use ($record, $above) {
            [$record->urutan, $above->urutan] = [$above->urutan, $record->urutan];
            $record->save();
            $above->save();
        });
    }
}

public function moveDown($id)
{
    $record = $this->getResource()::getModel()::find($id);
    if (! $record) return;

    $below = $this->getResource()::getModel()
        ::where('urutan', '>', $record->urutan)
        ->orderBy('urutan')
        ->first();

    if ($below) {
        DB::transaction(function () use ($record, $below) {
            [$record->urutan, $below->urutan] = [$below->urutan, $record->urutan];
            $record->save();
            $below->save();
        });
    }
}
}
