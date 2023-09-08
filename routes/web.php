<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\AuthController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\PerfumeController;
use App\Http\Controllers\SymptomController;

// Public Routes
Route::get('/', function () {
    return view('welcome');
});

Route::get('login', [AuthController::class, 'showLoginForm'])->name('login');
Route::get('login/{provider}', [AuthController::class, 'redirectToProvider'])->where('provider', 'google|apple');
Route::get('login/{provider}/callback', [AuthController::class, 'handleProviderCallback'])->where('provider', 'google|apple');

// Protected Routes
Route::middleware(['auth'])->group(function () {
    Route::get('dashboard', [DashboardController::class, 'index'])->name('dashboard.index');

    Route::resource('perfumes', PerfumeController::class);
    Route::resource('symptoms', SymptomController::class);

    // Any other routes that should be protected go here.

});



Route::get('/about', function () {
    return view('about');
})->name('about');

Route::get('/privacy', function () {
    return view('privacy');
})->name('privacy');

Route::get('/terms', function () {
    return view('terms');
})->name('terms');
