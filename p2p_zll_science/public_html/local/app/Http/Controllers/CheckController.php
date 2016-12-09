<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Pro;
use App\Att;

class CheckController extends Controller
{
    public function getlist(){
        $pros = Pro::orderBy('pid','desc')->get();
        $data = ['pros'=>$pros];
        return view('prolist',$data);
    }

    public function getcheck($id){
        $pro = Pro::where('pid',$id)->first();
        return view('check',['pro'=>$pro]);
    }

    public function postcheck(Request $req, $id){
        $pro = Pro::where('pid', $id)->first();
        $pro->title = $req->title;
        $pro->rate = $req->rate;
        $pro->hrange = $req->hrange;
        $pro->status = $req->status;
        $pro->save();

        $att = Att::where('pid', $id)->first();
        $att->title = $req->title;
        $att->realname = $req->realname;
        $att->jobcity = $req->jobcity;
        $att->salary = $req->salary;
        $att->udesc = $req->udesc;
        $att->gender = $req->gender;
        $att->save();

        return redirect('prolist');
    }
}
