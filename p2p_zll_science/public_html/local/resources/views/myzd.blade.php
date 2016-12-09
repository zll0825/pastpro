@extends('layouts.home')
@section('others')

<!--面包屑-->
<div class="crumbs userCrumbs">
    <a class="first" href="#">账户中心</a><span>&gt;</span><a class="two" href="#">借款管理</a><span>&gt;</span><a class="two">项目审核</a>
</div>
<!--面包屑 end-->
<!--layout start-->
<div class="layout clearfix page46">
    <!--left nav start-->
<!--left nav start-->
	<div class="clearfix leftbar">
    	<div class="clearfix left_nav">
        	<!--user_nav start-->
        	<div class="clearfix user_nav" id="leftMenuContainer"><a href="#"><h3><i class="ico1"></i>账户中心</h3></a><h4><span>资金管理</span><i></i></h4><ul style="display:block;" pdata="zjglElem" id="zjglElem"><li pdata="my_nwd_3" id="my_nwd_3"><a href="#">我要充值</a></li><li pdata="my_nwd_4" id="my_nwd_4"><a href="#">我要提现</a></li><li pdata="my_nwd_5" id="my_nwd_5"><a href="#">资金记录</a></li><li pdata="my_nwd_6" id="my_nwd_6"><a href="#">收益明细</a></li></ul><h4><span>投资管理</span><i></i></h4><ul style="display:block;" pdata="tzglElem" id="tzglElem"><li pdata="tz_nwd_2" id="tz_nwd_2"><a href="#">嘉财有道</a></li><li pdata="tz_nwd_8" id="tz_nwd_8" class="rela"><a href="#">嘉猜宝</a></li><li pdata="tz_nwd_1" id="tz_nwd_1"><a href="#">我的债权</a></li><li pdata="tz_nwd_5" id="tz_nwd_5"><a href="#">债权转让</a></li><li pdata="tz_nwd_7" id="tz_nwd_7" class="rela"><a href="#">体验专区</a></li><li pdata="tz_nwd_4" id="tz_nwd_4" class="rela"><a href="#">电子对账单</a></li><li pdata="tz_nwd_3" id="tz_nwd_3"><a href="#">智能抢标</a></li></ul><h4><span>借款管理</span><i></i></h4><ul style="display:block;" pdata="jkglElem" id="jkglElem"><li pdata="jk_nwd_5" id="jk_nwd_5"><a href="#">我要还款</a></li><li pdata="jk_nwd_4" id="jk_nwd_4"><a href="#">借款记录</a></li><li pdata="jk_nwd_6" id="jk_nwd_6"><a href="#">借款申请</a></li></ul><h4><span>账户管理</span><i></i></h4><ul style="display:block;" pdata="zhglElem" id="zhglElem"><li pdata="xinxi_nwd_1" id="xinxi_nwd_1"><a href="#">个人资料</a></li><li pdata="xinxi_nwd_9" id="xinxi_nwd_9"><a href="#">我的积分</a></li><li class="weiyi" pdata="xinxi_nwd_8" id="xinxi_nwd_8"><a href="#">安全中心</a></li><li pdata="xinxi_nwd_7" id="xinxi_nwd_7"><a href="#">账户绑定</a></li><li pdata="xinxi_nwd_4" id="xinxi_nwd_4"><a href="#">消息中心</a></li></ul><h4><span>活动管理</span><i></i></h4><ul style="display:block;" pdata="hdglElem" id="hdglElem"><li pdata="xinxi_nwd_6" id="xinxi_nwd_6"><a href="#">我的礼品</a></li><li pdata="tj_nwd_4" id="tj_nwd_4"><a href="#">推荐有奖</a></li><li pdata="tj_nwd_1" id="tj_nwd_1"><a target="_blank" href="#">我要推荐</a></li></ul></div>
            <!--user_nav end-->
    	</div>
    		    	<div class="banner_out">
		            <div class="user_banner">
			                <div class="img">
			                    <ul>
			                    </ul>
			                </div>
		            <div class="page"></div></div>
	        </div>
    </div>
    <!--left nav end-->
    
