<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<!-- saved from url=(0036)http://www.caijj.com/tuser/xgjl.aspx -->
<html xmlns="http://www.w3.org/1999/xhtml"><head><meta http-equiv="Content-Type" content="text/html; charset=UTF-8"><title>
	尚才家教－教员管理后台
</title><link href="./尚才家教－教员信息_files/css.css" rel="stylesheet" type="text/css"><link href="./尚才家教－教员信息_files/admin.css" rel="stylesheet" type="text/css">

    <script language="javascript" type="text/javascript">
		<!--
				
			function $(id)
            {
                return document.getElementById(id)
            }
            function trim(str)
            {
	            regExp1 = /^ */;
	            regExp2 = / *$/;
	            return str.replace(regExp1,'').replace(regExp2,'');
            }
            function CheckEmail(email)
            {
                var pattern = /^([a-zA-Z0-9_-])+(\.([a-zA-Z0-9_-])+)*@([a-zA-Z0-9_-])+(\.([a-zA-Z0-9_-])+)+$/;
                if(!pattern.test(email))
                {
                    return false
                }
                else
                {
                    return true
                }
            } 
		    function CheckForm_1()
		    {	    			       
	           
	            if(trim($("sj").value)=="")
	              {
	                 alert("请输入手机！");
				     $("sj").focus();
	                 return false;
	              }	
	            if(trim($("email").value)=="")
	              {
	                 alert("请输入Email！");
				     $("email").focus();
	                 return false;
	              }			       
	            if(trim($("kjskm").value)=="")
	              {
	                 alert("请选择可教授科目！");
				     $("kjskm_2").focus();
	                 return false;
	              }
	            if(trim($("zwms").value)=="")
	              {
	                 alert("请输入自我描述！");
				     $("zwms").focus();
	                 return false;
	              }	
	            if(trim($("kjsqy").value)=="")
	              {
	                 alert("请选择可教授区域！");
				     $("kjsqy_2").focus();
	                 return false;
	              }	
	            if(trim($("kfdfs").value)=="")
	              {
	                 alert("请选择可辅导方式！");
				     $("kfdfs").focus();
	                 return false;
	              }		       
        						
		    }
		    
		//-->
    </script>

    <script type="text/javascript">
<!--
function moveOption_1(e1, e2){
	try{
		for(var i=0;i<e1.options.length;i++){
			if(e1.options[i].selected)
			{
				var e = e1.options[i];
				if(e.value != "")
				{
				    e2.options.add(new Option(e.text, e.value));
				    e1.remove(i);
				    i=i-1
				}
				
			}
		}
		$('kjskm').value=getvalue($('kjskm_2'));
	}
	catch(e){}
}
function moveOption_2(e1, e2){
	try{
		for(var i=0;i<e1.options.length;i++){
			if(e1.options[i].selected)
			{
				var e = e1.options[i];
				if(e.value != "")
				{
				    e2.options.add(new Option(e.text, e.value));
				    e1.remove(i);
				    i=i-1
				}
				
			}
		}
		$('kjsqy').value=getvalue($('kjsqy_2'));
	}
	catch(e){}
}
function getvalue(geto){
	var allvalue = "";
	for(var i=0;i<geto.options.length;i++){
		allvalue +=geto.options[i].value + ",";
	}
	return allvalue;
}
//-->
    </script>

</head>
<body>
    <form name="form1" method="post" action="./尚才家教－教员信息_files/尚才家教－教员信息.html" id="form1">
<div>
<input type="hidden" name="__VIEWSTATE" id="__VIEWSTATE" value="/wEPDwUKMTAwMzM2MTY3NA9kFgICAw9kFhYCAg8PFgIeBFRleHQFCeWNgeWFq+WTpWRkAgMPDxYCHwAFA+eUt2RkAgQPDxYCHwAFEjM0MjQyMzE5OTEwNzI3MjI4MmRkAgUPZBYEAgEPZBYCAgEPDxYCHwAFDOaxn+iLj+Wkp+WtpmRkAgMPZBYCAgEPDxYCHwAFBue7j+a1jmRkAgYPFgIeB1Zpc2libGVoFgQCAQ9kFgICAQ8PFgIfAAUM5rGf6IuP5aSn5a2mZGQCAw9kFgICAQ8PFgIfAGVkZAIHDw8WAh8ABQbmsZ/oi49kZAIIDw8WAh8ABQzmnKznp5Hmr5XkuJpkZAIJDxYCHwFoFgQCAQ9kFgICAQ8PFgIfAGVkZAIDD2QWAgIBDw8WAh8AZWRkAhMPFgIeCWlubmVyaHRtbAUS5pOF6ZW/5bCP5a2m5YWo56eRZAIUDxYCHwJlZAIWDxYCHwIFAzEwMGRkC9TmMzg+xTuBudPVS5qwu4XsNpA=">
</div>

    

<script language="javascript" type="text/javascript">
		<!--
		    function CheckForm()
		    {
		        if (document.getElementById("username").value=="")
		        { 
			        alert("请输入用户名"); 
			        document.getElementById("username").focus();
			        return false; 
		        } 	
		        if (document.getElementById("password").value=="")
		        { 
			        alert("请输入密码"); 
			        document.getElementById("password").focus();
			        return false; 
		        }			       
        						
		    }
		    
		//-->
