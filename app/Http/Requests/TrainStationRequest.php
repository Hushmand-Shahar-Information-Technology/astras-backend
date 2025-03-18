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
            'number_of_wagon' => 'required|integer|min:1',
            'weight' => 'required|numeric|min:0',
            'weight_type' => 'required|in:' . implode(',', WeightType::values()),
            'number_of_bar' => 'required|integer|min:0',
            'date_of_out' => 'required|date',
            'date_of_in' => 'required|date|after_or_equal:date_of_out',
        ];
    }
}