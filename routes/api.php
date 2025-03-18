<?php

use App\Http\Controllers\Api\CompanyController;
use App\Http\Controllers\Api\TrainStationController;
use App\Http\Controllers\Api\CountryController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');

Route::apiResource('train-stations', TrainStationController::class);
Route::apiResource('companies', CompanyController::class);
Route::apiResource('countries', CountryController::class);