<?php

namespace App\Filament\Resources\DetailHotelResource\Pages;

use App\Filament\Resources\DetailHotelResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListDetailHotels extends ListRecords
{
    protected static string $resource = DetailHotelResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
