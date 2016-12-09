<?php

namespace App\Http\Controllers\Auth;

use App\User;
use Validator;
use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\AuthenticatesAndRegistersUsers;
use Auth;
use Crypt;

class AuthController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Registration & Login Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles the registration of new users, as well as the
    | authentication of existing users. By default, this controller uses
    | a simple trait to add these behaviors. Why don't you explore it?
    |
    */

    use AuthenticatesAndRegistersUsers;

    /**
     * Create a new authentication controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest', ['except' => 'getLogout']);
    }

    /**
     * Get a validator for an incoming registration request.
     *
     * @param  array  $data
     * @return \Illuminate\Contracts\Validation\Validator
     */
    protected function validator(array $data)
    {
        return Validator::make($data,  [
            'name'=>'required|regex:/^\w+$/',
            'password'=>'required|confirmed|regex:/^\w{6,10}$/',
            'mobile'=>'required|regex:/^1[34758]\d{9}$/',
            'email'=>'required|regex:/^(\w)+(\.\w+)*@(\w)+((\.\w+)+)$/',
            'age'=>'required',
            'address'=>'required',
            'realname'=>'required',
            'goodat'=>'required',
            'idnum'=>'required',
            'intro'=>'required',
        ],
        [
        'name.required'=>'请填写您的用户名',
        'name.regex'=>'您的用户名不合要求',
        'password.required'=>'请填写您的密码',
        'password.confirmed'=>'您两次输入的密码不一样',
        'password.regex'=>'您的密码不合要求',
        'mobile.required'=>'请填写您的联系电话',
        'mobile.regex'=>'请填写正确的联系电话',
        'email.required'=>'请填写您的邮箱地址',
        'email.regex'=>'您的邮箱格式不正确',
        'age.required'=>'请填写您的年龄',
        'address.required'=>'请填写您的住址',
        'realname.required'=>'请填写您的姓名',
        'goodat.required'=>'请填写您的学科',
        'idnum.required'=>'请填写您的身份证号',
        'intro.required'=>'请填写您的个人简介',
      ]);
        if($validate->fails()){
            return redirect('auth/register')->withErrors($validate)->withInput();
        }
    }

    protected $username = 'name';
    protected $redirectPath = '/ucenter';
    /**
     * Create a new user instance after a valid registration.
     *
     * @param  array  $data
     * @return User
     */
    protected function create(array $data)
    {
        return User::create([
            'name' => $data['name'],//用户名
            'email' => $data['email'],//邮箱
            'password' => bcrypt($data['password']),
            'mobile' => $data['mobile'],//电话
            'role' => $data['role'],//您是老师
            'gender' => $data['gender'],//性别
            'age' => $data['age'],//年龄
            'address' => $data['address'],//住址
            'edu' => $data['edu'],//教育程度
            'realname'=>$data['realname'],//姓名
            'goodat' => $data['goodat'],//擅长学科
            'idnum' => $data['idnum'],//身份证
            'intro' => $data['intro'],//自我介绍
            'regtime'=>time(),//注册时间
        ]);
    }
}
