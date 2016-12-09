<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Pro;
use DB;
use Gregwar\Captcha\CaptchaBuilder;

class IndexController extends Controller
{
    public function index(){
        $pros = Pro::where('status',1)->take(3)->get();
        return view('index', ['pros'=>$pros]);
    }

    public function center(){
        return view('center');
    }

    public function _list(){
        $pros = Pro::where('status',1)->get();
        return view('list',['pros'=>$pros]);
    }

    public function myzd(Request $req){
    	$zds = DB::table('hks')->where('uid', $req->user()->uid)->paginate(3);
    	return view('myzd', ['zds'=>$zds,'i'=>0]);
    }

    public function mytz(Request $req){
    	$tzs = DB::table('bids')->where('bids.uid', $req->user()->uid)->join('projects','bids.pid','=','projects.pid')->get();
        // dd($tzs);
    	return view('mytz', ['tzs'=>$tzs,'i'=>0]);
    }

    public function mysy(Request $req){
    	$sys = DB::table('grows')->where('uid', $req->user()->uid)->get();
    	return view('mysy', ['sys'=>$sys,'i'=>0]);
    }

    public function sms(Request $request, $mob){
        //引入自动加载文件
        require(base_path().'/Vendor/alidayu/TopSdk.php');

        $appkey = '23354603删除我';
        $secret = '195a50da72c24eb71eb097d653fddc62';
        $rand = mt_rand(100000,999999);

        $c = new \TopClient();
        $c->appkey = $appkey;
        $c->secretKey = $secret;
        $req = new \AlibabaAliqinFcSmsNumSendRequest();
        $req->setExtend($mob);
        $req->setSmsType("normal");
        $req->setSmsFreeSignName("注册验证");
        $req->setSmsParam("{\"code\":\"$rand\",\"product\":\"点点贷\"}");
        $req->setRecNum($mob);
        $req->setSmsTemplateCode("SMS_8330290");

        // var_dump($req);
        $resp = $c->execute($req);
        // var_dump($resp->result->success);
        // return "alert('验证码发送失败，请稍后再试！');";
        if($resp->result->success == true){
            $request->session()->put('fucode', $rand);
            return 1;
        } else {
            echo "alert('验证码发送失败，请稍后再试！')";
        }
    }

    public function checkfucode(Request $req){
        $_code = $req->session()->get('fucode');
        // var_dump($_code);
        if($_code == $req->fucode){
            return 1;
        } else {
            return 0;
        }
    }

    public function imgcode(Request $req){
        $builder = new CaptchaBuilder;
        $builder->build();
        $req->session()->put('phrase',$builder->getPhrase());
        return $builder->output();
    }
}
