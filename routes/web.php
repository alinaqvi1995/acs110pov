<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\frontend\FrontendController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Dashboard\DashboardController;

Route::get('/', [FrontendController::class, 'index'])->name('/');

Route::get('/dashboard-1', [DashboardController::class, 'dashboard'])->name('dashboard');
Route::get('/orders', [DashboardController::class, 'orders'])->name('orders');
Route::get('/add-product', [DashboardController::class, 'addProduct'])->name('addProduct');


Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
