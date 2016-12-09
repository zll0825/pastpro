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

Route::group(['middleware'=>['web']], function(){

	// Route::get('/', function(){return view('welcome');});
	Route::get('/', 'Home\IndexController@index');
	Route::get('/cate/{id?}', 'Home\IndexController@cate');
	Route::get('/a/{id}', 'Home\IndexController@art');
	
	Route::any('/admin/login', 'Admin\LoginController@login');
	Route::get('/admin/code', 'Admin\LoginController@code'); 
	// Route::get('/admin/add', 'Admin\LoginController@add'); 添加管理员用
});

Route::group(['middleware'=>['web','admin.login'],'prefix'=>'admin','namespace'=>'Admin'], function(){

	Route::get('/', 'IndexController@index'); 
	Route::get('index', 'IndexController@index'); 
	Route::get('info', 'IndexController@info');
	Route::get('logout', 'LoginController@logout');
	Route::any('pass', 'IndexController@pass');

	Route::resource('category', 'CategoryController');
	Route::post('cate/changeord', 'CategoryController@changeord');

	Route::resource('article', 'ArticleController');
	Route::any('upload', 'ToolController@upload');

	Route::resource('links', 'LinksController');
	Route::post('links/changeord', 'LinksController@changeord');

	Route::resource('navs', 'NavsController');
	Route::post('navs/changeord', 'NavsController@changeord');

	Route::resource('confs', 'ConfsController');
	Route::post('confs/changeord', 'ConfsController@changeord');
	Route::post('confs/changecontent', 'ConfsController@changecontent');

});

        
        