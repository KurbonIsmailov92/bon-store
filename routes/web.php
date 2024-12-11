<?php

use Illuminate\Support\Facades\Route;

//Route::get('/', function () {
//    return view('welcome');
//});

Route::get('/', function () {
    dump(\App\Models\Product::query()
    ->select('*')
    ->with(['categories', 'brand'])
    ->where('id', 1)
    ->get());
    return view('welcome');
});


