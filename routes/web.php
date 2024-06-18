<?php

use App\Http\Controllers\Auth\SocialiteController;
use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('landingPage');
});

Route::get('/profile', function () {
    return view('profile.index', [
        "title" => "Profil Saya"
    ]);
});

Route::get('/riwayatpesanan', function () {
    return view('profile.riwayatpesanan', [
        "title" => "Riwayat Pesanan Saya"
    ]);
});

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

Route::get('/pembayaran', function () {
    return view('checkoutPage', [
        "title" => "Pembayaran"
    ]);
});

Route::get('/detail-produk', function () {
    return view('produk.detail', [
        "title" => "Detail Produk"
    ]);
});

Route::get('/produk', function () {
    return view('productPage');
});

Route::get('/cart', function () {
    return view('cartPage');
});

Route::get('/laravel', function () {
    return view('welcome');
});

Route::get('/auth/redirect', [SocialiteController::class, 'redirect']);

Route::get('/auth/google/callback', [SocialiteController::class, 'callback']);

Auth::routes();

Route::get('/home', [HomeController::class, 'index'])->name('home');
