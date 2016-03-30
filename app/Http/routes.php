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

//show all owners
Route::get('owners/index', 'OwnerController@index')->name('owners.index');;

//add new owners
Route::get('owners/add', 'OwnerController@create')->name('owners.add');;
Route::post('owners/add', 'OwnerController@store')->name('owners.add');;

//edit owner
Route::get('owners/edit/{id}', 'OwnerController@edit')->name('owners.edit');;
Route::post('owners/edit/{id}', 'OwnerController@update')->name('owners.edit');;

//delete owner
Route::get('owners/delete/{id}', 'OwnerController@delete')->name('owners.delete');;

//view all car of the owner
Route::get('owners/view/{id}', 'OwnerController@view')->name('owners.view');;

//owner add a new car
Route::get('owners/car/{id}', 'OwnerController@createCar')->name('owners.car');;
Route::post('owners/car/{id}', 'OwnerController@storeCar')->name('owners.car');

//show all cars
Route::get('cars/index', 'CarController@index')->name('cars.index');

//add new car
Route::get('cars/add', 'CarController@create')->name('cars.add');
Route::post('cars/add', 'CarController@store')->name('cars.add');

//edit car
Route::get('cars/edit/{id}', 'CarController@edit')->name('cars.edit');
Route::post('cars/edit/{id}', 'CarController@update')->name('cars.edit');

//delete car
Route::get('cars/delete/{id}', 'CarController@delete')->name('cars.delete');

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
Route::group(['middleware' => 'web'], function () {
    Route::auth();

    Route::get('/home', 'HomeController@index');
});
