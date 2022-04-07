<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\usersController;
use App\Http\Controllers\loginController;
use App\Http\Controllers\productController;
use App\Http\Controllers\mailController;
use App\Http\Controllers\reqController;

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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/products', function () {
    return view('products');
});

Route::get('/products/live_edge_charcuterie', function () {
    return view('products/live_edge_charcuterie');
});

Route::get('/products/serving_trays', function () {
    return view('products/serving_trays');
});

Route::get('/products/cutting_boards', function () {
    return view('products/cutting_boards');
});

Route::get('/contact', function () {
    return view('contact');
});

Route::get('/photography', function () {
    return view('photography');
});

Route::get('/about_me', function () {
    return view('about_me');
});


Route::get('/signup', function () {
    return view('signup');
});

Route::get('/login', function () {
    return view('login');
});

Route::get('/requirements', function () {
    return view('requirements');
});


Route::get('/inc/signup_inc.blade.php', function () {
    return view('inc/signup_inc.blade.php');
});

Route::get('/product_pages/hornbeam_charcuterie', function () {
    return view('product_pages/hornbeam_charcuterie');
});

Route::get('/product_pages/ash_paddle_board', function () {
    return view('product_pages/ash_paddle_board');
});

Route::get('/product_pages/cherry_charcuterie', function () {
    return view('product_pages/cherry_charcuterie');
});

Route::get('/product_pages/walnut_charcuterie', function () {
    return view('product_pages/walnut_charcuterie');
});

Route::post("signup", [usersController::class, 'getData']);
Route::post("login", [loginController::class, 'getUsers']);
Route::post("AddToCart", [productController::class, 'AddToCart']);
Route::get("cart", [productController::class, 'cartList']);
Route::get("removecart/{cart_id}", [productController::class, 'removeCart']);
Route::get("logout", [usersController::class, 'Logout']);
Route::post("order", [productController::class, 'completeOrder']);
Route::get("search", [productController::class, 'search']);
Route::get("orders", [productController::class, 'showOrders']);
Route::post("send", [mailController::class, 'send']);
Route::get("req", [reqController::class, 'joins']);