<!--left nav end-->
    <!--right start-->
    <div class="clearfix main_wrapper">
    	<div class="container">
            <div class="accountCenter">
                <span class="fs_18 left">还款账单</span>
                <span class="center"></span>
                <span class="ff bold">单位：元</span>
            </div>
            <div class="clearfix fluid mb_10">
            	<div class="module">
                    <!--筛选 end-->
                    <div class="clearfix tab_content">
                    	<!--1-->
                        <div class="clearfix nr">
                            <!--table-->
                            <table class="table">
                                <tbody><tr>
                                   <th class="f">ID</th>
                                   <th class="tr"><span>项目名称</span></th> 
                                   <th class="tr">还款金额</th> 
                                   <th class="tr">还款时间</th> 
                                   <th class="tr">还款状态</th> 
                                </tr>
                                @if (!empty($zds))
                                @foreach ($zds as $z)
                                <tr>
                                   <td class="f">{{$i += 1}}</td>
                                   <td class="tr"><span>{{$z->title}}</span></td> 
                                   <td class="tr">{{$z->amount/100}}元</td> 
                                   <td class="tr">{{$z->paydate}}</td>
                                   <td class="tr">
                                    @if($z->status==0)<a href="#">去还款</a>
                                    @else 已还款
                                    @endif
                                </td>
                                </tr>
                                @endforeach
                                @else
                                <div class="wujilu" id="errorMsg">暂无记录</div>
                                </tbody>
                             @endif
                             </table>
                             {!!$zds->render()!!}
                            <!--table end-->
                            <div class="t_foot">
                                
                                <div class="r">
                            	<div class="fy">
                                	<!--分页 str -->
                            	</div>
                        		</div>
                                
                          </div>
                            <div class="tongji tj_nr01" id="tongji">
                            	待还本息 &nbsp;&nbsp;共 <span class="fc_orange bold" id="waitCapital"></span> 元，
                            	应还罚息  共 <span class="fc_green bold" id="shouldFine"></span> 元 	
                            </div>
                            
                      </div>
                     
                  </div>
                </div>
            </div>
        </div>
    </div>
    <!-- right end -->
</div>
<!--layout end-->

<!--提示start-->
<div style="display: none;" id="openMsg" class="plusBank mini page53"> 
	<div class="topper clearfix"> 
		<span id="msgTitle" class="fl fs_18">提示</span> 
		<a id="msgCloseAll" class="fr"></a> 
	</div> 
	<div id="changyong" class="middle"> 
		<div id="msgContent" class="content"></div> 
		<div class="btnbox"><button id="msgClose" class="btn btnSize_1 btn_blue plus_c">确认</button></div> 
	</div> 
</div>
<!--提示end-->

