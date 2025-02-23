<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\frontend\FrontendController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Dashboard\DashboardController;
use App\Http\Controllers\Dashboard\ProductController;
use App\Http\Controllers\Dashboard\CategoryController;

Route::get('/', [FrontendController::class, 'index'])->name('/');
Route::get('/products', [FrontendController::class, 'products'])->name('frontend.products');
Route::get('/products/detail', [FrontendController::class, 'productsdetail'])->name('frontend.products.detail');
Route::get('/wishlist', [FrontendController::class, 'wishlist'])->name('frontend.wishlist');

Route::get('/orders', [DashboardController::class, 'orders'])->name('orders');
Route::get('/add-product', [DashboardController::class, 'addProduct'])->name('addProduct');

Route::middleware('auth')->prefix('admin')->group(function () {
    Route::get('/', [DashboardController::class, 'dashboard'])->name('dashboard');
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');

    Route::resource('categories', CategoryController::class);
});

require __DIR__.'/auth.php';
