<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Project;
use DB;
use Auth;
use App\Bid;
use Validator;

class ProController extends Controller{

  protected $middleware =['App\Http\Middleware\Authenticate'=>[]];
  public function getJie(){
    return view('woyaojiekuan');
  }

   public function postJie(Request $req){
      #手动验证
      $validate=Validator::make($req->all(),//三参数 ①$req->all(),②验证规则,③错误返回值
        [
        'age'=>'required|in:15,40,80',
        'money'=>'required|regex:/[1-9]\d{0,9}/',
        'mobile'=>'required|regex:/^1[3,5,7,8]\d{9}$/',
        //'verify'=>"required|same:$req->session()->get('smscode')",

        ],

        [
        'age.required'=>'年龄必须填写',
        'age.in'=>'请选择年龄',
        'money.required'=>'金额必须要填写',
        'money.regex'=>'金额必须是1--10位数,且不能为0',
        'mobile.required'=>'手机号必须填写',
        'mobile.regex'=>'请输入正确的手机号',
        //'verify.same'=>'请不要做违法的事',
        //'verify.required'=>'手机验证码必须填写',

        ]);

        if($validate->fails()){
          return back()->withErrors($validate)->withInput();
        }

        #自动验证
    /*
    $this->validate($req,//三参数 ①$req,②验证规则,③错误返回值 关于自动验证的个性版和通用版优劣,见PDF
      [
        'age'=>'required|in:15,40,80',
        'money'=>'required|digits_between:1,9',
        'mobile'=>'required|regex:/^1[3,5,7,8]\d{9}$/',
      ],
     默认版错误信息
      Illuminate\Support\ViewErrorBag Object
(
    [bags:protected] => Array
        (
            [default] => Illuminate\Support\MessageBag Object
                (
                    [messages:protected] => Array
                        (
                            [age] => Array
                                (
                                    [0] => The selected age is invalid.
                                )
                            [money] => Array
                                (
                                    [0] => The money field is required.
                                )
                            [mobile] => Array
                                (
                                    [0] => The mobile field is required.
                                )
                        )
                    [format:protected] => :message
                )
        )
)
      自定义通用版错误信息
      Illuminate\Support\ViewErrorBag Object
(
    [bags:protected] => Array
        (
            [default] => Illuminate\Support\MessageBag Object
                (
                    [messages:protected] => Array
                        (
                            [age] => Array
                                (
                                    [0] => age 必须是15, 40, 80之一
                                )

                            [money] => Array
                                (
                                    [0] => money 必须填写
                                )

                            [mobile] => Array
                                (
                                    [0] => mobile 必须填写
                                )

                        )

                    [format:protected] => :message
                )

        )
)
    
     自定义通用版
      [
         'required'=>':attribute 必须填写',
         'in'=>':attribute 必须是:values之一',
         'regex'=>'attribute 不符合要求'   
       ]
       
       #自定义个性精准版
       [
          'age.required'=>':年龄必须填写',
         'money.required'=>'金额必须填写',
         'mobile.required'=>'手机必须填写',
          'in'=>':attribute 必须是:values之一',
          'regex'=>'attribute 不符合要求'
       ]         
      );
      */
   
    //入库projects表
    $pro = new Project(); //
    $user =$req->user();
    $pro->money = intval($req->money)*100;//借款金额 分单位
    $pro->mobile=$req->mobile; //手机号
    $pro->pubtime = time();
    $pro->uid = $user->uid;
    $pro->name = $user->name;
    $pro->save(); //入库,同时此时 $pro代表此行对象
    
    //入库atts表
    DB::table('atts')->insert(['pid'=>$pro->pid,'age'=>$req->age,'uid'=>$user->uid]);
    echo 'ok';
  }

  //项目列表
  public function prolist(){
    //$pro = new Project();
    $pros=Project::get();
    
   return view('prolist',['pros'=>$pros]);
  }

