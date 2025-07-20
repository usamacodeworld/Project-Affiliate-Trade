<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\TradeController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\CheckoutController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\Admin\UserController;
use App\Http\Controllers\Admin\AdminController;
use SebastianBergmann\CodeCoverage\Report\Html\Dashboard;
use Illuminate\Support\Facades\Artisan;

Route::get('/clear-cache', function () {
    Artisan::call('cache:clear');
    Artisan::call('config:clear');
    Artisan::call('route:clear');
    Artisan::call('view:clear');

    return response()->json([
        'message' => 'All caches cleared successfully!'
    ]);
});


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


// Route::middleware('auth')->group(function () {
Route::group(['prefix' => 'user', 'as' => 'user.'], function () {
    // Route::get('/dashboard', [DashboardController::class, 'dashboard'])->name('dashboard');
    Route::get('/dashboard', [TradeController::class, 'dashboard']);
    Route::get('/get-quote/{symbol}', [TradeController::class, 'getQuote'])
        ->where('symbol', '.*')
        ->name('get.quote');
    Route::post('/trade/place', [TradeController::class, 'placeOrder'])->name('trade.place');
});
// });
Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

Route::get('index-2', function () {
    return view('user.trade.index2');
});




Route::get('/test-api', function () {
    try {
        $response = Http::withHeaders([
            'APCA-API-KEY-ID' => config('alpaca.key'),
            'APCA-API-SECRET-KEY' => config('alpaca.secret')
        ])->get(config('alpaca.mode') === 'live'
            ? 'https://api.alpaca.markets/v2/account'
            : 'https://paper-api.alpaca.markets/v2/account');

        if ($response->successful()) {
            return response()->json($response->json());
        }

        return response()->json([
            'error' => 'API request failed',
            'status' => $response->status(),
            'body' => $response->body()
        ], 500);
    } catch (\Exception $e) {
        return response()->json([
            'error' => $e->getMessage()
        ], 500);
    }
});



require __DIR__ . '/auth.php';
