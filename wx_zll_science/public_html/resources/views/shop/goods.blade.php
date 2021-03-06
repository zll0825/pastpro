
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />
    <title>商城</title>
    <link rel="stylesheet" type="text/css" href="/public/css/loaders.min.css"/>
    <link rel="stylesheet" type="text/css" href="/public/css/loading.css"/>
    <link rel="stylesheet" type="text/css" href="/public/css/base.css"/>
    <link rel="stylesheet" type="text/css" href="/public/css/style.css"/>
    <link rel="stylesheet" type="text/css" href="/public/css/swiper.min.css"/>
      <script src="/public/js/jquery.min.js" type="text/javascript" charset="utf-8"></script>
    <script type="text/javascript">
        $(window).load(function(){
            $(".loading").addClass("loader-chanage")
            $(".loading").fadeOut(300)
        })
    </script>
</head>
<!--loading页开始-->
<div class="loading">
    <div class="loader">
        <div class="loader-inner pacman">
          <div></div>
          <div></div>
          <div></div>
          <div></div>
          <div></div>
        </div>
    </div>
</div>
<!--loading页结束-->
<body>
    <header class="detail-header fixed-header">
        <a href="javascript:history.go(-1)"><img src="/public/images/detail-left.png"/></a>
        
        <a href="shopcar.html" class="right"><img src="/public/images/shopbar.png"/></a>
    </header>
    
    
    <div class="contaniner fixed-contb">
        <section class="detail">
            <figure class="swiper-container">
                <ul class="swiper-wrapper">
                    <li class="swiper-slide">
                        <a href="#">
                            <img src="/public/images/detail-ban02.png"/>
                        </a>
                    </li>
                    <li class="swiper-slide">
                        <a href="#">
                            <img src="/public/images/detail-ban01.png"/>
                        </a>
                    </li>
                    <li class="swiper-slide">
                        <a href="#">
                            <img src="/public/images/detail-ban03.png"/>
                        </a>
                    </li>
                    <li class="swiper-slide">
                        <a href="#">
                            <img src="/public/images/detail-ban04.png"/>
                        </a>
                    </li>
                </ul>
                <div class="swiper-pagination">
                </div>
            </figure>
            <dl class="jiage">
                <dt>
                    <h3>{{$gname}}</h3>
                    <div class="collect">
                        <img src="/public/images/detail-heart-hei.png"/>
                        <p>收藏</p>
                    </div>
                </dt>
                <dd>
                    <b>￥{{$gprice}}</b>
                    <del>￥139</del>
                    <input type="button" value="￥10.00" readonly />
                    <small>+356积分</small>
                </dd>
            </dl>
            
            <div class="chose">
                <ul>
                    <h3>颜色</h3>
                    <li>
                        黑色
                    </li>
                    <li>
                        粉色
                    </li>
                    <li>
                        灰色
                    </li>
                    <li>
                        红色
                    </li>
                </ul>
                <ul>
                    <h3>尺寸</h3>
                    <li>
                        L
                    </li>
                    <li>
                        XL
                    </li>
                    <li>
                        XXL
                    </li>
                </ul>
            </div>
            
            <a href="#" class="seven">
                <b>7</b>天无理由退换货
                <span id="sss"></span>
            </a>
            
            <ul class="same">
                <a href="#">
                    <span>
                        同类推荐
                    </span>
                    <li class="one">
                        <img src="/public/images/detail-pp01.png"/>
                        <p>￥188.00</p>
                    </li>
                    <li>
                        <img src="/public/images/detail-pp02.png"/>
                        <p>￥188.00</p>
                    </li>
                    <li>
                        <img src="/public/images/detail-pp03.png"/>
                        <p>￥188.00</p>
                    </li>
                    <li>
                        <img src="/public/images/detail-pp04.png"/>
                        <p>￥188.00</p>
                    </li>
                </a>
            </ul>
            
            <article class="detail-article">
                <nav>
                    <ul class="article">
                        <li id="talkbox1" class="article-active">商品详情</li>
                        <li id="talkbox2">评价</li>
                    </ul>
                </nav>

                <section class="talkbox1">
                    会尽快啦辅导费发挥大路口
                </section>

                <section class="talkbox2" style="display: none;">
                    <ul class="talk">
                        <li>
                            <figure><img src="/public/images/detail-tou.png"/></figure>
                            <dl>
                                <dt>
                                    <p>瑾晨</p>
                                    <time>2015.11.17</time>
                                    <div class="star">
                                        <span><img src="/public/images/detail-iocn01.png"/></span>
                                        <span><img src="/public/images/detail-iocn01.png"/></span>
                                        <span><img src="/public/images/detail-iocn01.png"/></span>
                                        <span><img src="/public/images/detail-iocn001.png"/></span>
                                        <span><img src="/public/images/detail-iocn001.png"/></span>
                                    </div>
                                </dt>
                                <dd>哎哟不错哦，很性感哦！</dd>
                                <small>颜色：豹纹凯特</small>
                            </dl>
                        </li>
                        <li>
                            <figure><img src="/public/images/detail-tou.png"/></figure>
                            <dl>
                                <dt>
                                    <p>瑾晨</p>
                                    <time>2015.11.17</time>
                                    <div class="star">
                                        <span><img src="/public/images/detail-iocn01.png"/></span>
                                        <span><img src="/public/images/detail-iocn01.png"/></span>
                                        <span><img src="/public/images/detail-iocn01.png"/></span>
                                        <span><img src="/public/images/detail-iocn001.png"/></span>
                                        <span><img src="/public/images/detail-iocn001.png"/></span>
                                    </div>
                                </dt>
                                <dd>哎哟不错哦，很性感哦！</dd>
                                <small>颜色：豹纹凯特</small>
                                <div class="picbox">
                                    <img src="/public/images/detail-pp01.png"/>
                                    <img src="/public/images/detail-pp02.png"/>
                                    <img src="/public/images/detail-pp03.png"/>
                                    <img src="/public/images/detail-pp04.png"/>
                                </div>
                            </dl>
                        </li>
                        <li>
                            <figure><img src="/public/images/detail-tou.png"/></figure>
                            <dl>
                                <dt>
                                    <p>瑾晨</p>
                                    <time>2015.11.17</time>
                                    <div class="star">
                                        <span><img src="/public/images/detail-iocn01.png"/></span>
                                        <span><img src="/public/images/detail-iocn01.png"/></span>
                                        <span><img src="/public/images/detail-iocn01.png"/></span>
                                        <span><img src="/public/images/detail-iocn001.png"/></span>
                                        <span><img src="/public/images/detail-iocn001.png"/></span>
                                    </div>
                                </dt>
                                <dd>哎哟不错哦，很性感哦！</dd>
                                <small>颜色：豹纹凯特</small>
                            </dl>
                        </li>
                        <li>
                            <figure><img src="/public/images/detail-tou.png"/></figure>
                            <dl>
                                <dt>
                                    <p>瑾晨</p>
                                    <time>2015.11.17</time>
                                    <div class="star">
                                        <span><img src="/public/images/detail-iocn01.png"/></span>
                                        <span><img src="/public/images/detail-iocn01.png"/></span>
                                        <span><img src="/public/images/detail-iocn01.png"/></span>
                                        <span><img src="/public/images/detail-iocn001.png"/></span>
                                        <span><img src="/public/images/detail-iocn001.png"/></span>
                                    </div>
                                </dt>
                                <dd>哎哟不错哦，很性感哦！</dd>
                                <small>颜色：豹纹凯特</small>
                                <div class="picbox">
                                    <img src="/public/images/detail-pp01.png"/>
                                    <img src="/public/images/detail-pp02.png"/>
                                    <img src="/public/images/detail-pp03.png"/>
                                    <img src="/public/images/detail-pp04.png"/>
                                </div>
                            </dl>
                        </li>
                    </ul>
                </section>
                
            </article>
        </section>
    </div>
    
    
        <footer class="detail-footer fixed-footer">
            <form action="{{url('/cart')}}" method="post" id="cart">
                <input type="hidden" name="gid" value="{{$gid}}">
                {!!csrf_field()!!}
                <a href="javascript:;" class="go-car">
                    <input type="button" value="加入购物车" onclick="f1()"/>
                </a>
                <a  class="buy" onclick="f1()">
                    立即购买
                </a>
            </form>
