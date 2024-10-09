<?php

use Illuminate\Support\Facades\Route;
use App\http\Controllers\AuthController;
Route::get('/', function () {
    return view('layout/header');
});
    Route::view('/dashboard','layout/dashboard')->name('dashboard');
    Route::get("/login",[AuthController::class,"login"])->name('login-page');
    Route::post("/login",[AuthController::class,"loginpost"])->name('login.post');
    Route::get("/register",[AuthController::class,"register"])->name("register-page");
    Route::post("/register",[AuthController::class,"registerpost"])->name("register.post");
    Route::get("/logout",[AuthController::class,"logout"])->name("logout");