<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use Overtrue\Wechat\Auth;

class UserController extends Controller
{
    public function login(Request $req){
        $user = $req->session()->get('user');
        if($user){
            return redirect('/');
        }
        $auth = new Auth( env('WX_ID') ,env('WX_SEC') );

        $to = null;
        //$to = "http://lng0zstsfi.proxy.qqbrowser.cc/login";
        $user = $auth->authorize($to);
        $req->session()->put('user',$user->all());

        return back();
    }
}

        
        