</script>

<script language="JavaScript" type="text/javascript"> 
<!-- 
function AddFavorite(sURL, sTitle) 
{ 
    try 
    { 
        window.external.addFavorite(sURL, sTitle); 
    } 
    catch (e) 
    { 
        try 
        { 
            window.sidebar.addPanel(sTitle, sURL, ""); 
        } 
        catch (e) 
        { 
            alert("加入收藏失败，请使用Ctrl+D进行添加"); 
        } 
    } 
} 
function SetHome(obj,vrl){ 
        try{ 
                obj.style.behavior='url(#default#homepage)';obj.setHomePage(vrl); 
        } 
        catch(e){ 
                if(window.netscape) { 
                        try { 
                                netscape.security.PrivilegeManager.enablePrivilege("UniversalXPConnect"); 
                        } 
                        catch (e) { 
                                alert("此操作被浏览器拒绝！\n请在浏览器地址栏输入“about:config”并回车\n然后将 [signed.applets.codebase_principal_support]的值设置为'true',双击即可。"); 
                        } 
                        var prefs = Components.classes['@mozilla.org/preferences-service;1'].getService(Components.interfaces.nsIPrefBranch); 
                        prefs.setCharPref('browser.startup.homepage',vrl); 
                 } 
        } 
} 
//--> 
</script>

<div id="topbar" class="color_999">
    <div class="w950">
        <div class="right">
            <a href="http://www.caijj.com/tuser/xgjl.aspx#" onclick="SetHome(this,window.location)" class="color_999">设为首页</a>&nbsp;
            <a href="http://www.caijj.com/tuser/xgjl.aspx#" onclick="AddFavorite(window.location,document.title)" class="color_999">
                加入收藏</a>&nbsp; <a href="http://www.caijj.com/cjwt/cjwt.html" class="color_999">帮助中心</a>
        </div>
        
        <div class="left" id="ydl">
            十八哥
            欢迎您登陆 <a href="http://www.caijj.com/tuser/main.aspx">进入管理中心主页</a></div>
        
    </div>
</div>
<div id="top">
  <div class="w950">
            <div style="float: right; width:100px; padding-top:25px;">
                <a target="blank" href="tencent://message/?uin=5886626&Site=%E5%B0%9A%E6%89%8D%E5%AE%B6%E6%95%99&Menu=yes"><img border="0" src="./尚才家教－教员信息_files/qq.jpg" alt="QQ咨询"></a>
            </div>
			<div id="top1_divTop" style="float: right; padding: 15px 0 0 0;">
                <img src="./尚才家教－教员信息_files/top_bn.gif" alt="尚才家教">
            </div>
            <div id="logo" style="float:left;">
                <img src="./尚才家教－教员信息_files/logo.jpg" alt="尚才家教">
            </div>
  </div>
</div>
<div id="menu" class="w950">
    <ul id="top1_ulDH">
        <li><a href="http://www.caijj.com/"><span>首页</span></a></li>
        <li id="lan_1"><a href="http://www.caijj.com/teacher/index.aspx?type=1"><span>教员库</span></a></li>
        <li id="lan_2"><a href="http://www.caijj.com/student/index.aspx?type=2"><span>学员库</span></a></li>
        <li id="lan_3"><a href="http://www.caijj.com/teacher/teacher.aspx?type=3"><span>星级教员</span></a></li>
        <li id="lan_4"><a href="http://www.caijj.com/teacher/teacher.aspx?type=4"><span>专业老师</span></a></li>
        <li id="lan_5"><a href="http://www.caijj.com/teacher/teacher.aspx?type=5"><span>大学生家教</span></a></li>
        <li id="lan_6"><a href="http://www.caijj.com/teacher/teacher.aspx?type=6"><span>奥数家教</span></a></li>
        <li id="lan_7"><a href="http://www.caijj.com/teacher/teacher.aspx?type=7"><span>英语家教</span></a></li>
        <li id="lan_8"><a href="http://www.caijj.com/teacher/teacher.aspx?type=8"><span>音乐家教</span></a></li>
        <li id="lan_9"><a href="http://www.caijj.com/cgal/cgal.html?type=9"><span>成功案例</span></a></li>
        <li id="lan_10"><a href="http://www.caijj.com/about/sfbz.html?type=10"><span>收费标准</span></a></li>
    </ul>
</div>

<script language="javascript" type="text/javascript"> 
//js获取url参数的function
function request(paras)
{ 
	var url = location.href; 
	//alert(url);
	var paraString = url.substring(url.indexOf("?")+1,url.length).split("&"); 
	var paraObj = {} 
	for (i=0; j=paraString[i]; i++)
	{ 
		paraObj[j.substring(0,j.indexOf("=")).toLowerCase()] = j.substring(j.indexOf("=")+1,j.length); 
	} 
	var returnValue = paraObj[paras.toLowerCase()]; 
	if(typeof(returnValue)=="undefined")
	{ 
		return ""; 
	}
	else
	{ 
		return returnValue; 
	} 
} 

</script>

<script language="javascript" type="text/javascript">
    var tabl_1 =request("type"); 
	//alert(tabl_1);
	 if(tabl_1 != "")
	 {
	    document.getElementById("lan_"+tabl_1).className = "active";
	}
