<?php
namespace App\services; 

use App\Models\TrainStation;

class TrainStationService
{
    public function getAll()
    {
        return TrainStation::latest()->get();
    }

    public function create($request)
    {
        // Format date strings to MySQL compatible format
        $exitDate = isset($request['exit_date_time']) ? date('Y-m-d', strtotime($request['exit_date_time'])) : now();
        $entryDate = isset($request['entry_date_time']) ? date('Y-m-d', strtotime($request['entry_date_time'])) : now();
        
        return TrainStation::create([
            'company_id' => $request['company']['id'] ?? 1,
            'type' => $request['transport_type'] ?? null,
            'product_type' => $request['product_type']['name'] ?? null,
            'user_id' => 1,
            'country_from_id' => $request['from_country']['id'] ?? 1,
            'country_to_id' => $request['to_country']['id'] ?? 1,
            'number_of_wagon' => $request['wagon_number'] ?? 0,
            'weight' => $request['weight'] ?? 0,
            'number_of_bar' => $request['bar_number'] ?? 0,
            'date_of_out' => $exitDate,
            'date_of_in' => $entryDate,
        ]);
        
        // return TrainStation::create(
        //     'company_id'=>1,
        //     'type'=>$request->transport_type,
        //     'product_type'=>$request->product_type,
        //     'user_id'=>1,
        //     'country_from_id'=>1,
        //     'country_to_id'=>1,
        //     'number_of_wagon'=>$request->wagon_number,
        //     'weight'=>$request->weight,
        //     'number_of_bar'=>$request->bar_number,
        //     'date_of_out'=>$request->exit_date_time,
        //     'date_of_in'=>$request->entry_date_time,
        // );
        
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
    

}