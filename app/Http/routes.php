<?php

/*
|--------------------------------------------------------------------------
| Routes File
|--------------------------------------------------------------------------
|
| Here is where you will register all of the routes in an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('owners/index','OwnerController@index');
Route::get('owners/add','OwnerController@create');
Route::post('owners/add','OwnerController@store');
Route::get('owners/edit/{id}','OwnerController@edit');
Route::post('owners/edit/{id}','OwnerController@update');
Route::get('owners/delete/{id}','OwnerController@delete');
Route::get('owners/view/{id}','OwnerController@view');
Route::get('owners/car/{id}','OwnerController@createCar');
Route::post('owners/car/{id}','OwnerController@storeCar');

Route::get('cars/index','CarController@index');
Route::get('cars/add','CarController@create');
Route::post('cars/add','CarController@store');
Route::get('cars/edit/{id}','CarController@edit');
Route::post('cars/edit/{id}','CarController@update');
Route::get('cars/delete/{id}','CarController@delete');

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| This route group applies the "web" middleware group to every route
| it contains. The "web" middleware group is defined in your HTTP
| kernel and includes session state, CSRF protection, and more.
|
*/
/*
Route::group(['middleware' => ['web']], function () {
    //
});
*/