<!--foot Start-->
<div class="h35 clearfix"></div>
<div class="foot1 wt_1000">
	<div class="clearfix out">
    	<div class="l">
        	<ul class="clearfix fNav">
            	<li>
                	<a class="span01" target="_blank" href="#">关于我们</a><br>
                    <a class="a01" target="_blank" href="#"><i></i>公司简介</a><br>
                    <a class="a01" target="_blank" href="#"><i></i>业绩报告</a><br>
                    <a class="a01" target="_blank" href="#"><i></i>法律法规</a><br>
                </li>
                <li>
                	<a class="span01" target="_blank" href="#">安全保障</a><br>
                    <a class="a01" target="_blank" href="#"><i></i>本金保障</a><br>
                    <a class="a01" target="_blank" href="#"><i></i>风控保障</a><br>
                    <a class="a01" target="_blank" href="#"><i></i>账户安全</a><br>
                </li>
                <li>
                	<a class="span01" target="_blank" href="#">帮助中心</a><br>
                    <a class="a01" target="_blank" href="#"><i></i>如何投资</a><br>
                    <a class="a01" target="_blank" href="#"><i></i>如何借款</a><br>
                    <a class="a01" target="_blank" href="#"><i></i>网站资费</a><br>
                </li>
                <li>
                	<a class="span01" target="_blank" href="#">用心服务</a><br>
                    <a class="a01" target="_blank" href="#"><i></i>联系我们</a><br>
                    <a class="a01" target="_blank" href="#"><i></i>网站地图</a><br>
                    <a class="a01" target="_blank" href="#"><i></i>服务地区</a><br>
                </li>	
            </ul>
        </div>
        <div class="r">
        	<ul>
            	<li class="line1"><span class="fs_16 pr_20 fc_3">热线电话</span>(服务时间 09 : 00 - 21 : 00 )</li>
                <li class="line2"><span class="fs_32 bold fc_6 pr_20">010-5715520</span>
                <span style="color:#dedede">  95.   </span></li>
                <li class="line3 fc_3">关注我们<a rel="nofollow" class="ico" target="_blank" href="#"><i class="i_s"></i></a><i onclick="showCon_2()" class="i_q"></i></li>
            </ul>
        </div>
    </div>
    <div class="footlink footlink1">
    	<span class="bt">合作伙伴：</span>
        <!--<span class="lg_box fl_img1"><a href="#" target="_blank">&nbsp;</a></span>-->
        <span class="lg_box fl_img2"><a target="_blank" href="#">&nbsp;</a></span>
        <span class="lg_box fl_img3"></span>
        <span class="lg_box fl_img4"><a target="_blank" href="#">&nbsp;</a></span>
        <span class="lg_box fl_img5"></span>
        <span class="lg_box fl_img6"></span>
        <span class="lg_box fl_img7"></span>
        <span class="lg_box fl_img8"></span>
        <span class="lg_box fl_img9"></span>
        <a rel="nofollow" class="lg_box fl_img10" target="_blank" href="#"></a>
    </div>
</div>
<div class="clearfix foot2 wb_1000">
	<div class="out ff">
        <div class="line1">
        	<ul class="lunbo1" style="margin-top: -48px;">
            <li>
               	<a target="_blank" href="#">现金宝</a>丨  
				<a target="_blank" href="#">人人贷</a>丨                
				<a target="_blank" href="#">陆金所</a>丨
				<a target="_blank" href="#">拍拍贷</a>丨
				<a target="_blank" href="#">南方基金</a>丨
				<a target="_blank" href="#">定期宝</a>丨
				<a target="_blank" href="#">活期宝</a>丨
				<a target="_blank" href="#">安心贷</a>丨
                <a target="_blank" href="#">有利网</a>丨
                <a target="_blank" href="#">天弘基金</a>丨
                <a target="_blank" href="#">余额宝收益</a>丨
            </li>
            <li>
                <a target="_blank" href="#">货币基金收益排行</a>丨
                <a target="_blank" href="#">基金公司排名</a>丨
                <a target="_blank" href="#">基金经理排名</a>丨
                <a target="_blank" href="#">证券公司排名</a>丨
                <a target="_blank" href="#">基金排名</a>丨
                <a target="_blank" href="#">期货公司排名</a>丨
                <a target="_blank" href="#">炒外汇入门</a>丨
                <a target="_blank" href="#">什么是基金</a>丨
                <a target="_blank" href="#">投资产品排行</a>丨
                <a target="_blank" href="#">股票入门基础知识</a>丨
                <a target="_blank" href="#">网络贷款平台</a>丨
            </li>
			<li>
	            				
	            				
	            				
	            				
	            				
	            				<a target="_blank" href="#">贷款计算器</a>丨
	            				
	            				
	            				
	            				<a target="_blank" href="#">商业贷款计算器</a>丨
	            				<a target="_blank" href="#">按揭贷款计算器</a>丨
	            				<a target="_blank" href="#">工资计算器</a>丨
	            				<a target="_blank" href="#">提前还贷计算器</a>丨
	            				<a target="_blank" href="#">个人所得税计算器</a>丨
	            				<a target="_blank" href="#">车险计算器</a>丨
	            				<a target="_blank" href="#">利息计算器</a>丨
	            				<a target="_blank" href="#">分期付款计算器</a>丨
	            				<a target="_blank" href="#">等额本息还款计算器</a>丨
	            				<a target="_blank" href="#">存款计算器</a>丨
	            				<a target="_blank" href="#">中国银行贷款计算器</a>丨
	            				<a target="_blank" href="#">工行贷款计算器</a>
