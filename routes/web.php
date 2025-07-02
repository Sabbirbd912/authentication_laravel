<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;

// About Us
Route::get('/about', function () {
        return view('about');
});

//public pages
Route::middleware('guest')->group(function () {

    Route::get('/', function () {
        return view('welcome');
    });

    // Registration Routes

    Route::get('/register', [AuthController::class, 'showRegister'])->middleware('guest')->name('register');
    Route::post('/register', [AuthController::class, 'register'])->middleware('guest');
    Route::post('/login', [AuthController::class, 'login'])->middleware('guest');


    Route::get('/login',function(){
       return view("auth.login");
    });

});

//private pages
Route::middleware('auth')->group(function () {

    Route::get('/dashboard', function () {
        //return 'Welcome ' . auth()->user()->name;
        return view("/dashboard",["user"=>auth()->user()]);
    });

    Route::post('/logout', [AuthController::class, 'logout'])->name('logout');

    
});