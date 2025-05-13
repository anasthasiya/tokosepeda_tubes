<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\PenyewaController;
use App\Http\Controllers\BeliController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\DashboardController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/home', function () {
    return view('home');
});
Route::get('/', function () {
    return view('login');
});

Route::get('/home', [ProductController::class, 'index'])->middleware(['auth'])->name('home');
Route::get('/dashboard', [DashboardController::class, 'index'])->middleware(['auth'])->name('dashboard');
Route::get('/detailproduk/{slug}', [ProductController::class, 'show'])->name('detailproduk');
Route::post('/product/{id}/beli', [BeliController::class, 'beli'])->name('product.beli')->middleware('auth');

Route::get('/login', [AuthController::class, 'showLogin'])->name('login');
Route::post('/login', [AuthController::class, 'login']);
Route::get('/register', [AuthController::class, 'showRegister'])->name('register');
Route::post('/register', [AuthController::class, 'register']);
Route::post('/logout', [AuthController::class, 'logout'])->name('logout');

Route::prefix('admin')->name('admin.products.')->middleware(['auth'])->group(function () {
Route::get('/products', [ProductController::class, 'index'])->name('index');
Route::get('/product/{id}/edit', [ProductController::class, 'edit'])->name('product.productEdit');
Route::put('/product/{id}', [ProductController::class, 'update'])->name('product.productUpdate');
Route::delete('/product/{id}', [ProductController::class, 'destroy'])->name('product.productDestroy');
Route::get('/product/create', [ProductController::class, 'create'])->name('product.productCreate'); 
});

