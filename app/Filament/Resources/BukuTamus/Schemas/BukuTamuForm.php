<?php

namespace App\Filament\Resources\BukuTamus\Schemas;

use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Textarea;
use Filament\Schemas\Schema;

class BukuTamuForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                TextInput::make('nama')
                    ->required(),
                TextInput::make('kontak')
                    ->required(),
                Textarea::make('pesan')
                    ->required()
                    ->columnSpanFull(),
                TextInput::make('produk')
                    ->required(),
            ]);
    }
}
