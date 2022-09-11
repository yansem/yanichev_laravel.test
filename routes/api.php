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

Route::group(['prefix' => 'cats'], function () {
    Route::get('/', \App\Http\Controllers\API\Cat\IndexController::class);
    Route::post('/', \App\Http\Controllers\API\Cat\StoreController::class);
    Route::patch('/{cat}', \App\Http\Controllers\API\Cat\UpdateController::class);
    Route::delete('/{cat}', \App\Http\Controllers\API\Cat\DestroyController::class);
});
Route::group(['prefix' => 'breeds'], function () {
    Route::get('/', \App\Http\Controllers\API\Breed\IndexController::class);
    Route::post('/', \App\Http\Controllers\API\Breed\StoreController::class);
    Route::patch('/{breed}', \App\Http\Controllers\API\Breed\UpdateController::class);
    Route::delete('/{breed}', \App\Http\Controllers\API\Breed\DestroyController::class);
});
