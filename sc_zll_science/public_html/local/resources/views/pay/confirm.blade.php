<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<!-- saved from url=(0044)http://www.caijj.com/about/sfbz.html?type=10 -->
<html xmlns="http://www.w3.org/1999/xhtml"><head><meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <title>【北京家教收费标准】- 北京尚才家教</title>
    <link href="css/confirm.css" rel="stylesheet" type="text/css">
</head>
<style>
    
</style>
<body>
    @include('header')
<div id="menu" class="w950">

 <ul id="top1_ulDH">
        <li id="l0" style="width:20%"><a href="{{url('/')}}" ><span>首页</span></a></li>
        <li id="l1" style="width:16%" id="lan_1"><a href="{{url('/teacher')}}"><span>教员库</span></a></li>
        <li id="l2" style="width:16%" id="lan_2"><a href="{{url('/student')}}"><span>学员库</span></a></li>
        <li id="l3" style="width:16%" id="lan_9"><a href="{{url('/examplelist')}}"><span>成功案例</span></a></li>
        <li id="l4" style="width:16%" id="lan_10"><a href="{{url('/fee')}}"><span>收费标准</span></a></li>
        <li id="l5" style="width:16%" id="lan_10"><a href="{{url('/fy')}}"><span>学习工具</span></a></li>
    </ul>
</div>
    <div style="height:500px;" class="w950">
        <h1  id='zhifu'>尚才教育 请确认订单支付</h1>
        <form action="payzf" method='post' >
            {!! csrf_field() !!}
            <p style="margin:auto">本次订单总金额: <input type="" value="{{$mon}}" /></p>
            <input type="hidden" name="v_amount" value="{{$row['v_amount']}}"/>
            <input type="hidden" name="v_moneytype" value="{{$row['v_moneytype']}}"/>
            <input type="hidden" name="v_oid" value="{{$row['v_oid']}}"/>
            <input type="hidden" name="v_mid" value="{{$row['v_mid']}}"/>
            <input type="hidden" name="v_url" value="{{$row['v_url']}}"/>
            <input type="hidden" name="v_md5info" value="{{$row['v_md5info']}}"/>
            <input type="submit" value='提交' />
        </form>
    </div>     

    </div>
    <div id="footbar" class="w950">
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
            Powered by www.caijj.com copyright 2009-2015<script src="images/stat.php" language="JavaScript"></script><script src="images/core.php" charset="utf-8" type="text/javascript"></script><a href="http://www.cnzz.com/stat/website.php?web_id=2467102" target="_blank" title="站长统计"><img border="0" hspace="0" vspace="0" src="images/pic1.gif"></a>
        </div>
    </div>


</body></html>