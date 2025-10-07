<?php

namespace App\Filament\Resources\DetailHotelResource\Pages;

use App\Filament\Resources\DetailHotelResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditDetailHotel extends EditRecord
{
    protected static string $resource = DetailHotelResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
