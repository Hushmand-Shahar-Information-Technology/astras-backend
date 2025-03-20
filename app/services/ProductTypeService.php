<?php
namespace App\services; 

use App\Models\ProductType;

class ProductTypeService
{
   public function getAll(){
    return ProductType::latest()->get();
   }
   
   public function create($data){
    return ProductType::create([
        'name' => $data['name'],
    ]);
   }

   public function getProductTypeFromId($id){
    return ProductType::findOrFail($id);
   }

   public function update($data, ProductType $productType){
    $productType->update([
        'name' => $data['name'],
    ]);
    return $productType;
   }
}