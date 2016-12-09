<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml"><head>
<meta http-equiv="content-type" content="text/html; charset=UTF-8"><meta http-equiv="X-UA-Compatible" content="IE=EmulateIE7"><title>
    教员库 - 北京尚才家教
</title><link href="/css/css.css" rel="stylesheet" type="text/css">

<link type="text/css" rel="stylesheet" href="/css/bdsstyle.css">
<script src="http://libs.baidu.com/jquery/1.9.0/jquery.js"></script>
<style>
    .pagination li{
    float:left;
    width:40px;
    height:20px;
    color:#856b31;
    border:1px solid transparent;
    text-align: center;
    font-size: 14px;
    background:white;
    }
    .pagination{
        margin:5px 5px 5px 200px;
    }
    .pagination .active{       
        font-weight: bolder;
        background:#ffebcd;
    }
    .pagination :hover{        
       
        font-weight: bold;
        background:burlywood;
    }

</style>
</head>



@include('header')
<div id="menu" class="w950">
 <ul id="top1_ulDH">
        <li id="l0" style="width:20%"><a href="{{url('/')}}" ><span>首页</span></a></li>
        <li id="l1" style="width:16%" id="lan_1"><a href="{{url('/teacher')}}"><span>教员库</span></a></li>
        <li id="l2" class="active" style="width:16%" id="lan_2"><a href="{{url('/student')}}"><span>学员库</span></a></li>
        <li id="l3" style="width:16%" id="lan_9"><a href="{{url('/examplelist')}}"><span>成功案例</span></a></li>
        <li id="l4" style="width:16%" id="lan_10"><a href="{{url('/fee')}}"><span>收费标准</span></a></li>
        <li id="l5" style="width:16%" id="lan_10"><a href="{{url('/fy')}}"><span>学习工具</span></a></li>
    </ul>
