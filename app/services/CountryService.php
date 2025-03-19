<?php

namespace App\Services;

use App\Models\Country;

class CountryService
{
    public function getAll()
    {
        return Country::latest()->get();
    }
    public function create($data)
    {
        return Country::create(
            [
                'name' => $data['name'],
            ]
        );
    }
    public function update($data, Country $country)
    {
        $country->update(
            [
                'name' => $data['name'],
            ]
        );
        return $country;
    }
    public function delete(Country $country)
    {
        return $country->delete();
    }
    public function getCountryFromId($id)
    {
        return Country::find($id);
    }
    public function getCountryFromName($name)
    {
        return Country::where('name', $name)->first();
    }
}
