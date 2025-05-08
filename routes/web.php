<?php

use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/users/email/{email}', [UserController::class,'getByEmail']);

Route::get('/auth/login',[UserController::class,'login']);
Route::get('/auth/register',[UserController::class,'register']);
