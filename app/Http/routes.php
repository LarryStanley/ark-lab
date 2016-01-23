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

Route::get('/', "MainController@index");
Route::get('/about', "MainController@about");
Route::get('/education', "MainController@education");
Route::get('/products', "MainController@products");
Route::get('/flyProject', "MainController@flyProject");
Route::get('/envirnment', "MainController@envirnment");
Route::get('/documents', "MainController@documents");

Route::get('login', 'Auth\AuthController@getLogin');
Route::get('auth/login', 'Auth\AuthController@getLogin');
Route::post('auth/login', 'Auth\AuthController@postLogin');
Route::get('auth/logout', 'Auth\AuthController@getLogout');

Route::get('auth/register', 'Auth\AuthController@getRegister');
Route::post('auth/register', 'Auth\AuthController@postRegister');

Route::get('/home', function() {
	return redirect('/');
});

Route::get('/design', function() {
	return view("design");
});
