<?php

namespace App\Repository\Interfaces;


Interface IProductRepository{
    public function allproducts();
    public function storeproduct($data);
    public function updateproduct();
    public function destroyproduct($id);
}
