<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\TrainStation;
class Company extends Model
{
    protected $table = 'companies';

    protected $fillable = [
        'name',
        'phone',
        'owner_name',
        'father_name',
        'partner_phone',
        'maktoob_date',
        'expire_date',
        'license_number',
    ];

    public function trainStations()
    {
        return $this->hasMany(TrainStation::class);
    }
}
