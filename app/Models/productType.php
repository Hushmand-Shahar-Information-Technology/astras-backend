<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\TrainStation;

class productType extends Model
{
    protected $table = 'product_types';

    protected $fillable = [
        'name',
    ];

    public function trainStations()
    {
        return $this->hasOne(TrainStation::class);
    }
    
    
}
