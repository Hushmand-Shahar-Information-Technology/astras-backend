<?php
namespace App\services; 

use App\Models\TrainStation;

class TrainStationService
{
    public function getAll()
    {
        return TrainStation::latest()->get();
    }

    public function create($data)
    {
        
        return TrainStation::create(
          $data
    );
        
    }
    public function getTrainStationFromId($id)
    {
        return TrainStation::findOrFail($id);
    }
   public function update($data, TrainStation $trainStation)
    {
        $trainStation->update(
           $data
        );
        return $trainStation;
    }
    public function delete(TrainStation $trainStation)
    {
        return $trainStation->delete();
    }

}