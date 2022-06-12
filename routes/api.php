<?php

use App\Http\Controllers\api\MarvelController;
use App\Http\Controllers\api\UsersController;
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

Route::middleware('auth:api')->apiResource('users', UsersController::class);


Route::middleware('auth:api')
->prefix('marvel')
->controller(MarvelController::class)
->group(function() {

    Route::post('comics', 'comics');
    Route::post('characters', 'characters');
    Route::post('character', 'character');

});