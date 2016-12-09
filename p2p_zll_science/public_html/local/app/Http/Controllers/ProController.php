<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
// use App\Http\Controllers\Auth\AuthController;
use App\Pro;
use App\Att;
use App\Bid;
use DB;
use Auth;
use Validator;

class ProController extends Controller
{
    public function getloan(){
        return view('loan');
    }

    public function postloan(Request $req){
        //  用 Validator::make( 数据 , 规则 , 错误提示 );
        $validate = Validator::make($req->all() ,
            [
            'age'=>'required|in:15,40,80',
            'money'=>'required|digits_between:2,7',
            'mobile'=>'required|regex:/^1[3458]\d{9}$/',
            ],
            [
            'money.required'=>'money 必须写 ',
            'money.digits_between'=>' 填的啥玩意儿 ?',
            'in'=>':attribute  必须是 :values  之一 ',
            'regex'=>':attribute  不合要求 '
            ]
        );
        // ->fails() 负责判断 , 是否失败
        if( $validate->fails() ) {
            //  回退到上一页 , 且携带出错数据 , 和上次表单中的旧数据
            return back()->withErrors($validate)->withInput();
        }

        $pro = new Pro();
        $att = new Att();
        $user = $req->user();
        // dd($user->uid);  $user为用户对象 

        $pro->uid = $user->uid;
        $pro->age = $req->age;
        $pro->name = $user->name;
        $pro->money = $req->money*100;
        $pro->mobile = $req->mobile;
        $pro->pubtime = time();
        $pro->save();//现在$pro指的就是插入的那一行

        $att->uid = $user->uid;
        $att->pid = $pro->pid;
        $att->save();

        return redirect('/prolist');
    }

    public function gettouzi($id){
        $pro = Pro::where('pid', $id)->first();
        return view('touzi', ['pro'=>$pro]);
    }

    public function posttouzi(Request $req, $id){
        // dd($req);
        $bid = new Bid;
        $pro = Pro::where('pid', $id)->first();
        $user = $req->user();

        $bid->uid = $user->uid;
        $bid->pid = $id;
        $bid->title = $pro->title;
        $bid->money = $req->v_amount*100;
        $bid->pubtime = time();
        $bid->save();

        $pro->increment('receive', $bid->money);

        //如果满标了
        if($pro->receive == $pro->money){
            $this->touzidone($pro);
        }

        return redirect('/');
    }

    public function touzidone($pro){
        $pro->status = 2;
        $pro->save();

        //生成还款表，插入N条还款记录
        $data = [
            'uid'=>Auth::user()->uid,
            'pid'=>$pro->pid,
            'title'=>$pro->title,
            'amount'=>$pro->money*(1 + $pro->rate/1200*$pro->hrange)/$pro->hrange,
            'status'=>0
        ];
        for($i=1;$i<=$pro->hrange;$i++){
            $data['paydate']=date('Y-m-d', strtotime("+ $i months"));
            DB::table('hks')->insert($data);
        }

        $enddate = date('Y-m-d', strtotime("+ {$pro->hrange} months"));
        unset($data['paydate']);
        unset($data['status']);
        $data['enddate'] = $enddate;
        $bids = DB::table('bids')->where('pid', $pro->pid)->get();
        foreach($bids as $b){
            $data['uid'] = $b->uid;
            $data['amount'] = $b->money*$pro->rate/36500;
            DB::table('tasks')->insert($data);
        }
    }

    public function pay(Request $request, $id){
        // dd($request);
        $pro = Pro::find($id);
        $info = [
            'ddzje'=> $request->money,
            'bz'=> 'CNY',
            'ddbh'=> date('Ymd').mt_rand(1000,9999),
            'shbh'=> '20272562',
            'url'=> 'http://ddd.com/touzi/'.$id,
            'key'=> '%()#QOKFDLS:1*&U'
        ];
            $md5 = strtoupper(md5(implode('', $info)));
        $info['md5'] = $md5;
        return view('pay',['pro'=>$pro, 'info'=>$info]);
    }
}
