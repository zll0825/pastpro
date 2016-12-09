<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "#">
<!-- saved from url=(0036)http://www.caijj.com/tuser/main.aspx -->
<html xmlns="#"><title>
	尚才家教－教员管理后台
</title><link href="/shangcai/css.css" rel="stylesheet" type="text/css"><link href="/shangcai/admin.css" rel="stylesheet" type="text/css"></head>
<body>
    <form name="form1" method="post" action="./尚才家教－教员管理后台_files/尚才家教－教员管理后台.html" id="form1">


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
                欢迎登录</div>
            <div class="abox">
                <table border="0" cellpadding="0" cellspacing="0" height="176" width="100%">
                    <tbody>
                        <tr>
                            <td align="center" valign="middle" width="173">
                                <table border="0" cellpadding="0" cellspacing="0" height="144" width="127">
                                    <tbody>
                                        <tr>
                                            <td align="center" valign="middle">
                                                <img src="{{$data->photo}}" id="zp" height="145" width="115">
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                            </td>
                            <td align="left" valign="middle" width="410">
                                <table border="0" cellpadding="1" cellspacing="1" width="431">
                                    <tbody>
                                        <tr>
                                            <td width="83" height="25" align="left" valign="middle" class="color_orage">
                                                登录名：
                                            </td>
                                            <td align="left" height="25" valign="middle" width="320">
                                                <span id="Label1">{{$data->name}}</span>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td align="left" height="24" valign="middle">
                                                教员ID：
                                            </td>
                                            <td align="left" height="24" valign="middle">
                                                <span id="Label2">{{$data->uid}}</span>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td height="25" align="left" valign="middle" class="color_green">
                                                教员姓名：
                                            </td>
                                            <td align="left" height="25" valign="middle">
                                                <span id="Label3">{{$data->name}}</span>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td align="left" height="25" valign="middle">
                                                教员学历：
                                            </td>
                                            <td align="left" height="25" valign="middle">
                                                <span id="Label4">@if($data->edu == 1)
                                                    小学
                                                    @elseif($data->edu == 2)
                                                    初中
                                                    @elseif($data->edu == 3)
                                                    高中
                                                    @elseif($data->edu == 4)
                                                    本科
                                                    @elseif($data->edu == 5)
                                                    研究生
                                                    @elseif($data->edu == 6)
                                                    博士
                                                    @endif
                                                </span>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td align="left" height="25" valign="middle">
                                                身份验证：
                                            </td>
                                            <td align="left" height="25" valign="middle">
                                                <span id="Label5"><?php 
                                                    if($data->checkinfo == 0){
                                                        echo '未审核';
                                                    }elseif($data->checkinfo == 1 && $data->checkmail ==0){
                                                        echo '已审核，未激活邮箱';
                                                    }elseif($data->checkinfo == 1 && $data->checkmail ==1){
                                                        echo '已审核，已激活邮箱';
                                                    }
                                                ?>
                                                </span>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td align="left" height="25" valign="middle">
                                                当前状态：
                                            </td>
                                            <td align="left" height="25" valign="middle">
                                                <span id="Label6">最近有时间，要做家教,网站公开简历</span>
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
            <div class="abox">
                <ul class="list">
                    
                            <li><a href="#">VIP教员规则（必看）</a></li>
                        
                            <li><a href="#">尚才家教网迁址公告！！</a></li>
                        
                            <li><a href="#">在线付款使用指南！</a></li>
                        
                            <li><a href="#">尚才家教教员交流QQ群！</a></li>
                        
                            <li><a href="#">尚才家教网恭祝您2012年新年快乐！</a></li>
                        
                            <li><a href="#">请教员更新自己的住址！！</a></li>
                        
                            <li><a href="#">《《 教员接单流程 》》</a></li>
                        
                            <li><a href="#">汇款接单手续</a></li>
                        
                            <li><a href="#">做家教收费标准</a></li>
                        
                            <li><a href="#">普通预约学员</a></li>
                        
                            <li><a href="#">●寒假不回家的教员看这里！！</a></li>
                        
                            <li><a href="#">享有优先权规则（必看）</a></li>
                        
                            <li><a href="#">家教试讲成功后注意事项！</a></li>
                        
                            <li><a href="#">北京市中小学介绍（参考）</a></li>
                        
                            <li><a href="#">做星级教员，你也可以！</a></li>
                        
                            <li><a href="#">尚才家教教员管理系统使用帮助！</a></li>
                        
                </ul>
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