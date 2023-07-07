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
    Route::get("shop_details/{id}", [App\Http\Controllers\web\shopcontroller::class, "shop_details"]);
    Route::get("shop", [App\Http\Controllers\web\shopcontroller::class, "index"]);

    Route::get("category", [App\Http\Controllers\web\categorycontroller::class, "index"]);
    Route::get("add_category", [App\Http\Controllers\web\categorycontroller::class, "add_category"]);
    Route::post("add_category", [App\Http\Controllers\web\categorycontroller::class, "save"]);
    Route::get("show_category/{id}", [App\Http\Controllers\web\categorycontroller::class, "delete"]);

    Route::resource('product', ProductController::class);

});
