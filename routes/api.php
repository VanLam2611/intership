<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});
//Login
Route::post('login', [App\Http\Controllers\Api\UserController::class, 'login']);
//Register
Route::post('register', [App\Http\Controllers\Api\UserController::class, 'register']);
//Authorization
Route::group(['middleware' => 'auth:api'], function() {
    //Logout
    Route::get('logout', [App\Http\Controllers\Api\UserController::class, 'logout']);
    //Profile of user
    Route::get('user', [App\Http\Controllers\Api\UserController::class, 'profile']);
    //Get all type of product
    Route::get('protype', [App\Http\Controllers\Api\ProtypeController::class, 'getAllProtype']);
    //Create type product
    Route::post('protype/create', [App\Http\Controllers\Api\ProtypeController::class, 'create']);
    //Update type product
    Route::post('protype/update/{type_id}', [App\Http\Controllers\Api\ProtypeController::class, 'update']);
    //Delete type product
    Route::get('protype/delete/{type_id}', [App\Http\Controllers\Api\ProtypeController::class, 'delete']);
});

