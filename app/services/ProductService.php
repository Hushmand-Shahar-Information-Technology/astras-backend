<?php

namespace App\Services;

use App\Models\Product;

class ProductService
{
    public function getAll()
    {
        return Product::latest()->get();
    }
    public function create($data)
    {
        return Product::create($data);
    }
    public function getProductFromId($id) 
     {
        return Product::findOrFail($id);
    }
    public function update($data, Product $product)
    {
        $product->update($data);
        return $product;
    }
}