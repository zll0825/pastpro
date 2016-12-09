<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Project;
use App\Att;

class CheckController extends Controller
{
   public function getCheck($pid){
    //$pro = DB::table('project')->find('$pid'); 用DB的方法调用不行,因为DB::table('project') 并不知道已经更改primarykey,
    //必须通过model调用来实现,
    $pro= project::find($pid);
    
    return view('shenhe',['pro'=>$pro]);
  }
  public function postCheck(Request $req,$pid){
    $pro = project::find($pid);
    $pro->title=$req->title;
    $pro->rate=$req->rate;
    $pro->hrange = $req->hrange;
    $pro->status =$req->status;

    $att = Att::where('pid',$pid)->first();#不能find方法:默认找主键$att =Att::find(9);
    $att->realname =$req->realname;
    $att->age = $req->age;
    $att->gender = $req->gender;
    $att->udesc = $req->udesc;

    if($pro->save()&&$att->save()){
        return redirect('prolist');
    }else{
        return 'error';
    }
  }
}
