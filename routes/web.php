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
Route::get('/logout', [App\Http\Controllers\LogoutController::class, 'logout']);

/**
 * Protype
 */
//All protype page
Route::get('/home/protype', [App\Http\Controllers\ProtypeController::class, 'getAllProtype']);
//Product type creation page
Route::get('home/protype/create', [App\Http\Controllers\ProtypeController::class, 'createPage']);
Route::post('home/protype/create', [App\Http\Controllers\ProtypeController::class, 'createProtype']);
//Product type update page
Route::get('home/protype/update/{type_id}', [App\Http\Controllers\ProtypeController::class, 'updatePage']);
Route::post('home/protype/update/{type_id}', [App\Http\Controllers\ProtypeController::class, 'updateProtype']);
//Delete type product
Route::get('home/protype/delete/{type_id}', [App\Http\Controllers\ProtypeController::class, 'deleteProtype']);
