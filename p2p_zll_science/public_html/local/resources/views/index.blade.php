@extends('layouts.home')
@section('others')
<div class="niwdoawi_banner">
    <div class="img">
    </div>
</div>


<!--banner-->
<div class="index_main w1180 front">
    <div class="login_front">
        <p class="fs_24 t" style="font-size: 20px">安全、稳健、高收益</p>
        @if(!Request::user())
         <span id="static_banner_login"><a title="免费注册" rel="nofollow" href="{{url('/register')}}" class="btn_orange">免费注册</a><a title="马上登录" rel="nofollow" class="orange" href="{{url('login')}}">马上登录</a></span>
         @else
         <a class="btn_orange" href="{{url('/center')}}" rel="nofollow" title="账户中心">账户中心</a>
         @endif
    </div>
</div>

<!--三大优势下部分-->
<div class="clearfix w1180 pt_20 index_main">
    <!--三大优势 s-->
        <!--新手专享 e-->
        
        <!--月统计 s-->
    <!--三大优势 e-->

    <!--新用户专享一栏 s-->
    
    <!--新用户专享一栏 e-->    

    <!--广告 e-->
    
<div class="clearfix"></div>
<!--竞猜宝start-->
    
    <!--竞猜宝end-->
    <div class="clearfix"></div>


<!--广告 e-->
    <div class="clearfix">
    <div class="clearfix fl fluid index_left">
                <!--列表2 s-->
            <div class="clearfix mb_20 module pro_list holidy_main_no3">
                <!--l s-->
                <div class="fl pro_img list_img3">
                    <div class="text">
                        <span class="fc_white fs_24 bold lh_32">最灵活<br>转让专区</span>
                    </div>
                    <div class="btn_box"><a target="_blank" href="#">查看更多</a></div>
                </div>
                <!--l e-->
                <!--r s-->
                <div class="fl pro_con">
                    <!--1 s-->
                    @foreach ($pros as $pro)
                    <div class="pro_bor">
                        <ul class="clearfix pro_list_box">
                            <li class="w1">
                                <p class="fc_9 mb_5">预期年化 </p>
                                <p class="fc_orange airal"><em class="fs_28">{{$pro->rate}}</em>
                                    <em class="fs_18">%</em>                       
                                </p>
                            </li>
                            <li class="w2">
                                <p class="fc_9 mb_5">期限</p>
                                <p class="fc_6"><em class="fs_18">{{$pro->hrange}}</em>个月</p>
                            </li>
                            <li class="w3">
                                <p class="fc_9 mb_5">投资金额 </p>
                                <p class="fc_6 airal fs_18">{{$pro->money/100}}</p>
                            </li>
                            <li class="w4">
                                <span class="b_jingdu b_jd{{sprintf('%.2f', $pro->receive/$pro->money)*100}}">{{sprintf('%.2f', $pro->receive/$pro->money)*100}}%</span>
                            </li>
                            <li class="w5">
                                    <a class="btn btnSize_1 btn_orange" href='{{url("touzi/$pro->pid")}}'>立即投标</a>
                            </li>
                        </ul>
                    </div>
                    @endforeach
                    <!--1 e -->
                   
                    <!--1 e -->
                    <!--1 e -->
                </div>
                <!--r e-->
         </div>
        <!--列表2 e-->
        
    </div>
    <!--left end-->
<div class="clearfix fluid fl index_right">
        <!--新手起航s-->
        <div class="module fl numTong numH1 ind_w280 holiday_r_no1 h238">
            <h3 class="fs_18 ind_tit">新手起航<a target="_blank" href="#" title="更多" class="blue more fr">前往</a><span class="fc_6 fr fs_14 mr_5">规范.专业.透明</span></h3>
            <div class="shujutime clearfix"><span class="fl fc_9"><span class="f">2016年02月数据</span></span></div>
            <div class="shujuClass fc_9">
                <span class="NumlineCon Num1"><i>461,366</i>成功注册(人)</span>
                <span class="NumlineCon Num2"><i>51,397</i>成功投标(人)</span>
                <span class="NumlineCon Num1 mt_20"><i>6,598</i>实现借款(人)</span>
                <span class="NumlineCon Num2 mt_20"><i>188,817</i>成交(万元)
                    <em class="Num2con">
                        <span class="tkOut tkOut_b">
                            <i class="ico_all size15 img_icon s_wen"></i>
                            <div style="display: none;" class="tkIn indexTkIn hidden">
                                <span class="jian" style="left:80px;"></span>
                                <span class="tknr indexTknr" style="font-size:12px; line-height:18px; text-indent:0;">当月成交金额包含债权金额和债权转让金额</span>
                            </div>
                        </span>
                    </em>
                </span>
            </div>
        </div>
        <!--新手起航 e-->
</div>
</div>

