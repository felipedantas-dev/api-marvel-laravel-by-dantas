<?php

use App\Http\Controllers\api\MarvelController;
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

Route::prefix('marvel')
->controller(MarvelController::class)
->group(function() {

    Route::post('comics', 'comics');
    Route::post('events', 'events');
    Route::post('stories', 'stories');
    Route::post('series', 'series');

    Route::post('characters', 'characters');
    Route::post('character', 'character');
    Route::post('character/{id}/comics', 'characterComics');
    Route::post('character/{id}/events', 'characterEvents');
    Route::post('character/{id}/stories', 'characterStories');
    Route::post('character/{id}/series', 'characterSeries');

});