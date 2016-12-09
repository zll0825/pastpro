<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Model\User;
use DB;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Crypt;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Validator;

class IndexController extends Controller
{
    public function index(){
    	$pdo = DB::connection()->getPdo();
    	return view('admin/index');
    }

    public function info(){
    	return view('admin/info');
    }

    //更改超级管理员密码
    public function pass(){
    	if(!$input = Input::all()){
    		return view('admin.pass');
    	} else {
            $user = \App\Model\User::first();
            // dd($user);
            // dd($input);
            if($input['password_o'] != decrypt($user->password)){
                return back()->with('msg','密码错误');
            }

            $rules = [
                'password'=>'required|between:5,20|confirmed'
            ];

            $message = [
                'password.required'=>'新密码不能为空！',
                'password.between'=>'新密码必须在5-20位之间！',
                'password.confirmed'=>'新密码和确认密码不一致'
            ];

            $validator = Validator::make($input, $rules, $message);
            if($validator->passes()){
                $user->password = encrypt($input['password']);
                $user->update();
                return redirect('admin/info');
            } else {
                dd($validator->errors());
            }
    	}
    }
}
