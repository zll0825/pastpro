<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<!-- saved from url=(0038)http://www.caijj.com/tuser/zxxyxq.aspx -->
<html xmlns="http://www.w3.org/1999/xhtml"><head><meta http-equiv="Content-Type" content="text/html; charset=UTF-8"><title>
	尚才家教－教员管理后台
</title><link href="/shangcai/css.css" rel="stylesheet" type="text/css"><link href="/shangcai/admin.css" rel="stylesheet" type="text/css"></head>
<body>
    <form name="form1" method="post" action="./尚才家教－教员管理订单_files/尚才家教－教员管理订单.html" id="form1">



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
        <ul id="top1_ulDH">
        <li style="width:20%"><a href="{{url('/')}}" ><span>首页</span></a></li>
        <li style="width:20%" id="lan_1"><a href="{{url('/')}}"><span>教员库</span></a></li>
        <li style="width:20%" id="lan_2"><a href="{{url('/')}}"><span>学员库</span></a></li>
        <li style="width:20%" id="lan_9"><a href="{{url('/')}}"><span>成功案例</span></a></li>
        <li style="width:20%" id="lan_10"><a href="{{url('/')}}"><span>收费标准</span></a></li>
    </ul>
    </ul>
</div>

    <div id="main" class="w950">
        
<div class="left" style="width: 189px;">
    <div id="grmes">
        <p>&nbsp;
      </p>
        <ul>
          <li>欢迎您 <span class="color_orage"><strong>十八哥</strong></span> ，您的教员编号是 <span class="color_orage">
                <strong>50107</strong></span>。<br>
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
                最新学员需求</div>
            <div class="abox">
                <ol class="line03">
                    <li class="lin02bg">
						<u>订单号</u>
						<em>学员姓名</em>
                        <u>年纪</u>
						<i>科目</i>
						<i>授课老师</i>
						<b>授课区域</b>
						<i>发布时间</i>
						<em>订单状态</em>
					</li>

					<li class="">
						<u>{{$data->oid}}</u>
						<em>{{$data->sid}}</em>
						<u>
          @if($data->style == 1)小学
          @elseif($data->style == 2)初中
          @elseif($data->style == 3)高中
          @endif                   
                        </u>
                        <i>{{$data->subject}}</i>
						<i>{{$data->tid}}</i>
						<b>{{$data->address}}</b>
						<i>{{date('Y-m-d',$data->pubtime)}}</i>
						<em>
          @if($data->status == 0)未预约
          @elseif($data->status == 1)已预约
          @elseif($data->status == 2)授课中
          @elseif($data->status == 3)已结束
          @endif                  
                        </em>
					</li>
                        
                </ol>
            </div>
            <div class="abox">
                
<!-- AspNetPager V7.0 for VS2008  Copyright:2003-2007 Webdiyer (www.webdiyer.com) -->
<div id="AspNetPager1" class="overview" firstlastbuttonclass="overview" style="border-style:None;font-weight:normal;font-style:normal;width:100%;white-space:nowrap;">
<div class="overview" style="float:left;width:;">
	共9&nbsp;页1/1页
</div><div class="overview" style="float:left;">
	<a disabled="disabled" style="margin-right:5px;">首页</a><a disabled="disabled" style="margin-right:5px;">上一页</a><span class="cpb" style="margin-right:5px;">1</span><a disabled="disabled" style="margin-right:5px;">下一页</a><a disabled="disabled" style="margin-right:5px;">尾页</a>
</div>
</div>
<!-- AspNetPager V7.0 for VS2008 End -->


            </div>
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
                        target="_blank">联系我们</a>                </td>
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