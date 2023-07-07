<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Product;
use App\Repository\Interfaces\IProductRepository;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    // private $ProductRepository;

    // public function __construct(IProductRepository $ProductRepository)
    // {
    //     $this->ProductRepository = $ProductRepository;
    // }
    // /**
    //  * Display a listing of the resource.
    //  */
    // public function index()
    // {
    //     $list = $this->ProductRepository->allproducts();
    //     return view('product.productlisting')->with("list", $list);
    // }

    // /**
    //  * Show the form for creating a new resource.
    //  */
    // public function create()
    // {
    //     $list = Product::all();
    //     return view('product.add_edit')->with("list", $list);
    //     return view('product.add_edit')->with("title", "Add product");
    // }

    // /**
    //  * Store a newly created resource in storage.
    //  */
    // public function store(Request $request)
    // {
    //     $data = $request->all();
    //     $product = $this->ProductRepository->create($data);
    // }

    // /**
    //  * Display the specified resource.
    //  */
    // public function show(string $id)
    // {
    // }

    // /**
    //  * Show the form for editing the specified resource.
    //  */
    // public function edit(string $id)
    // {
    //     //
    // }

    // /**
    //  * Update the specified resource in storage.
    //  */
    // public function update(Request $request, string $id)
    // {
    //     //
    // }

    // /**
    //  * Remove the specified resource from storage.
    //  */
    // public function destroy(string $id)
    // {
    //     //
    // }
    public function index(Request $request)
    {
        $listing = Product::all();
        return view("web.product.listing")->with("list", $listing);
    }

    public function create()
    {
        $list = Product::all();
        return view("web.product.add_edit")->with("list", $list)->with("title", "Add Product")->with("catlist", Category::all());
    }

    public function store(Request $request)
    {
        $request->validate([
            "title=>required|min:8",
            "description=>required",
            "featured_image=>required",
            "category_id=>required"
        ]);
        $product = new Product();
        if ($request->has("featured_image")) {
            $path = $request->featured_image->store("upload");
            $product->featured_image = $path;
        }
        $product->title = $request->title;
        $product->description = $request->description;
        $product->category_id = $request->category_id;
        $product->save();
        return redirect("web/product");
    }
    public function show($id){
        $obj=null;
        if(!empty($id)){
            $obj=Product::find($id);
        }
        return view("web.product.preview")
        ->with("title","Delete Product")
        ->with("id",$id)
        ->with("obj",$obj);
    }
    public function edit($id){
        $obj = null;
        if (!empty($id)) {
            $obj = product::find($id);
        }
        return view("web.product.add_edit")
            ->with("title", "Edit Product")
            ->with("id", $id)
            ->with("obj", $obj);
    }
    public function update(Request $request, $id)
    {
        //
        $request->validate([
            "name=>required|min:8",
            "price=>required|integer",
            "qty=>required|integer",
            "description=>required|min:10"
        ]);
        $obj = Product::find($id);
        $obj->title = $request->title ?? $obj->title;
        $obj->price = $request->price ?? $obj->price;
        $obj->description = $request->description ?? $obj->description;
        $obj->save();
        return redirect("web/product");
    }
    public function destroy($id)
    {
        //
        if (!empty($id)) {
            $obj = Product::find($id);
            $obj->delete();
            return redirect("web/product");
        }
    }
}
