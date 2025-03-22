<?php

namespace App\Http\Requests;

use App\WeightType;
use Illuminate\Foundation\Http\FormRequest;

class TrainStationRequest extends FormRequest
{
    public function authorize()
    {
        return true;
    }

    public function rules()
    {
        return [
            'transport_type_id' => 'nullable|exists:transport_types,id',
            'product_type_id' => 'nullable|exists:product_types,id',
            'company_id' => 'nullable|exists:companies,id',
            'user_id' => 'nullable|exists:users,id',
            'product_id' => 'nullable|exists:products,id',
            'country_from_id' => 'nullable|exists:countries,id',
            'country_to_id' => 'nullable|exists:countries,id',
            'number_of_wagon' => 'nullable|integer|min:1',
            'weight' => 'nullable|numeric|min:0',
            'weight_type' => 'nullable',
            'number_of_bar' => 'nullable|integer|min:0',
            'date_of_out' => 'nullable|date',
            'date_of_in' => 'nullable|date|after_or_equal:date_of_out',
        ];
    }
}