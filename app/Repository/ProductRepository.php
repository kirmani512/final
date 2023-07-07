<?php

namespace App\Repository;

use App\Repository\Interfaces\IProductRepository;
use App\Models\Product;

class ProductRepository implements IProductRepository
{
    public function allproducts()
    {
        return Product::all();
    }
    public function storeproduct($data)
    {
        return Product::create([
            'title' => $data,
            'description' => $data,
            'featured_image' => $data,
            'category_id' => $data,

        ]);
    }
    public function updateproduct()
    {

    }
    public function destroyproduct($id)
    {
        $product = Product::find($id);
        $product->delete();
    }
}
