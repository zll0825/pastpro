<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml"><head>
<meta http-equiv="content-type" content="text/html; charset=UTF-8">
    <title>【家教成功案例】 - 北京尚才家教</title>
    <link href="/css/css.css" rel="stylesheet" type="text/css">
</head>
<body>
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
<script type="text/javascript"> 
    //js获取cookie 
    var acookie=document.cookie.split("; "); 
    function getck(sname) 
    {
        //获取单个cookies 
        for(var i=0;i<acookie.length;i++)
        { 
            var arr=acookie[i].split("="); 
            if(sname==arr[0])
            { 
                if(arr.length>1) 
                return unescape(arr[1]); 
                else 
                return ""; 
            }
        } 
        return ""; 
    } 
</script> 

<script language="javascript" type="text/javascript">
		<!--
		    function checkf()
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

 <div id="topbar" class="color_999">
        <div class="w950">
            <div class="right">
             
            </div>
           <form action="../other/login.aspx" method="post" id="form11"> <div class="left">
               
            </div></form>
        </div>
    </div>
    <div id="top">
        <div class="w950">

            <div style="float: right; width:100px; padding-top:25px;">
               
            </div>
			<div style="float: right; padding: 25px 0 0 0;">
                <h1>添加评论</h1>
            </div>
            <div id="logo" style="float:left;">
                <h1>后台管理中心</h1>
  </div>
  </div>
</div>
<div id="menu" class="w950">
    <ul>
        <li style="width:14%"  ><a href=""><span>权限管理中心</span></a></li>
        <li  style="width:14%"  id="lan_1"><a href="{{url('alluser')}}"><span>全部用户</span></a></li>
        <li  style="width:14%"  id="lan_1"><a href="{{url('checklist')}}"><span>用户审核</span></a></li>
        <li  style="width:14%"  id="lan_2"><a href="{{url('orderlist')}}"><span>订单审核</span></a></li>
         <li    style="width:14%"  id="lan_2"><a href="{{url('allorder')}}"><span>全部订单</span></a></li>
        
        <li  style="width:14%"  id="lan_9"><a href="{{url('resorder')}}"><span>订单跟踪</span></a></li>
        <li  style="width:14%"  id="lan_10"><a href="{{url('example')}}"><span>成功案例</span></a></li>
    </ul>
</div>
     
    <div id="main" class="w950">
        <div>
            <div class="guide">
                <img src="/images/d05.gif" align="absbottom" hspace="2" vspace="2">当前位置： <span class="red1"><a href="#">首页</a></span> &gt; <strong>成功案例</strong>            </div>
            <!--列表-->
            <div class="box2" style="margin-bottom: 5px;">
                <div class="title">
                    <h2>
                        成功案例</h2>
                </div>
                <div class="jyborder">      
                    <ol class="line03">
                        <form action="" method="post">
                      <table>
                        <tr>
                        <td>学员编号</td>
                        <td>教师编号</td>
                        <td>教学科目</td>
                        <td>结课时间</td>
                        <td>
                            教师心得
                        </td>
                    </tr>
                         <tr>
                        <td>{{$add->sid}}</td>
                        <td>{{$add->tid}}</td>
                        <td>{{$add->subject}}</td>
                        <td>{{ date('Y/m/d',$add->pubtime) }}</td>
                        <td>
                           <input type="text"  name="comment"/>
                        </td>
                    </tr>
                    <tr>
                         {{ csrf_field() }}
                         
                    </tr>
                          
                      </table>  
                      <p><input type="submit" value ="提交评论" /></p>
                       </form>     
                    </ol>
                    <div class="num">
                        <table align="right" border="0" cellpadding="0" cellspacing="0" height="25">
                            <tbody>
                                <tr>                                   
                                    <td>
                                       <span class="overview">共<b> <span class="yel">1 </span></b>页</span><a href="#" class="overview">首页</a><a href="#" class="hotFont">1</a><a href="#" class="d-ou">尾页</a> 
                                    </td>
                                </tr>
                            </tbody>
                        </table>
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


</body></html>