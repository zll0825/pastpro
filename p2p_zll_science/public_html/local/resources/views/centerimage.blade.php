<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "#">
<!-- saved from url=(0036)http://www.caijj.com/tuser/main.aspx -->
<html xmlns="#"><title>
	尚才家教－教员管理后台
</title><link href="/shangcai/css.css" rel="stylesheet" type="text/css"><link href="/shangcai/admin.css" rel="stylesheet" type="text/css"></head>
<script src="http://libs.baidu.com/jquery/1.9.0/jquery.js"></script>
<body>
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
                <li><a href="{{url('/ucenter')}}">教员后台首页</a></li>
                <li><a href="{{url('/ucenter/info')}}">个人信息</a></li>
                <li><a href="{{url('/ucenter/orderlist')}}">订单记录</a></li>
            </ul>
        </div>
        <div class="hyjf">
            <h3>
                <span>接单流程</span></h3>
            <ul>
                <li><a href="#">普通预约学员</a></li>
                <li><a href="#">VIP教员</a></li>
                <li><a href="#">教员收费标准</a></li>
                <li><a href="#">汇款接单手续</a></li>
                <li><a href="#"></a></li>
                <li><a href="#">《在线付款指南》</a></li>
                <li><a href="#"></a></li>
            </ul>
        </div>
        <div class="hyjf">
            <h3>
                <span>状态操作</span></h3>
            <ul>
                <li><a href="#">密码修改</a></li>
                <li><a href="#">教员简历修改</a></li>
                <li><a href="#">简历状态修改</a></li>
                <li><a href="#">文章管理</a></li>
                <li><a href="#">照片管理</a></li>
                <li><a href="#">证件管理</a></li>
                <li><a href="#">定时刷新简历</a></li>
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
                照片管理</div>
            <div class="abox">
                <p class="red">
                    <strong>【提示信息】</strong></p>
                <p>
                    有照片的教员被关注度超出没照片会员的7倍</p>
                <p>
                    有照片的教员成功找到家教的比例比没照片的会员高出约6倍</p>
                <p>
                    有照片的教员被搜索的比例比没照片的教员高出11倍</p>
                <p>
                    一张自信的照片将为您带来更多机会
                </p>
                <p>
                    （1）自信、生动的照片会给你带来更多的关注，为增强效果请不要上传卡通照、合影照、婴孩照、脸部很小的照片，照片大小不超过500k， 支持格式有：jpg、gif、png等。(<a href="http://www.tuyaya.com/" target="_blank" class="STYLE1">照片处理工具</a>)</p>
                <table width="100%" border="0" cellpadding="6" cellspacing="0">
                    <tbody>
                        <tr bgcolor="#f1fafc">
                            <td height="30" colspan="6" align="center" valign="middle">                                
                                    <img id="Image1" src="{{$data->photo}}" style="height:145px;width:115px;border-width:0px;" />
                  </div>
                            </td>
                        </tr>
                        <tr bgcolor="#f1fafc">
                            <td height="40" colspan="6" align="left" valign="top">
                                请选择上传的照片文件：
								<form method="POST" action="" enctype="multipart/form-data">
                                <input name="images" type="file" id="images" />&nbsp; &nbsp;
					<input type="hidden" id="uid" value="{{$data->uid}}">
                                <input type="submit" name="Button3"  value=" 上 传 " id="Button3" class="button" />
								</form>
                            </td>
                        </tr>

                    </tbody>
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


</body></html>

// <script>
// 	function testup(){
// 		var formData = new FormData($('form')[0]);
// 		console.log(formData);
	
// 		$.ajax({
// 			url:'/ucenter/image/'+$('#uid').val(),
// 			type:'post',
// 			data:{a:1,b:2},
// 			success:function(msg){
// 				alert(msg);
// 			}
// 		});
// 	}
// </script>