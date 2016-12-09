
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />
    
        <meta name="format-detection" content="telephone=no" />
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
	<header class="top-header fixed-header">
			<a class="icona" href="javascript:history.go(-1)">
					<img src="/public/images/left.png"/>
			</a>
			<h3>确认订单</h3>
			<a class="iconb" href="shopcar.html">
			</a>
	</header>
	
	<div class="contaniner fixed-cont">
		<section class="to-buy">
			<header>
				<div class="now">
					<span><img src="/public/images/map-icon.png"/></span>
						<dl>
							<dt>
								<b>瑾晨</b>
								<strong>13035059860</strong>
							</dt>
							<dd>安徽省合肥市XXXXXXXX</dd>
							<p>其他地址</p>
						</dl>
				</div>
				
				<div class="to-now">
					<div class="tonow">
							<label for="tonow"  onselectstart="return false" ></label>
							<input type="checkbox" id="tonow"/>
					</div>
					<dl>
							<dt>
								<b>瑾晨</b>
								<strong>13035059860</strong>
							</dt>
							<dd>安徽省合肥市XXXXXXXX</dd>
					</dl>
					<h3><a href="go-address.html"><img src="/public/images/write.png"/></a></h3>
				</div>
			</header>
		<form id="tijiao" action="{{url('/done')}}" method="post">
			<div class="buy-list">
				@foreach($goods as $g)
				<ul>
					<a href="{{url('/goods',$g['id'])}}">
						<li>
							<h3>{{$g['name']}}</h3>
							<span>
								颜色：经典绮丽款
								<br />
								尺寸：M
							</span>
							<b>￥{{$g['price']}}</b>
							<small>×{{$g['quantity']}}</small>
						</li>
					</a>
				</ul>
				<input type="hidden" name="gid[]" value="{{$g['id']}}">
				@endforeach
				<dl>
					<dd>
						<span>运费</span>
						<small>包邮</small>
					</dd>
					<dd>
						<span>商品总额</span>
						<small>￥{{$total}}</small>
					</dd>
					<dt>
						<textarea rows="4" placeholder="给卖家留言（50字以内）"></textarea>
					</dt>
				</dl>
			</div>
			



			{!! csrf_field()!!}
			<div class="buy-list">
			<dl>
			<dd>地    址：<input type="text" name="address"></dd>
			<dd>收货人：<input type="text" name="name"></dd>
			<dd>手    机：<input type="text" name="mobile"></dd>
			</dl>
			</div>
		</form>





		</section>
		<!--底部不够-->
		<div style="margin-bottom: 9%;"></div>
	</div>
	
	<footer class="buy-footer fixed-footer">
			<p> 
				<small>总金额</small>
				<b>￥{{$total}}</b>
			</p>
				<input type="button" value="提交订单" onclick="f1()"/>
				<script>
					function f1(){
						document.getElementById('tijiao').submit();
					}
				</script>
	</footer>
	
	<script type="text/javascript">
		$(".to-now .tonow label").on('touchstart',function(){
			if($(this).hasClass('ton')){
				$(".to-now .tonow label").removeClass("ton")
			}else{
				$(".to-now .tonow label").addClass("ton")
			}
		})
	</script>

</body>
</html>