<?php

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
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index');

Route::get('/addDriver', 'DriverController@create');
Route::post('/saveDriver', 'DriverController@store');

Route::get('/addVehicle', 'VehicleController@create');
Route::post('/saveVehicle', 'VehicleController@store');

