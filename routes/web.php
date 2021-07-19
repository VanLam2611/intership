<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();
/*Check your account when you log in*/
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
//Login
Route::get('home/login', [App\Http\Controllers\LoginController::class, 'getLogin']);
Route::post('home/login', [App\Http\Controllers\LoginController::class, 'postLogin']);
//Logout 
Route::get('home/logout',[App\Http\Controllers\LogoutController::class, 'logout']);
//Register
Route::get('home/register',[App\Http\Controllers\RegisterController::class, 'getRegister']);
Route::post('home/register', [App\Http\Controllers\RegisterController::class, 'postRegister']);
