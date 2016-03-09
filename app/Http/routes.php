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
Route::get('/documents', "MainController@documents");
Route::get('/plans', "MainController@plans");
Route::get('/plans/{url}', "MainController@planDetails");
Route::get('/flyProject', "MainController@flyProject");

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
	return view("design", ["title" => "網站規劃"]);
});


Route::group(['prefix' => 'api'], function() {
	Route::group(['prefix' => 'index_block'], function() {
		Route::get("/", "ApiController@index_block");
		Route::post('/save', "ApiController@index_block_save");
	});
	Route::get("/index_slider", "ApiController@index_slider");
	Route::post("/index_slider/save", "ApiController@index_slider_save");

	Route::get('/about_us', "ApiController@show_about_us");
	Route::post('/about_us/save', "ApiController@new_about_logs");
	Route::post('/about_us/delete/{id}', "ApiController@delete_about_logs");

	Route::get('/activity_record', "ApiController@show_activity_record");

	Route::post('/upload_image', "ApiController@upload_image");
});
