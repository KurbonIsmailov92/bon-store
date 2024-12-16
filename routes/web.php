<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\HomeController;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use Laravel\Socialite\Facades\Socialite;

//Route::get('/', function () {
//    return view('welcome');
//});


Route::controller(AuthController::class)->group(function (){
    Route::get('/login', 'index')->name('login');
    Route::post('/login', 'signIn')->name('sign-in');

    Route::get('/sign-up','signUp')->name('sign-up');
    Route::post('/sign-up','store')->name('store');

    Route::delete('/logout','logout')->name('logout');

    Route::get('/forgot-password', 'forgot')
        ->middleware('guest')
        ->name('password.request');

    Route::post('/forgot-password', 'forgotPassword' )
        ->middleware('guest')
        ->name('password.email');

    Route::get('/reset-password/{token}', 'reset')
        ->middleware('guest')
        ->name('password.reset');

    Route::post('/reset-password', 'resetPassword')->middleware('guest')->name('password.update');

    Route::get('/auth/socialite/github', 'github')->name('socialite.github');

    Route::get('/auth/socialite/github/callback', 'githubCallback')->name('socialite.github.callback');

});


Route::get('/', HomeController::class)->name('home');




