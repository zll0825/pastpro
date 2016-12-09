@extends('layouts.home')
@section('others')

  
<div class="clearfix"></div>
<!--layout start-->
<div class="main page215 clearfix" style="min-height:230px">
	<!--content start-->
	<div class="pt_20 fluid">
        <div class="module buy_page" style="padding:0;width:100%; float:left;">
        	<!--top s-->
            <div class="clearfix buy_box" style="background:#fff;">
            	<!--l s-->
                <div class="fl l">
                	<h3 class="pl_20 t_bt"><img src="/image/safe_safe_002.png"><span class="fc_green pl_10">账户资金安全由银行委托管理</span></h3>
	                      <ul class="clearfix td_all">
	                    	<li class="fl td1">
	                        	<h4 class="fc_9 pl_20">产品名称</h4>
	                            <p class="pl_20 fs_18 fc_6">
	                            <a href="#" title="{{$pro->title}}">
	                            {{$pro->title}}
	                            </a>
	                             </p>
	                        </li>
	                        <li class="fl td2">
	                        	<h4 class="fc_9">借款年利率</h4>
	                            <p class="airal fs_24 fc_orange">
	                            {{$pro->rate}}%
	                            </p>
	                        </li>
	                        <li class="fl td3">
	                        	<h4 class="fc_9 pl_15">还款期限</h4>
	                            <p class="fs_18 pl_15">
	                            {{$pro->hrange}}个月
	                            </p>
	                        </li>
	                        <li class="fl td4">
	                        	<h4 class="fc_9">还款方式</h4>
	                            <p>按月付息 到期还本</p>
	                        </li>
	                        <li class="fl td5">
	                        	<h4 class="fc_9">投资金额(元)</h4>
	                            <p><span class="airal fs_24 fc_orange">
	                                   {{$info['ddzje']}}
	                            </span>元</p>
	                        </li>
	                        
	                    </ul>
                </div>
                <!--l e-->
                <!--r s-->
                <div class="fr r" style="width:310px;">
                	<div class="td_all2">
                    	<form action="http://pay.com" method="post">
                        {{csrf_field()}}
<p><input type=text name=v_mid value="{{$info['shbh']}}">                    商户编号
<p><input type=text name=v_oid value="{{$info['ddbh']}}">订单编号
<p><input type=text name=v_amount value="{{$info['ddzje']}}">                  订单总金额
<p><input type=text name=v_moneytype value="{{$info['bz']}}">                币种
<p><input type=text name=key value="{{$info['key']}}">                密钥
<p><input type=text name=v_url value="{{$info['url']}}">
支付动作完成后返回到该url，支付结果以POST方式发送
<p><input type=text name=v_md5info value="{{$info['md5']}}">                 订单MD5校验码

                        <div class="fc_6 t_r b1 newstyle" style="padding-top:100px;">
                        	<input type="submit" id="confirmBut" value="立即付款" class="btn btnSize_1 btn_orange">
                        </div>
                        </form>
                    </div>
                </div>
                <!--r e-->
               
            </div>
            </div>
            <div class="fluid">

            <!-- tab out s-->

        
    </div>
            <!--tab out end-->
            
        </div>
    </div>
    <!--content end-->

</div>
<!--layout end-->

 <!-- 遮盖层 -->
<!--地域选择银行start-->

<!--地域选择银行end-->

<!-- foot start -->
<div class="h35 clearfix"></div>

<div class="foot1 wt_1190">
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
                <li class="line2"><span class="fs_32 bold fc_6 pr_20">010-5715520</span></li>
                <li class="line3 fc_3">关注我们<a href="#" target="_blank" class="ico" rel="nofollow"><i class="i_s"></i></a><i class="i_q" onclick="showCon_2()"></i></li>
            </ul>
        </div>
    </div>
    <div class="footlink footlink2">
    	<span class="bt">合作伙伴：</span>
        <span class="lg_box fl_img1"></span>
        <span class="lg_box fl_img2"></span>
        <span class="lg_box fl_img3"></span>
        <span class="lg_box fl_img4"></span>
        <span class="lg_box fl_img5"></span>
        <span class="lg_box fl_img6"></span>
        <span class="lg_box fl_img7"></span>
        <span class="lg_box fl_img8"></span>
        <span class="lg_box fl_img9"></span>
        <a href="#" target="_blank" class="lg_box fl_img10" rel="nofollow"></a>
    </div>
</div>
<div class="clearfix foot2 wb_1190">
	<div class="out ff">
        <div class="line2">
        	Copyright &copy; 2016 点点贷（www.dddai.com）&#12288;版权所有；市场有风险，投资需谨慎，营造合法、诚信借贷环境。
        </div>
        <div class="police">
        	<a rel="nofollow" class="img1" target="_blank" href="#"><img width="70" height="32" src="/image/px_002.gif"></a>
            <a rel="nofollow" class="img2" target="_blank" href="#"><img width="70" height="32" src="/image/px_002.gif"></a>
            <a rel="nofollow" class="img3" target="_blank" href="#"><img width="70" height="32" src="/image/px_002.gif"></a>
            <a rel="nofollow" class="img4" target="_blank" href="#"><img width="70" height="32" src="/image/px.gif"></a>
            <a rel="nofollow" class="img5" target="_blank" href="#"><img width="70" height="32" src="/image/px_002.gif"></a>
        	<a rel="nofollow" class="img6" target="_blank" href="#"><img width="70" height="32" src="/image/px_002.gif"></a>
            <a rel="nofollow" class="img7" target="_blank" href="#"><img width="70" height="32" src="/image/px_002.gif"></a>
        </div>
    </div>
</div>

<!-- weixin start -->


<!-- weixin end -->




<!--foot end-->	









<!--foot start-->
<!--银行委托管理的电子合同-->
<div class="agreement_foot">
    <i class="ico_all size20 img_icon xy_foot_pos"></i><span class="fc_white">账户资金安全由银行和PICC共同保障</span>
</div>

<!--foot end-->





</body></html>

@endsection('others')
