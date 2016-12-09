<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "#">
<!-- saved from url=(0036)http://www.caijj.com/tuser/main.aspx -->
<html xmlns="#"><title>
	尚才家教－教员管理后台
</title><link href="/shangcai/css.css" rel="stylesheet" type="text/css"><link href="/shangcai/admin.css" rel="stylesheet" type="text/css"></head>
<script src="http://libs.baidu.com/jquery/1.9.0/jquery.js"></script>
<body>
    <form name="form1" method="post" action="" id="form1">



<div id="topbar" class="color_999">
    <div class="w950">
        <div class="right">
            <a href="#">设为首页</a>&nbsp;
            <a href="#">
                加入收藏</a>&nbsp; <a href="#">帮助中心</a>
        </div>
        
        <div class="left" id="ydl">
            {{$data->name}}
            欢迎您登陆 <a href="#">进入管理中心主页</a></div>
        
    </div>
</div>
<div id="top">
  <div class="w950">
            <div style="float: right; width:100px; padding-top:25px;">
                <a target="blank" href="tencent://message/?uin=5886626&Site=%E5%B0%9A%E6%89%8D%E5%AE%B6%E6%95%99&Menu=yes"><img border="0" src="/shangcai/qq.jpg" alt="QQ咨询"></a>
            </div>
			<div id="top1_divTop" style="float: right; padding: 15px 0 0 0;">
                <img src="/shangcai/top_bn.gif" alt="尚才家教">
            </div>
            <div id="logo" style="float:left;">
                <img src="/shangcai/logo.jpg" alt="尚才家教">
            </div>
  </div>
</div>
<div id="menu" class="w950">
    <ul id="top1_ulDH">
        <li style="width:20%"><a href="{{url('/')}}" ><span>首页</span></a></li>
        <li style="width:20%" id="lan_1"><a href="{{url('/')}}"><span>教员库</span></a></li>
        <li style="width:20%" id="lan_2"><a href="{{url('/')}}"><span>学员库</span></a></li>
        <li style="width:20%" id="lan_9"><a href="{{url('/')}}"><span>成功案例</span></a></li>
        <li style="width:20%" id="lan_10"><a href="{{url('/')}}"><span>收费标准</span></a></li>
    </ul>
</div>

    <div id="main" class="w950">
        
<div class="left" style="width: 189px;">
    <div id="grmes">
        <p>&nbsp;
      </p>
        <ul>
          <li>欢迎您 <span class="color_orage"><strong>{{$data->name}}</strong></span> ，您的教员编号是 <span class="color_orage">
                <strong>{{$data->uid}}</strong></span>。<br>
              请尽快在“证件管理”栏目上传您的有效证件后，支付10元认证费，以使最快获得认证！为确保教员质量，未认证教员在教员库不予显示。<br><a href="#"><strong>想优先预约学员？</strong> </a></li>
        </ul>
    </div>
   <div id="managenav">
        <div class="account">
            <h3>
                <span>导航菜单</span></h3>
            <ul>
                <ul>
                <li><a href="{{url('/ucenter')}}">教员后台首页</a></li>
                <li><a href="{{url('/ucenter/info')}}">个人信息</a></li>
                <li><a href="{{url('/ucenter/orderlist')}}">订单记录</a></li>
            </ul>
            </ul>
        </div>
        <div class="hyjf">
            <h3>
                <span>状态操作</span></h3>
            <ul>
                <li><a href="{{url('/ucenter/code')}}">密码修改</a></li>
                <li><a href="{{url('/ucenter/image')}}">照片管理</a></li>
            </ul>
        </div>
        <div class="hyjf">
            <h3>
                <span>家教帮手</span></h3>
            <ul>
                <li><a href="#">地图公交</a></li>
                <li><a href="#">北京地铁</a></li>
                <li><a href="#">教案课件</a></li>
            </ul>
        </div>
    </div>
    <div align="center">
        <a href="#"></a>
    </div>
</div>

      <!--右侧内容-->
        <div class="right" style="width: 750px;">
            <div class="atitle">
                密码修改</div>
            <div class="abox">
                <table width="100%" cellpadding="0" cellspacing="0">
                    <tr>
                        <td align="center" height="30" valign="middle">
                            原来的密码：
                            <input name="password_o" id="password_o" type="password" />
                        </td>
                    </tr>
                    <tr>
                        <td align="center" height="30" valign="middle">
                            输入新密码：
                            <input name="password" id="password" type="password" />
                        </td>
                    </tr>
                    <tr>
                        <td align="center" height="30" valign="middle">
                            确认新密码：
                            <input name="password_confirmation" id="password_confirmation" type="password" />
                        </td>
                    </tr>
					<input type="hidden" id="uid" value="{{$data->uid}}">
                    <tr>
                        <td align="center" height="40" valign="middle">
                            <input type="submit" name="Button3" value=" 提 交 "  class="button" />
                        </td>
                    </tr>
                </table>
            </div>
        </div>
    </div>

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

    </form>


</body></html>

<script>

$('#form1').submit(function(){

	if( $('#password_o').val() == '' ){
		alert('原密码不能为空');
		return false;
	}
	
	var reg = /[^\s]{6,12}/;
    if(!reg.test($('#password').val())){
		alert('新密码密码为6-12位（不含空格）');
		return false;
	}
	
	if($('#password_confirmation').val() != $('#password').val()){
		alert('确认密码与新密码不一样');
		return false;
	}
	
	$.ajax({
		url:'/ucenter/code/'+$('#uid').val(),
		type:'post',
		data:{
			password_o:$('#password_o').val(),
			password:$('#password').val(),
			password_comfirmation:$('#password_comfirmation').val()
		},
        dataType: 'text',
        success:function(msg){
			if(msg == 1){
				alert('密码修改成功！');
				location.assign('/ucenter');				
			} else {
				alert(msg);
			}
        }		
	});
	return false;
});
</script>