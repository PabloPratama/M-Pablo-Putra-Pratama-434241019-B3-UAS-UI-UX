<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserAuthController;

// Authentication
Route::get('/', function () {
    return view('user.authentication.landing');
});

Route::get('/login', [UserAuthController::class, 'showLogin'])
    ->name('login');

Route::post('/login-process', [UserAuthController::class, 'login'])
    ->name('login.process');

Route::get('/daftar', function () {
    return view('user.authentication.daftar');
})->name('daftar');

Route::get('/lupa-password', function () {
    return view('user.authentication.lupa_password');
})->name('lupa_password');


// Dashboard
Route::get('/dashboard', function () {
    return view('user.dashboard.dashboard');
})->name('dashboard');


// Artikel
Route::get('/artikel', function () {
    return view('user.artikel.artikel'); 
})->name('artikel');

Route::get('/artikel/detail', function () {
    return view('user.artikel.detail_artikel');
})->name('artikel.detail');

// Katalog
Route::get('/katalog', function () {
    return view('user.katalog.katalog'); 
})->name('katalog');

Route::get('/katalog/detail', function () {
    return view('user.katalog.detail_produk');
})->name('katalog.detail');

