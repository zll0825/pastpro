
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />
    <title>购物车</title>
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
    <header class="top-header fixed-header">
        <a class="icona" href="javascript:history.go(-1)">
                <img src="/public/images/left.png"/>
            </a>
        <h3 onclick="qiuhe()">购物车</h3>
            
            <a class="iconb" href="shopcar.html">
                <img src="/public/images/shopbar.png"/>
            </a>
    </header>
    <form action="{{url('/buy')}}" method="post" id="gobuy">
    {!!csrf_field()!!}
    <div class="contaniner fixed-conta" style="padding-bottom:6em">
        @foreach($goods as $g)
        <section class="shopcar">
            <div class="shopcar-checkbox">
                <label for="shopcar{{$g['id']}}" onselectstart="return false" class="shopcar-checkd"></label>
                <input type="checkbox" id="shopcar{{$g['id']}}" name="gid[]" value="{{$g['id']}}" checked />
            </div>
            <figure><img src="/public/images/shopcar-ph01.png"/></figure>
            <dl>
                <dt>{{$g['name']}}</dt>
                <dd>颜色：经典绮丽款</dd>
                <dd>尺寸：L</dd>
                <div class="add">
                    <span onclick="dec(this,{{$g['id']}})" disabled>-</span>
                    <input type="text" value="{{$g['quantity']}}" name="gnum[]" id="gnum" onchange="numchange(this,{{$g['id']}})" style="ime-mode:disabled;" onpaste="return false;"  onkeypress="keyPress()" />
                    <span onclick="inc(this,{{$g['id']}})">+</span>
                </div>
                <h3 >￥{{$g['price']}}</h3></br>
                <small><img src="/public/images/shopcar-icon01.png" onclick="del(this,{{$g['id']}})"/></small>
            </dl>
        </section>
        @endforeach
</form>
        <!--去结算-->
        <div style="margin-bottom: 16%;"></div>
        
    </div>
    <script>
        function checka(obj){
            alert(1);
            if($(this).val() == ''){
                this.focus();
            }
        }

        function keyPress() {    
             var keyCode = event.keyCode;    
             if ((keyCode >= 48 && keyCode <= 57))    
            {    
                 event.returnValue = true;    
             } else {    
                   event.returnValue = false;    
            }    
         }    

        function qiuhe(){
            var zonghe = 0;
            var zongshu = 0;
            $.each($('section'),function(k,v){
        // console.log($(v).find('input:checkbox').prop('checked'));

        // console.log($(v).find('label').hasClass('shopcar-checkd'));

                if($(v).find('label').hasClass('shopcar-checkd')){
                    // console.log($(this).find('input:text').val());
                    var num = parseInt($(this).find('input:text').val());
                    var price = $(this).find('h3').text();
                    price = parseFloat(price.substr(1));
                    zongshu += num;
                    zonghe += (price*num);
                }
            });
            zonghe = (parseFloat(zonghe)).toFixed(2);
            $('#total').text('合计：￥'+ zonghe);
            $('#amount').text('去结算（'+ zongshu +'）');
        }

        function numchange(obj,gid){
            var num = $(obj).val();
            $.post("{{url('/input')}}",{_token:"{{csrf_token()}}",gid:gid,num:num},function(message){
                qiuhe();
            });
        }

        function dec(obj,gid){
            var quantity = $(obj).parents('.add').children('input');
            if(quantity.val() <= 1){
                return false;
            }
            $.get("{{url('/dec')}}"+ '/'+gid, function(message){

            var num = parseInt($(obj).parents('section').find('input#gnum').val());
            $(obj).parents('.add').children('input').val(num-1);
            qiuhe();
            });
        }

        function inc(obj,gid){
            $.get("{{url('/inc')}}"+ '/'+gid, function(message){

            var num = parseInt($(obj).parents('section').find('input#gnum').val());
            $(obj).parents('.add').children('input').val(num+1);
            qiuhe();
            });
        }
        function del(obj,gid){
            $.get("{{url('/delcart')}}"+ '/'+gid, function(message){
                $(obj).parents('section').remove();
                qiuhe();
            },'json');
        }
    </script>
    <script type="text/javascript">
        $(".shopcar-checkbox label").click('touchstart',function(){
            if($(this).hasClass('shopcar-checkd')){
                $(this).removeClass("shopcar-checkd");
                $(this.nextSibling.nextSibling).attr('checked', true);

            }else{
                $(this).addClass("shopcar-checkd");
                $(this.nextSibling.nextSibling).attr('checked', false);
            }
            qiuhe();
        })
    </script>
    <footer class="page-footer fixed-footer">
        <div class="shop-go">
            <b id="total">合计：￥{{$total}}</b>
            <span id="amount" onclick="f1()">去结算（{{$amount}}）</span>
            <script>
                function f1(){
                    $('#gobuy').submit();
                }
            </script>
        </div>
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