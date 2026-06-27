<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserAuthController;

// USER

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


// ADMIN
Route::prefix('admin')->name('admin.')->group(function () {

    // ==========================================
    // 1. Authentication (Folder: admin/authentication)
    // ==========================================
    
    // Diakses lewat: 127.0.0.1:8000/admin/login
    Route::get('/login', function () {
        return view('admin.authentication.login');
    })->name('login');

    // Diakses lewat: 127.0.0.1:8000/admin/lupa-password
    Route::get('/lupa-password', function () {
        return view('admin.authentication.lupa_password');
    })->name('lupa_password');


    // ==========================================
    // 2. Dashboard (Folder: admin/dashboard)
    // ==========================================
    
    // Diakses lewat: 127.0.0.1:8000/admin/dashboard
    Route::get('/dashboard', function () {
        return view('admin.dashboard.dashboard');
    })->name('dashboard');


    // ==========================================
    // 3. Manajemen Artikel (Folder: admin/artikel)
    // ==========================================
    
    // Diakses lewat: 127.0.0.1:8000/admin/artikel
    Route::get('/artikel', function () {
        return view('admin.artikel.artikel');
    })->name('artikel.index');

    // Diakses lewat: 127.0.0.1:8000/admin/artikel/tambah
    Route::get('/artikel/tambah', function () {
        return view('admin.artikel.tambah_artikel');
    })->name('artikel.tambah');

    // Diakses lewat: 127.0.0.1:8000/admin/artikel/edit
    Route::get('/artikel/edit', function () {
        return view('admin.artikel.edit_artikel');
    })->name('artikel.edit');

    // Diakses lewat: 127.0.0.1:8000/admin/artikel/detail
    Route::get('/artikel/detail', function () {
        return view('admin.artikel.detail_artikel');
    })->name('artikel.detail');


    // ==========================================
    // 4. Manajemen Produk/Novel (Folder: admin/produk)
    // ==========================================
    
    // Diakses lewat: 127.0.0.1:8000/admin/produk
    Route::get('/produk', function () {
        return view('admin.produk.produk');
    })->name('produk.index');

    // Diakses lewat: 127.0.0.1:8000/admin/produk/edit-novel
    Route::get('/produk/edit-novel', function () {
        return view('admin.produk.edit_novel');
    })->name('produk.edit');

    // Diakses lewat: 127.0.0.1:8000/admin/produk/detail
    Route::get('/produk/detail', function () {
        return view('admin.produk.detail_produk');
    })->name('produk.detail');

    // Diakses lewat: 127.0.0.1:8000/admin/produk/komentar
    Route::get('/produk/komentar', function () {
        return view('admin.produk.komentar_detail');
    })->name('produk.komentar');

    // Diakses lewat: 127.0.0.1:8000/admin/produk/tambah
    Route::get('/produk/tambah', function () {
        return view('admin.produk.tambah_produk');
    })->name('produk.tambah');

    // ==========================================
    // 5. Manajemen Pengguna (Folder: admin/pengguna)
    // ==========================================
    
    // Diakses lewat: 127.0.0.1:8000/admin/pengguna
    Route::get('/pengguna', function () {
        return view('admin.pengguna.pengguna');
    })->name('pengguna.index');

    // Diakses lewat: 127.0.0.1:8000/admin/pengguna/edit
    Route::get('/pengguna/edit', function () {
        return view('admin.pengguna.edit_pengguna');
    })->name('pengguna.edit');

    // Diakses lewat: 127.0.0.1:8000/admin/pengguna/detail
    Route::get('/pengguna/detail', function () {
        return view('admin.pengguna.detail_pengguna');
    })->name('pengguna.detail');


    // ==========================================
    // 6. Manajemen Pesan (Folder: admin/pesan)
    // ==========================================
    
    // Diakses lewat: 127.0.0.1:8000/admin/pesan
    Route::get('/pesan', function () {
        return view('admin.pesan.pesan');
    })->name('pesan.index');

    // Diakses lewat: 127.0.0.1:8000/admin/pesan/balas
    Route::get('/pesan/balas', function () {
        return view('admin.pesan.balas_pesan');
    })->name('pesan.balas');


    // ==========================================
    // 7. Manajemen Transaksi (Folder: admin/transaksi)
    // ==========================================
    
    // Diakses lewat: 127.0.0.1:8000/admin/transaksi
    Route::get('/transaksi', function () {
        return view('admin.transaksi.transaksi');
    })->name('transaksi.index');

    // Diakses lewat: 127.0.0.1:8000/admin/transaksi/detail
    Route::get('/transaksi/detail', function () {
        return view('admin.transaksi.detail_transaksi');
    })->name('transaksi.detail');

});