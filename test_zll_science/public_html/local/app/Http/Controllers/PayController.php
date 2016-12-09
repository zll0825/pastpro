<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class PayController extends Controller
{
    public function pay(Request $req,$pid){

        //将订单中的v_amount v_moneytype v_oid v_mid v_url key 变为大写
        $row=[];
        $row['v_amount']=0.01;
        $row['v_moneytype']='CNY';
        $row['v_oid']='20160505';
        $row['v_mid']='20272562';
        $row['v_url']='http://p2p.com/paycheck/'.$pid;
        $row['key']='%()#QOKFDLS:1*&U';
        $row['v_md5info']=strtoupper(md5(implode('',$row)));
        $row['pid']=$pid;
        //$row['v_md5info']=strtoupper((md5($row['v_amount'].$row['v_moneytype'].$row['v_oid'].$row['v_mid'].$row['v_url'].$row['key'])));
        
        return view('mypay',$row);
    }

    public function PayCheck(Request $req,$pid){
    /*
    该参数的MD5字符串的顺序为：v_oid，v_pstatus，v_amount，v_moneytype，key
    */
    /*
        array:9 [▼
  "v_oid" => "20160505"
  "v_pstatus" => "20"
  "v_pstring" => "支付完成"
  "v_pmode" => "工商银行"
  "v_md5str" => "5538FC9E2597C6038BE1FA439629837D"
  "v_amount" => "0.01"
  "v_moneytype" => "CNY"
  "remark1" => ""
  "remark2" => ""
  ]
  */

        //dd($_POST);
        $req->key='%()#QOKFDLS:1*&U';
        $v_md5str=strtoupper(md5($req->v_oid.$req->v_pstatus.$req->v_amount.$req->v_moneytype.$req->key));
        if (!$v_md5str==$req->v_md5str) {
            echo "签名错误";
        }else{
             echo '验证通过,付款成功!';
        }
    }
}
 