<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProductController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});


Route::prefix("web")->group(function () {

    Route::get("login", [App\Http\Controllers\web\LoginController::class, "index"]);
    Route::get("logout", [App\Http\Controllers\web\LoginController::class, "logout"]);
    Route::post("login", [App\Http\Controllers\web\LoginController::class, "login"]);
    Route::get("register", [App\Http\Controllers\web\LoginController::class, "add_user"]);
    Route::post("register", [App\Http\Controllers\web\LoginController::class, "save"]);

    Route::get("/", [App\Http\Controllers\web\HomeController::class, "home"]);
    Route::get("checkout", [App\Http\Controllers\web\HomeController::class, "checkout"]);
    Route::get("/orders", [App\Http\Controllers\web\HomeController::class, "orderslist"]);


    Route::get("contact", [App\Http\Controllers\web\HomeController::class, "contact"]);
    Route::get("shop", [App\Http\Controllers\web\HomeController::class, "shop"]);

    Route::get("category", [App\Http\Controllers\web\categorycontroller::class, "index"]);
    Route::get("add_category", [App\Http\Controllers\web\categorycontroller::class, "add_category"]);
    Route::post("add_category", [App\Http\Controllers\web\categorycontroller::class, "save"]);
    Route::get("show_category/{id}", [App\Http\Controllers\web\categorycontroller::class, "delete"]);


    Route::get("add_cart/{id}", [App\Http\Controllers\ProductController::class, "add_cart"])
        ->middleware("session");
    Route::get("remove_cart/{id}", [App\Http\Controllers\ProductController::class, "remove_cart"])
        ->middleware("session");
    Route::get("shop_cart", [App\Http\Controllers\ProductController::class, "shop_cart"])
        ->middleware("session");
    Route::resource('product', ProductController::class);

    Route::get('adminlogin',[App\Http\Controllers\web\AdminController::class,"index"]);
    Route::post("adminlogin", [App\Http\Controllers\web\AdminController::class, "adminlogin"]);
    Route::get("adminregister", [App\Http\Controllers\web\AdminController::class, "add_admin"]);
    Route::post("adminregister", [App\Http\Controllers\web\AdminController::class, "save"]);



});

