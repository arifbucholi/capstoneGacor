<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CartController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\OrderController;
use App\Http\Controllers\HistoryController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Auth\RegisterController;
use App\Http\Controllers\Auth\SocialiteController;

// Route untuk landing page
Route::get('/', [HomeController::class, 'index'])->name('landingPage');

Route::get('/artikel', function () {
    return view('articles.index', [
        "title" => "Artikel"
    ]);
});

Route::get('/galeri', function () {
    return view('galeri.index', [
        "title" => "Galeri"
    ]);
});

// Route untuk produk
Route::get('/produk', [ProductController::class, 'productPage']);
Route::get('/product/{id}', [ProductController::class, 'detailProdukPage'])->name('product.detail');

Route::middleware('auth')->group(function () {

    Route::post('/cartPage', [CartController::class, 'addToCart'])->name('addToCart');
    Route::delete('/cart/remove/{id}', [CartController::class, 'removeFromCart'])->name('removeFromCart');
    Route::delete('/cart/clear', [CartController::class, 'clearCart'])->name('cart.clear');

    // Route untuk pembayaran
    Route::get('/pembayaran', [OrderController::class, 'checkoutPage'])->name('pembayaran');
    Route::post('/place-order', [OrderController::class, 'placeOrder'])->name('placeOrder');

    // Route untuk riwayat pesanan
    Route::get('/riwayatpesanan', [HistoryController::class, 'index'])->name('riwayatpesanan');

    // Route untuk profile
    Route::get('/profile', function () {
        return view('profile.index', [
            "title" => "Profil Saya"
        ]);
    });
});

// Route untuk cart
Route::get('/cart', [CartController::class, 'cartPage'])->name('cartPage');

// Route untuk detail artikel
Route::get('/detail-artikel', function () {
    return view('articles.detail', [
        "title" => "Detail Artikel"
    ]);
});

// Route untuk sign in, sign up, dan socialite login/logout
Route::get('/signin', [LoginController::class, 'index'])->name('index')->middleware('guest');
Route::post('/signin', [LoginController::class, 'authenticate'])->name('loginPost')->middleware('guest');
Route::post('/logout', [LoginController::class, 'logout'])->name('logout')->middleware('auth');
Route::get('/signup', [RegisterController::class, 'index'])->name('signup')->middleware('guest');
Route::post('/signup', [RegisterController::class, 'store'])->name('signupPost')->middleware('guest');
Route::get('/auth/google', [SocialiteController::class, 'redirect'])->name('auth.google');
Route::get('/auth/google/callback', [SocialiteController::class, 'callback']);

// Route untuk home
Route::get('/home', [HomeController::class, 'index'])->name('home')->middleware('auth');

// Route untuk default Laravel auth
Auth::routes();

// Route untuk route sementara atau pengujian
Route::get('/laravel', function () {
    return view('welcome');
});
