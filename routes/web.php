<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\AuthController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\PerfumeController;
use App\Http\Controllers\SymptomController;


Route::get('/', function () {
    return view('welcome');
});

Route::get('login', [AuthController::class, 'showLogin'])->name('login.show');
Route::get('login/{provider}', [AuthController::class, 'redirectToProvider'])->where('provider', 'google|apple');
Route::get('login/{provider}/callback', [AuthController::class, 'handleProviderCallback'])->where('provider', 'google|apple');

Route::get('/login', [AuthController::class, 'showLogin'])->name('login');
Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');

Route::resource('perfumes', PerfumeController::class);
Route::resource('symptoms', SymptomController::class);


Route::get('/about', function () {
    return view('about');
})->name('about');

Route::get('/privacy', function () {
    return view('privacy');
})->name('privacy');

Route::get('/terms', function () {
    return view('terms');
})->name('terms');
