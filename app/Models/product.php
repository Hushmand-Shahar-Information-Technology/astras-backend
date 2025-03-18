<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\TrainStation;

class product extends Model
{
    protected $table = 'products';

    protected $fillable = [
        'name',
    ];

    public function trainStations()
    {
        return $this->hasMany(TrainStation::class);
    }
}
