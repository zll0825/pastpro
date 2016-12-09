<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;
use PhpSpec\Listener\BootstrapListener;

class VerifyController extends Controller
{
    //发送短信的方法
    public function sendSms(Request $request,$mobile){
        require(base_path().'/vendor/alidayu/TopSdk.php');
        date_default_timezone_set('Asia/Shanghai');
        $rand = mt_rand(1000,9999);  //造好验证码
        $request->session()->put('smscode',$rand); //造好的验证码先放session里面

        $c = new \TopClient;
        $c->appkey = '23354405';//需要加引号
        $c->secretKey = '657b742817c3c61bc68aab9ba29a988a';
        $req = new \AlibabaAliqinFcSmsNumSendRequest;
        $req->setExtend("123456");//暂时不填
        $req->setSmsType("normal");//默认可用
        $req->setSmsFreeSignName("身份验证");//设置短信免费符号名(需在阿里认证中有记录的)
        $req->setSmsParam("{\"code\":\"{$rand}\",\"product\":\"尚才教育网\"}");//设置短信参数
        $req->setRecNum($mobile);//设置接受手机号
        $req->setSmsTemplateCode("SMS_8330258");//设置模板
        $resp = $c->execute($req);//执行
    }

  //验证短信的验证码的方法
    public function checkSms(Request $req){
        $smsfromsession = $req->session()->get('smscode');
        if($smsfromsession == $req->sms){
            return 1;
        }else{
            return 0;
        }

    }

    //发送邮件
    public function sendEmail($name,$email){

        $verifycode = md5(mt_rand(1000,9999).$email);//用随机数和邮箱合并   然后MD5
        
        $user = User::where('email',$email)->first();

        $user->verifycode = $verifycode;


        $url = 'http://sendcloud.sohu.com/webapi/mail.send_template.json';
        $vars = json_encode( array("to" => array($email),
                "sub" => array("%url%" => Array('http://scjj.com'.'/verifyemail/'.$verifycode),
                    "%name%" => Array($name)
                ),
            )
        );

        $API_USER = 'cwl2016_test_Tasvho';
        $API_KEY = '0aZOzUAc5Jdr0bmz';
        $param = array(
            'api_user' => $API_USER, # 使用api_user和api_key进行验证
            'api_key' => $API_KEY,
            'from' => 'kevin_bcti@163.com', # 发信人，用正确邮件地址替代
            'fromname' => '尚才教育网',
            'substitution_vars' => $vars,
            'template_invoke_name' => 'test_template_active',
            'subject' => '恭喜你通过审核!',
            'resp_email_id' => 'true'
        );

        $data = http_build_query($param);
        $options = array(
            'http' => array(
                'method' => 'POST',
                'header' => 'Content-Type: application/x-www-form-urlencoded',
                'content' => $data
            ));
        $context  = stream_context_create($options);
        $result = file_get_contents($url, FILE_TEXT, $context);

        return $result;

    }

    //验证邮箱
    public function checkemail($verifycodefromemail){
        $result = User::where('verifycode',$verifycodefromemail)->first();
        if(!empty($result)){
            return '恭喜你邮箱验证成功';
//            return view('emailcheckedok');
        }else{
            return '邮箱验证失败,sorry';
//            return view('emailcheckedfail');
        }

    }

    //测试页面
    public function test(){
       return  dd(session('smscode'));

    }



}
