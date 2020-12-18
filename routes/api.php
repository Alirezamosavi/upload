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

//Vue js Api Route

Route::get('photo', 'App\Http\Controllers\API\PhotoController@index');

Route::post('st', 'App\Http\Controllers\API\PhotoController@store');

Route::put('update/{id}', 'App\Http\Controllers\API\PhotoController@update');

Route::DELETE('store_image/delete/{id}', 'App\Http\Controllers\API\PhotoController@destroy');
