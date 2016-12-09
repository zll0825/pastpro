<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Project;
use Auth;
use Gregwar\Captcha\CaptchaBuilder;

class IndexController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $pro = Project::where('status',1)->get();//将审核通过的放在首页
        //echo "1";
        return view('index',['pro'=>$pro]);
    }

    public function sm(Request $request,$mobile){
        include base_path()."/vendor/alidayu/TopSdk.php";
        date_default_timezone_set('Asia/Shanghai'); 

        $appkey='23354369';
        $secret='a40987bd3f1a47f98b5a26a504f839a9';
        $code = mt_rand(1000,9999);
        $webname="P2P网站";

        $request->session()->put('smscode',$code); //把随机码写入session


        $c = new \TopClient;
        $c->appkey = $appkey;
        $c->secretKey = $secret;
        $c->format = 'json';

        $req = new \AlibabaAliqinFcSmsNumSendRequest;
        $req->setExtend("123456");
        $req->setSmsType("normal");
        $req->setSmsFreeSignName("注册验证");
        $req->setSmsParam("{\"code\":\"$code\",\"product\":\"$webname\"}");
        $req->setRecNum("{$mobile}");
        $req->setSmsTemplateCode("SMS_8325227");
        print_r($c->execute($req));
        // echo ;
        //print_r($resp);
        /*
        签名:注册验证
        模板名称: 用户注册验证码
        模板ID: SMS_8325227
        *模板内容:验证码${code}，您正在注册成为${product}用户，感谢您的支持！
        */
    }

    public function checksm(Request $req){
        //return $req->session()->get('smscode')==$req['code'];
        //var_dump($req->session()->get('smscode'));
        //echo $req->session()->get('smscode'); //3271
       // return $req->session()->get('smscode')==$req['code']?1:0;

         echo $req->session()->get('smscode')==$req['code']?1:0;
    }

    public function test(){
        
        $builder = new CaptchaBuilder;
        $builder->build();
        //$builder->save('out.jpg');
        //return $builder->inline();
          //$builder;
        //echo "<img src='".$builder->inline()."''>";
        return $builder->output();
    }

    
}
