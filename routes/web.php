<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\SearchController;
use App\Http\Controllers\CartController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\OrderController;
use App\Http\Controllers\OrderItemController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\CheckoutController;
use App\Http\Controllers\PayController;
use App\Http\Controllers\Admin\DashboardController;

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

Route::get('/', [HomeController::class, 'index'])->name('home.index');

Route::get('/category/{id}', [CategoryController::class, 'show'])->name('category.show');

Route::get('/product/{slug}.html', [ProductController::class, 'show'])->name('product.show');

Route::get('/search', [SearchController::class, 'show'])->name('search.show');

Route::post('/cart', [CartController::class, 'store'])->name('cart.store');

Route::get('/cart', [CartController::class, 'index'])->name('cart.index');

Route::delete('/cart/{id}', [CartController::class, 'destroy'])->name('cart.delete');

Route::put('/cart/{id}', [CartController::class, 'update'])->name('cart.update');

Route::get('/checkout', [CheckoutController::class, 'checkout'])->name('checkout');

// Route::get('/pay', function () {
//     return view('pay');
// })->name('pay');

Route::get('/gallery', function () {
    return view('gallery');
})->name('gallery');

Route::get('/support', function () {
    return view('support');
})->name('support');

// Route::get('/login', function () {
//     return view('login');
// })->name('login');



// Route::get('/dashboard', function () {
//     return view('dashboard');
// })->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__ . '/auth.php';


Route::middleware('admin')->prefix('admin')->group(function () {
    Route::get('dashboard', function () {
        return "Hello World";
    });
});
Route::group(['middleware' => ['admin']], function () {
    Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');
});
