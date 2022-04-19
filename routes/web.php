<?php

use App\Http\Controllers\ProductController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/login', function () {
    return view('login');
});
Route::get('/logout', function () {
    Session::forget("user");
    return redirect('login');
})->name("logout");

Route::post("/login",[UserController::class,"index"])->name("login");
Route::get("/",[ProductController::class,"index"])->name("home-page");
Route::get("/product-detail/{id}",[ProductController::class,"show"])->name("product-detail");
Route::get("/search",[ProductController::class,"create"])->name("search");
Route::post("/add-to-cart",[ProductController::class,"addToCart"])->name("add-to-cart");
Route::get("/cartList",[ProductController::class,"cartList"])->name("cartList");
