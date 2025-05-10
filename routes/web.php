<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\PenyewaController;
use App\Http\Controllers\ProdukController;
use App\Http\Controllers\AuthController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/home', function () {
    return view('home');
});
Route::get('/', function () {
    return view('login');
});
Route::get('/dashboard', function () {
    return view('dashboard');
});

Route::get('/penyewa', [PenyewaController::class, 'index']);
Route::get('/penyewa/create', [PenyewaController::class, 'create']);
Route::post('/penyewa', [PenyewaController::class, 'store']);
Route::get('/penyewa/{id}/edit', [PenyewaController::class, 'edit']);
Route::put('/penyewa/{id}', [PenyewaController::class, 'update']);
Route::delete('/penyewa/{id}', [PenyewaController::class,'destroy']);

Route::get('/home', [ProductController::class, 'index']);
Route::get('/detailproduk/{slug}', [ProductController::class, 'show'])->name('detailproduk');
Route::post('/product/{id}/beli', [ProductController::class, 'beli'])->name('product.beli');

Route::get('/login', [AuthController::class, 'showLogin'])->name('login');
Route::post('/login', [AuthController::class, 'login']);
Route::get('/register', [AuthController::class, 'showRegister'])->name('register');
Route::post('/register', [AuthController::class, 'register']);
Route::post('/logout', [AuthController::class, 'logout'])->name('logout');

Route::get('/dashboard', function () {
        return view('home');
})->middleware(['auth'])->name('dashboard');

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');
