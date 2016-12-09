<html><head>
<meta content="text/html; charset=UTF-8" http-equiv="content-type">
<!--app-website:6.1-->
<meta charset="utf-8">
<title>点点贷，安全透明灵活的P2P网贷平台、网络投资、网络贷款、正规民间借贷公司</title>
<meta content="点点贷|网络理财|个人理财|投资理财|P2P理财|互联网金融|投资理财|债权转让|理财计划|嘉财有道|网络贷款|企业贷|商户贷|车贷|网商贷|网贷|小额贷款|薪金贷|POS贷|物业贷|卡易贷|贷款|贷款公司|房产贷款|汽车贷款|个人贷款|无抵押贷款|个人无抵押贷款" name="keywords">
<meta content="点点贷(www.dddai.com)是中国领先的互联网金融P2P网络借贷平台，为投资理财用户和贷款用户提供透明、安全、高效的互联网金融服务。投资理财用户可通过点点贷平台进行投标、加入嘉财有道理财计划、购买债权等方式进行投资获得安全的高收益；贷款用户可通过平台高效申请企业贷、商户贷、车贷、网商贷、网贷、薪金贷、POS贷、卡易贷、物业贷等小额贷款。" name="description">


<meta content="no-cache" http-equiv="pragma">
<meta content="no-cache" http-equiv="cache-control">
<meta content="0" http-equiv="expires">

<link type="text/css" rel="stylesheet" href="/css/common.css"> 
<link type="text/css" rel="stylesheet" href="/css/index.css">
<link href="/css/common.css" rel="stylesheet" type="text/css"> 
<link href="/css/sea.css" rel="stylesheet" type="text/css">
<link href="/css/style.css" rel="stylesheet" type="text/css">
<link rel="stylesheet" type="text/css" href="/css/webstyle2.css">
<link href="/css/wyjk.css" rel="stylesheet" type="text/css">
<link href="/css/common.css" rel="stylesheet" type="text/css"> 
<link href="/css/sea.css" rel="stylesheet" type="text/css">
<link href="/css/style.css" rel="stylesheet" type="text/css">
<link href="/css/grey2013.css" rel="stylesheet"> 
<link href="/css/jquery-ui.css" rel="stylesheet" type="text/css"> 
<link href="/css/forms_style.css" rel="stylesheet" type="text/css">

<style type="text/css">
.plusBank5{width:680px; height:500px;  margin-left:-340px; margin-top:-250px;_margin-top:-250px;}
.serviceFeeTR{
    display:none;
}
.pagination li{
    display: inline-block;
    width: 15px;
    height: 15px;
}
</style>


</head>
<body class="index_niwo holiday_bg">

<!-- 头部开始 -->
<div class="niwdoawi_top mw_1180">
    <div class="header w1190 clearfix">
        <div class="fl tel">
            <em class="fs_14 mr_5 tel_ico">客服热线</em><i class="aril">010-57155250</i>
                    
            <span class="iphone"><i></i>
            <a target="_blank" href="#">手机客户端</a>
            <div class="webdown"></div>
            </span>
            <span class="hover_sina">
                <a target="_blank" href="#"></a>
            </span>
            <span class="fs_12 ml_10">市场有风险，投资需谨慎</span>
        </div>
        <div class="fr login clearfix">
            @if(!($user = Request::user()))
            <div class="login_bt"><a class="fff" title="登录" rel="nofollow" href="{{url('/login')}}">登录</a><a class="fff" title="注册" rel="nofollow" href="{{url('/register')}}">注册</a></div>
            @else
            <div class="login_bt"><input value="" id="log_userid" type="hidden"><input value="itbool" id="log_username" type="hidden"><em class="fff fs_12">您好，</em><a href="#" rel="nofollow" class="hello">{{$user->name}}</a><a href="{{url('/logout')}}" id="loginOut" class="hello">退出</a></div>
            @endif
            <dl>
                <dt><a class="txnone" rel="nofollow" title="账户中心" href="{{url('/center')}}">账户中心</a></dt>
                <dd><a title="充值" rel="nofollow" href="#">充值</a></dd>
                <dd><a title="提现" rel="nofollow" href="#">提现</a></dd>
                <dd><a title="我的投资" rel="nofollow" href="#">我的投资</a></dd>
                <dd><a title="我的借款" rel="nofollow" target="_blank" href="#">我的借款</a></dd>
            </dl>
            <div class="community"><a class="fc_white" rel="nofollow" target="_blank" href="#">关于我们</a></div>
        </div>
    </div>
</div><!--登录-->
<div class="niwdoawi_center mw_1180">
    <div class="w1190 logo clearfix">
    <a class="fl pl_20 logo_a holiday_logo" title="给梦想可能" href="{{url('/')}}"><img height="52" alt="点点贷" src="/image/logo_all.png"></a>
        <div class="fl logo_aft">
            <div id="headLogo" class="pos_aft">
                        <a href="#" class="defaultlogo"><img src="/image/logo1200.png"></a>
            </div>
        </div>
        <div class="fr righ"> 
            <ul class="nav clearfix">
                <li>
                    <a class="one" title="首页" href="{{url('/')}}" rel="nofollow">首页</a>
                </li>
                <li class="one">
                    <a class="one" title="我要投资" href="{{url('/list')}}">我要投资</a>
                </li>
                <li class="rela">
                    <a class="one" title="我要借款" href="{{url('/loan')}}">我要借款</a>
                </li>
                <li class="rela">
                    <a class="one" title="新手导航" href="#">新手导航 </a>
                </li>
                <li style="margin-right:0;">
                    <a class="one" title="社区" href="#">用户中心 </a>
                </li>
            </ul>
        </div>
    </div>
</div><!--nav-->
<!-- 头部结束 -->

@yield('others')
        