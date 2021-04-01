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

Route::get('/cars', 'App\Http\Controllers\CarController@index')->name("cars.index");
Route::post('/cars', 'App\Http\Controllers\CarController@store')->name("cars.store");
Route::get('/cars/create', 'App\Http\Controllers\CarController@create')->name("cars.create");
Route::get('/cars/{car}/edit', 'App\Http\Controllers\CarController@edit')->name("cars.edit");
Route::put('/cars/{car}', 'App\Http\Controllers\CarController@update')->name("cars.update");
Route::delete('/cars/{car}', 'App\Http\Controllers\CarController@destroy')->name("cars.destroy");
