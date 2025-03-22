<?php

namespace App\Services;

use App\Models\TransportType;

class TransportTypeService
{
    public function getAll()
    {
        return TransportType::latest()->get();
    }

    public function create($data)
    {
       
        return TransportType::create(
            [
                'transport_type' => $data['transport_type'],
            ]
        );
    }
    
    public function update($data, TransportType $transportType)
    {
        $transportType->update(
            [
                'transport_type' => $data['transport_type'],
            ]
        );
        return $transportType;
    }

 public function getTransportTypeFromId($id)
    {
        return TransportType::find($id);
    }
}