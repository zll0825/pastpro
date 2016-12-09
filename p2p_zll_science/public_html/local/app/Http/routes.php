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
//首页
Route::get('/', 'IndexController@index');
//个人中心
Route::get('/center', 'IndexController@center');
//注册
Route::get('/register', 'Auth\AuthController@getRegister');
Route::post('/register', ['middleware'=>'App\Http\Middleware\Email', 'uses'=>'Auth\AuthController@postRegister']);
Route::get('/home', 'Auth\AuthController@home');
//发送验证码
Route::get('/sms/{mob}', 'IndexController@sms');
//核实验证码
Route::get('/smscheck', 'IndexController@checkfucode');
//生成图形验证码
Route::get('/imgcode', 'IndexController@imgcode');

//登陆
Route::get('/login', 'Auth\AuthController@getLogin');
Route::post('/login', 'Auth\AuthController@postLogin');
Route::get('/logout', 'Auth\AuthController@getLogout');

//申请借款
Route::get('/loan', 'ProController@getloan');
Route::post('/loan', 'ProController@postloan');

//项目列表
Route::get('/prolist','CheckController@getlist');

//审核
Route::get('/check/{id}', 'CheckController@getcheck');
Route::post('/check/{id}', 'CheckController@postcheck');

//投资
Route::get('/list', 'IndexController@_list');
Route::get('/touzi/{id}', 'ProController@gettouzi');
Route::post('/touzi/{id}/pay', 'ProController@pay');
Route::post('/touzi/{id}', 'ProController@posttouzi');

//生成收益
Route::get('/grow/run', 'GrowController@run');

//查询我的账单我的投资我的收益
Route::get('/myzd', 'IndexController@myzd');
Route::get('/mytz', 'IndexController@mytz');
Route::get('/mysy', 'IndexController@mysy');


//尚才家教中心
//展示中心首页
Route::get('/ucenter', 'CenterController@index');
//展示个人信息
Route::get('/ucenter/info', 'CenterController@getinfo');
//展示修改页面
Route::get('/ucenter/infoedit/{id}', 'CenterController@getedit');
//提交修改页面
Route::post('/ucenter/infoedit/{id}', 'CenterController@postedit');
//展示订单列表
Route::get('/ucenter/orderlist', 'CenterController@getorder');
//展示密码修改
Route::get('/ucenter/code', 'CenterController@getcode');
//提交密码修改
Route::post('/ucenter/code/{id}', 'CenterController@postcode');
//展示图片上传
Route::get('/ucenter/image', 'CenterController@getimage');
//提交图片上传
Route::post('/ucenter/image', 'CenterController@postimage');