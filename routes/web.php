<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TafelController;  // ← Import the controller here

Route::resource('tafels', TafelController::class);

Route::get('/', function () {
    return view('welcome');
});
