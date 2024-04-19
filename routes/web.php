<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminLoginAndRegisterController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

//Show Login
Route::get('login',[AdminLoginAndRegisterController::class,'ShowLogin']);
//Show Register
Route::get('register',[AdminLoginAndRegisterController::class,'ShowRegister']);
//Show homepage
Route::get('home',[AdminLoginAndRegisterController::class,'ShowHomePage']);