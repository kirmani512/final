<?php

namespace App\Http\Controllers\web;

use App\Http\Controllers\Controller;
use App\Models\Category;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    public function index(Request $request)
    {
        $search = $request['search'] ?? "";
        if ($search != "") {
            $category = Category::where('name', 'LIKE', "%$search%")->get();
            return view("web.product.cat_list")->with("catlist", $category);
        } else {
            $list = Category::all();
            return view("web.product.cat_list")->with("catlist", Category::all());
        }
    }
    function add_category()
    {
        return view("web.product.category")->with("tilte", "Add Category");
    }
    function save(Request $req)
    {

        $category = new Category();
        $category->title = $req->title;
        $category->save();
        return redirect("web/category");
    }
    function delete($id)
    {
        if (!empty($id)) {
            $category = Category::find($id);
            $category->delete();
            return redirect("web/category");
        }
    }
}
