<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<!-- saved from url=(0044)http://www.caijj.com/about/sfbz.html?type=10 -->
<html xmlns="http://www.w3.org/1999/xhtml"><head><meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <title>【北京家教收费标准】- 北京尚才家教</title>
    <link href="css/confirm.css" rel="stylesheet" type="text/css">
    <script src="/jquery-1.10.1.min.js"></script>
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
        <li id="l5" class="active" style="width:16%" id="lan_10"><a href="{{url('/fy')}}"><span>学习工具</span></a></li>
    </ul>
    </div>
        <div style="float:right">
                <h1>同学 轻松一下!!</h1>
                <input type="text" id = 'scc'><br>
                <br />
                <input type="button" value='百度一键查询'>
                <input type="button" value='360一键查询'>
                <input type="button" value='ok搜索'>
                <p></p>
                <input type="button" value='面包搜索'>
                <input type="button" value='百度云搜索'>
                <input type="button" value="BT搜索" />
                <span style="color='green">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span>
    <ul></ul>

    
    <a href=""></a>
        </div>
    <div style="height:500px;" class="w950">
        <h1  id='zhifu'>尚才会员 尊享在线翻译</h1>
        <p>亲!!!  在下面的框框里面输入东西就好le!</p>
        <textarea name="" id="cont" cols="30" rows="12"></textarea>
        <textarea name="" id="export" cols="30" rows="12"></textarea>

        <p>
            <select name="method" id="meth">
                <option value="zht">汉译日</option>
                <option value="zh" >汉译英</option>
                <option value="en" >英译汉</option>
            </select>
        </p>

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

<script>
    $('#cont').keyup(function(){
        var url = '/fanyi/'+$('#cont').val()+'/'+$('#meth').val();
        if($('#cont').val().length==0){
            $('#export').html('');
        }

        $.get(url,function(ev){
            $('#export').html(ev);
        });
    });

    $('#l0').mouseover(function(){
            $('#l0').addClass("active");
            $('#l1').removeClass("active");
            $('#l2').removeClass("active");
            $('#l3').removeClass("active");
            $('#l4').removeClass("active");
            $('#l5').removeClass("active");
        });
        $('#l1').mouseover(function(){
            $('#l1').addClass("active");
            $('#l0').removeClass("active");
            $('#l2').removeClass("active");
            $('#l3').removeClass("active");
            $('#l4').removeClass("active");
            $('#l5').removeClass("active");
        });
        $('#l2').mouseover(function(){
            $('#l2').addClass("active");
            $('#l1').removeClass("active");
            $('#l0').removeClass("active");
            $('#l3').removeClass("active");
            $('#l4').removeClass("active");
            $('#l5').removeClass("active");
        });
        $('#l3').mouseover(function(){
            $('#l3').addClass("active");
            $('#l1').removeClass("active");
            $('#l2').removeClass("active");
            $('#l0').removeClass("active");
            $('#l4').removeClass("active");
            $('#l5').removeClass("active");
        });
        $('#l4').mouseover(function(){
            $('#l4').addClass("active");
            $('#l1').removeClass("active");
            $('#l2').removeClass("active");
            $('#l3').removeClass("active");
            $('#l0').removeClass("active");
            $('#l5').removeClass("active");
        });
        $('#l5').mouseover(function(){
            $('#l5').addClass("active");
            $('#l1').removeClass("active");
            $('#l2').removeClass("active");
            $('#l3').removeClass("active");
            $('#l4').removeClass("active");
            $('#l0').removeClass("active");
        });

</script>
<script>
    document.getElementsByTagName('input')[0].onkeyup=function(){
        //alert('xx');
        var value = this.value;
        var url = 'https://sug.so.360.cn/suggest?word='+value+'&encodein=utf-8&caller=hao_home&encodeout=utf-8&pq=&callback=__jsonp9__&t=2436386';
        var sc = document.createElement('script');
        sc.src = url;
        document.getElementById('scc').appendChild(sc);
    }
        
    function __jsonp9__(xp){
        var html='';
        for(var i = 0; i<xp.s.length;i+=1){
            var urlx = 'https://www.baidu.com/s?wd='+xp.s[i]+'&rsv_spt=1&rsv_iqid=0xc5c09b21000d0ebb&issp=1&f=8&rsv_bp=0&rsv_idx=2&ie=utf-8&tn=baiduhome_pg&rsv_enter=0&rsv_sug3=5&rsv_sug1=1&rsv_sug7=100&inputT=1954&rsv_sug4=1955';
            html = html + '<li>'+"<a href="+urlx+' target="_blank">'+xp.s[i]+'</a>'+'</li>';
        }
    document.getElementsByTagName('ul')[1].innerHTML=html;
    }

    document.getElementsByTagName('input')[1].onclick=function(){
        var a = document.getElementsByTagName('input')[0];
            var urlx = 'https://www.baidu.com/s?wd='+a.value+'&rsv_spt=1&rsv_iqid=0xc5c09b21000d0ebb&issp=1&f=8&rsv_bp=0&rsv_idx=2&ie=utf-8&tn=baiduhome_pg&rsv_enter=0&rsv_sug3=5&rsv_sug1=1&rsv_sug7=100&inputT=1954&rsv_sug4=1955';
            window.open(urlx);

    }

    document.getElementsByTagName('input')[2].onclick=function(){
        var a = document.getElementsByTagName('input')[0];
            var urlx = 'https://www.so.com/s?ie=utf-8&shb=1&src=360sou_newhome&q='+a.value;
            window.open(urlx);

    }
    document.getElementsByTagName('input')[3].onclick=function(){
        var a = document.getElementsByTagName('input')[0];
        var urlx =  'http://www.oksousou.com/ShowResult?Form_search='+a.value+'&go=搜一下';
        window.open(urlx);
    }

    document.getElementsByTagName('input')[4].onclick=function(){
        var a = document.getElementsByTagName('input')[0];
        var urlx = 'http://www.breadsearch.com/search/'+a.value;
        window.open(urlx);
    }

    document.getElementsByTagName('input')[5].onclick=function(){
        var a = document.getElementsByTagName('input')[0];
        var urlx = 'http://pan.java1234.com/result.php?wp=0&op=0&ty=gn&q='+a.value;
        window.open(urlx);
    }

    document.getElementsByTagName('input')[6].onclick=function(){
        var a = document.getElementsByTagName('input')[0];
        var urlx = 'http://btsoufuli.com/?name='+a.value;
        window.open(urlx);
    }
    

</script>