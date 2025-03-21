<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\TrainStation;
use App\Services\TrainStationService;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use App\Http\Requests\TrainStationRequest;

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

    public function show($id)
    {
        $trainStation = $this->trainStationService->getTrainStationFromId($id);
        return response()->json($trainStation);
    }

    public function update(Request $request, TrainStation $trainStation)
    {
        $trainStation = $this->trainStationService->update($request->all(), $trainStation);
        return response()->json($trainStation);
    }
    
    public function destroy($id)
    {
        $trainStation = $this->trainStationService->getTrainStationFromId($id);
       $trainStation->delete();
        return response()->json(" deleted successfully", Response::HTTP_NO_CONTENT);
    }

   
}
