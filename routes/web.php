<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminLoginAndRegisterController;


Route::get('/', function () {
    return view('welcome');
});

//Show Login
Route::get('login',[AdminLoginAndRegisterController::class,'ShowLogin']);
//Show Register
Route::get('register',[AdminLoginAndRegisterController::class,'ShowRegister']);
//Show homepage
Route::get('home',[AdminLoginAndRegisterController::class,'ShowHomePage']);
// Thực thi dăng nhập
Route::get('login/loginrun',[AdminLoginAndRegisterController::class,'AdminLogin']);
// Thực thi đăng ký
Route::get('register/registerrun',[AdminLoginAndRegisterController::class,'adminRegister']);
