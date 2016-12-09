<!DOCTYPE html>
<html><head>
<meta http-equiv="content-type" content="text/html; charset=UTF-8">
<meta name="robots" content="all">
<meta charset="utf-8">
<meta name="description" content="点点贷贷款专栏专注于为个人和企业提供2013年最新的贷款利息查询、小额贷款、个人贷款、商业贷款、短期借款期限、汽车抵押贷款、房屋抵押贷款、信用贷款、申请贷款条件等贷款咨询服务。">
<meta name="keywords" content="贷款利率,小额贷款,无抵押贷款,p2p贷款，借钱,长期借款">
<title>快速申请 -点点贷</title>
<meta name="Robots" content="index,follow">
<meta property="wb:webmaster" content="ac04ec3477e29c81">
<meta property="qc:admins" content="1533374623661774116375">

<meta http-equiv="pragma" content="no-cache">
<meta http-equiv="cache-control" content="no-cache">
<meta http-equiv="expires" content="0">


<link href="/css/common.css" rel="stylesheet" type="text/css"> 
<link href="/css/sea.css" rel="stylesheet" type="text/css">
<link href="/css/style.css" rel="stylesheet" type="text/css">

<link rel="stylesheet" type="text/css" href="/css/webstyle2.css">
<link href="/css/wyjk.css" rel="stylesheet" type="text/css">
</head>
<!-- {{print_r($errors)}} -->

<body>
<!--header start-->
@include('header');
<!--header end-->


<form id="applyForm" name="applyForm" action="" method="POST">
 <div class="application">
        <figure class="banner"></figure>
        <div class="delCon">
        
            <h1>快速申请</h1>

            <div class="iptBox">
                <span>真实年龄</span>
                <select class="ageBox" id="age" name="age" value="">
                    <option selected="selected" value="0">请选择年龄段</option>        
                    <option @if(old('age')==15) selected @endif value="15" >23岁以下</option>       
                    <option @if(old('age')==40) selected @endif  value="40">23岁-55岁</option>       
                    <option @if(old('age')==80) selected @endif value="80">55岁以上</option>                    
                </select>
                 @if($errors->has('age'))
                <p id="ageError" class="error" style="display:block;">请选择年龄段{{$errors->first('age')}}</p>
                @endif
            </div>
           
            <div class="iptBox">

                {!! csrf_field() !!}
                <span>借款金额</span>
                <input id="loanAmount" name="money" maxlength="8" placeholder="请输入借款金额" type="text" value="{{old('money')}}">
                @if($errors->has('money'))
                <p style="display: block;" id="amountError" class="error">借款金额不能为空{{$errors->first('money')}}</p>
                @endif
            </div>
            <div class="iptBox">
                <span>手机号码</span>
                <input id="mobile" name="mobile" placeholder="请输入手机号码" value="{{old('mobile')}}" maxlength="11" type="text">
                @if($errors->has('mobile'))
                <p id="mobileError" style="display:block;" class="error">请输入真实的手机号码{{$errors->first('mobile')}}</p>
                @endif
            </div>
          <!--   <div class="iptBox">
                <span class="message">图形验证码</span>
                <input class="short" name="imgcode" id="imgcode" placeholder="请输入图形验证码" type="text">
                <img src="{{url('/test')}}" name="imgc" id="imgc" alt="换一张" class="get-code" height="36" width="80">
                <p id="imgcodeError" class="error">图形验证码错误，请重新输入</p>
            </div> -->
            <div class="iptBox">
                <span class="message">短信验证码</span>
                <input class="short" name="verify" id="fucode" placeholder="请输入短信验证码" type="text">
                @if($errors->has('fucode'))
                <p id="mobileError" style="display:block;" class="error">{{$errors->first('fucode')}}</p>
                @endif
                <i><button class="get-code" id="dtmbtn" name="dtmbtn">获取验证码</button></i>
            </div>
            <input class="applyBtn" value="立即申请" id="save" type="submit">
        </div>
    </div>
</form>