</script>


    <div id="main" class="w950">
        
<div class="left" style="width: 189px;">
    <div id="grmes">
        <p>&nbsp;
      </p>
        <ul>
          <li>欢迎您 <span class="color_orage"><strong>十八哥</strong></span> ，您的教员编号是 <span class="color_orage">
                <strong>50107</strong></span>。<br>
              请尽快在“证件管理”栏目上传您的有效证件后，支付10元认证费，以使最快获得认证！为确保教员质量，未认证教员在教员库不予显示。<br><a href="http://www.caijj.com/tuser/zxdt.aspx?id=5784"><strong>想优先预约学员？</strong> </a></li>
        </ul>
    </div>
    <div id="managenav">
        <div class="account">
            <h3>
                <span>导航菜单</span></h3>
            <ul>
                <li><a href="http://www.caijj.com/tuser/main.aspx">教员后台首页</a></li>
                <li><a href="http://www.caijj.com/tuser/zxxyxq.aspx">最新学员需求</a></li>
                <li><a href="http://www.caijj.com/tuser/xjjyjs.aspx">星级教员介绍</a></li>
                <li><a href="http://www.caijj.com/tuser/sqjl.aspx">申请记录</a></li>
            </ul>
        </div>
        <div class="hyjf">
            <h3>
                <span>接单流程</span></h3>
            <ul>
                <li><a href="http://www.caijj.com/tuser/zxdt.aspx?id=5663">普通预约学员</a></li>
                <li><a href="http://www.caijj.com/tuser/zxdt.aspx?id=5784">VIP教员</a></li>
                <li><a href="http://www.caijj.com/tuser/zxdt.aspx?id=5664">教员收费标准</a></li>
                <li><a href="http://www.caijj.com/tuser/zxdt.aspx?id=5665">汇款接单手续</a></li>
                <li><a href="http://www.caijj.com/tuser/zxfk.aspx"><img src="./尚才家教－教员信息_files/fukuan.gif" style="border:0px;"></a></li>
                <li><a href="http://www.caijj.com/tuser/zxdt.aspx?id=5697" target="_blank">《在线付款指南》</a></li>
                <li><a href="http://www.caijj.com/tuser/zxfkjl.aspx"><img src="./尚才家教－教员信息_files/jilu.gif" style="border:0px;"></a></li>
            </ul>
        </div>
        <div class="hyjf">
            <h3>
                <span>状态操作</span></h3>
            <ul>
                <li><a href="http://www.caijj.com/tuser/xgmm.aspx">密码修改</a></li>
                <li><a href="./尚才家教－教员信息_files/尚才家教－教员信息.html">教员简历修改</a></li>
                <li><a href="http://www.caijj.com/tuser/xgzt.aspx">简历状态修改</a></li>
                <li><a href="http://www.caijj.com/tuser/wzgl.aspx">文章管理</a></li>
                <li><a href="http://www.caijj.com/tuser/zpgl.aspx">照片管理</a></li>
                <li><a href="http://www.caijj.com/tuser/zsgl.aspx">证件管理</a></li>
                <li><a href="http://www.caijj.com/tuser/dssxjl.aspx">定时刷新简历</a></li>
            </ul>
        </div>
        <div class="hyjf">
            <h3>
                <span>家教帮手</span></h3>
            <ul>
                <li><a href="http://map.baidu.com/" target="_blank">地图公交</a></li>
                <li><a href="http://map.baidu.com/subways/index.html?c=beijing" target="_blank">北京地铁</a></li>
                <li><a href="http://wenku.baidu.com/edu/index" target="_blank">教案课件</a></li>
            </ul>
        </div>
    </div>
    <div align="center">
        <a href="http://www.caijj.com/tuser/exit.aspx"><img src="./尚才家教－教员信息_files/out.gif" style="border:0px;"></a>
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
                                                <span id="zsxm">十八哥</span>
                                                &nbsp;
                                            </td>
                                        </tr>
                                        <tr class="trbgc1">
                                            <td height="25" align="right" valign="middle" bgcolor="#FFFFFF">
                                                性别：
                                            </td>
                                            <td width="31%" height="25" align="left" valign="middle" bgcolor="#FFFFFF">
                                                <span id="xb">男</span>
                                            </td>
                                            <td width="14%" align="right" valign="middle" bgcolor="#FFFFFF">
                                                身份证/护照:
                                            </td>
                                            <td width="42%" align="left" valign="middle" bgcolor="#FFFFFF">
                                                <span id="sfzh">342423199107272282</span>
                                            </td>
                                        </tr>
                                        <tr id="tr1" class="trbgc1">
	<td align="right" valign="middle" bgcolor="#FFFFFF">
                                                毕业/就读高校：
                                            </td>
	<td align="left" valign="middle" bgcolor="#FFFFFF">
                                                <span id="szxx">江苏大学</span>
                                                &nbsp;
                                            </td>
	<td height="25" align="right" valign="middle" bgcolor="#FFFFFF">
                                                专业：
                                            </td>
	<td height="25" align="left" valign="middle" bgcolor="#FFFFFF">
                                                <span id="zy">经济</span>
                                                &nbsp;
                                            </td>
