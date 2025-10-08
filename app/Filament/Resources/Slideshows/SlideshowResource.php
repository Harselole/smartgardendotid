<?php

namespace App\Filament\Resources\Slideshows;

use App\Filament\Resources\Slideshows\Pages\CreateSlideshow;
use App\Filament\Resources\Slideshows\Pages\EditSlideshow;
use App\Filament\Resources\Slideshows\Pages\ListSlideshows;
use App\Filament\Resources\Slideshows\Schemas\SlideshowForm;
use App\Filament\Resources\Slideshows\Tables\SlideshowsTable;
use App\Models\Slideshow;
use BackedEnum;
use Filament\Resources\Resource;
use Filament\Schemas\Schema;
use Filament\Support\Icons\Heroicon;
use Filament\Tables\Table;

class SlideshowResource extends Resource
{
    protected static ?string $model = Slideshow::class;

    protected static string|BackedEnum|null $navigationIcon = Heroicon::OutlinedRectangleStack;

    protected static ?string $recordTitleAttribute = 'slideshow';

    public static function form(Schema $schema): Schema
    {
        return SlideshowForm::configure($schema);
    }

    public static function table(Table $table): Table
    {
        return SlideshowsTable::configure($table);
    }

    public static function updateOrder($recordId, $direction)
{
    $model = static::getModel()::find($recordId);

    if (! $model) return;

    if ($direction === 'up') {
        $model->increment('urutan');
    } elseif ($direction === 'down' && $model->urutan > 0) {
        $model->decrement('urutan');
    }
}


    public static function getRelations(): array
    {
        return [
            //
        ];
    }

    public static function getPages(): array
    {
        return [
            'index' => ListSlideshows::route('/'),
            'create' => CreateSlideshow::route('/create'),
            'edit' => EditSlideshow::route('/{record}/edit'),
        ];
    }
}
