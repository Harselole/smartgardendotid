<?php

namespace App\Filament\Resources\Beritas\Tables;

use Filament\Actions\BulkActionGroup;
use Filament\Actions\DeleteBulkAction;
use Filament\Actions\EditAction;
use Filament\Tables\Columns\IconColumn;
use Filament\Tables\Columns\ToggleColumn;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Table;

class BeritasTable
{
    public static function configure(Table $table): Table
    {
        return $table
            ->columns([
                TextColumn::make('slug')
                    ->searchable(),
                TextColumn::make('judul')
                    ->searchable(),
                TextColumn::make('kota')
                    ->searchable(),
                TextColumn::make('gambar1')
                    ->searchable(),
                TextColumn::make('gambar2')
                    ->searchable(),
                TextColumn::make('gambar3')
                    ->searchable(),
                ToggleColumn::make('is_tampil')
                    ->label('Tampilkan?')
                    ->sortable()
                    ->onIcon('heroicon-o-eye')
                    ->offIcon('heroicon-o-eye-slash'),
                TextColumn::make('created_at')
                    ->dateTime()
                    ->sortable()
                    ->toggleable(isToggledHiddenByDefault: true),
                TextColumn::make('updated_at')
                    ->dateTime()
                    ->sortable()
                    ->toggleable(isToggledHiddenByDefault: true),
            ])
            ->filters([
                //
            ])
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