</tr>

                                        
                                        <tr class="trbgc">
                                            <td height="25" align="right" valign="middle" bgcolor="#FFFFFF">
                                                来自省份：
                                            </td>
                                            <td height="25" align="left" valign="middle" bgcolor="#FFFFFF">
                                                <span id="lzsf">江苏</span>
                                                &nbsp;
                                            </td>
                                            <td align="right" valign="middle" bgcolor="#FFFFFF">
                                                目前身份：
                                            </td>
                                            <td align="left" valign="middle" bgcolor="#FFFFFF">
                                                <span id="mqsf">本科毕业</span>
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
                                            <td height="25" align="right" valign="middle" bgcolor="#FFFFFF">
                                                电 话：
                                            </td>
                                            <td height="25" align="left" valign="middle" bgcolor="#FFFFFF">
                                                <input name="dh" type="text" id="dh" maxlength="50" size="22" class="zcinput">
                                            </td>
                                            <td align="right" valign="middle" bgcolor="#FFFFFF">
                                                手 机：
                                            </td>
                                            <td align="left" valign="middle" bgcolor="#FFFFFF">
                                                <input name="sj" type="text" id="sj" maxlength="15" size="22" class="zcinput" value="18141915826">
                                            </td>
                                        </tr>
                                        <tr class="trbgc">
                                            <td height="25" align="right" valign="middle" bgcolor="#FFFFFF">
                                                MSN：
                                            </td>
                                            <td height="25" align="left" valign="middle" bgcolor="#FFFFFF">
                                                <input name="msn" type="text" id="msn" maxlength="50" size="22" class="zcinput">
                                            </td>
                                            <td align="right" valign="middle" bgcolor="#FFFFFF">
                                                QQ：
                                            </td>
                                            <td align="left" valign="middle" bgcolor="#FFFFFF">
                                                <input name="qq" type="text" id="qq" maxlength="50" size="22" class="zcinput">
                                            </td>
                                        </tr>
                                        <tr class="trbgc1">
                                            <td height="25" align="right" valign="middle" bgcolor="#FFFFFF">
                                                E_mail：
                                            </td>
                                            <td height="25" align="left" valign="middle" bgcolor="#FFFFFF">
                                                <input name="email" type="text" id="email" maxlength="50" size="22" class="zcinput" value="514504918@qq.com">
                                            </td>
                                            <td align="right" valign="middle" bgcolor="#FFFFFF">
                                                邮 编：
                                            </td>
                                            <td align="left" valign="middle" bgcolor="#FFFFFF">
                                                <input name="yb" type="text" id="yb" size="22" class="zcinput">
                                            </td>
                                        </tr>
                                        <tr class="trbgc">
                                            <td height="25" align="right" valign="middle" bgcolor="#FFFFFF">
                                                住址：
                                            </td>
                                            <td height="25" align="left" valign="middle" bgcolor="#FFFFFF">
                                                <input name="txdz" type="text" id="txdz" size="22" class="zcinput">
                                            </td>
                                            <td align="right" valign="middle" bgcolor="#FFFFFF">
                                            </td>
                                            <td align="left" valign="middle" bgcolor="#FFFFFF">
                                                &nbsp;
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
                                                <strong>家 教 信 息 </strong>
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
                                        <tr class="trbgc">
                                            <td width="20%" height="30" align="center" valign="middle" bgcolor="#FFFFFF">
                                                可教授科目
                                                <br>
                                                (最多选15项，多余部分将被系统自动丢弃！)
                                            </td>
                                            <td width="28%" height="30" align="left" valign="middle" bgcolor="#FFFFFF">
                                                <select name="kjskm_1" id="kjskm_1" size="10" class="zcinput" style="width: 170px;">
                                                    <option value="">------------------ </option>
                                                    <option value="">学龄前课程 </option>
                                                    <option value=""></option>
                                                    <option value="小学全科">小学全科 </option>
                                                    <option value="小学语文">小学语文 </option>
                                                    <option value="小学数学">小学数学 </option>
                                                    <option value="小学英语">小学英语 </option>
                                                    <option value="小学奥数">小学奥数 </option>
                                                    <option value="">------------------ </option>
                                                    <option value="初中全科">初中全科 </option>
                                                    <option value="初中数理化">初中数理化 </option>
                                                    <option value="初中历史">初中历史 </option>
                                                    <option value="初中地理">初中地理 </option>
                                                    <option value="初中生物">初中生物 </option>
                                                    <option value="初中政治">初中政治 </option>
                                                    <option value="初一初二语文">初一初二语文 </option>
                                                    <option value="初一初二英语">初一初二英语 </option>
                                                    <option value="初一初二数学">初一初二数学 </option>
                                                    <option value="初一初二物理">初一初二物理 </option>
                                                    <option value="初一初二化学">初一初二化学 </option>
                                                    <option value=""></option>
                                                    <option value="初三语文">初三语文 </option>
                                                    <option value="初三英语">初三英语 </option>
                                                    <option value="初三数学">初三数学 </option>
                                                    <option value="初三物理">初三物理 </option>
                                                    <option value="初三化学">初三化学 </option>
                                                    <option value="初中奥数">初中奥数 </option>
                                                    <option value="中考心理辅导">中考心理辅导 </option>
                                                    <option value="">------------------ </option>
                                                    <option value="高中全科">高中全科 </option>
                                                    <option value="高中文综">高中文综 </option>
                                                    <option value="高中数理化">高中数理化 </option>
                                                    <option value="高中历史">高中历史 </option>
                                                    <option value="高中地理">高中地理 </option>
                                                    <option value="高中政治">高中政治 </option>
                                                    <option value="高中生物">高中生物 </option>
                                                    <option value="高一高二语文">高一高二语文 </option>
                                                    <option value="高一高二英语">高一高二英语 </option>
                                                    <option value="高一高二数学">高一高二数学 </option>
                                                    <option value="高一高二物理">高一高二物理 </option>
                                                    <option value="高一高二化学">高一高二化学 </option>
                                                    <option value=""></option>
                                                    <option value="高三语文">高三语文 </option>
                                                    <option value="高三英语">高三英语 </option>
                                                    <option value="高三数学">高三数学 </option>
                                                    <option value="高三物理">高三物理 </option>
                                                    <option value="高三化学">高三化学 </option>
                                                    <option value="高中奥数">高中奥数 </option>
                                                    <option value="高考心理辅导">高考心理辅导 </option>
                                                    <option value="">------------------ </option>
                                                    <option value="大学高等数学">大学高等数学 </option>
                                                    <option value="精准普通话">精准普通话 </option>
                                                    <option value=""></option>
                                                    <option value="">----英语---------- </option>
                                                    <option value="初级英语口语">初级英语口语 </option>
                                                    <option value="初级新概念英语">初级新概念英语 </option>
                                                    <option value="初级牛津英语">初级牛津英语 </option>
                                                    <option value="初级剑桥英语">初级剑桥英语 </option>
                                                    <option value="英语四级">英语四级 </option>
                                                    <option value="英语六级">英语六级 </option>
                                                    <option value="3E英语">3E英语 </option>
                                                    <option value="GRE">GRE </option>
                                                    <option value="托福">托福 </option>
                                                    <option value="雅思">雅思 </option>
                                                    <option value="商务英语">商务英语 </option>
                                                    <option value="精准英语语音">精准英语语音 </option>
                                                    <option value="高级新概念英语">高级新概念英语 </option>
                                                    <option value="高级牛津英语">高级牛津英语 </option>
                                                    <option value="高级剑桥英语">高级剑桥英语 </option>
                                                    <option value="高级英语口语">高级英语口语 </option>
                                                    <option value=""></option>
                                                    <option value="">----小语种-------- </option>
                                                    <option value="初级日语">初级日语 </option>
                                                    <option value="初级法语">初级法语 </option>
                                                    <option value="初级德语">初级德语 </option>
                                                    <option value="初级韩语">初级韩语 </option>
                                                    <option value="初级俄语">初级俄语 </option>
                                                    <option value="初级希腊语">初级希腊语 </option>
                                                    <option value="初级瑞典语">初级瑞典语 </option>
                                                    <option value="初级荷兰语">初级荷兰语 </option>
                                                    <option value="初级意大利语">初级意大利语 </option>
                                                    <option value="初级西班牙语">初级西班牙语 </option>
                                                    <option value="初级葡萄牙语">初级葡萄牙语 </option>
                                                    <option value="初级阿拉伯语">初级阿拉伯语 </option>
                                                    <option value="初级乌克兰语">初级乌克兰语 </option>
                                                    <option value="高级日语">高级日语 </option>
                                                    <option value="高级法语">高级法语 </option>
                                                    <option value="高级德语">高级德语 </option>
                                                    <option value="高级韩语">高级韩语 </option>
                                                    <option value="高级俄语">高级俄语 </option>
                                                    <option value="高级希腊语">高级希腊语 </option>
                                                    <option value="高级瑞典语">高级瑞典语 </option>
                                                    <option value="高级荷兰语">高级荷兰语 </option>
                                                    <option value="高级意大利语">高级意大利语 </option>
                                                    <option value="高级西班牙语">高级西班牙语 </option>
                                                    <option value="高级葡萄牙语">高级葡萄牙语 </option>
                                                    <option value="高级阿拉伯语">高级阿拉伯语 </option>
                                                    <option value="高级乌克兰语">高级乌克兰语 </option>
                                                    <option value=""></option>
                                                    <option value="">----艺术---------- </option>
                                                    <option value="摄影">摄影 </option>
                                                    <option value="书法">书法 </option>
                                                    <option value="美术">美术 </option>
                                                    <option value="雕塑">雕塑 </option>
                                                    <option value="卡通画">卡通画 </option>
                                                    <option value="中国画">中国画 </option>
                                                    <option value="西洋画">西洋画 </option>
                                                    <option value="交谊舞">交谊舞 </option>
                                                    <option value="民族舞">民族舞 </option>
                                                    <option value="芭蕾舞">芭蕾舞 </option>
                                                    <option value="卡拉OK歌咏">卡拉OK歌咏 </option>
                                                    <option value="声乐（美声）">声乐（美声） </option>
                                                    <option value="声乐（民族）">声乐（民族） </option>
                                                    <option value="作曲与音乐理论">作曲与音乐理论 </option>
                                                    <option value=""></option>
                                                    <option value="">----乐器---------- </option>
                                                    <option value="钢琴">钢琴 </option>
                                                    <option value="电子琴">电子琴 </option>
                                                    <option value="小提琴">小提琴 </option>
                                                    <option value="大提琴">大提琴 </option>
                                                    <option value="长笛">长笛 </option>
                                                    <option value="吉它">吉它 </option>
                                                    <option value="手风琴">手风琴 </option>
                                                    <option value="萨克斯">萨克斯 </option>
                                                    <option value="单簧管">单簧管 </option>
                                                    <option value="双簧管">双簧管 </option>
                                                    <option value="小号">小号 </option>
                                                    <option value="大号">大号 </option>
                                                    <option value="圆号">圆号 </option>
                                                    <option value="打击乐">打击乐 </option>
                                                    <option value="二胡">二胡 </option>
                                                    <option value="笛子">笛子 </option>
                                                    <option value="琵琶">琵琶 </option>
                                                    <option value="古筝">古筝 </option>
                                                    <option value="唢呐">唢呐 </option>
                                                    <option value="扬琴">扬琴 </option>
                                                    <option value="柳琴">柳琴 </option>
                                                    <option value="中阮">中阮 </option>
                                                    <option value="古琴">古琴 </option>
                                                    <option value="三弦">三弦 </option>
                                                    <option value="板胡">板胡 </option>
                                                    <option value="地方与民族乐器">地方与民族乐器 </option>
                                                    <option value="其他西洋乐器">其他西洋乐器 </option>
                                                    <option value=""></option>
                                                    <option value="">----计算机-------- </option>
                                                    <option value="计算机基本操作">计算机基本操作 </option>
                                                    <option value="初级数据库">初级数据库 </option>
                                                    <option value="高级数据库">高级数据库 </option>
                                                    <option value="网页设计与制作">网页设计与制作 </option>
                                                    <option value="计算机应用能力初级">计算机应用能力初级 </option>
                                                    <option value="计算机应用能力中级">计算机应用能力中级 </option>
                                                    <option value="Linux或Unix">Linux或Unix </option>
                                                    <option value="初级网站开发">初级网站开发 </option>
                                                    <option value="高级网站开发">高级网站开发 </option>
                                                    <option value="图像处理软件">图像处理软件 </option>
                                                    <option value="动画制作">动画制作 </option>
                                                    <option value="计算机绘图">计算机绘图 </option>
                                                    <option value="桌面出版技术">桌面出版技术 </option>
                                                    <option value="程序设计初级">程序设计初级 </option>
                                                    <option value="程序设计高级">程序设计高级 </option>
                                                    <option value="初级微软证书">初级微软证书 </option>
                                                    <option value=""></option>
                                                    <option value="">----棋类/体育----- </option>
                                                    <option value="围棋">围棋 </option>
                                                    <option value="中国象棋">中国象棋 </option>
                                                    <option value="国际象棋">国际象棋 </option>
                                                    <option value="中国武术">中国武术 </option>
                                                    <option value="气功">气功 </option>
                                                    <option value="拳击柔道跆拳道">拳击柔道跆拳道 </option>
                                                    <option value="跆拳道">跆拳道 </option>
                                                    <option value="空手道">空手道 </option>
                                                    <option value="瑜珈">瑜珈 </option>
                                                    <option value="体操">体操 </option>
                                                    <option value="健身减肥养身">健身减肥养身 </option>
                                                    <option value="滑雪滑冰旱冰">滑雪滑冰旱冰 </option>
                                                    <option value="游泳潜水跳水">游泳潜水跳水 </option>
                                                    <option value="高尔夫">高尔夫 </option>
                                                    <option value="保龄球">保龄球 </option>
                                                    <option value="乒乓球">乒乓球 </option>
                                                    <option value="羽毛球">羽毛球 </option>
                                                    <option value="网球">网球 </option>
                                                    <option value="足球">足球 </option>
                                                    <option value="篮球">篮球 </option>
                                                    <option value="排球">排球 </option>
                                                    <option value="体育健身类其他">体育健身类其他 </option>
                                                </select>
                                            </td>
                                            <td width="18%" align="center" valign="middle" bgcolor="#FFFFFF">
                                                <input name="FTianJia" onclick="moveOption_1(document.getElementById(&#39;kjskm_1&#39;),document.getElementById(&#39;kjskm_2&#39;))" class="butblue" value="选 取&gt;&gt;&gt;" type="button">
                                                <br>
                                                选中左侧项目点“选取”即可添加；选中右侧项目点“删除”即可删除<br>
                                                <input name="FShanChu" onclick="moveOption_1(document.getElementById(&#39;kjskm_2&#39;),document.getElementById(&#39;kjskm_1&#39;))" class="butblue" value="&lt;&lt;&lt;删 除" type="button">
                                                <input name="first_subject" type="hidden">
                                                <br>
                                            </td>
                                            <td width="34%" align="center" valign="middle" bgcolor="#FFFFFF">
                                                <select name="kjskm_2" id="kjskm_2" size="10" multiple="multiple" class="zcinput" style="width: 170px;">
                                                    <option value="小学全科">小学全科 </option>
                                                </select>
                                                <input type="hidden" name="first_subject">
                                            </td>
                                        </tr>
                                        <tr class="trbgc1">
                                            <td height="30" align="center" valign="middle" bgcolor="#FFFFFF">
                                                其他科目
                                            </td>
                                            <td height="30" align="left" valign="middle" bgcolor="#FFFFFF">
                                                <input name="qtkm" type="text" id="qtkm" size="22" class="zcinput">
                                            </td>
                                            <td colspan="2" align="left" valign="middle" bgcolor="#FFFFFF">
                                                <span class="yel">【请不要使用空格，尽量使用逗号来代替("，")】</span>
                                            </td>
                                        </tr>
                                        <tr class="trbgc">
                                            <td height="30" align="center" valign="middle" bgcolor="#FFFFFF">
                                                所获证书
                                            </td>
                                            <td height="30" align="left" valign="middle" bgcolor="#FFFFFF">
                                                <input name="hdzs" type="text" id="hdzs" size="22" class="zcinput">
                                            </td>
                                            <td colspan="2" align="left" valign="middle" bgcolor="#FFFFFF" class="yel">
                                                比如：英语四级，六级
                                            </td>
                                        </tr>
                                        <tr class="trbgc1">
                                            <td height="40" align="center" valign="middle" bgcolor="#FFFFFF">
                                                自我描述<br>
                                                特长展示
                                            </td>
                                            <td height="40" align="left" valign="middle" bgcolor="#FFFFFF">
                                                <textarea name="zwms" id="zwms" class="zcinput" rows="6" cols="24">擅长小学全科</textarea>
                                            </td>
                                            <td colspan="2" align="left" valign="middle" bgcolor="#FFFFFF">
                                                <span class="yel">展示实力，增加你的魅力！比如你竞赛中获得过什么奖项，取得过什么出色的成绩，有哪些过硬的证书之类。</span><span class="green">【请不要使用空格，尽量使用逗号来代替
                                                    ("，")请控制在600字以内，超过文字被自 动删除.】</span>
                                            </td>
                                        </tr>
                                        <tr class="trbgc">
                                            <td height="30" align="center" valign="middle" bgcolor="#FFFFFF">
                                                可授课区域<br>
                                                (最多选18项，多余部分将被系统自动丢弃！)
                                            </td>
                                            <td height="30" align="left" valign="middle" bgcolor="#FFFFFF">
                                                <select name="kjsqy_1" id="kjsqy_1" size="8" class="zcinput" style="width: 170px;">
                                                    <option value="无要求">无要求 </option>
                                                    <option value="海淀">海淀 </option>
                                                    <option value="朝阳">朝阳 </option>
                                                    <option value="东城">东城 </option>
                                                    <option value="西城">西城 </option>
                                                    <option value="崇文">崇文 </option>
                                                    <option value="宣武">宣武 </option>
                                                    <option value="丰台">丰台 </option>
                                                    <option value="石景山">石景山 </option>
                                                    <option value="房山">房山 </option>
                                                    <option value="门头沟">门头沟 </option>
                                                    <option value="通州">通州 </option>
                                                    <option value="昌平">昌平 </option>
                                                    <option value="密云">密云 </option>
                                                    <option value="怀柔">怀柔 </option>
                                                    <option value="延庆">延庆 </option>
                                                    <option value="平谷">平谷 </option>
                                                    <option value="大兴">大兴 </option>
                                                    <option value="顺义">顺义 </option>
                                                </select>
                                            </td>
                                            <td align="center" valign="middle" bgcolor="#FFFFFF">
                                                <input name="FTianJia2" onclick="moveOption_2($(&#39;kjsqy_1&#39;), $(&#39;kjsqy_2&#39;))" class="butblue" value="选 取&gt;&gt;&gt;" type="button">
                                                <br>
                                                选中左侧项目点“选取”即可添加；选中右侧项目点“删除”即可删除<br>
                                                <input name="FShanChu2" onclick="moveOption_2($(&#39;kjsqy_2&#39;), $(&#39;kjsqy_1&#39;))" class="butblue" value="&lt;&lt;&lt;删 除" type="button">
                                            </td>
                                            <td align="center" valign="middle" bgcolor="#FFFFFF">
                                                <input type="hidden" name="teach_place">
                                                <select name="kjsqy_2" id="kjsqy_2" size="8" multiple="multiple" class="put" style="width: 170px;">
                                                    <option value="海淀">海淀 </option>
                                                </select>
                                            </td>
                                        </tr>
                                        <tr class="trbgc1">
                                            <td height="30" align="center" valign="middle" bgcolor="#FFFFFF">
                                                家教简历<br>
                                                学员评价<br>
                                                教学成果
                                            </td>
                                            <td height="30" align="left" valign="middle" bgcolor="#FFFFFF">
                                                <textarea name="jjjl" id="jjjl" class="zcinput" rows="7" cols="24"></textarea>
                                            </td>
                                            <td colspan="2" align="left" valign="middle" bgcolor="#FFFFFF">
                                                <span class="yel">这些内容是对你教学水平最有力和最直接的反映！是学员选择你的一项重要依据。格式如：1.2005年10月，**区初三英语，期终学员从全班第40名上升至第5名。1.2005年11月，**区高一数学，期终学员从50分上升至90分</span>。<span class="green">字数600字以内. </span>
                                            </td>
                                        </tr>
                                        <tr class="trbgc">
                                            <td height="30" align="center" valign="middle" bgcolor="#FFFFFF">
                                                辅导方式
                                            </td>
                                            <td height="30" colspan="3" align="left" valign="middle" bgcolor="#FFFFFF">
                                                <select name="kfdfs" id="kfdfs">
	<option value="请在列表选择">请在列表选择</option>
	<option selected="selected" value="本人上门">本人上门</option>
	<option value="学生上门">学生上门</option>
	<option value="网上辅导">网上辅导</option>
