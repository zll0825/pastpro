
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />
    <title>分类</title>
    <link rel="stylesheet" type="text/css" href="/public/css/loaders.min.css"/>
    <link rel="stylesheet" type="text/css" href="/public/css/loading.css"/>
    <link rel="stylesheet" type="text/css" href="/public/css/base.css"/>
    <link rel="stylesheet" type="text/css" href="/public/css/style.css"/>
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
<body style="background-color: #fff;">
    <header class="page-header fixed-header">
        <input type="search"  /> 
        <span>
            <img src="/public/images/serach.png"/>
        </span>
    </header>
    
    <div class="contaniner fixed-cont">
        <aside class="assort">
            <ul>
                <li class="active">
                    <img src="/public/images/classify01.png"/>
                    <span>母婴用品</span>
                </li>
                <li>
                    <img src="/public/images/classify02.png"/>
                    <span>女装正品</span>
                </li>
                <li>
                    <img src="/public/images/classify03.png"/>
                    <span>男装正品</span>
                </li>
                <li>
                    <img src="/public/images/classify04.png"/>
                    <span>内衣服饰</span>
                </li>
                <li>
                    <img src="/public/images/classify05.png"/>
                    <span>化妆品</span>
                </li>
                <li>
                    <img src="/public/images/classify06.png"/>
                    <span>居家百货</span>
                </li>
                <li>
                    <img src="/public/images/classify07.png"/>
                    <span>时尚智能</span>
                </li>
                <li>
                    <img src="/public/images/classify08.png"/>
                    <span>营养保健</span>
                </li>
                <li>
                    <img src="/public/images/classify09.png"/>
                    <span>女鞋箱包</span>
                </li>
            </ul>
        </aside>
        
        <section class="assort-cont">
            <figure>
                <a href="#">
                    <img src="/public/images/classify-ph01.png"/>
                </a>
            </figure>
            <dl>
                <dt>宝宝营养</dt>
                <dd>
                    <a href="#">
                        <img src="/public/images/classify-ph02.png"/>
                        <p>DNA</p>
                    </a>
                </dd>
                <dd>
                    <a href="#">
                        <img src="/public/images/classify-ph03.png"/>
                        <p>钙剂</p>
                    </a>
                </dd>
                <dd>
                    <a href="#">
                        <img src="/public/images/classify-ph02.png"/>
                        <p>DNA</p>
                    </a>
                </dd>
                <dd>
                    <a href="#">
                        <img src="/public/images/classify-ph03.png"/>
                        <p>钙剂</p>
                    </a>
                </dd>
            </dl>
            <dl>
                <dt>妈妈专区</dt>
                <dd>
                    <a href="#">
                        <img src="/public/images/classify-ph04.png"/>
                        <p>DNA</p>
                    </a>
                </dd>
                <dd>
                    <a href="#">
                        <img src="/public/images/classify-ph05.png"/>
                        <p>钙剂</p>
                    </a>
                </dd>
                <dd>
                    <a href="#">
                        <img src="/public/images/classify-ph04.png"/>
                        <p>DNA</p>
                    </a>
                </dd>
                <dd>
                    <a href="#">
                        <img src="/public/images/classify-ph05.png"/>
                        <p>钙剂</p>
                    </a>
                </dd>
            </dl>
        </section>
    </div>
    
    <footer class="page-footer fixed-footer">
        <ul>
            <li>
                <a href="{{url('/')}}">
                    <img src="/public/images/footer001.png"/>
                    <p>首页</p>
                </a>
            </li>
            <li class="active">
                <a href="{{url('/assort')}}">
                    <img src="/public/images/footer02.png"/>
                    <p>分类</p>
                </a>
            </li>
            <li>
                <a href="{{url('/cart')}}">
                    <img src="/public/images/footer003.png"/>
                    <p>购物车</p>
                </a>
            </li>
            <li>
                <a href="{{url('/ucenter')}}">
                    <img src="/public/images/footer004.png"/>
                    <p>个人中心</p>
                </a>
            </li>
        </ul>
    </footer>
    
    
</body>
</html>