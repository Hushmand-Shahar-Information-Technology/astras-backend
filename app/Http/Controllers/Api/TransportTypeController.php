<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Services\TransportTypeService;
use App\Http\Requests\TransportTypeRequest;
use Illuminate\Http\Response;

class TransportTypeController extends Controller
{
    protected $transportTypeService;

    public function __construct(TransportTypeService $transportTypeService)
    {
        $this->transportTypeService = $transportTypeService;
    }

    public function index()
    {
        return response()->json($this->transportTypeService->getAll());
    }
    public function store(TransportTypeRequest $request)
    {
        $transportType = $this->transportTypeService->create($request->validated());
        return response()->json($transportType,201);
    }

    public function show($id)
    {
        $transportType = $this->transportTypeService->getTransportTypeFromId($id);
        return response()->json($transportType);
    }

public function update(TransportTypeRequest $request, $id)
{
    
    $transportType = $this->transportTypeService->getTransportTypeFromId($id);
    $updatedTransportType = $this->transportTypeService->update($request->validated(), $transportType);
   
    return response()->json($updatedTransportType);
}

public function destroy($id)
{
   $transportType = $this->transportTypeService->getTransportTypeFromId($id);
   $transportType->delete();
   return response()->json(null, Response::HTTP_NO_CONTENT);
}





}
