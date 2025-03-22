<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Requests\ProductRequest;
use Illuminate\Http\Request;
use App\Services\ProductService;

class ProductController extends Controller
{
    protected $productService;

    public function __construct(ProductService $productService)
    {
        $this->productService = $productService;
    }
    
    public function index()
    {
        return response()->json($this->productService->getAll());
    }
    public function store(ProductRequest $request)
    {
        $product = $this->productService->create($request->validated());
        return response()->json($product, 201);
    }

    public function show($id)
    {
        $product = $this->productService->getProductFromId($id);
        return response()->json($product);
    }
public function update(ProductRequest $request, $id)
{
    $product = $this->productService->getProductFromId($id);
    $product = $this->productService->update($request->validated(), $product);
    return response()->json($product);
}
public function destroy($id)
{
    $product = $this->productService->getProductFromId($id);
    $product->delete();
    return response()->json("deleted successfully", 204);
}
    
}
