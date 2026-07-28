<?php

use App\Models\Food;
use Illuminate\Support\Facades\Route;


Route::get('/', function () {
    return view('home');
});

Route::get('/foods', function () {
    return view('food', ['foods' => Food::all()]);
});

Route::get('/comedy-data', function () {
    return response()->json(
        App\Model\ComedySpecific::all(),
        200,
        [],
        JSON_PRETTY_PRINT
    );
});