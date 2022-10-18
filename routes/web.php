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

Route::group(['prefix' => 'admin', 'middleware' => 'auth'], function() {
    Route::get('patient/create', 'Admin\PatientController@add');
    Route::post('patient/create', 'Admin\PatientController@create');
    Route::get('patient', 'Admin\PatientController@index');
    Route::get('patient/edit', 'Admin\PatientController@edit');
    Route::post('patient/edit', 'Admin\PatientController@update');
    Route::get('patient/delete', 'Admin\PatientController@delete');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');