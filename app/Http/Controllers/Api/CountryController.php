<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Services\CountryService;
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
    public function store(Request $request)
    {
        return response()->json($this->countryService->create($request->all()));
    }
    public function show($id)
    {
        return response()->json($this->countryService->getCountryFromId($id));
    }
    public function update(Request $request, $id)
    {
        return response()->json($this->countryService->update($id, $request->all()));
    }
    public function destroy($id)
    {
        return response()->json($this->countryService->delete($id));
    }
}