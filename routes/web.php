<?php

use Illuminate\Support\Facades\Route;

//Route::get('/', function () {
//    return view('welcome');
//});

Route::get('/', function () {
    logger()->channel('telegram')->debug('Hello log');
    return view('welcome');
});