<!--foot start-->
<!--foot Start-->
<div class="h35 clearfix"></div>
<div class="foot1 wt_1000">
	<div class="clearfix out">
    	<div class="l">
        	<ul class="clearfix fNav">
            	<li>
                	<a href="#" target="_blank" class="span01">关于我们</a><br>
                    <a href="#" target="_blank" class="a01"><i></i>公司简介</a><br>
                    <a href="#" target="_blank" class="a01"><i></i>业绩报告</a><br>
                    <a href="#" target="_blank" class="a01"><i></i>法律法规</a><br>
                </li>
                <li>
                	<a href="#" target="_blank" class="span01">安全保障</a><br>
                    <a href="#" target="_blank" class="a01"><i></i>本金保障</a><br>
                    <a href="#" target="_blank" class="a01"><i></i>风控保障</a><br>
                    <a href="#" target="_blank" class="a01"><i></i>账户安全</a><br>
                </li>
                <li>
                	<a href="#" target="_blank" class="span01">帮助中心</a><br>
                    <a href="#" target="_blank" class="a01"><i></i>如何投资</a><br>
                    <a href="#" target="_blank" class="a01"><i></i>如何借款</a><br>
                    <a href="#" target="_blank" class="a01"><i></i>网站资费</a><br>
                </li>
                <li>
                	<a href="#" target="_blank" class="span01">用心服务</a><br>
                    <a href="#" target="_blank" class="a01"><i></i>联系我们</a><br>
                    <a href="#" target="_blank" class="a01"><i></i>网站地图</a><br>
                    <a href="#" target="_blank" class="a01"><i></i>服务地区</a><br>
                </li>	
            </ul>
        </div>
        <div class="r">
        	<ul>
            	<li class="line1"><span class="fs_16 pr_20 fc_3">热线电话</span>(服务时间 09 : 00 - 21 : 00 )</li>
                <li class="line2"><span class="fs_32 bold fc_6 pr_20">010-5715520</span>
                <span style="color:#dedede">  13.   </span></li>
                <li class="line3 fc_3">关注我们<a href="#" target="_blank" class="ico" rel="nofollow"><i class="i_s"></i></a><i class="i_q" onclick="showCon_2()"></i></li>
            </ul>
        </div>
    </div>
    <div class="footlink footlink1">
    	<span class="bt">合作伙伴：</span>
        <!--<span class="lg_box fl_img1"><a href="#" target="_blank">&nbsp;</a></span>-->
        <span class="lg_box fl_img2"><a href="#" target="_blank">&nbsp;</a></span>
        <span class="lg_box fl_img3"></span>
        <span class="lg_box fl_img4"><a href="#" target="_blank">&nbsp;</a></span>
        <span class="lg_box fl_img5"></span>
        <span class="lg_box fl_img6"></span>
        <span class="lg_box fl_img7"></span>
        <span class="lg_box fl_img8"></span>
        <span class="lg_box fl_img9"></span>
        <a href="#" target="_blank" class="lg_box fl_img10" rel="nofollow"></a>
    </div>
</div>
<div class="clearfix foot2 wb_1000">
	<div class="out ff">
        <div class="line1">
        	<ul style="margin-top: -48px;" class="lunbo1">
            <li>
               	<a href="#" target="_blank">现金宝</a>丨  
				<a href="#" target="_blank">人人贷</a>丨                
				<a href="#" target="_blank">陆金所</a>丨
				<a href="#" target="_blank">拍拍贷</a>丨
				<a href="#" target="_blank">南方基金</a>丨
				<a href="#" target="_blank">定期宝</a>丨
				<a href="#" target="_blank">活期宝</a>丨
				<a href="#" target="_blank">安心贷</a>丨
                <a href="#" target="_blank">有利网</a>丨
                <a href="#" target="_blank">天弘基金</a>丨
                <a href="#" target="_blank">余额宝收益</a>丨
            </li>
            <li>
                <a href="#" target="_blank">货币基金收益排行</a>丨
                <a href="#" target="_blank">基金公司排名</a>丨
                <a href="#" target="_blank">基金经理排名</a>丨
                <a href="#" target="_blank">证券公司排名</a>丨
                <a href="#" target="_blank">基金排名</a>丨
                <a href="#" target="_blank">期货公司排名</a>丨
                <a href="#" target="_blank">炒外汇入门</a>丨
                <a href="#" target="_blank">什么是基金</a>丨
                <a href="#" target="_blank">投资产品排行</a>丨
                <a href="#" target="_blank">股票入门基础知识</a>丨
                <a href="#" target="_blank">网络贷款平台</a>丨
            </li>
			<li>
        			<a href="#" target="_blank">贷款计算器</a>丨
        			<a href="#" target="_blank">服务地区</a>丨
        			<a href="#" target="_blank">商业贷款计算器</a>丨
        			<a href="#" target="_blank">按揭贷款计算器</a>丨
        			<a href="#" target="_blank">工资计算器</a>丨
        			<a href="#" target="_blank">提前还贷计算器</a>丨
        			<a href="#" target="_blank">个人所得税计算器</a>丨
        			<a href="#" target="_blank">车险计算器</a>丨
        			<a href="#" target="_blank">利息计算器</a>丨
        			<a href="#" target="_blank">分期付款计算器</a>
        			<a href="#" target="_blank">等额本息还款计算器</a>丨
        			<a href="#" target="_blank">存款计算器</a>丨
        			<a href="#" target="_blank">中国银行贷款计算器</a>丨
        			<a href="#" target="_blank">工行贷款计算器</a>丨
        			<a href="#" target="_blank">投资计算器</a>丨
        			<a href="#" target="_blank">复利计算器</a>
			</li>
            </ul>
        </div>
        <div class="line2">
        	Copyright © 2016 点点贷（www.dddai.com）　版权所有；市场有风险，投资需谨慎，营造合法、诚信借贷环境。
        </div>
        <div class="police">
        	<a rel="nofollow" class="img1" target="_blank" href="#"><img src="/image/px_002.gif" height="32" width="70"></a>
            <a rel="nofollow" class="img2" target="_blank" href="#"><img src="/image/px.gif" height="32" width="70"></a>
            <a rel="nofollow" class="img3" target="_blank" href="#"><img src="/image/px.gif" height="32" width="70"></a>
            <a rel="nofollow" class="img4" target="_blank" href="#"><img src="/image/px_002.gif" height="32" width="70"></a>
            <a rel="nofollow" class="img5" target="_blank" href="#"><img src="/image/px.gif" height="32" width="70"></a>
            <a rel="nofollow" class="img6" target="_blank" href="#"><img src="/image/px_003.gif" height="32" width="70"></a>
            <a rel="nofollow" class="img7" target="_blank" href="#"><img src="/image/px_002.gif" height="32" width="70"></a>
            <a rel="nofollow" class="img8" target="_blank" href="#"><img src="/image/px_002.gif" height="32" width="70"></a>
            <a rel="nofollow" class="img9" target="_blank" href="#"><img src="/image/px_002.gif" height="32" width="70"></a>
        </div>
    </div>