</div>

    <div id="main" class="w950">
        <div class="right" style="width: 640px;">
           <div class="box1" style="width: 99%; margin: 0 auto 10px auto;">
            <table border="0" cellpadding="1" cellspacing="1" class="mberTab">

                @forelse($user as $u)
                <tbody><tr>
                    <th colspan="5">
                         {{$u->uid}}
                        号教员基本信息
                    </th>
                </tr>
                <tr>
                    <td align="right" bgcolor="#FFFFFF">
                        <strong>教员编号：</strong>
                    </td>
                    <td bgcolor="#FFFFFF" class="green">
                        {{$u->uid}}
                    </td>
                    <td align="right" bgcolor="#FFFFFF">
                        <strong>姓名：</strong>
                    </td>
                    <td bgcolor="#FFFFFF" class="color_orage">
                        {{$u->name}}
                    </td>
                    <td width="130" rowspan="6" align="center" bgcolor="#FFFFFF" class="color_orage">
                        &nbsp;<img alt="北京尚才家教" style="border:0px;" width="115" height="145" src="{{$u->photo}}"></td>
                </tr>
                <tr>
                    <td align="right" bgcolor="#FFFFFF">
                        <strong>性别：</strong>
                    </td>
                    <td bgcolor="#FFFFFF">
                        {{$u->gender}}
                    </td>
                    <td align="right" bgcolor="#FFFFFF">
                        <strong>年龄：</strong>
                    </td>
                    <td bgcolor="#FFFFFF">
                        {{$u->age}}
                    </td>
                    
                </tr>               
                
                
                <tr>
                    <td align="right" bgcolor="#FFFFFF">
                        <strong>学历资质：</strong>
                    </td>
                    <td bgcolor="#FFFFFF">
                        {{$u->edu}}
                    </td>
                    <td align="right" bgcolor="#FFFFFF">
                        <strong>授课地点：</strong>
                    </td>
                    <td bgcolor="#FFFFFF">
                        {{$u->address}}
                    </td>
                </tr>
                <tr>
                    <td align="right" bgcolor="#FFFFFF">
                        <strong>注册时间：</strong>
                    </td>
                    <td bgcolor="#FFFFFF" class="yel">
                        {{$u->regtime}}
                    </td>
                    <td align="right" bgcolor="#FFFFFF">
                        <strong>认证情况：</strong>
                    </td>
                    <td bgcolor="#FFFFFF">
                        <span class="green">
                        @if($u->checkinfo == 1)
                        已认证<img style="border:0px;" src="/images/xj1.jpg"></span>
                        @else
                        暂未认证
                        @endif
                    </td>
                </tr>
                @empty                
                 <td abgcolor="#FFFFFF">暂无记录</td>
            </tbody></table>
            @endforelse
            
            
                
                <div class="body">
                    <span>(为保护教员隐私，具体面谈时会向您提供全名及各种证件）<br>
                        预约中心电话：<strong>010-62642730 </strong>（工作时间：<span class="blue">9:00－18:00</span>）（预约时，请提供此教员的编号：<strong class="red">{{$u->uid}}</strong> ）</span></div>
            </div>
            <div class="box2" style="width: 99%; margin: 0 auto;">
                <div class="title" style="">
                    <h2>
                        该老师的家教记录</h2>
                </div>
                <div>
                    <table width="100%" border="0" cellspacing="0" cellpadding="5">
                        <tbody><tr>
                            <td width="14%" bgcolor="#FDF9C1" class="lin02bg">
                                <strong>学员编号</strong>
                            </td>
                            <td width="15%" bgcolor="#FDF9C1" class="lin02bg">
                                <strong>学习科目</strong>
                            </td>
                            <td width="47%" bgcolor="#FDF9C1" class="lin02bg">
                                <strong>学员需求描述</strong>
                            </td>
                            <td width="24%" bgcolor="#FDF9C1" class="lin02bg">
                                <strong>需求发布时间</strong>
                            </td>
                        </tr>

                        @forelse($order as $o)
                        <tr> <td class="xuxian"> {{$o->onum}} </td>
                            <td class="xuxian">   {{$o->style}} </td>
                            <td class="xuxian">{{$o->requirement}}</td> 
                            <td class="xuxian"> {{$o->pubtime}} </td>
                        </tr>
                        @empty
                        <td class="xuxian"> 暂无记录 </td>
                        @endforelse
                    </tbody></table>
                </div>

            </div>
            <div class="left" style="width: 300px;">
            <div class="box1">
                <div style="background-color: #FFFFFF; padding: 6px 4px;">
                    @if(Request::user() == '')
                    <a  href="{{url('/auth/login')}}"><img src="/images/qingjiajiao.jpg" border="0" hspace="2" vspace="3"><a href="{{url('/auth/login')}}"><img src="/images/zuojiaoyuang.jpg" border="0" hspace="2" vspace="3"></a>
                    @elseif(Request::user()->role == 1)
                    <a style="margin:70px" href="{{url('/ucenter')}}"><img src="/images/tcenter.jpg" border="0" hspace="2" vspace="3"></a>
                    @elseif(Request::user()->role == 2)
                    <a style="margin:70px" href="{{url('/student/issue')}}"><img src="/images/qingjiajiao.jpg" border="0" hspace="2" vspace="3"></a>
                    @endif
                </div>
            </div>
            <div class="box1">
                <div class="body">
                    <ul class="index_help">
                        <li><span class="color_orage">+</span> <a href="#">请家教的流程</a></li>
                        <li><span class="color_orage">+</span> <a href="#">如何预约订单</a></li>
                        <li><span class="color_orage">+</span> <a href="#">学员收费标准</a></li>
                        <li><span class="color_orage">+</span> <a href="#">教员收费标准</a></li>
                        <li><span class="color_orage">+</span> <a href="#">挑选合适教员</a></li>
                        <li><span class="color_orage">+</span> <a href="#">汇款接单手续</a></li>
                    </ul>
                    <div>
                        &nbsp;&nbsp;&nbsp;&nbsp;欢迎全市的大、中、小学生、成人和各种优秀教师到网上报名或来电请家教、做家教！<br>
                        &nbsp;&nbsp;&nbsp;&nbsp;我们为你提供在职优秀教师、离退休教师、大学生家教、研究生家教、留学生家教、外教家教等一对一上门精心辅导小、初、高学生语数英、理化
                        生、科学、政史地等科目。<br>
                        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="color:#e85200;"><strong>工作时间：8:30-22:00</strong>（周末正常上班）</span>
                    </div>
                </div>
                
            </div>
            
            <div class="box1">
                <div class="title">
                    <ul class="menu_list" id='menus'>
                        <li class="active" id="t1"><a href="http://www.caijj.com/cjwt/cjwt.html"><span>常见问题</span></a></li>
                        <li id="t2" ><a href="http://www.caijj.com/xxff/xxff.html"><span>学习方法</span></a></li>
                        <li id="t3" ><a href="http://www.caijj.com/ksjy/ksjy.html"><span>考试经验</span></a></li>
                        <li id="t4" ><a href="http://www.caijj.com/jzkt/jzkt.html">家长课堂</a></li>
                    </ul>
                </div>
                <div id="bodys">
                <div class="body" id="c1">
                    <ul class="list">
                        
                                <li><a href="http://www.caijj.com/zjjcjwt/2433.html">
                                    关于未成功家教信息</a></li>
                            
                                <li><a href="http://www.caijj.com/zjjbz/767.html">
                                    教员做家教收费标准</a></li>
                            
                                <li><a href="http://www.caijj.com/zjjbz/766.html">
                                    怎样快速得到家教订单？</a></li>
                            
                                <li><a href="http://www.caijj.com/zjjbz/765.html">
                                    教员汇款方式</a></li>
                            
                                <li><a href="http://www.caijj.com/zjjbz/764.html">
                                    如何升级为星级教员？</a></li>
                            
                                <li><a href="http://www.caijj.com/zjjbz/763.html">
                                    北京做家教一小时多少钱？</a></li>
                            
                                <li><a href="http://www.caijj.com/zjjcjwt/762.html">
                                    做家教应注意的礼节！</a></li>                         
                                
                    </ul>
                    <span class="more"><a href="http://www.caijj.com/cjwt/cjwt.html">» 更多</a></span>
                </div>
                <div class="body" id="c2" style="display:none;">
                    <ul class="list">
                        
                                <li><a href="http://www.caijj.com/xxff/5907.html">
                                    管乐器为什么必须练长音？</a></li>
                            
                                <li><a href="http://www.caijj.com/xxff/5906.html">
                                    教育理解</a></li>
                            
                                <li><a href="http://www.caijj.com/xxff/5904.html">
                                    吉他自学支招</a></li>
                            
                                <li><a href="http://www.caijj.com/xxff/5903.html">
                                    北京高考成绩6月23日公布 首次采用大平行志愿</a></li>
                            
                                <li><a href="http://www.caijj.com/xxff/5902.html">
                                    高中物理</a></li>
                            
                                <li><a href="http://www.caijj.com/xxff/5901.html">
                                    数学学习认识</a></li>
                            
                                <li><a href="http://www.caijj.com/xxff/5899.html">
                                    训练孩子注意力的方法</a></li>
                            
                                <li><a href="http://www.caijj.com/xxff/5895.html">
                                    在高三家长座谈会上的发言</a></li>
                            
                    </ul>
                    <span class="more"><a href="http://www.caijj.com/xxff/xxff.html">» 更多</a></span>
                </div>
                 <div class="body" id="c3" style="display:none;">
                    <ul class="list">
                        
                                <li><a href="http://www.caijj.com/xxff/5895.html">
                                    怎样的阅读才是正确的阅读？</a></li>
                            
                                <li><a href="http://www.caijj.com/ksjy/3155.html">
                                    有针对性的学习才能考好语文</a></li>
                            
                                <li><a href="http://www.caijj.com/ksjy/3154.html">
                                    词语类题型的总结</a></li>
                            
                                <li><a href="http://www.caijj.com/ksjy/3153.html">
                                    语文考试技巧</a></li>
                            
                                <li><a href="http://www.caijj.com/ksjy/3149.html">
                                    面对考试要主动</a></li>
                            
                                <li><a href="http://www.caijj.com/ksjy/3109.html">
                                    把考试的精力放在基础上</a></li>
                            
                                <li><a href="http://www.caijj.com/ksjy/3107.html">
                                     养成好的解题习惯才能拿高分</a></li>
                            
                                <li><a href="http://www.caijj.com/ksjy/3106.html">
                                    基础不好的同学考试怎么办？</a></li>
                            
                    </ul>
                    <span class="more"><a href="http://www.caijj.com/ksjy/ksjy.html">» 更多</a></span>
                </div>
                <div class="body" id="c4" style="display:none;">
                    <ul class="list">
                        
                                <li><a href="http://www.caijj.com/jzkt/5900.html">
                                    孩子，快乐的高手</a></li>
                            
                                <li><a href="http://www.caijj.com//jzkt/5891.html">
                                    《浅谈中考语文复习的有效性》</a></li>
                            
                                <li><a href="http://www.caijj.com/jzkt/5848.html">
                                    五年级数学下册练习</a></li>
                            
                                <li><a href="http://www.caijj.com//jzkt/5847.html">
                                    练习题</a></li>
                            
                                <li><a href="http://www.caijj.com//jzkt/5808.html">
                                    家长和小朋友对学习架子鼓的一些疑惑</a></li>
                            
                                <li><a href="http://www.caijj.com//jzkt/5777.html">
                                    家长该如何预防孩子的网瘾？</a></li>
                            
                                <li><a href="http://www.caijj.com//jzkt/5761.html">
                                    独生子女父母的教育方式</a></li>
                            
                                <li><a href="http://www.caijj.com//jzkt/5757.html">
                                    中学生家庭教育方法</a></li>
                            
                    </ul>
                    <span class="more"><a href="http://www.caijj.com/jzkt/jzkt.html">» 更多</a></span>
                </div>
               </div>
            </div> 
        </div>
       
        </div>
    </div>
</div>
    <div id="footbar" class="w950">
        <div class="title">
          <table align="center" border="0" cellpadding="0" cellspacing="0" width="100%">
              <tbody><tr>
                <td height="30" valign="middle">
                <a href="#" target="_blank">做家教</a> | <a href="#" target="_blank">请家教</a> | <a href="#">教员搜索</a> | <a href="#">教员分类</a> | <a href="#">教员查询</a> | <a href="#">学习方法</a> | <a href="#">考试经验</a> | <a href="#">家长课堂</a> | <a href="#">家教经验</a> | <a href="#">家教相关</a> | <a href="#">公司路线</a> | <a href="#">
                    常见问题</a> | <a href="#">汇款方式</a> | <a href="#" target="_blank">联系我们</a>              </td>
              </tr>
            </tbody></table>
        </div>
        <div class="body">
            联系电话：010-62642730　62643630　客服邮箱：caijjkf@163.com　<br>
            版权所有：北京尚才家教 【<a href="#" target="_blank">北京家教</a>】　工信部备案号:<a href="#" target="_blank">京ICP备09031430号</a><br>
            家教服务中心：北京市海淀区清华大学南门华清嘉园8号楼304室<br>
            Powered by www.caijj.com copyright 2009-2011<a href="#" target="_blank" title="站长统计"><img src="/images/pic1.gif" border="0" hspace="0" vspace="0"></a><img src="/images/stat.gif" border="0" height="0" width="0">
        </div>
</div>
    </form>
</body>
<script>
//左下角链接tab

$('#menus').on('mouseover','li',function(){  
  $("#bodys").children().eq(0).hide();
  
  var index = $(this).index();
  $('#bodys').children().eq(index).show();
  $(this).addClass("active")   
});
$('#menus').on('mouseout','li',function(){ 
    var index = $(this).index();  
    $(this).removeClass("active")
    $('#bodys').children().eq(index).hide();
     $("#bodys").children().eq(0).show();
});        
</script>

