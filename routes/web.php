<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Route;

//Route::get('/', function () {
//    return view('welcome');
//});


Route::controller(AuthController::class)->group(function (){
    Route::get('/login', 'index')->name('login');
    Route::post('/login', 'signIn')->name('sign-in');

    Route::get('/sign-up','signUp')->name('sign-up');
    Route::post('/sign-up','store')->name('store');

    Route::delete('/logout','logout')->name('logout');
});

Route::get('/', HomeController::class)->name('home');