</div>

<link href="/css/grey2013.css" rel="stylesheet"> 

<!--时间  s-->

<link href="/css/jquery-ui.css" rel="stylesheet" type="text/css"> 

<!--时间  e-->
 
<!---静态化 - 头部内容---->



<style>
.foot1 .out .r .line2{
	margin-top: 0;
}
.foot2 .out .line2{
 	border-bottom: none;
    margin-top: 0;
}
</style>


</body>
<script src="http://apps.bdimg.com/libs/jquery/2.1.4/jquery.min.js">
</script>
<script>  
    $('form').submit(function (){   
        //年龄段
        var patt = /^15|40|80$/;
        if(!patt.test($('#age').val())){
            alert('请选择年龄段');
            return false;
        };

        //手机号验证
        var patt =/^1[3,5,7,8]\d{9}$/;
        if (!patt.test($('#mobile').val())) {
            alert('手机号不正确');
            return false;
        };

        //借款金额验证
        var patt = /^[1,9][0,9]{0,9}$/;
        if (!patt.test($('#loanAmount').val())){
            alert('借款必须是1-10位数');
            return false;
        };
        //用户输入的验证码
        var smscode1 = $('#fucode').val();

        var flag;
        var param={
            url :'checksm?code='+smscode1,
            type :'get',
            async:false,
            //data:{'code':smscode1},
            success:function(msg){
                //alert(msg);
                flag =msg;
            }
        }
        //console.log(url);
        $.ajax(param);

        if(flag=='0'){
            alert('验证码错误!');
            return false;
        }
        //接收回调返回验证码
        //var smscode2;
        //短信验证码验证Ajax验证
        // var param = {
        //     url:'checksm',
        //     type:'get',
        //     async:false,
        //     success:function(msg){
        //         //alert(msg);
        //         smscode2 = msg;
        //     }
        // }
        // $.ajax(param);
        //判断验证结果
        // if(smscode2!=smscode1){
        //     alert('验证码不对!')
        //     return false;
        // }

        //
        //return false;
    });

    $('#dtmbtn').click(function(){
        //正则检测手机号
        var patt =/^1[3,5,7,8]\d{9}$/;
        var mobile = $('#mobile').val();
        if(!patt.test(mobile)){
            alert('请输入正确的手机号!');
            return false;
        }
        //10秒内只能点击一次验证码
        var btn = this;    
        btn.disabled = true;
        var sec = 10;
        var clock=setInterval(function(){
            sec --;
            if(sec>=0){
                btn.innerHTML=sec+"秒后再次获取验证码";
            }else{
                btn.disabled = false;
                btn.innerHTML ="获取验证码";
                clearInterval(clock);
            }
        },1000);
        //手机号通过,get请求发短信页面  
        var url='sm/'+mobile;
        $.get(url,function(msg){//回调函数
            console.log(msg);
        }, 'json');

        return false;

    });

  
</script>
</html>