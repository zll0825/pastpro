<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
    
<head>
    <meta name="Generator" content="手机网" />
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta name="Keywords" content="" />
    <meta name="Description" content="" />
    <title>
        GSM手机_手机类型_ECSHOP演示站 - Powered by ECShop
    </title>
    <link rel="shortcut icon" href="favicon.ico" />
    <link rel="icon" href="animated_favicon.gif" type="image/gif" />
    <link href="/Public/Home/css/index.css" rel="stylesheet" type="text/css" media="screen"
    />
    <link href="/Public/Home/css/style.css" rel="stylesheet" type="text/css" />
    <script type="text/javascript" src="/Public/Home/js/common.js"></script>
</head>
    <div id="header">
        <div class="header_top">
            <div class="header_top_l">
            </div>
            <div class="header_top_m">
                <div style='float:left' id="ECS_MEMBERZONE">
                    欢迎光临本店　
                    <?php if(!isset($name)): ?>　　　
                    <a href="<?php echo U('Home/user/login');?>">
                        会员登录
                    </a>
                    |
                    <a href="<?php echo U('Home/user/reg');?>">
                        免费注册
                    </a>
                    <?php else: ?>
                    <?php echo ($name); ?> 
                    |
                    <a href="<?php echo U('Home/user/logout');?>">
                        退出
                    </a><?php endif; ?>
                    <label id="myaccount">
                        <a href="#">
                            我的帐户
                        </a>
                    </label>
                    <label id="helpcenter">
                        <a href="#">
                            帮助中心
                        </a>
                    </label>
                </div>
                <div style='float:right'>
                    <label id="collect">
                        <a href="#">
                            加入收藏
                        </a>
                    </label>
                    <label id="sethome">
                        <a href="#" onclick="SetHome(this,window.location)">
                            设为首页
                        </a>
                    </label>
                </div>
                <div class='clear'>
                </div>
            </div>
            <div class="header_top_r">
            </div>
            <div class="clear">
            </div>
        </div>
        <div class="logo">
            <a href="#">
                <img src="/Public/Home/images/logo.gif">
            </a>
        </div>
        <div class="header_intro">
            <img src="/Public/Home/images/by_top.gif">
        </div>
        <div class="headerdg">
            <em>
                抢购热线（全天24小时）
            </em>
            <p>
                <img src="/Public/Home/images/tel1.gif">
            </p>
        </div>
    </div>
    <div id="nav">
        <div class="nav_m">
            <ul>
                <li>
                    <a href="/Home/index/index">
                        首页
                    </a>
                </li>
                <li>
                    <a href="<?php echo U('Home/goods/category',array('cat_id'=>1));?>" id="navbg">
                        GSM手机
                    </a>
                </li>
                <li>
                    <a href="<?php echo U('Home/goods/category',array('cat_id'=>3));?>">
                        双模手机
                    </a>
                </li>
                <li>
                    <a href="<?php echo U('Home/goods/category',array('cat_id'=>15));?>">
                        手机配件
                    </a>
                </li>
                <li>
                    <a href="#">
                        留言板
                    </a>
                </li>
            </ul>
        </div>
        <DIV class="navr_recent">
            <SPAN class="navr_recent_l1">
                　
            </SPAN>
            <A onmousedown="bubble(event);" href="#" name="myliulan">
                <a href="#" title="查看购物车">
                    <a href="#" title="查看购物车">
                        您的购物车中有 0 件商品，总计金额 ￥0.00元。
                    </a>
                </a>
            </A>
            <EM>
                &nbsp;&nbsp;&nbsp;&nbsp;
            </EM>
        </DIV>
        <div class="clear">
        </div>
    </div>
    <div class="nav_min_div" id="min_div">
        <img src="/Public/Home/images/top_min.jpg">
    </div>
