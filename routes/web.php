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
    Route::get('/listDriver', 'DriverController@show')->name('listDriver');
    Route::delete('/destroyDriver/{id}', 'DriverController@destroy')->name('destroyDriver');

    Route::get('/addVehicle', 'VehicleController@create')->name('addVehicle');
    Route::post('/saveVehicle', 'VehicleController@store');
    Route::get('/listVehicle', 'VehicleController@show')->name('listVehicle');
    Route::delete('/destroyVehicle/{id}', 'VehicleController@destroy')->name('destroyVehicle');

    Route::get('/addOrder', 'OrderController@create')->name('addOrder');
    Route::post('/saveOrder', 'OrderController@store');
    Route::get('/listOrder', 'OrderController@show')->name('listOrder');
    Route::delete('/destroyOrder/{id}', 'OrderController@destroy')->name('destroyOrder');
    Route::post('/endOrder/{id}', 'OrderController@endOrder')->name('endOrder');

});

Route::group(['prefix' => 'driver', 'middleware' => ['role:driver']], function() {
    Route::get('/listOrderDriver', 'OrderDriverController@show')->name('listOrderDriver');
    Route::get('/endOrder/{id}', 'OrderDriverController@edit')->name('endOrder');
    Route::post('/updateOrder', 'OrderDriverController@update')->name('updateOrder');

});
