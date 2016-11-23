<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('', 'FormController@index');
Route::get('form', 'FormController@index');
Route::get('form/index', 'FormController@index');
Route::post('form/index', 'FormController@indexPost');
Route::get('form/create', 'FormController@create');
Route::post('form/create', 'FormController@createPost');
Route::get('form/update/{id}', 'FormController@update');
Route::post('form/update/{id}', 'FormController@updatePost');
Route::get('form/delete/{id}', 'FormController@delete');
