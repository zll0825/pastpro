<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use Validate;
use App\Order;
use App\User;
use App\Example;


class IndexController extends Controller
{
     public function index(Request $req){      //访问 index 展示index主页         
        $order=Order::where('checkstate','=',1)->join('users','sid','=','uid')->orderBy('pubtime','desc')->take('12')->get(['onum','gender','subject','requirement','order.address','pubtime','checkstate','status']);
        $order->gender=$req->gender;
        $teacher=User::where('checkinfo',1)->orderBy('regtime','desc')->take('12')->get();        
        return view('index',['order'=>$order,'teacher'=>$teacher]);
    }


    public function teacher(){                //教师页面 展示教师信息列表
        $teacher=User::where('checkinfo',1)->orderBy('uid','desc')->paginate(20);     
        return view('teacher',['teacher'=>$teacher]);
    }

    public function tinfo($uid){              //教师详细信息
        $user=User::find([$uid]);
        $order=Order::join('users','tid','=','uid')->orderBy('pubtime','desc')->get();        
        return view('teacherinfo',['user'=>$user,'order'=>$order]);
    }
    
    
    public function fee(){                   //收费标准页面 展示一些信息        
        return view('fee');
    }

    public function student(){               //学生页面 展示学生信息列表
        $user=User::get();//dd($user);       
        $stu=Order::where('checkstate','=',1)->join('users','sid','=','uid')->orderBy('pubtime','desc')->paginate(20);
        return view('student',['stu'=>$stu]);
    }

    public function issue(){                 //学生发布页面 
        return view('issue');
    }

    public function postIssue(Request $req){    //学生发布需求提交 post
         //判断申请需求表单提内容
         $this->validate($req,[
            'customername'=>'required',
            'customermobile'=>'required|regex:/^1[3578]\d{9}$/',
            'address'=>'required|between:1,30',
            'style'=>'required',
            'subject'=>'required',
            'requirement'=>'required',
            ],
            [
            'customername.required'=>'名字不能为空',
            'customermobile.required'=>'号码不能为空',
            'customermobile.regex'=>'格式异常',
            'address.required'=>'地址不能为空',
            'address.between'=>'格式为不超过30',
            'style.required'=>'请选择年级',
            'subject.required'=>'科目不能为空',
            'requirement.required'=>'请简述需求',

            ]
            );

         //获取表单内容插入order表
         $ord=new Order();
         /*dd($req);*/
         $ord->sid=$req->user()->uid;
         $ord->onum=mt_rand(100000,999999);         
         $ord->customername=$req->customername;
         $ord->customermobile=$req->customermobile; 
         $ord->style=$req->style;
         $ord->subject=$req->subject;
         $ord->requirement=$req->requirement;
         $ord->address=$req->address;
         $ord->pubtime=time();
         $ord->payment=$req->style * 100;  
         $ord->save();
        return redirect('/');
    }
}
