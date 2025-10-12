<?php

namespace App\Filament\Resources\SmartgardenAis\Tables;

use Filament\Actions\BulkActionGroup;
use Filament\Actions\DeleteBulkAction;
use Filament\Actions\EditAction;
use Filament\Tables;
use Filament\Tables\Table;
use Filament\Tables\Columns\ImageColumn;
use Filament\Tables\Columns\TextColumn;

class SmartgardenAisTable
{
    public static function configure(Table $table): Table
    {
        return $table
            ->columns([
                TextColumn::make('judul')
                    ->label('Judul')
                    ->searchable()
                    ->sortable(),

                ImageColumn::make('gambar')
                    ->label('Gambar Utama')
                    ->square(),

                TextColumn::make('subjudul')
                    ->label('Subjudul')
                    ->limit(50),

                TextColumn::make('namaproduk1')
                    ->label('Produk 1'),

                TextColumn::make('namaproduk2')
                    ->label('Produk 2'),

                TextColumn::make('namaproduk3')
                    ->label('Produk 3'),

                TextColumn::make('updated_at')
                    ->label('Diperbarui')
                    ->dateTime()
                    ->sortable(),
            ])
            ->filters([])
            ->recordActions([
                EditAction::make(),
            ])
            ->toolbarActions([
                BulkActionGroup::make([
                    DeleteBulkAction::make(),
                ]),
            ]);
    }
}
