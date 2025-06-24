<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\AdminAuthController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\AuthController;
use App\Http\Controllers\Admin\AdminDashboardController;

// Login admin
Route::get('admin/login', [AuthController::class, 'showLoginForm'])->name('admin.login');
Route::post('admin/login', [AuthController::class, 'login'])->name('admin.login.submit');

// Logout
Route::post('admin/logout', [AuthController::class, 'logout'])->name('admin.logout');


// Dashboard (protected)
Route::middleware('auth:admin')->prefix('admin')->group(function () {
    Route::get('/dashboard', [AdminDashboardController::class, 'index'])->name('admin.dashboard');
    Route::get('/galeri', [AdminDashboardController::class, 'galeri'])->name('admin.galeri');
    Route::post('/galeri', [AdminDashboardController::class, 'store'])->name('admin.galeri.store');
    Route::delete('/galeri/{id}', [AdminDashboardController::class, 'destroy'])->name('admin.galeri.destroy');
    Route::get('/produk/basic', [ProductController::class, 'indexBasic'])->name('produk.basic');
    Route::post('/produk/basic/store', [ProductController::class, 'store'])->name('produk.basic.store');
    // Route::post('/produk/basic/destroy', [ProductController::class, 'destroy'])->name('produk.basic.destroy');

    Route::get('/produk/audio', [ProductController::class, 'indexAudio'])->name('produk.audio');
    Route::get('/produk/colourvu', [ProductController::class, 'indexColourVU'])->name('produk.colourvu');
});

Route::get('/', [HomeController::class, 'index']);
Route::get('/kontak', [HomeController::class, 'kontak']);
Route::get('/cctvBasic', [HomeController::class, 'cctvBasic']);
Route::get('/cctvAudio', [HomeController::class, 'cctvAudio']);
Route::get('/cctvColourVu', [HomeController::class, 'cctvColourVu']);

Route::resource('products', ProductController::class);

