<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class TransportType extends Model
{
    protected $table = 'transport_types';

    protected $fillable = [
        'transport_type',
    ];  

    public function trainStations()
    {
        return $this->hasOne(TrainStation::class);
    }
    
    
}
