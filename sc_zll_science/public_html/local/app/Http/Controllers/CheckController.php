<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\User;
use App\Http\Controllers\VerifyController;
use App\Order;
use App\Example;

class CheckController extends Controller
{

    //查出所有未审核的注册用户，也就是  checkinfo 字段为0的用户
    public function checklist(){
       $users= User::where('checkinfo',0)->where('role', 1)->orderBy('regtime','desc')->get();   //判断审核状态为未审核 并且是老师
        return view('admin/checklist',['users'=>$users]);

    }

    //进入单用户审核页面  查看待审核用户的详细信息  进行审核
    public function checkinfo($uid){
        $user=User::where('uid',$uid)->first();

        return view('admin/checkinfo',['user'=>$user]);
    }

    //提交审核信息
    public function checkinfoPost(Request $req,$uid){
  $user =  User::find($uid);
  $user->checkinfo=$req->checkinfo;
  $user->save();
      
       
  //发送邮件激活，而不是去审核通过，此处不能用中间件！！！
        if ($req->checkinfo==1) {
            //审核通过的时候  发送邮件
            $send=new VerifyController();

            $send->sendEmail($req->realname,$req->email);       
        }
       // if ($req->checkinfo==2) {
        //     审核拒绝
        // }
        return redirect('/checklist');
    }
    //全部订单  什么状态的都有
    public function  allorder(){
        $allorders=Order::orderBy('pubtime','desc')->get();
        return view('admin/allorder',['allorders'=>$allorders]);
    }


    //订单列表    审核学生提交上来的所有的订单列表  状态为未审核的
    public function orderlist(){
        $orders=Order::where('checkstate',0)->orderBy('pubtime','desc')->get();    //订单状态 0 为未审核   1 已审核  2 审核拒绝
        return view('admin/orderlist',['orders'=>$orders]);
    }
//   进入订单详情列表   
    public function checkorder($oid){
        $order=Order::where('oid',$oid)->first();
        return view('/admin/orderinfo',['order'=>$order]);
    }


    //提交审核信息
    public function checkorderPost(Request $req,$oid){
        $order= Order::find($oid);
        //修改提交过来的信息 状态修改   0 为未审核   1 已审核  2 审核拒绝
        $order->checkstate=$req->checkstate;
        $order->save();
        return redirect('/orderlist');

    }
    //后台需要生成一个状态支付完成即  已经进入预定状态的全部订单列表
    public function resorder(){      //reservedorder 已经进入已经进入预约状态的订单
        $res=Order::whereIn('status',[1,2])->orderBy('pubtime','desc')->get();
        return view('admin/resorder',['res'=>$res]);

    }
    //修改状态
    public function changeorder($oid){
            $change=Order::where('oid',$oid)->first();
        return view('admin/changeorder' ,['change'=>$change] );
    }
 //进入订单修改页面  此时订单状态值只能选择 2  3   在页面中注意
    public function changeorderPost(Request $req,$oid){
        $order = Order::find($oid);
        $order->status=$req->status;
        $order->save();
        //当订单状态为3时， 也就是已经结束  需要在example 表加入成功案例 数据
        if ($req->status==3) {
          $orders=Order::where('status',3)->orderBy('pubtime','desc')->get();   //从order表取出相关信息  存入example表
       
        $row=array();
        foreach ($orders as $order) {
            $row['sid']=$order->sid;
            $row['tid']=$order->tid;
            $row['subject']=$order->subject;
            $row['pubtime']=time();
            Example::insert($row);
        }
        }
        return redirect('resorder');


    }


    //录入信息  对成案例的评价

   //成功案例 取0出所有成功案例  即状态为 授课结束    status=3    是未预定 1已预定 2授课中 3,已结束
    public function examplelist(){
        $exams=Example::orderBy('pubtime','desc')->get();    //取出所有成功案例到模版  后台
        
        return  view('/admin/example',['exams'=>$exams]);
    }

    //增加第三方平台的评价
    public function addcom($eid){
        $add= Example::where('eid',$eid)->first();
        return view('admin/addcom',['add'=>$add]);
    }

    //提交到example 表
    public function addcomPost(Request $req,$eid){
        $add=Example::find($eid);
        $add->comment=$req->comment;
        $add->save();
        return redirect('/example');
    }


    //前台成功案例展示页面

    public function example(){
        $examples =Example::where('comment','!=','')->orderBy('pubtime','desc')->get();  //取出有评论的成功案例

        return view('/examplelist',['examples'=>$examples]);
        
    }



    //取出每个老师名下的所有成功订单
    public function texam($tid){
        $exams=Order::where('tid',$tid)->where('status',3)->orderBy('pubtime','desc')->get();   //取出所有的跟这个老师有关 并且授课已经结束的案例
        return view('/admin/teacherexample',['exams'=>$exams]);
    }


    //取出每个学生名下所有成功的订单
    public function sexams($sid){
           $exams=Order::where('sid',$sid)->where('status',3)->orderBy('pubtime','desc')->get();   //取出所有的跟这个学生有关 并且授课已经结束的案例
        return view('/admin/studentexample',['exams'=>$exams]);
    }



    //取出所有用户
    public function  allusers(){
        $allusers =User::orderBy('regtime','desc')->get();
        return view('admin/alluser', ['allusers'=>$allusers]);
    }
}