<div class="clearfix fluid">
    <!--金额安全 s-->
            <div class="module mb_20 ind_partner holidy_main_no4">
                <h3 class="ind_tit"><span class="fs_18">资金安全</span></h3>
                <ul class="par_box">
                    <!--<li class="first">
                        <span><img src="http://static3.niwodai.com/Public/Static/201404/images/ind_par6.png" alt="广发银行"></span>
                        <a href="#" class="a6">
                        点点贷会员账户资金<br>由广发银行存管<br> 
                        </a>
                    </li>-->
                    <li>
                        <span><img width="185" height="84" alt="" src="image/ind_par2.png"></span>
                        <a class="a6" href="#">
                        点点贷风险保证金托管<br>
    中国光大银行上海分行
                        </a>
                    </li>
                     <li>
                    <span><img width="185" height="84" alt="" src="image/ind_par5.png"></span>
                    <a class="a6" href="#">
                        点点贷交易账户因盗用、盗刷的资金损失由PICC承保

                    </a>
                    </li>
                    <li>
                        <span><img width="185" height="84" alt="" src="image/ind_par4.png"></span>
                        <a class="a6" href="#">
                       点点贷使用美国FICO<br>
    决策引擎建立评分卡系统
                        </a>
                    </li>
                    <li>
                        <span><img width="185" height="84" alt="公安部第三研究所" src="image/ind_par1.png"></span>
                        <a class="a6" href="#">
                        点点贷信息安全通过<br> 
                        公安部等保二级测评
                        </a>
                    </li>
                    <li>
                        <span><img width="185" height="84" alt="" src="image/ind_par3.png"></span>
                        <a class="a6" href="#">
                        点点贷违约客户数据对<br>
    接报送上海资信有限公司
                        </a>
                    </li>
                    
                   
                </ul>
         </div>
    <!--金额安全 e-->

</div><!--content-->
<!--content-->

        
<!-- 尾部开始 -->
<div class="h35 clearfix"></div>
<div class="foot1 wt_1190">

    <div class="footlink footlink2">
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
<div class="clearfix foot2 wb_1190">
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
                <a target="_blank" href="#">理财产品排行</a>丨
                <a target="_blank" href="#">股票入门基础知识</a>丨
                <a target="_blank" href="#">网络贷款平台</a>丨
            </li>
            <li>
                            <a target="_blank" href="#">FXSOL UK</a>丨
<a target="_blank" href="#">希财网</a>丨
                            <a target="_blank" href="#">股票行情</a>丨
                            <a target="_blank" href="#">期货</a>丨
                            <a target="_blank" href="#">票据在线 </a>丨
                            <a target="_blank" href="#"> 银行贷款条件</a>丨
                            <a target="_blank" href="#">贷款计算器</a>丨
                            <a target="_blank" href="#">白银价格走势图</a> 丨
                            <a target="_blank" href="#">股票行情</a>
丨
                            <a target="_blank" href="#">期货开户</a>丨
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
                            <a href="#" target="_blank">优惠券</a> 丨
                            <a href="#" rel="nofollow" target="_blank">网贷之家</a>丨
                            <a href="#" rel="nofollow" target="_blank">手机软件</a>丨
                            <a href="#" rel="nofollow" target="_blank">苹果手机游戏</a> 丨
                            <a href="#" target="_blank">资讯频道</a>丨
                            <a href="#" rel="nofollow" target="_blank">网贷天眼</a>丨
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
                            <a href="#" target="_blank">前瞻财经</a>丨
                            <a href="#" target="_blank">外汇论坛</a>丨
                            <a href="#" target="_blank">                    
                        A股中国</a>丨
                            <a href="#" target="_blank">银行利率</a>丨
                            <a href="#" target="_blank">                 
                        汽车保险</a>丨
                            <p><a href="#" target="_blank">投资理财导航</a></p>丨
                            <a href="#" target="_blank">瞄股网</a>丨
                            <a href="#" target="_blank">天天基金</a>丨
                            <a href="#" target="_blank">创业板资讯</a>丨
                            <a href="#" target="_blank">3456网址导航</a>丨
                            <a href="#" target="_blank">汽车保险</a>丨
                             <a target="_blank" href="#">财股网理财</a>丨
                            <a target="_blank" href="#">保险资料</a>丨
                            <a target="_blank" href="#">证券之星</a>丨
                            <a target="_blank" href="#">白银价格</a>丨
                            <a target="_blank" href="#">呱呱财经</a>丨
                            <a target="_blank" href="#">纸白银</a>丨
                            <a href="#">资本魔方</a>丨
                            <a target="_blank" href="#">股城理财</a>丨
                            <p>&nbsp; &nbsp;                        <a target="_blank" href="#">贷款</a>
                        </p>丨
            </li>
            </ul>
        </div>
        <div class="line2">
            Copyright © 2016 点点贷（www.dddai.com）　版权所有；市场有风险，投资需谨慎，营造合法、诚信借贷环境。
        </div>
        <div class="police">
            <a href="#" target="_blank" class="img1" rel="nofollow"><img width="70" height="32" src="image/px_003.gif"></a>
            <a href="#" target="_blank" class="img2" rel="nofollow"><img width="70" height="32" src="image/px_003.gif"></a>
            <a href="#" target="_blank" class="img3" rel="nofollow"><img width="70" height="32" src="image/px.gif"></a>
            <a href="#" target="_blank" class="img4" rel="nofollow"><img width="70" height="32" src="image/px.gif"></a>
            <a href="#" target="_blank" class="img5" rel="nofollow"><img width="70" height="32" src="image/px_002.gif"></a>
            <a href="#" target="_blank" class="img6" rel="nofollow"><img width="70" height="32" src="image/px_002.gif"></a>
            <a href="#" target="_blank" class="img7" rel="nofollow"><img width="70" height="32" src="image/px.gif"></a>
            <a href="#" target="_blank" class="img8" rel="nofollow"><img width="70" height="32" src="image/px_002.gif"></a>
            <a href="#" target="_blank" class="img9" rel="nofollow"><img width="70" height="32" src="image/px.gif"></a>
        </div>
    </div>
</div>

<!-- weixin start -->
<div class="plusBankBg" style="height: 2757px;"></div>
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

<!-- 尾部结束 --> 





 
</div></body></html>

@endsection('others')