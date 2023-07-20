<?php

use App\Http\Controllers\CategoryController;
use App\Http\Controllers\OrderController;
use App\Http\Controllers\OrderItemController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\UserController;
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

Route::get('/home', function () {
    return view('home');
});
Route::get('/category', function () {
    return view('category');
});
Route::get('/product', function () {
    return view('product');
});
Route::get('/search', function () {
    return view('search');
});
Route::get('/support', function () {
    return view('support');
});
Route::get('/cart', function () {
    return view('cart');
});
Route::get('/pay', function () {
    return view('pay');
});
Route::get('/login', function () {
    return view('login');
});
Route::get('/gallery', function () {
    return view('gallery');
});
// Route 



route::resource('users', UserController::class);
route::resource('categories', CategoryController::class);
route::resource('products', ProductController::class);
route::resource('orders', OrderController::class);
route::resource('orderitems', OrderItemController::class);
