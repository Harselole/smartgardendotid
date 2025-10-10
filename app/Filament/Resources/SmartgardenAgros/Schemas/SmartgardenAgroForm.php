<?php

namespace App\Filament\Resources\SmartgardenAgros\Schemas;

use Filament\Forms;
use Filament\Schemas\Schema;

class SmartgardenAgroForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->schema([
                Forms\Components\TextInput::make('judul')
                    ->label('Judul')
                    ->required()
                    ->maxLength(255),

                Forms\Components\Textarea::make('deskripsi')
                    ->label('Deskripsi')
                    ->rows(4)
                    ->columnSpanFull(),

                Forms\Components\FileUpload::make('gambar')
                    ->label('Gambar Utama')
                    ->image()
                    ->directory('agro')
                    ->visibility('public'),

                Forms\Components\TextInput::make('subjudul')
                    ->label('Sub Judul')
                    ->maxLength(255),

                Forms\Components\RichEditor::make('subdeskripsi')
                    ->label('Sub Deskripsi')
                    ->toolbarButtons([
                        'bold',
                        'italic',
                        'underline',
                        'strike',
                        'bulletList',
                        'orderedList',
                        'blockquote',
                        'link',
                        'h2',
                        'h3',
                        'codeBlock',
                    ])
                    ->columnSpanFull(),

                // Produk 1
                Forms\Components\FileUpload::make('gambarproduk1')
                    ->label('Gambar Produk 1')
                    ->image()
                    ->directory('agro/products')
                    ->visibility('public'),
                Forms\Components\TextInput::make('namaproduk1')
                    ->label('Nama Produk 1')
                    ->maxLength(255),
                Forms\Components\Textarea::make('deskripsiproduk1')
                    ->label('Deskripsi Produk 1')
                    ->rows(4)
                    ->columnSpanFull(),

                // Produk 2
                Forms\Components\FileUpload::make('gambarproduk2')
                    ->label('Gambar Produk 2')
                    ->image()
                    ->directory('agro/products')
                    ->visibility('public'),
                Forms\Components\TextInput::make('namaproduk2')
                    ->label('Nama Produk 2')
                    ->maxLength(255),
                Forms\Components\Textarea::make('deskripsiproduk2')
                    ->label('Deskripsi Produk 2')
                    ->rows(4)
                    ->columnSpanFull(),

                // Produk 3
                Forms\Components\FileUpload::make('gambarproduk3')
                    ->label('Gambar Produk 3')
                    ->image()
                    ->directory('agro/products')
                    ->visibility('public'),
                Forms\Components\TextInput::make('namaproduk3')
                    ->label('Nama Produk 3')
                    ->maxLength(255),
                Forms\Components\Textarea::make('deskripsiproduk3')
                    ->label('Deskripsi Produk 3')
                    ->rows(4)
                    ->columnSpanFull(),
            ]);
    }
}
