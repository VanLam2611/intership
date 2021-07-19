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
//Main page
Route::get('/', function () {
    return view('welcome');
});
Auth::routes();

/*Check your account when you log in*/
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
//Login
Route::get('/login', [App\Http\Controllers\LoginController::class, 'getLogin']);
Route::post('/login', [App\Http\Controllers\LoginController::class, 'postLogin']);
//Register
Route::get('/register', [App\Http\Controllers\RegisterController::class, 'getRegister']);
Route::post('/register', [App\Http\Controllers\RegisterController::class, 'postRegister']);
//Logout
Route::get('/register', [App\Http\Controllers\RegisterController::class, 'getRegister']);
//Login
Route::get('/logout', [App\Http\Controllers\LogoutController::class, 'logout']);
