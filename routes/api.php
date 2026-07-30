<?php
use App\Http\Controllers\ControllerFood;

Route::get('/foods', [ControllerFood::class, 'index']); // Add this manual route
Route::apiResource('foods', ControllerFood::class);

// use App\Http\Controllers\ControllerFood;
// Route::get('/api/foods', [ControllerFood::class, 'index']);
