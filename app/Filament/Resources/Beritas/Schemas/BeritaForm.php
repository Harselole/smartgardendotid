<?php

namespace App\Filament\Resources\Beritas\Schemas;

use Filament\Forms;
use Illuminate\Support\Str;
use Filament\Schemas\Schema;


class BeritaForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->schema([
                Forms\Components\TextInput::make('judul')   
                    ->label('Judul Berita')
                    ->required()
                    ->live(onBlur: true)
                    ->afterStateUpdated(function ($state, callable $set) {
                        $words = explode(' ', $state);
                        $limited = implode(' ', array_slice($words, 0, 8));
                        $set('slug', Str::slug($limited));
                    }), 

                Forms\Components\TextInput::make('slug')
                    ->label('Slug')
                    ->disabled()
                    ->dehydrated()
                    ->maxLength(255),

                Forms\Components\Textarea::make('deskripsi')
                    ->label('Deskripsi Berita')
                    ->rows(5)
                    ->required(),

                Forms\Components\TextInput::make('kota')
                    ->label('Kota')
                    ->placeholder('Masukkan kota asal berita'),

                Forms\Components\FileUpload::make('gambar1')
                    ->label('Gambar 1')
                    ->image()
                    ->directory('berita')
                    ->nullable(),

                Forms\Components\FileUpload::make('gambar2')
                    ->label('Gambar 2')
                    ->image()
                    ->directory('berita')
                    ->nullable(),

                Forms\Components\FileUpload::make('gambar3')
                    ->label('Gambar 3')
                    ->image()
                    ->directory('berita')
                    ->nullable(),

                // Forms\Components\Toggle::make('is_tampil')
                //     ->label('Tampilkan di Website?')
                //     ->onColor('success')
                //     ->offColor('danger')
                //     ->default(false),
            ]);
    }
}
