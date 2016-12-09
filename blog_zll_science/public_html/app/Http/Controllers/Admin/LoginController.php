<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

require('resources/org/code/Code.class.php');
class LoginController extends Controller
{
    public function login(Request $req){
    	if($req->code){
    		$_code = new \code();
    		$_code = $_code->get();
    		if(strtoupper($req->code) != $_code){
    			return back()->with('msg','验证码错误');
    		}
            $user = new \App\Model\User();
            $user = $user->first();
            if($req->username != $user->username || $req->password != decrypt($user->password)){
                return back()->with('msg','用户名密码错误');
            }

            session(['user'=>$user]);
    		return redirect('admin/index');
    	} else {
            if($req->_token){
                return back()->with('msg', '请填写验证码');
            }
    		return view('admin/login')->with('msg', '0');
    	}
    }

    //添加了一个admin管理员
    // public function add(Request $req){
    //     $user = new \App\Model\UserModel();
    //     $user->username = $req->name;
    //     $user->password = encrypt($req->password);
    //     $user->save();
    // }

    public function code(){
    	$code = new \Code();
    	$code->make();
    }

    public function logout(){
        // dd(Session::get('user'));
        session(['user'=>null]);
        return redirect('/admin/login');
    }
}
