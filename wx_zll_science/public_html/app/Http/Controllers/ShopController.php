<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Input;
use Cart;
use App\User;
use App\Order;
use App\Item;
use App\Fee;
use Overtrue\Wechat\Payment;
use Overtrue\Wechat\Payment\Order as WxOrder;
use Overtrue\Wechat\Payment\Business;
use Overtrue\Wechat\Payment\UnifiedOrder;

class ShopController extends Controller
{
    public $user = null;

    public function __construct(Request $req){
        $wxuser = $req->session()->get('user');
        if($wxuser){
            $openid = $wxuser['openid'];
            $this->user = User::where('openid' , $openid)->first();
        }
    }

    public $goods = [
        ['gid'=>1, 'gname'=>'红色毛衣', 'gprice'=>'0.01'],
        ['gid'=>2, 'gname'=>'橙色毛衣', 'gprice'=>'23.3'],
        ['gid'=>3, 'gname'=>'黄色皮衣', 'gprice'=>'33.3'],
        ['gid'=>4, 'gname'=>'绿色皮衣', 'gprice'=>'43.3'],
        ['gid'=>5, 'gname'=>'青色大衣', 'gprice'=>'53.3'],
        ['gid'=>6, 'gname'=>'蓝色大衣', 'gprice'=>'63.3'],
        ['gid'=>7, 'gname'=>'紫色夹克', 'gprice'=>'73.3'],
        ['gid'=>8, 'gname'=>'黑色夹克', 'gprice'=>'83.3'],
    ];

    public function index(){
    	return view('shop.index',['items'=>$this->goods]);
    }

    public function goods($gid){
        $item = $this->goods[$gid-1];
    	return view('shop.goods',$item);
    }

    public function assort(){
    	return view('shop.list',['items'=>$this->goods]);
    }

    public function cart(Request $req){
        if( !$req->session()->has('user') ) {
            return redirect('login');
        }
        $goods = Cart::getContent();
        $total = sprintf('%.2f',Cart::getTotal());
        $amount = Cart::getTotalQuantity();
        return view('shop.cart' , ['goods'=>$goods , 'total'=>$total, 'amount'=>$amount]);
    }

    public function addcart(){
        $gid = Input::get('gid');
        $item = $this->goods[$gid-1];
        Cart::add(array(
            'id' => $item['gid'],
            'name' => $item['gname'],
            'price' => $item['gprice'],
            'quantity' => 1
        ));
        return redirect('/cart');
    }

    public function delcart($gid){
        Cart::remove($gid);
        return 1;
    }

    public function deccart($gid){
        Cart::update($gid, array('quantity' => -1));
        return 1;
    }

    public function inccart($gid){
        Cart::update($gid, array('quantity' => 1));
        return 1;
    }

    public function input(){
        $input = Input::except('_token');
        Cart::update($input['gid'], array('quantity' => array('relative' => false,'value' => $input['num'])));
        return 1;
    }

    public function buy(){
        // dd(Input::all());
        $gid = Input::except('_token','gnum')['gid'];
        $goods = [];
        $total = 0;
        $amount = 0;
        foreach($gid as $g){
            $row = Cart::get($g);
            $goods[] = $row;
            $total += Cart::get($g)->getPriceSum();
            $amount += Cart::get($g)->quantity;
        }
        $total = sprintf('%.2f',$total);
        $amount = Cart::getTotalQuantity();
        return view('shop.buy' , ['goods'=>$goods , 'total'=>$total, 'amount'=>$amount]);
    }


    public function done(Request $req){
        $input = Input::except('_token','gid');

        $items = [];
        $total = 0;
        foreach(Input::get('gid') as $g){
            $row = Cart::get($g);
            $items[] = $row;
            $total += Cart::get($g)->getPriceSum();
        }
        $openid = $req->session()->get('user')['openid'];
        $user = User::where('openid' , $openid)->first();

        $input['ordsn'] = date('Ymd').mt_rand(100000,999999);
        $input['uid'] = $user->uid;
        $input['openid'] = $user->openid;
        $input['money'] = $total;
        $input['ordtime'] = time();
        $oid = Order::insertGetId($input);

        foreach($items as $i){
            $item = new Item();
            $item->oid = $oid;
            $item->gid = $i->id;
            $item->gname = $i->name;
            $item->price = $i->price;
            $item->amount = $i->quantity;
            $item->save();
            Cart::remove($i->id);
        }
        // return redirect('/cart');
        return view('shop.done' , ['total'=>$total,'ordsn'=>$input['ordsn'],'oid'=>$oid,'payconfig'=>$this->pay($oid)]);
    }

    public function pay($oid){

        $order = Order::find($oid);



        /**
         * 第 1 步：定义商户
         */
        $business = new Business(
            env('WX_ID'),
            env('WX_SEC'),
            env('MER_ID'),
            env('MER_SEC')
        );

        /**
         * 第 2 步：定义订单
         */
        $WxOrder = new WxOrder();
        $WxOrder->body = '测试订单';
        $WxOrder->out_trade_no = $order->ordsn;
        $WxOrder->total_fee = intval($order->money*100);    // 单位为 “分”, 字符串类型
        $WxOrder->openid = $order->openid;
        $WxOrder->notify_url = url('/payok');

        /**
         * 第 3 步：统一下单
         */
        $unifiedOrder = new UnifiedOrder($business, $WxOrder);

        /**
         * 第 4 步：生成支付配置文件
         */
        $payment = new Payment($unifiedOrder);

        return $payment->getConfig();
    }

    public function payok(Request $req){
        $order = Order::where('oid' , $req->oid)->first();
        //print_r($order);
        $order->ispay= 1;
        $order->save();

        //  分钱开始
        //  先找出当前用户的 openid
        $openid = $req->session()->get('user')['openid'];
        $user = User::where('openid' , $openid)->first();
        //print_r($user);
        //  找出当前用户的 p1,p2,p3
        $rate = [0.5,0.25,0.1];
        foreach([$user->p1, $user->p2, $user->p3] as $k=>$p ) {
            if($p > 0) {
                $fee = new Fee();
                $fee->uid = $p;
                $fee->oid= $order->oid;
                $fee->byid= $user->uid;
                $fee->money= $order->money * $rate[$k];
                $fee->save();
            }
        }

        return ' 购物成功 ';
    }

    public function ucenter(Request $req){
if( !$req->session()->has('user') ) {
            return redirect('login');
        }
        $user = $this->user;
if(!$user){
return redirect('/');

}
        $user = User::where('uid',$user->uid)->first();
        // dd($user);
        $money = Fee::where('uid',$user->uid)->sum('money');
        return view('shop.ucenter',['uid'=>$user->uid, 'name'=>$user->nick, 'money'=>$money]);
    }

    public function fcenter(){
        $user = $this->user;
        return view('shop.fcenter');
    }

    public function uorder($uid){
        $orders = Order::where('uid',$uid)->get();
        $data = [];
        foreach($orders as $o){
            $row['ordsn'] = $o->ordsn;
            $row['ordtime'] = $o->ordtime;
            $row['money'] = $o->money;
            $items = Item::where('oid', $o->oid)->get();
            foreach($items as $k=>$i){
                $row['items'][$k] = $i;
            }
            $data[] = $row;
        }
        // dd($data);
        return view('shop.ordlist',['data'=>$data]);
    }
}

        
        
        
        
        
        
        