<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\Otpcontroller;
use App\Http\Controllers\admincontroller;
use App\Http\Controllers\sellercontroller;
use App\Http\Controllers\productController;
use App\Http\Controllers\CartController;

Route::get('/', function () {
    return redirect()->route('home');
});

Auth::routes();
Auth::routes(['verify'=>true]);

// Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/admin.dashboard', [App\Http\Controllers\admincontroller::class, 'index'])->name('adminDashboard')->middleware(['auth', 'can:isAdmin']);
Route::get('/seller.dashboard', [App\Http\Controllers\HomeController::class, 'seller'])->name('sellerDashboard')->middleware(['auth', 'can:isSeller']);
Route::get('/home', [App\Http\Controllers\HomeController::class, 'cus'])->name('home');
// Route::post('users', [HomeController::class , 'join'])->name('daftarSeller');

// admin
Route::get('/admin.table', [App\Http\Controllers\admincontroller::class, 'tabAdmin']);
Route::get('/admin.chart', [App\Http\Controllers\admincontroller::class, 'chartAdm']);

// seller
Route::get('/seller.dashboard', [App\Http\Controllers\sellercontroller::class, 'dash'])->name('seller.dashboard');
Route::get('/seller.profile', [App\Http\Controllers\sellercontroller::class, 'profile'])->name('seller.profile');
Route::get('/seller.toko', [App\Http\Controllers\sellercontroller::class, 'toko']);
Route::get('/seller.review', [App\Http\Controllers\sellercontroller::class, 'review']);
Route::get('/seller.kelolaProduk', [App\Http\Controllers\productController::class, 'index'])->name('sellerKelola');

//register KTP
Route::get('/register/IDCard', [App\Http\Controllers\HomeController::class, 'KTPForm'])->name('seller.KTP');
Route::post('/register/IDCard', [App\Http\Controllers\HomeController::class, 'KTPFormAdd'])->name('seller.KTPFormAdd');

Route::get('/customer.joinSeller', [App\Http\Controllers\HomeController::class, 'join'])->name('joinSeller');
Route::post('/seller/register',[HomeController::class,'register'])->name('register.seller');

Route::get('/otp/verify', [Otpcontroller::class, 'showVerifyForm'])->name('otp.verify');
Route::post('/otp/verify', [Otpcontroller::class, 'verify']);

Route::post('/otp/resend', [Otpcontroller::class, 'resend'])->name('otp.resend');

// Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

//produk 
// Route::controller(productController::class)->group(function () {
//     Route::middleware(['auth', 'can:isSeller'])->group(function () {
//         // Route::get('/products', 'index')->name('products.index');
//         // Route::post('/products/store', 'store')->name('products.store');
//         // Route::get('/products/{product}', 'edit')->name('products.edit');
//     });
// });

Route::get('/seller.kelolaProduk', [App\Http\Controllers\productController::class, 'index'])->name('products.index');
Route::post('/seller.kelolaProduk', [App\Http\Controllers\productController::class, 'update'])->name('products.update');
Route::post('/products/store', [App\Http\Controllers\productController::class, 'store'])->name('products.store');
// Route::post('/products/{product}', [productController::class, 'update'])->name('products.update');
Route::delete('/products/{product}', [App\Http\Controllers\productController::class, 'destroy'])->name('products.destroy');
// Route::delete('/products/{id}', [ProductController::class, 'deleteProduct']);

//register Shop
Route::get('/register/shop', [App\Http\Controllers\HomeController::class, 'shopDetail'])->name('seller.shopDetail');
Route::post('/register/shop/', [App\Http\Controllers\HomeController::class, 'shopDetailAdd'])->name('seller.shopDetailAdd');


Route::get('/customer.shop', [App\Http\Controllers\HomeController::class, 'shop'])->name('customer.shop');
Route::get('/customer.cart', [App\Http\Controllers\HomeController::class, 'cart'])->name('customer.cart');

Route::get('/search', [productController::class, 'search'])->name('search');


Route::middleware('auth')->group(function () 
{
    Route::get('/cart', [CartController::class, 'index'])->name('cart.index');
    Route::post('/cart/add/{product}', [CartController::class, 'addToCart'])->name('cart.add');
    Route::delete('/cart/remove/{item}', [CartController::class, 'removeFromCart'])->name('cart.remove');
    Route::put('/cart/update/{item}', [CartController::class, 'updateFromCart'])->name('cart.update');
});