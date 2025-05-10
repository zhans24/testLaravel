<?php

use App\Http\Controllers\UserController;
use App\Http\Middleware\AuthSession;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});


Route::get('/auth',function (){
    return view('auth/auth');
});

Route::get('/zhasik',function (){
    return "zhasik";
})->middleware("auth.session");

Route::post('/auth/login',[UserController::class,'login'])->name('auth.login');
Route::post('/auth/register',[UserController::class,'register'])->name('auth.register');