<script>
    function f1(){
        document.getElementById('cart').submit();
    }
</script>

        </footer>
    
<script src="/public/js/jquery.min.js" type="text/javascript" charset="utf-8"></script>
<script type="text/javascript">
    $(window).scroll(function() {
        if ($(".detail-header").offset().top > 50) {
        $(".detail-header").addClass("change");
    } else {
        $(".detail-header").removeClass("change");
    }
    });
</script>
<script src="/public/js/wiper.min.js"></script>
<script type="text/javascript">
        $(document).ready(function(){
            var mySwiper = new Swiper('.swiper-container',{
                    loop: true,
                    speed:1000,
                    autoplay: 2000,
                    pagination: '.swiper-pagination',
                  });
        })
    </script>
<script type="text/javascript">
    $(function(){
        $('.chose li').click(function(){
                
            $(this).addClass('chose-active').siblings().removeClass('chose-active');

            var tags=document.getElementsByClassName('chose-active');//获取标签

            var tagArr = "";
            for(var i=0;i < tags.length; i++)
            {
                tagArr += tags[i].innerHTML;//保存满足条件的元素

            }
           
            $('#sss').html(tagArr);

        });

        $('.article li').click(function(){

            $(this).addClass('article-active').siblings().removeClass('article-active');
            if($(this).attr("id")=="talkbox1"){
                $('.talkbox1').show();
                $('.talkbox2').hide();
            }else{
                $('.talkbox2').show();
                $('.talkbox1').hide();
            }

        }); 
    });
</script>

</body>
</html>