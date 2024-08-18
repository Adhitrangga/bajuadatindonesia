<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\ProductController;
use App\Models\Product;



Route::get('/', [ProductController::class, 'utama'])->name('home');
Route::resource('products', ProductController::class);



//route resource for products
Route::resource('/products', \App\Http\Controllers\ProductController::class);


// Route untuk menampilkan form login
Route::get('/login', [AuthController::class, 'showLoginForm'])->name('login');

// Route untuk proses login
Route::post('/login', [AuthController::class, 'login']);

// Route untuk logout
Route::post('/logout', [AuthController::class, 'logout'])->name('logout');

// Route untuk menampilkan form registrasi (Opsional)
Route::get('/register', [AuthController::class, 'showRegisterForm'])->name('register');

// Route untuk proses registrasi pengguna baru (Opsional)
Route::post('/register', [AuthController::class, 'register']);

// Route untuk halaman dashboard (dilindungi oleh middleware auth)
Route::get('/dashboard', function () {
    $products = Product::latest()->get();
    return view('dashboard', compact('products'));
})->middleware('auth')->name('dashboard');



