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

Route::get('/','IndexController@index');            //主页
Route::get('teacher','IndexController@teacher');   //教师页
Route::get('teacherinfo/{uid}','IndexController@tinfo'); //教师详细列表

Route::get('fee','IndexController@fee');           //收费标准

Route::get('student','IndexController@student');   //学生页
Route::get('student/issue','IndexController@issue'); //学员发布需求
Route::post('student/issue','IndexController@postIssue'); //学员发布需求


//后台登陆页面
Route::get('admin' , 'AdminController@admin');
Route::post('admin','AdminController@adminPost');
Route::get('managecenter','AdminController@managecenter');

//全部用户列表
Route::get('alluser' ,'CheckController@allusers');

//后台未审核用户列表
Route::get('checklist','CheckController@checklist');


//后台用户审核
Route::get('checkinfo/{uid}','CheckController@checkinfo');
Route::post('checkinfo/{uid}','CheckController@checkinfoPost');


//后台全部订单
Route::get('allorder','CheckController@allorder');

//后台订单审核
Route::get('orderlist','CheckController@orderlist');
Route::get('checkorder/{oid}','CheckController@checkorder');
Route::post('checkorder/{oid}','CheckController@checkorderPost');





//后台支付完成后的订单列表控制路由
Route::get('resorder','CheckController@resorder'); //订单列表
Route::get('changeorder/{oid}','CheckController@changeorder');
Route::post('changeorder/{oid}','CheckController@changeorderPost');


//所有的已结课订单 存入example  库
Route::get('example','CheckController@examplelist');

//获取单个教员 全部已结束的订单   成功案例
Route::get('teaexample/{tid}', 'CheckController@texam');
//获取单个学生 全部已结束的订单   成功案例
Route::get('stuexample/{sid}', 'CheckController@texam');

//订单结束  结课的时候，添加第三方评价
Route::get('addcom/{eid}','CheckController@addcom');
Route::post('addcom/{eid}','CheckCOntroller@addcomPost');

//前台成功案例页面
Route::get('examplelist' ,'CheckController@example');


Route::group(['middleware'=>['web'],'prefix'=>'ucenter'], function(){

	//尚才家教中心
	Route::get('/', 'CenterController@index');//展示中心首页
	Route::get('/info', 'CenterController@getinfo');//展示个人信息
	Route::get('/infoedit/{id}', 'CenterController@getedit');//展示修改页面
	Route::post('/infoedit/{id}', 'CenterController@postedit');//提交修改页面
	Route::get('/orderlist', 'CenterController@getorder');//展示订单列表
	Route::get('/code', 'CenterController@getcode');//展示密码修改
	Route::post('/code/{id}', 'CenterController@postcode');//提交密码修改
	Route::get('/image', 'CenterController@getimage');//展示图片上传
	Route::post('/image', 'CenterController@postimage');//提交图片上传

});

//检测用户名是否重复
Route::post('/ucenter/checkname', 'CenterController@checkname');
//检测邮箱是否重复
Route::post('/ucenter/checkemail', 'CenterController@checkemail');


Route::group([],function(){
	Route::any('payment','PayController@pays');//订单确认提交 密码输出到表单隐藏域
	Route::post('payzf','PayController@payzf');//最终支付页面  第三方支付界面
	Route::post("paycheck",'PayController@checkpay');//支付回调确定支付完成
	Route::get("fanyi/{cont}/{language}",'PayController@fy');//API 此路由不做页面 ajax翻译页面调用
	Route::get("fy",'PayController@translate');//翻译页面
});

//测试短信路由器
// Route::get('/kevin','VerifyController@register');
Route::get('/sms/{mobile}','VerifyController@sendSms');
Route::get('/checksms','VerifyController@checkSms');
//测试邮件路由器
Route::get('/email/{name}/{email}','VerifyController@sendemail');
Route::get('/verifyemail/{code}','VerifyController@checkemail');


//教员注册/学员注册在同一表单
Route::get('auth/register','Auth\AuthController@getRegister');
Route::post('auth/register','Auth\AuthController@postRegister');
//学员登录/教员登录
Route::get('auth/login','Auth\AuthController@getLogin');
Route::post('auth/login','Auth\AuthController@postLogin');
//用户退出
Route::get('auth/logout', 'Auth\AuthController@getLogout');

Route::get('/home', 'CenterController@index');//展示中心首页
      





//bootstap测试
Route::get('/test', 'TestController@test');//展示中心首页
