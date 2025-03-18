<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\TrainStation;
class Company extends Model
{
    protected $table = 'companies';

    protected $fillable = [
        'name',
    ];

    public function trainStations()
    {
        return $this->hasMany(TrainStation::class);
    }
}
