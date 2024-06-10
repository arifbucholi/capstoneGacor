<?php

use App\Http\Controllers\Auth\SocialiteController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('landingPage');
});

Route::get('/profile', function () {
    return view('profilePage');
});

Route::get('/product', function () {
    return view('productPage');
});

Route::get('/cart', function () {
    return view('cartPage');
});

Route::get('/laravel', function () {
    return view('welcome');
});

Route::get('/detail-produk', function () {
    return view('detailProdukPage');
});

Route::get('/checkout', function () {
    return view('checkoutPage');
});

Route::get('/artikel', function () {
    return view('artikelPage');
});


Route::get('/auth/redirect', [SocialiteController::class, 'redirect']);

Route::get('/auth/google/callback', [SocialiteController::class, 'callback']);

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
