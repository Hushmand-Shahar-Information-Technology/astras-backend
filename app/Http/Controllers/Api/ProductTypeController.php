<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\services\ProductTypeService;
use App\Http\Requests\ProductTypeRequest;
use Illuminate\Http\Response;
class ProductTypeController extends Controller
{
    protected $productTypeService;

    public function __construct(ProductTypeService $productTypeService)
    {
        $this->productTypeService = $productTypeService;
    }
      
    public function index()
    {
        return response()->json($this->productTypeService->getAll());
    }
    
    public function store(ProductTypeRequest $request)
    {
       $productType = $this->productTypeService->create($request->validated());
       return response()->json($productType, Response::HTTP_CREATED);
    }

    public function show($id)
    {
        if(!$this->productTypeService->getProductTypeFromId($id)){
            return response()->json(['message' => 'Product type not found'], Response::HTTP_NOT_FOUND);
        }
        $productType = $this->productTypeService->getProductTypeFromId($id);
        return response()->json($productType);
    }   

   

}
