<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Admin;

class AdminController extends Controller
{
    public function admin(){
        return view('/admin');
    }

    public function adminPost(Request $req){
    	//先判断提交过来的数据是否正确
    	

    	//成功后 直接跳转到后台用户审核页面
    	return view('admin/managecenter');
    }

    public function managecenter(){
        return view('admin/managecenter');
    }
    
}
