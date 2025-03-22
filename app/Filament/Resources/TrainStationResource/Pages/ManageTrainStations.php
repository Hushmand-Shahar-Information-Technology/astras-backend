<?php

namespace App\Filament\Resources\TrainStationResource\Pages;

use App\Filament\Resources\TrainStationResource;
use Filament\Actions;
use Filament\Resources\Pages\ManageRecords;

class ManageTrainStations extends ManageRecords
{
    protected static string $resource = TrainStationResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
