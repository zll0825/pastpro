<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Order;
use App\User;

class PayController extends Controller
{
    /**
    *@param 订单确认页面,加密数据输出到隐藏域准备提交第三方支付
    *
    */
    public function pays(Request $req)
    {   
        // $user               $req->user();
        // if($user->checkinfo !== 1){
        //     echo '<script> alert("您的信息尚未审核,请审核后再下单"); </script>';
        //     return '<script> window.location.href="http://scjj.com" ; </script>';
        // }


        $p                  =   $_POST;
        $onum               =   $p['onum'];
        $rs                 =   Order::where('onum',$onum)->first();
        $stype              =   $rs->style;//学生类型
        $v_amount           =   $stype * 100;//购买金额

        $row['v_amount']    =   $v_amount;//金额
        $row['v_moneytype'] =   'CNY';//币种
        $row['v_oid']       =   $onum;//订单号
        $row['v_mid']       =   '20272562';//商户号
        $row['v_url']       =   'http://www.scjj1.com/paycheck';//回调网址,确定已经成功支付
        $row['key']         =   env('PAY_KEY');//密钥
        $row['v_md5info']   =   strtoupper(md5(implode('', $row)));
        return view('pay/confirm',['row'=>$row,'mon'=>$v_amount]);
    }


    /**
    *@param 翻译功能页面
    *
    */
    public function translate()
    {
        return view('pay/translate');
    }


    /**
    *@param 模拟第三方支付服务器(十八哥课件提供)
    *
    */
    public function payzf()
    {
        $merchant = array(
        '1009001'=>'#(%#WU)(UFGDKJGNDFG',
        '1009002'=>'DJFKklslkdf%78ew9@@@@',
        '1009003'=>'!@cd76dsaf%^&#$(12255',
        '1009004'=>'48905ldc%^&(*slslUT',
        '1009005'=>'12#*&dklsK*&LKFDKLSF',
        '20272562'=>'%()#QOKFDLS:1*&U',
        );
        
        
        // 检查商户号
        $v_mid = $_POST['v_mid'];
        if(!array_key_exists($v_mid,$merchant)) 
        {
            die("商户号有误");
        }
        
        // 检查订单号
        $v_oid = $_POST['v_oid'];
        if(empty($v_oid))
        {
            die("订单号不能为空");
        }
        
        // 检查金额
        if(($v_amount = $_POST['v_amount']) < 0.01)
        {
            die("金额不正确");
        }
        
        // 检查币种
        $v_moneytype = $_POST['v_moneytype'];
        if(empty($v_moneytype))
        {
            die("没设置币种");
        }
        
        // 检查返回地址
        $v_url = $_POST['v_url'];
        $prot = substr($v_url,0,6);
        if($prot!='http:/'&&$prot!='https:')
        {
            die('返回地址不正确');
        }
        
        // 获取用户传来的MD5校验码
        $v_md5info = $_POST['v_md5info'];
        
        
        
        // 计算订单的MD5检验码
        $key = $merchant[$v_mid];
        $real_md5info = strtoupper(md5($v_amount.$v_moneytype.$v_oid.$v_mid.$v_url.$key));
        
        
        if($v_md5info!=$real_md5info)
        {
            die('检验码错误');
        }
        
        
        // 20 为成功,30为支付失败,这里有1/10的概率模拟失败的情况
        $v_pstatus = rand(0,9) <=8 ? 20 :30;
        
        // 给客户生成md5供检验这确实是网银过来的信息
        $p_md5info = strtoupper(md5($v_oid.$v_pstatus.$v_amount.$v_moneytype.$key));
        $payed = array(
            'v_oid'     =>  $v_oid,
            'v_pstatus' =>  $v_pstatus,
            'v_pstring' =>  '支付完成',
            'v_pmode'   =>  '工商银行',
            'v_md5str'  =>  $p_md5info,
            'v_amount'  =>  $v_amount,
            'v_moneytype'=> $v_moneytype,
            'remark1'   =>  '',
            'remark2'   =>  ''
        );

        return view('pay/payok',['payed'=>$payed,'v_url'=>$v_url]);
    }


    /**
    *@param 支付回调确认订单
    *
    */
    public function checkpay (Request $req)
    {
        $v_amount       =   $req->v_amount;
        $v_pstatus      =   $req->v_pstatus;
        $v_moneytype    =   $req->v_moneytype;
        $v_oid          =   $req->v_oid;
        $v_mid          =   '20272562';
        $v_url          =   'http://www.scjj1.com/paycheck';
        $key            =   env('PAY_KEY');
        $v_md5str       =   $req->v_md5str;
        $password       =   strtoupper(md5($v_oid.$v_pstatus.$v_amount.$v_moneytype.$key));     
        if($password    ==    $v_md5str){
            $rs         =   Order::where('onum',$v_oid)->first();
            $tid        =   $req->user()->uid;//此处需要用户登录后做最后测试
            $rs->status =    1;//支付成功支付状态修改为1
            $rs->tid    =   $tid;
            if($rs->save()){
                return redirect('/ucenter');
            }
        }
    }



    /**
    *@param 百度翻译接口
    *
    */
    public function fy($cont='hello word',$language='en'){
        if($language == 'en'){
            $target =   'zh';
        }elseif($language == 'zh'){
            $target =   'en';
        }elseif($language == 'zht'){
            $language = 'zh';
            $target   = 'jp';
        }

        $salt   =   rand(10000,99999);
        $secKey =   'zCKmN9LzGwKo8CHT38fo';
        $appid  =   '20160510000020608';
        $str    =   $appid . $cont . $salt . $secKey;
        $md     =   md5($str);
        $url    =   'http://api.fanyi.baidu.com/api/trans/vip/translate?q='.$cont.'&from='.$language.'&to='.$target.'&appid=20160510000020608&salt='.$salt.'&sign='.$md;
        $rs     =   file_get_contents($url);
        return (json_decode($rs)->trans_result[0]->dst);
    }

}
