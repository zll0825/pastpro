@extends('layouts/home')
@section('others')

<div class="clearfix mb_10 mt_10 columns">
	<div class="in">
    	<ul class="clearfix fl l">
            <li class="mr_30">
                <a href="#">嘉财有道</a>
            </li>
            <li class="mr_30 ">
                <a href="#">体验专区</a>
            </li>
            <li class="mr_30 cur">
                <a href="#">新标专区</a>
            </li>
            <li class="mr_30">
                <a href="#">转让专区</a>
            </li>
        </ul>
        <div class="fr r"><em class="ico_box pos2"></em><a href="#">投资计算器</a></div>
    </div>

</div>
<div class="clearfix main">
	<form id="searchForm" name="searchForm" class="form-horizontal" method="post" action="#">
		<input type="hidden" id="typelist" name="typelist" value=",-1,">
		<input type="hidden" id="timelist" name="timelist" value=",-1,">
		<input type="hidden" id="relist" name="relist" value=",-1,">
		<input type="hidden" id="slist" name="slist" value=",1,">
		<input type="hidden" id="sortlist" name="sortlist">
		<input type="hidden" id="moreDiv" name="moreDiv" value="gd">
	</form>
	<!--left s-->
    <div class="fl fluid mr_10 item_side">
    	<!--nav s-->
        <div class="module">
        	<ul class="mb_10 item_nav">
                <li>
					<a href="javascript:;" class="cur 
							bidTypeChose">
						<input type="hidden" value="-1">
                    	<span class="fc_3">全部</span>
                    	<span class="airal fc_orange">(35)</span><br>
                    </a>
                </li>
          				<li>
							<a href="javascript:;" class="
							bidTypeChose">
								<input type="hidden" value="9">
		                    	<span class="fc_3">培训成长标</span>
		                    	<span class="airal fc_orange">(0)</span><br>
		                        	<span class="fc_9">爱心助学，安全保障</span>
		                    </a>
		                </li>
          				<li>
							<a href="javascript:;" class="
							bidTypeChose">
								<input type="hidden" value="1">
		                    	<span class="fc_3">网络信用标</span>
		                    	<span class="airal fc_orange">(32)</span><br>
		                        	<span class="fc_9">网络征信，高息便捷</span>
		                    </a>
		                </li>
          				<li>
							<a href="javascript:;" class="
							bidTypeChose">
								<input type="hidden" value="2">
		                    	<span class="fc_3">实地信用标</span>
		                    	<span class="airal fc_orange">(2)</span><br>
		                        	<span class="fc_9">实地征信，高息保障</span>
		                    </a>
		                </li>
          				<li>
							<a href="javascript:;" class="
							bidTypeChose">
								<input type="hidden" value="4">
		                    	<span class="fc_3">房产抵押标</span>
		                    	<span class="airal fc_orange">(1)</span><br>
		                        	<span class="fc_9">房产抵押，安全无忧</span>
		                    </a>
		                </li>
          				<li>
							<a href="javascript:;" class="
							bidTypeChose">
								<input type="hidden" value="8">
		                    	<span class="fc_3">汽融标</span>
		                    	<span class="airal fc_orange">(0)</span><img src="/image/new.gif" class="newpic"><br>
		                        	<span class="fc_9">车辆抵押，投资无忧</span>
		                    </a>
		                </li>
          				<li>
							<a href="javascript:;" class="
							bidTypeChose">
								<input type="hidden" value="10">
		                    	<span class="fc_3">车辆入库标</span>
		                    	<span class="airal fc_orange">(0)</span><br>
		                        	<span class="fc_9">车辆入库，安全保障</span>
		                    </a>
		                </li>
            </ul>
        </div>
        <!--nav e-->
        <div class="item_banner">
        	<a href="#"></a>
        </div>
    </div>
    <!--left e-->
    <!--right s-->
    <div class="fl item_main">
    	<!--筛选 s-->
        <div class="totall">
            <div class="clearfix type">
                <div class="fl">
                    <em class="fc_9 mr_10">投标期限</em>
                  		<label for="all_1" class="all first" id="timetypeAll"><input class="input" type="checkbox" value="-1">全部</label>
                </div>
                <div class="fl line_1">
                  	<label for="a5" class="" id="atimetype"><input class="input" type="checkbox" value="0,1">0~1个月</label>
                  	<label for="a5" class="" id="atimetype"><input class="input" type="checkbox" value="2,3">2~3个月</label>
                  	<label for="a6" class="" id="btimetype"><input class="input" type="checkbox" value="4,5,6">4~6个月</label>
                  	<label for="a7" class="" id="ctimetype"><input class="input" type="checkbox" value="7,8,9,10,11,12">7~12个月</label>
                  	<label for="a8" class="" id="dtimetype"><input class="input" type="checkbox" value="-2">12个月以上</label>
                </div>                                
            </div><!--新标-->
            <!--
            <div class="clearfix type">
                <div class="fl">
                    <em class="fc_9 mr_10">投标期限</em>
                    <label for="all_1" class="all">全部</label>
                </div>
                <div class="fl line_1">
                    <label for="">15-30天</label>
                    <label for="">45-60天</label>
                    <label for="">75-90天</label>
                </div>                                
            </div>--><!--净值代才用-->
            <div class="itmo_off">
            	<div class="on_off"><a href="javascript:;" class="a_on">更多<i></i></a></div>
            </div>
            <div class="clearfix type on_off_box hidden" id="hkfsDiv">
                <div class="fl">
                    <em class="fc_9 mr_10">还款方式</em>
                  		<label for="all_2" class="all first" id="retypeAll"><input class="input" type="checkbox" value="-1">全部</label>	
                </div>
                <div class="fl line_1">
                  		<label for="a9" class="" id="aretype"><input class="input" type="checkbox" value="0,1,2,4">等额本息</label>
                  		<label for="a10" class="" id="bretype"><input class="input" type="checkbox" value="3">一次付息，到期还本</label> 
                </div>
            </div>
            <div class="clearfix type on_off_box hidden" id="zbztDiv">
                <div class="fl">
                    <em class="fc_9 mr_10">招标状态</em>
						<label for="all_3" class="all" id="stypeAll"><input class="input" type="checkbox" value="-1">全部</label>
                </div>
                <div class="fl line_1">
                      	<label for="a11" class="cur" id="astype"><input class="input" type="checkbox" value="1">正在招标</label>
                      	<label for="a12" class="" id="bstype"><input class="input" type="checkbox" value="3,9">满标待审</label>
                      	<label for="a13" class="" id="cstype"><input class="input" type="checkbox" value="4">成功借款</label>
                </div>                         
            </div>
        </div>
        <!--筛选 e-->
        <!--排序 s-->
        <div class="mb_10 item_sorting">
        	<span>排序：</span>
            <a href="javascript:;" id="bidSchedule" class="">满标进度<i></i></a>
            <a href="javascript:;" id="deadline" class="">期限<i></i></a>
            <a href="javascript:;" id="amount" class="">投资金额<i></i></a>
            <a href="javascript:;" id="rate" class="">年利率<i></i></a>
        </div>
        <!--排序 e-->
        <!--item s-->
        <div class="fluid">


            <!--1 start-->
            @foreach($pros as $pro)
            <div class="mb_10 item_out">
                <div class="add_bor item_pos_box">
                    <span class="b_jingdu b_jd{{sprintf('%.2f', $pro->receive/$pro->money)*100}}">
                    {{sprintf('%.2f', $pro->receive/$pro->money)*100}}%</span>
                    
                            <p><a target="_blank" href='{{url("touzi/$pro->pid")}}'>立即投标</a></p>                </div>
                <div class="clearfix module item_in" onclick="window.open(&#39;/xiangmu/v-ADZUNlYwVTkFY1RgUDBeYAoyVWMCYAJtBTIFPABuU28=.html&#39;,&#39;_blank&#39;)">
                    <div class="l">
                        <h3 class="tit">
                            <i class="ico_all size24 img_icon sItem_12101" title="实地信用标"></i>
                            <span class="fc_9">
                               {{$pro->title}}
                            </span>
                            <i class="ico_all size22 img_icon bao_pos mr_10 ml_10"></i><em class="fc_9">适用本金保障计划</em>
                        </h3>
                        <ul class="clearfix item_con">
                            <li class="w1">
                                <span class="fc_6">借款年利率</span>
                                <span class="airal fc_orange fs_28">{{$pro->rate}}</span>
                                    <span class="fc_orange">%</span>                       
                            </li>
                            <li class="w2">
                                <span class="fc_6">投资期限</span>
                                <span class="airal fs_30">{{$pro->hrange}}</span>
                                <span>个月</span>
                            </li>
                            <li class="w3">
                                <span class="fc_6">投资金额</span><!--计划金额 剩余金额-->
                                <span class="airal fs_20">{{$pro->money/100}}</span>
                            </li>
                        </ul>
                    </div>
                    
                </div>
            </div>
            <!-- 1 end  -->
            @endforeach
       		
        </div>
        <!--item e-->
        <div class="fy">
            <!--分页 str -->

	    
	<div class="pageout">
	
		
			<span class="first"><i></i>上一页</span>
		
					<span class="active">1</span>
					<a href="#">2</a>
					<a href="#">3</a>
					<a href="#">4</a>
		
			<a href="#">下一页<i></i></a>  
	</div>
			<!--分页 end -->
			<input type="hidden" value="1" id="curPage">
        </div>
    
    </div>
    <!--right e-->    	
