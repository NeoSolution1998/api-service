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

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::get('/personnel', 'App\Http\Controllers\Api\ApiPersonnelController@index')->name('api.personnel.index');
Route::post('/personnel', 'App\Http\Controllers\Api\ApiPersonnelController@store')->name('api.personnel.store');
Route::get('/personnel/{id}', 'App\Http\Controllers\Api\ApiPersonnelController@show')->name('api.personnel.show');
//Route::patch('/personnel/{id}', 'App\Http\Controllers\Api\ApiPersonnelController@update')->name('api.personnel.update');
//Route::delete('personnel/{id}', 'App\Http\Controllers\Api\ApiPersonnelController@destory')->name('api.personnel.destroy');