  //单个项目招标展示
  public function touzi($pid){

    $pro=Project::where('pid',$pid)->first();#等效$pro2=Project::find($pid);
    if(empty($pro)){
        return redirect('/');
    }
    return view('lijitouzi',['p'=>$pro]);
  }
  //单个投标生成支付
  public function payPost(Request $req){
      //将订单中的v_amount v_moneytype v_oid v_mid v_url key 变为大写
      $row =[];
      $row['v_amount'] = sprintf('%.2f',$req->money);
      $row['v_moneytype']='CNY';
      $row['v_oid'] =date('Ymd').rand(1000,9999);
      $row['v_mid'] =20272562;
      $row['v_url']='http://p2p.com/touzi/'.$req->pid;
      $row['key']='%()#QOKFDLS:1*&U';
      $row['v_md5info']=strtoupper(md5(implode('', $row)));
      return view('mypay',$row);
  }
  //单个投标提交
  public function touziP(Request $req,$pid){
    
    /*
    该参数的MD5字符串的顺序为：v_oid，v_pstatus，v_amount，v_moneytype，key
      "v_oid" => "201605058792"
      "v_pstatus" => "30"
    "v_pstring" => "支付完成"
    "v_pmode" => "工商银行"
    "v_md5str" => "939F5B27CE071315C0252954105BE3EF"
    "v_amount" => "7.00"
    "v_moneytype" => "CNY"
    "remark1" => ""
    "remark2" => ""
    */
    $k='%()#QOKFDLS:1*&U';
    $v_md5str=strtoupper(md5($req->v_oid.$req->v_pstatus.$req->v_amount.$req->v_moneytype.$k));
    if ($req->v_md5str!==$v_md5str) {
      return "签名错误!";
    }
    $pro =Project::find($pid);
    $use = Auth::user();
    $bid = new Bid();
    $rec=intval($req->v_amount)*100;
    if($rec<=($pro->money-$pro->receive)){ //判断投资是否合法
        $bid->money = $rec;
        $pro->increment('receive',$bid->money);//修改项目收到的金额
       
    }else{
        return '金额超额!';
    }
    
    $bid->uid =$use->uid;
    $bid->pid =$pid;
    $bid->title = $pro->title;
    $bid->pubtime =time();
    $bid->save();//保存投资人信息

   
    if($pro->money==$pro->receive){ //投资钱满时,触发touzidone函数
        $this->touzidone($pid);
        
    }    

    return redirect('/');
  }

  protected function touzidone($pid){
    
    #修改项目状态
    $pro = Project::find($pid);
    $pro->status=2;
    $pro->save();

    #为借款人生成每月还款记录 :应还款/月 = 每月利息+每月本金 单位:分
    $amount = $pro->money*$pro->rate/1200+$pro->money/$pro->hrange;
        $row = array();
        $row['uid'] =$pro->uid;
        $row['pid'] =$pro->pid;
        $row['title']=$pro->title;
        $row['amount'] =$amount;
        $row['status'] =0;
    for ($i=1; $i <=$pro->hrange ; $i++) { 
        $paydate=date('Y-m-d',strtotime("+{$i} months"));
        $row['paydate'] =$paydate;
        DB::table('hks')->insert($row);
    }

    //为投资人  预期收益,打款  #收益/日 = 每天利息 单位:分
   
    $bid = new Bid();
    $bids=$bid->where('pid',$pid)->get();
    $period = date('Y-m-d',strtotime("+{$pro->hrange} months"));//项目还款截止日
    
    $row = array();
    $row['pid'] =$pro->pid;
    $row['title']=$pro->title;
    $row['enddate'] = $period;
    foreach ($bids as $bid) {
        $row['uid'] =$bid->uid;
        $row['amount'] =$bid->money*$pro->rate/36500;
        DB::table('tasks')->insert($row);
    }

  }

  public function myzd(Request $req){
    $user=$req->user();
    //$hks=DB::table('hks')->where('uid',$user->uid)->get();
    $hks=DB::table('hks')->where('uid',$user->uid)->paginate(3);

    return view('myzd',['hks'=>$hks]);
  }

  public function mysy(Request $req){
    $user=$req->user();
    $grows=DB::table('grows')->where('uid',$user->uid)->get();
    return view('mysy',['grows'=>$grows]);
  }

  public function mytz(Request $req){
    $user=$req->user();
    $bids=Bid::where('bids.uid',$user->uid)->whereIn('Projects.status',[1,2])
    ->join('Projects','Projects.pid','=','Bids.pid')->get(['Bids.*','Projects.status']);
    return view('mytz',['bids'=>$bids]);
  }
}
