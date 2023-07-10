<?php

namespace App\Http\Controllers\web;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Product;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    function home(Request $request)
    {
        $search = $request['search'] ?? "";
        if ($search != "") {
            $product = Product::where('name', 'LIKE', "%$search%")->get();
            return view("web.home")->with("list", $product);
        } else {
            return view("web.home")->with("list", Product::all())->with("catlist", Category::all());
        }
    }

    function contact()
    {
        return view("web.contact");
    }
    function shop_details()
    {
        return view("web.shop_details");
    }
    function shop()
    {
        return view("web.shop")->with("list", Product::all())->with("catlist", Category::all());
    }
}