</select>
                                            </td>
                                        </tr>
                                        <tr class="trbgc1">
                                            <td height="30" align="center" valign="middle" bgcolor="#FFFFFF">
                                                薪水要求
                                            </td>
                                            <td height="30" align="left" valign="middle" bgcolor="#FFFFFF">
                                                <textarea name="xsyq" id="xsyq" class="zcinput" rows="5" cols="24">100</textarea>
                                            </td>
                                            <td colspan="2" align="left" valign="middle" bgcolor="#FFFFFF">
                                                <span class="green">【请不要使用空格，尽量使用逗号来代替("，")】</span>
                                                <br>
                                                <span class="yel">默认为接受本站的薪水标准</span><a class="STYLE7" target="_blank" href="http://www.caijj.com/about/zjjsfbz.html">查看详细的报酬标准</a><span class="yel">，如果你不愿接受本站的默认标准，请详细的写出你自己的薪水要求，比如：“小学**元每小时；初一初二**元每小时；初中奥数**元每小时；高中奥数**元每小时；成人**元每小时；钢琴**元每小时”
                                                </span>
                                            </td>
                                        </tr>
                                         <tr class="trbgc">
                                             <td height="30" align="center" valign="middle" bgcolor="#FFFFFF">
                                                审核
                                            </td>
                                            <td height="30" colspan="3" align="left" valign="middle" bgcolor="#FFFFFF">
                                                <select name="kfdfs" id="kfdfs">
    <option selected="selected" value=0 >未审核</option>
    <option value=1>审核通过</option>
    <option value=2 >审核拒绝</option>
    
