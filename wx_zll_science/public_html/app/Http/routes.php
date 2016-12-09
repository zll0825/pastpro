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

// Route::get('/', ['middleware'=>['check']],'ShopController@index');
Route::get('/login', 'UserController@login');

Route::get('/', 'ShopController@index');
Route::get('/goods/{gid}', 'ShopController@goods');
Route::get('/assort', 'ShopController@assort');
Route::get('/cart', 'ShopController@cart');
Route::post('/cart', 'ShopController@addcart');
Route::get('/delcart/{gid}', 'ShopController@delcart');
Route::get('/dec/{gid}', 'ShopController@deccart');
Route::get('/inc/{gid}', 'ShopController@inccart');
Route::post('/input', 'ShopController@input');
Route::post('/buy', 'ShopController@buy');
Route::post('/done', 'ShopController@done');
Route::post('/pay/{oid}', 'ShopController@pay');
Route::post('/payok', 'ShopController@payok');

Route::get('/ucenter', 'ShopController@ucenter');
Route::get('/uorder/{uid}', 'ShopController@uorder');
Route::get('/fcenter', 'ShopController@fcenter');
Route::get('/umoney/{uid}', 'ShopController@umoney');


Route::any('/wx', 'WxController@index');
Route::get('/test', function(){
	return 1;
});
