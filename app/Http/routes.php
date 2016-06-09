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
Route::get('/products/butterfly', "MainController@showButterfly");
Route::get('/products/dragonfly', "MainController@showDragonfly");
Route::get('/products/crazybull', "MainController@showCrazybull");
Route::get('/products/arknano', "MainController@showArknano");
Route::get('/trade-love', function() {
	return view("trade-love", ["title" => "換換愛 X 大專生洄游農村"]);
});

Route::get('/documents', "MainController@documents");
Route::get('/plans', "MainController@plans");
Route::get('/plans/{url}', "MainController@planDetails");
Route::get('/flyProject', "MainController@flyProject");

Route::get('/sources', function() {
	return redirect("https://goo.gl/xCHPkD");
});

Route::get('login', 'Auth\AuthController@getLogin');
Route::get('logout', 'Auth\AuthController@getLogout');
Route::get('auth/login', 'Auth\AuthController@getLogin');
Route::post('auth/login', 'Auth\AuthController@postLogin');
Route::get('auth/logout', 'Auth\AuthController@getLogout');

Route::get('auth/register', 'Auth\AuthController@getRegister');
Route::post('auth/register', 'Auth\AuthController@postRegister');

Route::get('/home', function() {
	return redirect('/dashboard');
});

Route::get('/design', function() {
	return view("design", ["title" => "網站規劃"]);
});

Route::group(['prefix' => 'dashboard', 'middleware' => 'auth'], function() {
	Route::get('/', 'AdminController@index');
	Route::get('/source', function() {
		return view("dashboard/source", ["title" => "開源資料"]);
	});

	Route::get('/history', 'CustomerController@buyHistory');

	Route::post('/new-buy', 'CustomerController@newBuy');

	Route::group(["prefix" => "order", 'middleware' => 'worker'], function() {
		
		Route::get('/new-order-category', 'AdminController@showNewOrderCategory');
		Route::get('/new-order', 'AdminController@showNewOrder');
		Route::post('/new-order', 'AdminController@newOrder');
		Route::get('/orders', 'AdminController@showOrders');
		
		Route::get('/units', 'AdminController@showSellUnits');
		Route::post('/new-unit', 'AdminController@addNewUnit');
		Route::post('/update-unit', 'AdminController@updateUnit');
		Route::delete('/delete-unit', 'AdminController@deleteUnit');
		
		Route::get('/products', 'AdminController@showProducts');
		Route::post('/products/updateStock', 'AdminController@updateStock');
		Route::post('/products/new-product', 'AdminController@newProduct');

		Route::get('/materials', 'AdminController@showMaterials');
		Route::post('/materials/updateStock', 'AdminController@updateMaterialStock');
		Route::post("/materials/delete", "AdminController@materialDelete");
		Route::post("/materials/newMaterials", "AdminController@newMaterials");
	});

	Route::group(["prefix" => "business", 'middleware' => 'worker'], function() {
		Route::get('/new-business', 'AdminController@showNewBusiness');
		Route::post('/new-business', 'AdminController@postNewBusiness');
	});
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

	Route::group(["prefix" => 'units', 'middleware' => 'worker'], function() {
		Route::get('/', "ApiController@showAllUnits");
		Route::get('/{id}', "ApiController@getSingleUnit");
	});

	Route::group(["prefix" => "materials", 'middleware' => 'worker'], function() {
		Route::get("/{id}", "ApiController@getMaterialState");
		Route::get('/type/{id}', "ApiController@getMaterialType");
	});
});
