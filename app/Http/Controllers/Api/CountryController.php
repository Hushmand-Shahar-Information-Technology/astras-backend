<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Services\CountryService;
use App\Http\Requests\CountryRequest;
use App\Models\Country;
class CountryController extends Controller
{
    protected $countryService;

    public function __construct(CountryService $countryService)
    {
        $this->countryService = $countryService;
    }
    public function index()
    {
        return response()->json($this->countryService->getAll());
    }
    public function store(CountryRequest $request)
    {
        return response()->json($this->countryService->create($request->validated()));
    }
    public function show($id)
    {
        return response()->json($this->countryService->getCountryFromId($id));
    }
    
    public function update(CountryRequest $request, Country $country)
    {
       
        $country = $this->countryService->update($request->validated(), $country);
        return response()->json($country);
    }
    public function destroy($id)
    {
        $country = $this->countryService->getCountryFromId($id);
        $country->delete();
        return response()->json("deleted successfully", 204);   
    }
    
}