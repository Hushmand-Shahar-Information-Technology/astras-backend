<?php
namespace App\services; 

use App\Models\TrainStation;

class TrainStationService
{
    public function getAll()
    {
        return TrainStation::latest()->get();
    }

    public function create(array $data)
    {
        return TrainStation::create($data);
    }

    public function update(TrainStation $trainStation, array $data)
    {
        $trainStation->update($data);
        return $trainStation;
    }

    public function delete(TrainStation $trainStation)
    {
        return $trainStation->delete();
    }
}