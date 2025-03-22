<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\TrainStation;

class Country extends Model
{
    protected $table = 'countries';

    protected $fillable = [
        'name',
    ];

    public function trainStationsFrom()
    {
        return $this->hasMany(TrainStation::class, 'country_from_id');
    }

    public function trainStationsTo()
    {
        return $this->hasMany(TrainStation::class, 'country_to_id');
    }
}
