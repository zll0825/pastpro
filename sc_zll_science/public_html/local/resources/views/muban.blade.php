<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "#">
<html xmlns="#"><title>
	尚才家教－个人中心
</title><link href="/css/ucss.css" rel="stylesheet" type="text/css"><link href="/css/uadmin.css" rel="stylesheet" type="text/css"></head>
<script src="http://libs.baidu.com/jquery/1.9.0/jquery.js"></script>
<body>
<div id="topbar" class="color_999">
    <div class="w950">
        <div class="right">
            <a href="#">设为首页</a>&nbsp;
            <a href="#">
                加入收藏</a>&nbsp; <a href="#">帮助中心</a>
        </div>
        
        @if(Request::user())
        <div class="left" id="ydl">
            {{$data->name}}
            欢迎您登陆 <a href="#">&nbsp;进入管理中心主页</a></div>
            &nbsp;&nbsp; <a href="{{url('/auth/logout')}}">注销</a>
        </div>
        
        @else
        <div class="left" id="wdl">
            <a href="{{url('/auth/login')}}"><button id="Button1">登录</button></a>&nbsp;&nbsp; <a href="{{url('/auth/register')}}" class="color_orage text_decoration">注册教员</a>
        </div>
        @endif
</div>
<div id="top">
  <div class="w950">
            <div style="float: right; width:100px; padding-top:25px;">
                <a target="" href="{{url('/admin')}}"><img border="0" src="/images/qq.jpg" alt="QQ咨询"></a>
            </div>
			<div id="top1_divTop" style="float: right; padding: 15px 0 0 0;">
                <img src="/images/top_bn.gif" alt="尚才家教">
            </div>
            <div id="logo" style="float:left;">
                <img src="/images/logo.jpg" alt="尚才家教">
            </div>
  </div>
</div>


<div id="menu" class="w950">
    <ul id="top1_ulDH">
        <li style="width:20%"><a href="{{url('/')}}" ><span>首页</span></a></li>
        <li style="width:16%" id="lan_1"><a href="{{url('/teacher')}}"><span>教员库</span></a></li>
        <li style="width:16%" id="lan_2"><a href="{{url('/student')}}"><span>学员库</span></a></li>
        <li style="width:16%" id="lan_9"><a href="{{url('/examplelist')}}"><span>成功案例</span></a></li>
        <li style="width:16%" id="lan_10"><a href="{{url('/fee')}}"><span>收费标准</span></a></li>
        <li style="width:16%" id="lan_10"><a href="{{url('/fy')}}"><span>学习工具</span></a></li>
    </ul>
</div>


    <div id="main" class="w950">
        
<div class="left" style="width: 189px;">
    <div id="grmes">
        <p>&nbsp;
      </p>
        <ul>
          <li>欢迎您 <span class="color_orage"><strong>{{$data->name}}</strong></span> ，您的编号是 <span class="color_orage">
                <strong>{{$data->uid}}</strong></span>。<br>
              请尽快在“证件管理”栏目上传您的有效证件后，支付10元认证费，以使最快获得认证！为确保教员质量，未认证教员在教员库不予显示。<br></li>
        </ul>
    </div>
    <div id="managenav">
        <div class="account">
            <h3>
                <span>导航菜单</span></h3>
            <ul>
                <ul>
                <li><a href="{{url('/ucenter')}}">后台首页</a></li>
                <li><a href="{{url('/ucenter/info')}}">个人信息</a></li>
                <li><a href="{{url('/ucenter/orderlist')}}">订单记录</a></li>
            </ul>
            </ul>
        </div>
        <div class="hyjf">
            <h3>
                <span>状态操作</span></h3>
            <ul>
                <li><a href="{{url('/ucenter/infoedit/'.$data->uid)}}">信息修改</a></li>
                <li><a href="{{url('/ucenter/code')}}">密码修改</a></li>
                <li><a href="{{url('/ucenter/image')}}">照片管理</a></li>
            </ul>
        </div>
        <div class="hyjf">
            <h3>
                <span>家教帮手</span></h3>
            <ul>
                <li><a href="http://map.baidu.com">地图公交</a></li>
                <li><a href="http://map.baidu.com/subways/index.html?c=beijing">北京地铁</a></li>
            </ul>
        </div>
    </div>
    <div align="center">
        <a href="#"></a>
    </div>
</div>


@yield('body')

     <div id="bottom1_footbar" class="w950">
        <div class="title">
          <table width="100%" border="0" align="center" cellpadding="0" cellspacing="0">
              <tr>
                <td height="30" valign="middle">
				<a href="#" target="_blank">做家教</a> | <a href="#"
                target="_blank">请家教</a> | <a href="#">教员搜索</a> |  <a href="#">教员分类</a> | <a href="#">教员查询</a>  | <a href="#">学习方法</a> | <a href="#">考试经验</a> | <a href="#">家长课堂</a> | <a href="#">家教经验</a> | <a href="#">家教相关</a> | <a href="#">公司路线</a> | <a href="#">
                    常见问题</a> | <a href="#">汇款方式</a> | <a href="#"
                        target="_blank">联系我们</a>				</td>
              </tr>
            </table>
        </div>

        <div class="body">
            联系电话：010-62642730　62643630　客服邮箱：caijjkf@163.com　<br>
            版权所有：北京尚才家教 【<a href="#">京ICP备09031430号</a><br>
            家教服务中心：北京市海淀区清华大学南门海升大厦A座204室<br>
            Powered by www.caijj.com copyright 2009-2015
        </div>
</div>


</body></html>