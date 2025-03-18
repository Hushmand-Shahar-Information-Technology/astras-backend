<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\TrainStation;
use App\Services\TrainStationService;
use Illuminate\Http\Request;
use Illuminate\Http\Response;

class TrainStationController extends Controller
{
    protected $trainStationService;

    public function __construct(TrainStationService $trainStationService)
    {
        $this->trainStationService = $trainStationService;
    }

    public function index()
    {
        return response()->json($this->trainStationService->getAll());
    }

    public function store(Request $request)
    {
        $trainStation = $this->trainStationService->create($request->all());
        return response()->json($trainStation, Response::HTTP_CREATED);
    }

    public function show(TrainStation $trainStation)
    {
        return response()->json($trainStation);
    }

    public function update(Request $request, TrainStation $trainStation)
    {
        $updatedStation = $this->trainStationService->update($trainStation, $request->all());
        return response()->json($updatedStation);
    }

    public function destroy(TrainStation $trainStation)
    {
        $this->trainStationService->delete($trainStation);
        return response()->json(null, Response::HTTP_NO_CONTENT);
    }
}
