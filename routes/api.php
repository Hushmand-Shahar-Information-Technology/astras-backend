<?php

use App\Http\Controllers\Api\CompanyController;
use App\Http\Controllers\Api\ProductController;
use App\Http\Controllers\Api\TrainStationController;
use App\Http\Controllers\Api\CountryController;
use App\Http\Controllers\Api\ProductTypeController;
use App\Http\Controllers\Api\TransportTypeController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');

Route::apiResource('train-stations', TrainStationController::class);
Route::apiResource('companies', CompanyController::class);
Route::apiResource('countries', CountryController::class);
Route::apiResource('transport-types', TransportTypeController::class);
Route::apiResource('product-type', ProductTypeController::class);
Route::apiResource('products', ProductController::class);
Route::get('ping', function () {
    return response()->json(['message' => 'pong']);
});