丨
	            				<a target="_blank" href="#">理财计算器</a>丨
	            				<a target="_blank" href="#">复利计算器</a>
丨
	            				
	            				
	            				
	            				
	            				<a href="#" target="_blank">资讯频道</a>丨
	            				
	            				<a href="#" target="_blank">标签</a>
<a target="_blank" href="#">各国货币</a>|
<a target="_blank" href="#">融资租赁</a>|
<a target="_blank" href="#">贵金属</a>|
<a target="_blank" href="#">期权交易</a>|
<a target="_blank" href="#">贷款知识</a>|
<a target="_blank" href="#">金融知识</a>|
<a target="_blank" href="#">银行理财产品</a>|
<a target="_blank" href="#">银行网点</a>|
<a target="_blank" href="#">信用卡</a>|
<a target="_blank" href="#">栏目列表</a>|
<a target="_blank" href="#">A</a>|
<a target="_blank" href="#">B</a>|
<a target="_blank" href="#">C</a>|
<a target="_blank" href="#">D</a>|
<a target="_blank" href="#">E</a>|
<a target="_blank" href="#">F</a>|
<a target="_blank" href="#">G</a>|
<a target="_blank" href="#">H</a>|
<a target="_blank" href="#">I</a>|
<a target="_blank" href="#">J</a>|
<a target="_blank" href="#">K</a>|
<a target="_blank" href="#">L</a>|
<a target="_blank" href="#">M</a>|
<a target="_blank" href="#">N</a>|
<a target="_blank" href="#">O</a>|
<a target="_blank" href="#">P</a>|
<a target="_blank" href="#">Q</a>|
<a target="_blank" href="#">R</a>|
<a target="_blank" href="#">S</a>|
<a target="_blank" href="#">T</a>|
<a target="_blank" href="#">U</a>|
<a target="_blank" href="#">V</a>|
<a target="_blank" href="#">W</a>|
<a target="_blank" href="#">X</a>|
<a target="_blank" href="#">Y</a>|
<a target="_blank" href="#">Z</a>|丨
	            				
			</li>
            </ul>
        </div>
        <div class="line2">
        	Copyright &copy; 2016 点点贷（www.dddai.com）&#12288;版权所有；市场有风险，投资需谨慎，营造合法、诚信借贷环境。
        </div>
        <div class="police">
        	<a href="#" target="_blank" class="img1" rel="nofollow"><img width="70" height="32" src="image/px_002.gif"></a>
            <a href="#" target="_blank" class="img2" rel="nofollow"><img width="70" height="32" src="image/px_002.gif"></a>
            <a href="#" target="_blank" class="img3" rel="nofollow"><img width="70" height="32" src="image/px.gif"></a>
            <a href="#" target="_blank" class="img4" rel="nofollow"><img width="70" height="32" src="image/px_002.gif"></a>
            <a href="#" target="_blank" class="img5" rel="nofollow"><img width="70" height="32" src="image/px_002.gif"></a>
            <a href="#" target="_blank" class="img6" rel="nofollow"><img width="70" height="32" src="image/px.gif"></a>
            <a href="#" target="_blank" class="img7" rel="nofollow"><img width="70" height="32" src="image/px_002.gif"></a>
            <a href="#" target="_blank" class="img8" rel="nofollow"><img width="70" height="32" src="image/px_002.gif"></a>
            <a href="#" target="_blank" class="img9" rel="nofollow"><img width="70" height="32" src="image/px_002.gif"></a>
        </div>
    </div>
</div>

<!-- weixin start -->
<div class="plusBankBg" style="height: 1169px;"></div>
<div class="plusBank2">
	<div class="clearfix ewm01">
		<a onclick="closeAll_2()" class="fr plus_c"></a>
    	关注点点贷官方微信
    </div>
    <div class="ewm02">
        <img width="430" height="430" src="image/ewm.jpg">
    </div>
</div>
<!-- weixin end -->
<!--foot End-->










<link rel="stylesheet" href="css/grey2013.css"> 

<!--时间  s-->

<link type="text/css" rel="stylesheet" href="css/jquery-ui.css"> 

<!--时间  e-->
<!---静态化 - 头部内容---->



</body></html>

@endsection('others')