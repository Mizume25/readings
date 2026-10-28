<?php

use App\Http\Controllers\ApiController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');



Route::get('/readings', [ApiController::class, 'index']);          
Route::post('/readings', [ApiController::class, 'store']);        
Route::get('/readings/{id}', [ApiController::class, 'show']); 
Route::put('/readings/{id}', [ApiController::class, 'update']);  
Route::delete('/readings/{id}', [ApiController::class, 'destroy']); 
