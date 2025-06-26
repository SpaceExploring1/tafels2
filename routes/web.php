<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TafelController;

// Home route showing welcome page
Route::get('/', function () {
    return view('welcome');
});

// Route to tafels index (adjust if this should replace the welcome page)
Route::get('/tafels', [TafelController::class, 'index'])->name('tafels.index');

// Home route (optional, adjust as needed)
Route::get('/home', function () {
    return view('home');
})->name('home');

// Protected routes requiring authentication
Route::middleware(['auth'])->group(function () {
    Route::get('/tafels/oefenen', [TafelController::class, 'index'])->name('tafels.oefenen');
});

// Single resource route (replaces duplicate definitions)
Route::resource('tafels', TafelController::class);

//require __DIR__.'/auth.php';