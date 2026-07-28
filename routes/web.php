<?php

use Illuminate\Support\Facades\Route;


Route::get('/', function () {
    return view('food');
});

Route::get('/comedy-data', function () {
    return response()->json(
        App\Model\ComedySpecific::all(),
        200,
        [],
        JSON_PRETTY_PRINT
    );
});