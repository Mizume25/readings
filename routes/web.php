<?php

use App\Http\Controllers\ReadingController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/', [ReadingController::class, 'index'])->name('home');

Route::get('/readings/index', [ReadingController::class, 'index'])->name('home');
