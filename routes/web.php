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

Auth::routes();
Route::get('/', 'HomeController@index');


Route::group(['prefix' => 'admin', 'middleware' => ['role:admin']], function() {

    Route::get('/addDriver', 'DriverController@create')->name('addDriver');
    Route::post('/saveDriver', 'DriverController@store');

    Route::get('/addVehicle', 'VehicleController@create')->name('addVehicle');
    Route::post('/saveVehicle', 'VehicleController@store');

    Route::get('/addOrder', 'OrderController@create')->name('addOrder');
    Route::post('/saveOrder', 'OrderController@store');

});