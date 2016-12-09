<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml"><head>
<meta http-equiv="content-type" content="text/html; charset=UTF-8"><title>
	【做家教 - 北京做家教】 - 尚才家教
</title><link href="/css/css.css" rel="stylesheet" type="text/css">
</head>
<body>
 @include('header')
<div id="menu" class="w950">
<ul id="top1_ulDH">
        <li id="l0" class="active" style="width:20%"><a href="{{url('/')}}" ><span>首页</span></a></li>
        <li id="l1" style="width:16%" id="lan_1"><a href="{{url('/teacher')}}"><span>教员库</span></a></li>
        <li id="l2" style="width:16%" id="lan_2"><a href="{{url('/student')}}"><span>学员库</span></a></li>
        <li id="l3" style="width:16%" id="lan_9"><a href="{{url('/examplelist')}}"><span>成功案例</span></a></li>
        <li id="l4" style="width:16%" id="lan_10"><a href="{{url('/fee')}}"><span>收费标准</span></a></li>
        <li id="l5" style="width:16%" id="lan_10"><a href="{{url('/fy')}}"><span>学习工具</span></a></li>
    </ul>
</div>
   
    <div id="main" class="w950">
        <div class="box2" >
            <div class="title" style="text-align:center;height:50px;">
                <h2 style="font-size:18px;line-height:50px;">
                    用户登录
                </h2>              
            </div> 
                <div class="loginb3">            
                    <div id = "form_2" style="padding-top:50px;padding-bottom:50px;">
                        <form action="" method="post">
                            {!! csrf_field() !!}
                            <div style="text-align:center;padding-bottom:10px;">   
                                <label for="confirm_password">
                                    <p style="font-size:18px;line-height:25px;height:25px;"><strong class="red">*</strong>用户名</label>
                                <input name="name" id="yhm" class="zcinput" size="18" maxlength="15" onchange="usercheck(&#39;check&#39;)" onblur="usercheck(&#39;check&#39;)" type="text" style="height:20px;"></p>
                            </div>
                            <div style="text-align:center;">
                                    <label for="checkbox">
                                        <p style="font-size:18px;line-height:25px;height:25px;"><strong class="red">*</strong>密&nbsp;&nbsp;&nbsp;码</label>
                                    <input name="password" id="mm" class="zcinput" size="18" maxlength="10" type="password" style="height:20px;"></p>                        
                            </div>  
                            <div class="ac" style="padding-top: 15px;">
                                    <p style="font-size:18px;line-height:25px;height:25px;"><input  style="height:30px;"name="Button1" value="　登录　" onclick="return CheckForm_1();" id="Button1" class="button" type="submit">
                                    &nbsp;&nbsp;&nbsp;&nbsp;<input name="reset1" style="height:30px;" class="button" value="忘记密码" type="reset" height:25px></p>
                            </div>
                        </form>
                    </div>   
                </div>
        </div>
    </div>   
    <div id="footbar" class="w950">  
        <div class="body">
            联系电话：010-62642730　62643630　客服邮箱：caijjkf@163.com　<br>
            版权所有：北京尚才家教 【<a href="#" target="_blank">北京家教</a>】　工信部备案号:<a href="#" target="_blank">京ICP备09031430号</a><br>
            家教服务中心：北京市海淀区清华大学南门华清嘉园8号楼304室<br>
            Powered by www.caijj.com copyright 2009-2011<a href="#" target="_blank" title="站长统计"><img src="/images/pic1.gif" border="0" hspace="0" vspace="0"></a><img src="/images/stat.gif" border="0" height="0" width="0">
        </div>
    </div>
    @if($errors->has('name'))
    <script>
        alert('用户名和密码错误');
        //alert("{{$errors->first('name')}}");
    </script>
    @endif   
</body>
</html>