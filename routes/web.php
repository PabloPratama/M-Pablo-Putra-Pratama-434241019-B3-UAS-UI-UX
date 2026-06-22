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

Route::get('/katalog/komentar', function () {
    return view('user.katalog.komentar');
})->name('katalog.komentar');

Route::get('/katalog/detail-bayar', function () {
    return view('user.katalog.detail_produk_bayar');
})->name('katalog.detail_bayar');

Route::get('/katalog/halaman-baca', function () {
    return view('user.katalog.halaman_baca');
})->name('katalog.halaman_baca');


// Transaksi
Route::get('/transaksi/keranjang', function () {
    return view('user.transaksi.keranjang');
})->name('transaksi.keranjang');

Route::get('/transaksi/pembayaran', function () {
    return view('user.transaksi.pembayaran');
})->name('transaksi.pembayaran');

Route::get('/transaksi/qris', function () {
    return view('user.transaksi.qris');
})->name('transaksi.qris');

Route::get('/transaksi/virtual-account', function () {
    return view('user.transaksi.virtual_account');
})->name('transaksi.virtual_account');

Route::get('/transaksi/va-lanjutan', function () {
    return view('user.transaksi.va_lanjutan');
})->name('transaksi.va_lanjutan');

Route::get('/transaksi/pembayaran-berhasil', function () {
    return view('user.transaksi.pembayaran_berhasil');
})->name('transaksi.pembayaran_berhasil');

Route::get('/transaksi/pembayaran-gagal', function () {
    return view('user.transaksi.pembayaran_gagal');
})->name('transaksi.pembayaran_gagal');


// Bantuan
Route::get('/bantuan/hubungi-kami', function () {
    return view('user.bantuan.hubungi_kami');
})->name('bantuan.hubungi_kami');

Route::get('/bantuan/faq', function () {
    return view('user.bantuan.faq');
})->name('bantuan.faq');


// Profil
Route::get('/profil', function () {
    return view('user.profil.profil');
})->name('profil');

Route::get('/transaksi/detail', function () {
    return view('user.profil.detail_transaksi');
})->name('transaksi.detail');

Route::get('/profil/edit', function () {
    return view('user.profil.edit_profile');
})->name('profil.edit');