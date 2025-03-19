<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\Company;
use App\Models\Country;
use App\Models\Product;
use App\Models\ProductType;
use App\Models\TransportType;
use App\Models\User;

class TrainStation extends Model
{
    protected $table = 'train_stations';

    protected $fillable = [
        'company_id',
        'product_id',
        'product_type_id',
        'transport_type_id',
        'user_id',
        'country_from_id',
        'country_to_id',
        'number_of_wagon',
        'weight',
        'number_of_bar',
        'date_of_out',
        'date_of_in',
    ];

    public function company()
    {
        return $this->belongsTo(Company::class);
    }

    public function product()
    {
        return $this->belongsTo(Product::class);
    }

    public function productType()
    {
        return $this->belongsTo(ProductType::class);
    }
    
    public function transportType()
    {
        return $this->belongsTo(TransportType::class);
    }
    public function user()
    {
        return $this->belongsTo(User::class);
    }
     public function fromCountry()
    {
        return $this->belongsTo(Country::class, 'country_from_id');
    }
    public function toCountry()
    {
        return $this->belongsTo(Country::class, 'country_to_id');
    }
}
