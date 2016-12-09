<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml"><head>
<meta http-equiv="content-type" content="text/html; charset=UTF-8">
    <title>【家教成功案例】 - 北京尚才家教</title>
    <link href="/css/css.css" rel="stylesheet" type="text/css">
</head>
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
<body>
@include('header')
<div id="menu" class="w950">
  <ul id="top1_ulDH">
        <li id="l0" style="width:20%"><a href="{{url('/')}}" ><span>首页</span></a></li>
        <li id="l1" style="width:16%" id="lan_1"><a href="{{url('/teacher')}}"><span>教员库</span></a></li>
        <li id="l2" style="width:16%" id="lan_2"><a href="{{url('/student')}}"><span>学员库</span></a></li>
        <li id="l3" class="active" style="width:16%" id="lan_9"><a href="{{url('/examplelist')}}"><span>成功案例</span></a></li>
        <li id="l4" style="width:16%" id="lan_10"><a href="{{url('/fee')}}"><span>收费标准</span></a></li>
        <li id="l5" style="width:16%" id="lan_10"><a href="{{url('/fy')}}"><span>学习工具</span></a></li>
</div>
     
    <div id="main" class="w950">
        <div>
            
            <!--列表-->
            <div class="box2" style="margin-bottom: 5px;">
                <div class="title">
                    <h2>
                        成功案例</h2>
                </div>
                <div class="jyborder">      
                    <ol class="line03">
                      
                             <li class="lin02bg">
                            <u>学员编号</u>
                            <em>教员编号</em>
                            <em>教学科目</em>
                            <em>结课时间</em>
                            <em style="width: 23%">教学心得</em>
                        </li>
                        @foreach($examples as $ex)
                             <li class=""><u>{{$ex->sid}}</u><em>{{$ex->tid}}</em><em>{{ $ex->subject }}</em><em>{{date('Y/m/d',$ex->pubtime) }}</em><em style="width: 23%">{{$ex->comment}}</em>
                        </li> 
                        @endforeach          
                    </ol>
                    <div class="num">
                  
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
				<a href="#" target="_blank">做家教</a> | <a href="#" target="_blank">请家教</a> | <a href="#">教员搜索</a> |  <a href="#">教员分类</a> | <a href="#">教员查询</a>  | <a href="#">学习方法</a> | <a href="#">考试经验</a> | <a href="#">家长课堂</a> | <a href="#">家教经验</a> | <a href="#">家教相关</a> | <a href="#">公司路线</a> | <a href="#">
                    常见问题</a> | <a href="#">汇款方式</a> | <a href="#" target="_blank">联系我们</a>				</td>
              </tr>
            </tbody></table>
        </div>
        <div class="body">
            联系电话：010-62642730　62643630　客服邮箱：caijjkf@163.com　<br>
            版权所有：北京尚才家教 【<a href="#" target="_blank">北京家教</a>】　工信部备案号:<a href="#" target="_blank">京ICP备09031430号</a><br>
            家教服务中心：北京市海淀区清华大学南门华清嘉园8号楼304室<br>
            Powered by www.caijj.com copyright 2009-2011<a href="#" target="_blank" title="站长统计"><img src="images/pic1.gif" border="0" hspace="0" vspace="0"></a><img src="images/stat.gif" border="0" height="0" width="0">
        </div>
    </div>


</body>

</html>