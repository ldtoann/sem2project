<?php

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