</div>
<!--foot-->
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
            <a rel="nofollow" class="img1" target="_blank" href="#"><img src="image/px_002.gif" height="32" width="70"></a>
            <a rel="nofollow" class="img2" target="_blank" href="#"><img src="image/px.gif" height="32" width="70"></a>
            <a rel="nofollow" class="img3" target="_blank" href="#"><img src="image/px.gif" height="32" width="70"></a>
            <a rel="nofollow" class="img4" target="_blank" href="#"><img src="image/px_002.gif" height="32" width="70"></a>
            <a rel="nofollow" class="img5" target="_blank" href="#"><img src="image/px.gif" height="32" width="70"></a>
            <a rel="nofollow" class="img6" target="_blank" href="#"><img src="image/px_003.gif" height="32" width="70"></a>
            <a rel="nofollow" class="img7" target="_blank" href="#"><img src="image/px_002.gif" height="32" width="70"></a>
            <a rel="nofollow" class="img8" target="_blank" href="#"><img src="image/px_002.gif" height="32" width="70"></a>
            <a rel="nofollow" class="img9" target="_blank" href="#"><img src="image/px_002.gif" height="32" width="70"></a>
        </div>
    </div>
</div>

<!-- weixin start -->


<!-- weixin end -->
<!--foot End-->


<!--foot end-->










<link href="css/grey2013.css" rel="stylesheet"> 

<!--时间  s-->

<link href="css/jquery-ui.css" rel="stylesheet" type="text/css"> 

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


</body></html>

@endsection('others')
