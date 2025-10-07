<?php

namespace App\Filament\Resources\Slideshows\Schemas;

use Filament\Forms;
use Filament\Schemas\Schema;

class SlideshowForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->schema([
                Forms\Components\FileUpload::make('gambar')
                    ->label('Gambar Slideshow')
                    ->image()
                    ->directory('slideshow')
                    ->required(),

                // Forms\Components\Toggle::make('is_tampil')
                //     ->label('Tampilkan di Halaman Utama?')
                //     ->onColor('success')
                //     ->offColor('danger')
                //     ->default(true),
            ]);
    }
}
