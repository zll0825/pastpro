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

Route::get('/home',function(){
	return 'welcome to  use center';
});
//测试图片验证
Route::get('/test','IndexController@test');

//路由分组
Route::group(['prefix'=>'auth','namespace'=>'Auth'],function(){

	//用户注册
	Route::get('register','AuthController@getRegister');
	//注册后发邮件
	Route::post('register',
			[
			'middleware'=>'App\Http\Middleware\EmailMiddleware',
			'uses'=>'Authcontroller@postRegister'
			]
		);
	//Route::post('auth/register','Auth\AuthController@postRegister');#原来的方法

	//用户登录
	Route::get('login','AuthController@getLogin');
	Route::post('login','AuthController@postLogin');
	Route::get('logout','AuthController@getLogout');


});


//借款
Route::get('jie','ProController@getJie');
Route::post('jie','ProController@postJie');

//项目列表
Route::get('prolist','ProController@prolist');

//项目审核
Route::get('check/{pid}','CheckController@getCheck');
Route::post('check/{pid}','CheckController@postCheck');

//投资人投标
Route::get('/','IndexController@index');
Route::get('touzi/{pid}','ProController@touzi');
Route::post('touzi/{pid}','ProController@touziP');

//为投资人发当天收益
//Route::get('/run','GrowsController@run');

//我的账单
Route::get('/myzd','ProController@myzd');

//我的投资
Route::get('/mytz','ProController@mytz');

//我的收益
Route::get('/mysy','ProController@mysy');


//中间件测试
#匿名函数
// Route::get('/test',['middleware'=>'App\Http\Middleware\EmailMiddleware',function(){
// 	echo '1';
// }]);

#Controller中用 尝试在首页注册发邮件
#Route::get('/', ['middleware'=>['App\Http\Middleware\EmailMiddleware'],'uses'=>'IndexController@index']);

#生成付款订单
#Route::post('pay/{pid}','PayController@Pay');
Route::post('pay/{pid}','ProController@payPost');
#验证订单页面
//Route::post('paycheck/{pid}','PayController@PayCheck');

#将验证码发送手机短信
Route::get('sm/{mobile}','IndexController@sm');
#验证验证码是否正确
Route::get('checksm','IndexController@checksm');
?>