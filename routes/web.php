<?php

use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Auth\RegisterController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CartController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\OrderController;
use App\Http\Controllers\HistoryController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\Auth\SocialiteController;

Route::get('/', [HomeController::class, 'index'])->name('landingPage');

//produk
Route::get('/produk', [ProductController::class, 'productPage']);
Route::get('/product/{id}', [ProductController::class, 'detailProdukPage'])->name('product.detail');

// Route::post('/cart/add/{product}', [CartController::class, 'addToCart'])->name('cart.add');
Route::get('/cart', [CartController::class, 'cartPage'])->name('cartPage');

Route::post('/cartPage', [CartController::class, 'addToCart'])->name('addToCart');
Route::delete('/cart/remove/{id}', [CartController::class, 'removeFromCart'])->name('removeFromCart');
Route::delete('/cart/clear', [CartController::class, 'clearCart'])->name('cart.clear');

// Route::get('/pembayaran', [OrderController::class, 'checkoutPage'])->name('pembayaran');
Route::get('/pembayaran', [OrderController::class, 'checkoutPage'])->name('pembayaran');
Route::post('/place-order', [OrderController::class, 'placeOrder'])->name('placeOrder');

Route::get('/riwayatpesanan', [HistoryController::class, 'index'])->name('riwayatpesanan');



    // Route::post('/cart/{productId}', [CartController::class, 'addToCart'])->name('cart.add');
    // Route::delete('/cart/{id}', [CartController::class, 'removeFromCart'])->name('cart.remove');
    // Route::put('/cart/{id}', [CartController::class, 'updateQuantity'])->name('cart.update');


Route::get('/profile', function () {
    return view('profile.index', [
        "title" => "Profil Saya"
    ]);
});

// Route::get('/riwayatpesanan', function () {
//     return view('profile.riwayatpesanan', [
//         "title" => "Riwayat Pesanan Saya"
//     ]);
// });

Route::get('/artikel', function () {
    return view('articles.index', [
        "title" => "Artikel"
    ]);
});

Route::get('/detail-artikel', function () {
    return view('articles.detail', [
        "title" => "Detail Artikel"
    ]);
});

Route::get('/galeri', function () {
    return view('galeri.index', [
        "title" => "Galeri"
    ]);
});

// Route::get('/pembayaran', function () {
//     return view('checkoutPage', [
//         "title" => "Pembayaran"
//     ]);
// });

// Route::get('/detail-produk', function () {
//     return view('detailProdukPage', [
//         "title" => "Detail Produk"
//     ]);
// });

Route::get('/produk', function () {
    return view('productPage');
});

// Route::get('/cart', function () {
//     return view('cartPage');
// });

Route::get('/laravel', function () {
    return view('welcome');
});

Route::get('/signin', [LoginController::class, 'index'])->name('login')->middleware('guest');
Route::post('/signin', [LoginController::class, 'authenticate'])->name('loginPost')->middleware('guest');
Route::get('/signup', [RegisterController::class, 'index'])->name('signup')->middleware('guest');
Route::post('/signup', [RegisterController::class, 'store'])->name('signupPost')->middleware('guest');
Route::post('/logout', [LoginController::class, 'logout'])->name('logout')->middleware('auth');
Route::get('/auth/google', [SocialiteController::class, 'redirect'])->name('authGoogle')->middleware('guest');
Route::get('/auth/google/callback', [SocialiteController::class, 'callback'])->middleware('guest');

Auth::routes();

// Route::get('/home', [HomeController::class, 'index'])->name('home');