<body>
    <div id="body">
        <div class="body_l">
            <div class="subsearch">
                <form id="searchForm" name="searchForm" method="get" action="search.php"
                onSubmit="return checkSearchForm()">
                    <div>
                        <input name="keywords" type="text" id="keyword" value="" class="searchmobile">
                        <button class="menu_button" name="menu_button" onClick="return checkSearchForm()">
                        </button>
                    </div>
                </form>
            </div>
            <script type="text/javascript">
                < !--
                function checkSearchForm() {
                    if (document.getElementById('keyword').value) {
                        document.searchForm.submit();
                        return true;
                    } else {
                        alert("请输入搜索关键词！");
                        return false;
                    }
                }--!>
            </script>
            <div class="subnav_header">
            </div>
            <script type="text/javascript">
            function menu_c(o) {
                alert(o.getElementsByTagName('ul').length);
            }
            </script>
            <div class="subnav">
                <?php if(is_array($cats)): foreach($cats as $key=>$c): if($c['lev'] == 1): ?><div onmouseover='f1("div<?php echo ($c["cat_id"]); ?>")'>
                    <span class="left">
                        <?php echo ($c["cat_name"]); ?>
                    </span>
                    <span class="right subnav_right">
                        <img src="/Public/Home/images/line.gif" border="0" id="categorie_ico1">
                    </span>
                </div>
                    <ul id="div<?php echo ($c["cat_id"]); ?>" style="display:none" >
                        <?php if(is_array($cats)): foreach($cats as $key=>$cc): if($cc['parent_id'] == $c['cat_id']): ?><li>
                            &nbsp;
                            <a href="<?php echo U('Home/goods/category', array('id'=>$cc['cat_id']));?>">
                            <?php echo ($cc["cat_name"]); ?>                            
                            </a>
                        </li><?php endif; endforeach; endif; ?>
                    </ul><?php endif; endforeach; endif; ?>
            </div>
            <div class="subinfo_header">
                <div class="left subinfo_header_left">
                    <a href="#">
                    </a>
                </div>
                <!--<div class="right subinfo_header_right"><a href="#">更多</a></div>-->
            </div>
            <div class="subinfo_body">
                <ul>
                    <li style="width:175px; overflow:hidden">
                        <a href="#" title="很好，我很喜欢" style="color:#333333">
                            很好，我很喜欢
                        </a>
                        <br />
                        <a style="color:#333333">
                            ecshop
                        </a>
                    </li>
                </ul>
            </div>
            <div class="subinfo_footer">
            </div>
            <div class="subinfo_header">
                <div class="subinfo_header_left_top10">
                    &nbsp;
                    <a href="#">
                    </a>
                </div>
            </div>
            <div class="subinfo_body_top10">
                <ul>
                    <li>
                        <div class="subinfo_body_top10_l">
                            <a href="#">
                                <img src="/Public/Home/images/17_thumb_P_1241969394537.jpg" alt=""
                                class="samllimg" />
                            </a>
                        </div>
                        <div class="subinfo_body_top10_r">
                            <p class="subinfo_body_top10_r_1">
                                <a href="#">HTC Z710e 3G手机（灰色）WCDMA/GSM 联通定制</a>
                            </p>
                            <p class="subinfo_body_top10_r_3">
                                ￥68元
                            </p>
                        </div>
                        <div class="clear">
                        </div>
                    </li>
                    <li>
                        <div class="subinfo_body_top10_l">
                            <a href="#">
                                <img src="/Public/Home/images/17_thumb_P_1241969394537.jpg" alt=""
                                class="samllimg" />
                            </a>
                        </div>
                        <div class="subinfo_body_top10_r">
                            <p class="subinfo_body_top10_r_1">
                                <a href="#">HTC Z710e 3G手机（灰色）WCDMA/GSM 联通定制</a>
                            </p>
                            <p class="subinfo_body_top10_r_3">
                                ￥68元
                            </p>
                        </div>
                        <div class="clear">
                        </div>
                    </li>
                    <li>
                        <div class="subinfo_body_top10_l">
                            <a href="#">
                                <img src="/Public/Home/images/17_thumb_P_1241969394537.jpg" alt=""
                                class="samllimg" />
                            </a>
                        </div>
                        <div class="subinfo_body_top10_r">
                            <p class="subinfo_body_top10_r_1">
                                <a href="#">HTC Z710e 3G手机（灰色）WCDMA/GSM 联通定制</a>
                            </p>
                            <p class="subinfo_body_top10_r_3">
                                ￥68元
                            </p>
                        </div>
                        <div class="clear">
                        </div>
                    </li>
                    <li>
                        <div class="subinfo_body_top10_l">
                            <a href="#">
                                <img src="/Public/Home/images/17_thumb_P_1241969394537.jpg" alt=""
                                class="samllimg" />
                            </a>
                        </div>
                        <div class="subinfo_body_top10_r">
                            <p class="subinfo_body_top10_r_1">
                                <a href="#">HTC Z710e 3G手机（灰色）WCDMA/GSM 联通定制</a>
                            </p>
                            <p class="subinfo_body_top10_r_3">
                                ￥68元
                            </p>
                        </div>
                        <div class="clear">
                        </div>
                    </li>
                    <li>
                        <div class="subinfo_body_top10_l">
                            <a href="#">
                                <img src="/Public/Home/images/17_thumb_P_1241969394537.jpg" alt=""
                                class="samllimg" />
                            </a>
                        </div>
                        <div class="subinfo_body_top10_r">
                            <p class="subinfo_body_top10_r_1">
                                <a href="#">HTC Z710e 3G手机（灰色）WCDMA/GSM 联通定制</a>
                            </p>
                            <p class="subinfo_body_top10_r_3">
                                ￥68元
                            </p>
                        </div>
                        <div class="clear">
                        </div>
                    </li>
                    <li>
                        <div class="subinfo_body_top10_l">
                            <a href="#">
                                <img src="/Public/Home/images/17_thumb_P_1241969394537.jpg" alt=""
                                class="samllimg" />
                            </a>
                        </div>
                        <div class="subinfo_body_top10_r">
                            <p class="subinfo_body_top10_r_1">
                                <a href="#">HTC Z710e 3G手机（灰色）WCDMA/GSM 联通定制</a>
                            </p>
                            <p class="subinfo_body_top10_r_3">
                                ￥68元
                            </p>
                        </div>
                        <div class="clear">
                        </div>
                    </li>
                </ul>
            </div>
            <div class="subinfo_footer">
            </div>
            <div class="submessage_header">
                &nbsp;
            </div>
            <div class="submessage_body">
                <a href="#" target="_blank">
                    <img src="/Public/Home/images/message.gif">
                </a>
            </div>
            <div class="subinfo_footer">
            </div>
        </div>
        <div class="body_r" style=" display:inline">
            <div class="mainbig">
                <img src="/Public/Home/images/banner.jpg" />
            </div>
            <div class="clear">
            </div>
            <div class="mainheader">
                <div class="weekbuy">
                    <a href="search.php?intro=new">
                        更多&gt;&gt;
                    </a>
                </div>
            </div>
            <ul class="productlist">
                <?php if(is_array($hot)): foreach($hot as $key=>$h): ?><li>
                    <a href="<?php echo U('Home/goods/goods',array('id'=>$h[goods_id]));?>">
                        <img src="/Public/uploads/<?php echo ($h["thumb_img"]); ?>" alt="诺基亚N85" />
                    </a>
                    <p class="pname">
                        <a href="#" title="诺基亚N85">
                            <?php echo ($h["goods_name"]); ?>
                        </a>
                    </p>
                    <p class="price">
                        <?php echo ($h["shop_price"]); ?>
                    </p>
                </li><?php endforeach; endif; ?>
            </ul>
            <div class="clear"></div>
            <div class="mainheader">
                <div class="lowerbuy">
                    <a href="search.php?intro=new">
                        更多&gt;&gt;
                    </a>
                </div>
            </div>
            <ul class="productlist">
                <li>
                    <a href="#">
                        <img src="/Public/Home/images/17_thumb_P_1241969394537.jpg" alt="诺基亚N85" />
                    </a>
                    <p class="pname">
                        <a href="#" title="诺基亚N85">
                            诺基亚N85 岁末狂降￥200！索尼（SONY）RDP-M5iP便携高品质时尚音箱
                        </a>
                    </p>
                    <p class="price">
                        ￥3010元
                    </p>
                </li>
                <li>
                    <a href="#">
                        <img src="/Public/Home/images/17_thumb_P_1241969394537.jpg" alt="诺基亚N85" />
                    </a>
                    <p class="pname">
                        <a href="#" title="诺基亚N85">
                            诺基亚N85 岁末狂降￥200！索尼（SONY）RDP-M5iP便携高品质时尚音箱
                        </a>
                    </p>
                    <p class="price">
                        ￥3010元
                    </p>
                </li>
                <li>
                    <a href="#">
                        <img src="/Public/Home/images/17_thumb_P_1241969394537.jpg" alt="诺基亚N85" />
                    </a>
                    <p class="pname">
                        <a href="#" title="诺基亚N85">
                            诺基亚N85 岁末狂降￥200！索尼（SONY）RDP-M5iP便携高品质时尚音箱
                        </a>
                    </p>
                    <p class="price">
                        ￥3010元
                    </p>
                </li>
            </ul>
            <div class="clear"></div>
            <div class="mainheader">
                <div class="newproduct">
                    <a href="search.php?intro=new">
                        更多&gt;&gt;
                    </a>
                </div>
            </div>
            <ul class="productlist">
                <li>
                    <a href="#">
                        <img src="/Public/Home/images/17_thumb_P_1241969394537.jpg" alt="诺基亚N85" />
                    </a>
                    <p class="pname">
                        <a href="#" title="诺基亚N85">
                            诺基亚N85 岁末狂降￥200！索尼（SONY）RDP-M5iP便携高品质时尚音箱
                        </a>
                    </p>
                    <p class="price">
                        ￥3010元
                    </p>
                </li>
                <li>
                    <a href="#">
                        <img src="/Public/Home/images/17_thumb_P_1241969394537.jpg" alt="诺基亚N85" />
                    </a>
                    <p class="pname">
                        <a href="#" title="诺基亚N85">
                            诺基亚N85 岁末狂降￥200！索尼（SONY）RDP-M5iP便携高品质时尚音箱
                        </a>
                    </p>
                    <p class="price">
                        ￥3010元
                    </p>
                </li>
                <li>
                    <a href="#">
                        <img src="/Public/Home/images/17_thumb_P_1241969394537.jpg" alt="诺基亚N85" />
                    </a>
                    <p class="pname">
                        <a href="#" title="诺基亚N85">
                            诺基亚N85 岁末狂降￥200！索尼（SONY）RDP-M5iP便携高品质时尚音箱
                        </a>
                    </p>
                    <p class="price">
                        ￥3010元
                    </p>
                </li>
            </ul>
        </div>
        <div class="clear">
        </div>
    </div>
    </div>
    <div class="footert">
        <div class="footertl">
            <div class="footert_1">
                <img src="/Public/Home/images/logo21.gif">
            </div>
            <div class="footert_2">
                抢购热线（9:00-18:00）
                <p>
                    <img src="/Public/Home/images/tel2.gif">
                </p>
            </div>
        </div>
        <div class="footertr">
            <div class="footertr_t">
                好趣购是货真价实的网络直销商城，好趣购所售手机全部都是厂家直接供货，没有任何中间批发 和分销环节，让您以最低价格，购买到性价比最高的手机。
            </div>
            <div class="footertr_b">
                <dl class="footertr_d1">
                    <dt>
                    </dt>
                    <dd>
                        会员积分计划
                    </dd>
                </dl>
                <dl>
                    <dt>
                    </dt>
                    <dd>
                        免费订购热线
                    </dd>
                </dl>
                <dl class="footertr_d3">
                    <dt>
                    </dt>
                    <dd>
                        3000城市送货上门
                    </dd>
                </dl>
                <dl class="footertr_d4">
                    <dt>
                    </dt>
                    <dd>
                        品牌厂商直接供货
                    </dd>
                </dl>
                <dl class="footertr_d5">
                    <dt>
                    </dt>
                    <dd>
                        中国人保承保
                    </dd>
                </dl>
            </div>
            <div class="clear">
            </div>
        </div>
        <div class="clear">
        </div>
    </div>
    <div class="footer">
        <div class="foottop">
            <dl>
                <dt>
                    新手上路
                </dt>
                <dd>
                    <a href="#" title="售后流程">
                        售后流程
                    </a>
                </dd>
                <dd>
                    <a href="#" title="购物流程">
                        购物流程
                    </a>
                </dd>
                <dd>
                    <a href="#" title="订购方式">
                        订购方式
                    </a>
                </dd>
            </dl>
            <dl>
                <dt>
                    手机常识
                </dt>
                <dd>
                    <a href="#" title="如何分辨原装电池">
                        如何分辨原装电池
                    </a>
                </dd>
                <dd>
                    <a href="#" title="如何分辨水货手机 ">
                        如何分辨水货手机
                    </a>
                </dd>
                <dd>
                    <a href="#" title="如何享受全国联保">
                        如何享受全国联保
                    </a>
                </dd>
            </dl>
            <dl>
                <dt>
                    配送与支付
                </dt>
                <dd>
                    <a href="#" title="货到付款区域">
                        货到付款区域
                    </a>
                </dd>
                <dd>
                    <a href="#" title="配送支付智能查询 ">
                        配送支付智能查询
                    </a>
                </dd>
                <dd>
                    <a href="#" title="支付方式说明">
                        支付方式说明
                    </a>
                </dd>
            </dl>
            <dl>
                <dt>
                    会员中心
                </dt>
                <dd>
                    <a href="#" title="资金管理">
                        资金管理
                    </a>
                </dd>
                <dd>
                    <a href="#" title="我的收藏">
                        我的收藏
                    </a>
                </dd>
                <dd>
                    <a href="#" title="我的订单">
                        我的订单
                    </a>
                </dd>
            </dl>
            <dl>
                <dt>
                    服务保证
                </dt>
                <dd>
                    <a href="#" title="退换货原则">
                        退换货原则
                    </a>
                </dd>
                <dd>
                    <a href="#" title="售后服务保证 ">
                        售后服务保证
                    </a>
                </dd>
                <dd>
                    <a href="#" title="产品质量保证 ">
                        产品质量保证
                    </a>
                </dd>
            </dl>
            <dl>
                <dt>
                    联系我们
                </dt>
                <dd>
                    <a href="#" title="网站故障报告">
                        网站故障报告
                    </a>
                </dd>
                <dd>
                    <a href="#" title="选机咨询 ">
                        选机咨询
                    </a>
                </dd>
                <dd>
                    <a href="#" title="投诉与建议 ">
                        投诉与建议
                    </a>
                </dd>
            </dl>
            <div class="foottop_r" onClick="window.location.href = '#'">
            </div>
            <div class="clear">
            </div>
        </div>
        <div class="footbot">
            <a href="#">
                免责条款
            </a>
            |
            <a href="#">
                隐私保护
            </a>
            |
            <a href="#">
                咨询热点
            </a>
            |
            <a href="#">
                联系我们
            </a>
            |
            <a href="#">
                公司简介
            </a>
            |
            <a href="#">
                批发方案
            </a>
            |
            <a href="#">
                配送方式
            </a>
            <p>
                &copy; 2005-2011 ECSHOP 版权所有，并保留所有权利。
            </p>
            <div class="clear">
            </div>
        </div>
        <div class="clear">
        </div>
    </div>
</body>

</html>

<script>
    
    function f1(a){
        var id = a;
        document.getElementById(id).style.display='block';
    }

</script>