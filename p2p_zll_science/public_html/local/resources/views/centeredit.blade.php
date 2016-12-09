<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "#">
<!-- saved from url=(0036)http://www.caijj.com/tuser/xgjl.aspx -->
<html xmlns="#"><title>
	尚才家教－教员管理后台
</title><link href="/shangcai/css.css" rel="stylesheet" type="text/css"><link href="/shangcai/admin.css" rel="stylesheet" type="text/css">

</head>
<body>
    <form name="form1" method="post" action="" id="form1">
        {{csrf_field()}}

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
                <li><a href="./尚才家教－教员信息_files/尚才家教－教员信息.html">教员简历修改</a></li>
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
                简历修改</div>
            <div class="abox">
                <table width="100%" height="125" border="0" cellpadding="0" cellspacing="0">
                    <tbody>
                        <tr>
                            <td valign="middle" height="25" align="center">
                                <span class="zt1">您所填信息越详细就越有利于检索，也就越容易获得学员的</span><span class="zt1">预约。</span>
                            </td>
                        </tr>
                        <tr class="titlebg">
                            <td height="25" align="center">
                                <table width="100%" height="27" border="0" cellpadding="0" cellspacing="1" bgcolor="#BFD3F2">
                                    <tbody>
                                        <tr class="titlebg">
                                            <td height="25" align="center" valign="middle" bgcolor="#E5F3FA">
                                                <strong>基 本 信 息</strong>
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                            </td>
                        </tr>
                        <tr>
                            <td valign="middle" height="25" align="center">
                                <table width="100%" border="0" align="left" cellpadding="5" cellspacing="1" bordercolor="#ffffff" bgcolor="#BFD3F2">
                                    <tbody>
                                        <tr class="trbgc">
                                            <td width="150px;" height="25" align="right" valign="middle" bgcolor="#FFFFFF">
                                                真实姓名：
                                            </td>
                                            <td height="25" colspan="3" align="left" valign="middle" bgcolor="#FFFFFF">
                                                <span id="zsxm">{{$data->name}}</span>
                                                &nbsp;
                                            </td>
                                        </tr>
                                        <tr class="trbgc1">
                                            <td height="25" align="right" valign="middle" bgcolor="#FFFFFF">
                                                性别：
                                            </td>
                                            <td width="31%" height="25" align="left" valign="middle" bgcolor="#FFFFFF">
                                                <span id="xb">{{$data->gender}}</span>
                                            </td>
                                            <td width="14%" align="right" valign="middle" bgcolor="#FFFFFF">
                                                身份证/护照:
                                            </td>
                                            <td width="42%" align="left" valign="middle" bgcolor="#FFFFFF">
                                                <span id="sfzh">{{$data->idnum}}</span>
                                            </td>
                                        </tr>

                                        
                                        <tr class="trbgc">
                                            <td height="25" align="right" valign="middle" bgcolor="#FFFFFF">
                                                年龄：
                                            </td>
                                            <td height="25" align="left" valign="middle" bgcolor="#FFFFFF">
                                                <span id="lzsf">{{$data->age}}</span>
                                                &nbsp;
                                            </td>
                                            <td align="right" valign="middle" bgcolor="#FFFFFF">
                                                学历：
                                            </td>
                                            <td align="left" valign="middle" bgcolor="#FFFFFF">
                                                <span id="mqsf">@if($data->edu == 1)
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
                                                    @endif</span>
                                            </td>
                                        </tr>
                                        
                                        <tr>
                                            <td height="25" colspan="4" align="left" valign="middle" bgcolor="#FFFFFF">
                                                【注意】要修改基本信息，请携带相关证件到服务中心，或致电010-62642730 62643630 由工作人员审核后为您修改！
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                            </td>
                        </tr>
                        <tr>
                            <td valign="middle" height="25" align="left">
                                <table width="100%" height="27" border="0" cellpadding="0" cellspacing="1" bgcolor="#BFD3F2">
                                    <tbody>
                                        <tr class="titlebg">
                                            <td height="25" align="center" valign="middle" bgcolor="#E5F3FA">
                                                <strong>联 系 方 式</strong>
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                                <table width="100%" border="0" cellpadding="5" cellspacing="1" bordercolor="#ffffff" bgcolor="#BFD3F2">
                                    <tbody>
                                      
                                        <tr class="trbgc1">
                                            <td height="25" align="left" valign="middle" bgcolor="#FFFFFF">
                                                电 话/手 机：
                                            </td>
                                            <td height="25" align="left" valign="middle" bgcolor="#FFFFFF">
                                                <input name="mobile" type="text" id="mobile" maxlength="50" size="22" class="zcinput" value="{{$data->mobile}}">
                                            </td>
                                        </tr>
                                        <tr class="trbgc1">
                                            <td height="25" align="left" valign="middle" bgcolor="#FFFFFF">
                                                E_mail：
                                            </td>
                                            <td height="25" align="left" valign="middle" bgcolor="#FFFFFF">
                                                <input name="email" type="text" id="email" maxlength="50" size="22" class="zcinput" value="{{$data->email}}">
                                            </td>
                                        </tr>
                                        <tr class="trbgc">
                                            <td height="25" align="left" width=90 valign="middle" bgcolor="#FFFFFF">
                                                住址：
                                            </td>
                                            <td height="25" align="left" valign="middle" bgcolor="#FFFFFF">
                                                <input name="address" type="text" id="address" size="22" class="zcinput" value="{{$data->address}}">
                                            </td>
                                            
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                            </td>
                        </tr>
                        <tr class="titlebg">
                            <td height="25" align="center">
                                <table width="100%" height="27" border="0" cellpadding="0" cellspacing="1" bgcolor="#BFD3F2">
                                    <tbody>
                                        <tr class="titlebg">
                                            <td height="25" align="center" valign="middle" bgcolor="#E5F3FA">
                                                <strong>@if($data->role==1)
                                                    家 教 信 息 
                                                    @else 个 人 信 息
                                                    @endif</strong>
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                            </td>
                        </tr>
                        <tr>
                            <td valign="top" height="25" align="left">
                                <table width="100%" border="0" cellpadding="5" cellspacing="1" bordercolor="#ffffff" bgcolor="#BFD3F2">
                                    <tbody> 
                                        @if($data->role==1)
                                        <tr class="trbgc">
                                            <td width="20%" height="30" align="center" valign="middle" bgcolor="#FFFFFF">
                                               可教授科目
                                            </td>
                                            <td colspan=3 width="34%" align="center" valign="middle" bgcolor="#FFFFFF">
                                                <input size= 70 type="text" name="goodat" id="" class="zcinput" value="{{$data->goodat}}"/>
                                            </td>
                                        </tr>
                                        @endif
                                        <tr class="trbgc1">
                                            <td width="20%" height="30" align="center" valign="middle" bgcolor="#FFFFFF">
                                                自我描述<br>
                                                特长展示
                                            </td>
                                            <td height="40" align="left" valign="middle" bgcolor="#FFFFFF">
                                                <textarea name="intro" id="intro" class="zcinput" rows="6" cols="24">{{$data->intro}}</textarea>
                                            </td>
                                            <td colspan="2" align="left" valign="middle" bgcolor="#FFFFFF">
                                                @if($data->role==1)
                                                <span class="yel">
                                                    展示实力，增加你的魅力！比如你竞赛中获得过什么奖项，取得过什么出色的成绩，有哪些过硬的证书之类。</span>
                                                @else
                                                <span class="yel">简单自我介绍和自己的基本情况，比如某个学科不擅长，某些知识点不理解等等</span>
                                                @endif
                                                <span class="green">【请不要使用空格，尽量使用逗号来代替
                                                    ("，")请控制在600字以内，超过文字被自 动删除.】</span>
                                            </td>
                                        </tr>
                                        
                                        <tr class="trbgc">
                                            <td height="30" colspan="4" align="center" valign="middle" bgcolor="#FFFFFF">
                                                <strong class=" p14 red">注意：</strong><strong class=" p12 red">为了保证信息的有效性，修改信息后，我们的工作人员会对你的资料进行重新审核，请慎重！</strong>
                                            </td>
                                        </tr>
                                        <tr class="trbgc">
                                            <td height="30" colspan="4" align="center" valign="middle" bgcolor="#FFFFFF">
                                                <input type="submit" value=" 提 交 " class="button">
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
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

    </form>


</body></html>