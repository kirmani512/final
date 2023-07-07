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
        return view("web.shop");
    }
    // function checkout()
    // {

    //     $cart = CartModel::where('user_id', Auth::id())->get();
    //     $list = DB::table("cart as p_cart")
    //         ->join("product as p", "p_cart.product_id", "=", "p.id")
    //         ->where("p_cart.user_id", session("user_id"))
    //         ->select("p.*", "p_cart.id as view_id")
    //         ->get();

    //     $total = 0;

    //     foreach ($list as $product) {
    //         $total += $product->price;
    //     }

    //     return view("web.checkout")->with("total", $total)->with("list", $list)->with("cart", $cart);;
    // }
}

