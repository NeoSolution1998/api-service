<?php

use Illuminate\Support\Facades\Route;

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
    return redirect()->route('personnel.index');
});

Route::get('/personnel', 'App\Http\Controllers\PersonnelController@index')->name('personnel.index');
Route::get('/personnel/create', 'App\Http\Controllers\PersonnelController@create')->name('personnel.create');
Route::get('/personnel/{id}', 'App\Http\Controllers\PersonnelController@show')->name('personnel.show');
Route::post('/personnel', 'App\Http\Controllers\PersonnelController@store')->name('personnel.store');