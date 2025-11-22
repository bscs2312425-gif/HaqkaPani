<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TankerServiceController;

// Public Routes
Route::get('/', function () {
    return view('pages.home');
});

Route::get('/tankers', [TankerServiceController::class, 'index']);
Route::get('/schedule', function () {
    return view('pages.schedule');
});
Route::get('/cart', function () {
    return view('pages.cart');
});
Route::get('/checkout', function () {
    return view('pages.checkout');
});
Route::get('/about', function () {
    return view('pages.about');
});
Route::get('/collective-order', function () {
    return view('pages.collective-order');
});
Route::get('/login', function () {
    return view('pages.login');
});
Route::get('/register', function () {
    return view('pages.register');
});

// Admin Routes for Tanker Services CRUD
Route::prefix('admin')->group(function () {
    Route::get('/tanker-services', [TankerServiceController::class, 'adminIndex'])
        ->name('admin.tanker-services.index');
    
    Route::get('/tanker-services/create', [TankerServiceController::class, 'create'])
        ->name('admin.tanker-services.create');
    
    Route::post('/tanker-services', [TankerServiceController::class, 'store'])
        ->name('admin.tanker-services.store');
    
    Route::get('/tanker-services/{id}/edit', [TankerServiceController::class, 'edit'])
        ->name('admin.tanker-services.edit');
    
    Route::put('/tanker-services/{id}', [TankerServiceController::class, 'update'])
        ->name('admin.tanker-services.update');
    
        
    Route::delete('/tanker-services/{id}', [TankerServiceController::class, 'destroy'])
        ->name('admin.tanker-services.destroy');
});