</select>
                                            </td>
                                        </tr>
                                        <tr class="trbgc">
                                            <td height="30" colspan="4" align="center" valign="middle" bgcolor="#FFFFFF">
                                                <strong class=" p14 red">注意：</strong><strong class=" p12 red">为了保证信息的有效性，修改信息后，我们的工作人员会对你的资料进行重新审核，请慎重！</strong>
                                            </td>
                                        </tr>
                                        <tr class="trbgc">
                                            <td height="30" colspan="4" align="center" valign="middle" bgcolor="#FFFFFF">
                                                <input type="submit" name="Button3" value=" 提 交 " onclick="return CheckForm_1();" id="Button3" class="button"><input name="kjskm" type="hidden" id="kjskm" value="小学全科,">
                                                <input name="kjsqy" type="hidden" id="kjsqy" value="海淀,">
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
              <tbody><tr>
                <td height="30" valign="middle">
				<a href="http://www.caijj.com/teacher/register.aspx" target="_blank">做家教</a> | <a href="http://www.caijj.com/student/register.aspx" target="_blank">请家教</a> | <a href="http://www.caijj.com/teacher/jjss.aspx">教员搜索</a> |  <a href="http://www.caijj.com/jyfl/jyflall.htm">教员分类</a> | <a href="http://www.caijj.com/jycx/jycx.html">教员查询</a>  | <a href="http://www.caijj.com/xxff/xxff.html">学习方法</a> | <a href="http://www.caijj.com/ksjy/ksjy.html">考试经验</a> | <a href="http://www.caijj.com/jzkt/jzkt.html">家长课堂</a> | <a href="http://www.caijj.com/jjjy/jjjy.html">家教经验</a> | <a href="http://www.caijj.com/jjxg/jjxg.html">家教相关</a> | <a href="http://www.caijj.com/about/way.html">公司路线</a> | <a href="http://www.caijj.com/cjwt/cjwt.html">
                    常见问题</a> | <a href="http://www.caijj.com/about/hkjdsx.html">汇款方式</a> | <a href="http://www.caijj.com/about/contactus.html" target="_blank">联系我们</a>				</td>
              </tr>
            </tbody></table>
        </div>
        <div class="body">
            联系电话：010-62642730　62643630　客服邮箱：caijjkf@163.com　<br>
            版权所有：北京尚才家教 【<a href="http://www.caijj.com/" target="_blank">北京家教</a>】　工信部备案号:<a href="http://www.miibeian.gov.cn/" target="_blank">京ICP备09031430号</a><br>
            家教服务中心：北京市海淀区清华大学南门海升大厦A座204室<br>
            Powered by www.caijj.com copyright 2009-2015<script src="./尚才家教－教员信息_files/stat.php" language="JavaScript"></script><script src="./尚才家教－教员信息_files/core.php" charset="utf-8" type="text/javascript"></script><a href="http://www.cnzz.com/stat/website.php?web_id=2467102" target="_blank" title="站长统计"><img border="0" hspace="0" vspace="0" src="./尚才家教－教员信息_files/pic1.gif"></a>
        </div>
</div>

    </form>


</body></html>