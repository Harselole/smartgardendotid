<?php

namespace App\Filament\Resources\Slideshows\Tables;

use Filament\Tables;
use Filament\Tables\Table;
use Filament\Tables\Columns\TextInputColumn;
use Filament\Tables\Columns\ToggleColumn;
use Filament\Tables\Columns\TextColumn;
use Filament\Actions\EditAction;
use Filament\Actions\BulkActionGroup;
use Filament\Actions\DeleteBulkAction;

class SlideshowsTable
{
    public static function configure(Table $table): Table
    {
        return $table
            ->columns([
                TextColumn::make('gambar')
                    ->label('Gambar')
                    ->searchable(),

                ToggleColumn::make('is_tampil')
                    ->label('Tampilkan?')
                    ->sortable()
                    ->onIcon('heroicon-o-eye')
                    ->offIcon('heroicon-o-eye-slash'),

                // Kolom urutan bisa diedit langsung
                TextInputColumn::make('urutan')
                    ->label('Urutan')
                    ->sortable()
                    ->rules(['integer', 'min:1'])
                    ->extraAttributes([
                        'style' => 'width:80px; text-align:center;', // ukuran kolom kecil & rata tengah
                    ])
                    ->updateStateUsing(function ($state, $record) {
                        $record->urutan = $state;
                        $record->save();
                    }),

                TextColumn::make('created_at')
                    ->label('Dibuat')
                    ->dateTime('d M Y H:i')
                    ->sortable()
                    ->toggleable(isToggledHiddenByDefault: true),

                TextColumn::make('updated_at')
                    ->label('Diperbarui')
                    ->dateTime('d M Y H:i')
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
