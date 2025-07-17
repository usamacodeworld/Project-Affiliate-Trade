<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\Admin\UserController;
use App\Http\Controllers\Admin\AdminController;
use App\Http\Controllers\CheckoutController;


Route::get('/', [HomeController::class, 'index'])->name('home');

Route::group(['prefix' => 'checkout', 'as' => 'checkout.'], function () {
    Route::get('/package/{package_slug}', [CheckoutController::class, 'show'])->name('package');
    Route::post('/store', [CheckoutController::class, 'store'])->name('store');
});

// Admin Routes
Route::get('/auth/login', function () {
    return view('backend.auth.auth-login');
})->name('auth.login');
Route::middleware('auth')->group(function () {
    Route::group(['prefix' => 'admin', 'as' => 'admin.'], function () {
        Route::get('/dashboard', [AdminController::class, 'dashboard'])->name('dashboard');
        Route::get('/users/{provider}', [UserController::class, 'users'])->name('users');
        Route::put('/checkout/update-status/{id}', [CheckoutController::class, 'updateStatus'])->name('checkout.updateStatus');
    });
});


Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__ . '/auth.php';
