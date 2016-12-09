
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
    <header class="page-header">
        <h3>立即付款</h3>
    </header>
    
    <div class="contaniner fixed-contb">
        <section class="shopcar">
            <div>
                <dl>
                    <dt>订单已生成</dt>
                    <dt>订单号为:{{$ordsn}}</dt>
                    <dt>请及时付款</dt>
                </dl>
            </div>
        </section>
        <!--去结算-->
        <div style="margin-bottom: 16%;"></div>
        
    </div>
    <script type="text/javascript">
        $(".shopcar-checkbox label").on('touchstart',function(){
            if($(this).hasClass('shopcar-checkd')){
                $(".shopcar-checkbox label").removeClass("shopcar-checkd")
            }else{
                $(".shopcar-checkbox label").addClass("shopcar-checkd")
            }
        })
    </script>
    <footer class="page-footer fixed-footer">
<form action="{{url('/payok')}}" method="post" id="fukuan">
    {!!csrf_field()!!}
    <input type="hidden" name="oid" value="{{$oid}}">

</form>

        <div class="shop-go">
            <b>合计：￥{{$total}}</b>
            <span onclick="f1()">立即付款</span>
        </div>

<script>
    function f1(){
        document.getElementById('fukuan').submit();
    }
</script>

<script>
    var WXPayment = function() {
    if( typeof WeixinJSBridge === 'undefined' ) {
        alert('请在微信在打开页面！');
        return false;
    }
    WeixinJSBridge.invoke(
        'getBrandWCPayRequest',{!!$payconfig!!}  function(res) {
        switch(res.err_msg) {
            case 'get_brand_wcpay_request:cancel':
                alert('用户取消支付！');
                break;
            case 'get_brand_wcpay_request:fail':
                alert('支付失败！（'+res.err_desc+'）');
                break;
            case 'get_brand_wcpay_request:ok':
                alert('支付成功！');
                break;
            default:
                alert(JSON.stringify(res));
                break;
        }
    });
}
</script>

        <ul>
            <li>
                <a href="{{url('/')}}">
                    <img src="/public/images/footer001.png"/>
                    <p>首页</p>
                </a>
            </li>
            <li>
                <a href="{{url('/assort')}}">
                    <img src="/public/images/footer002.png"/>
                    <p>分类</p>
                </a>
            </li>
            <li class="active">
                <a href="{{url('/cart')}}">
                    <img src="/public/images/footer03.png"/>
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