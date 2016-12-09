
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />
    <title>全部订单</title>
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
		<h3>全部订单</h3>
			<a class="iconb" href="shopcar.html">
			</a>
	</header>
	
	<div class="contaniner fixed-conta">
		<section class="order">
			@foreach($data as $d)
			<dl>
				<dt>
					<span>订单编号：{{$d['ordsn']}}</span>
					<time>{{date('Y-m-d H:i:s', $d['ordtime'])}}</time>
					<span>待发货</span>
				</dt>
				@foreach($d['items'] as $i)
				<ul>
					<a href="detail.html">
						<figure><img src="/public/images/classify-ph03.png"/></figure>
						<li>
							<p>{{$i->gname}}</p>
							<small>颜色：经典绮丽款</small>
							<span>尺寸：XL</span>
							<b>￥{{$i->price}}</b>
							<strong>×{{$i->amount}}</strong>
						</li>
					</a>
				</ul>
				@endforeach
				<dd>
					<h3>商品总额</h3>
					<i>￥98.00</i>
				</dd>
				<dd>
					<input type="button" value="确认收货" class="order-que"/>
					<input type="button" value="查看物流" onclick="javascript:location.href='wuliu.html'" />
					<input type="button" value="取消订单" />
				</dd>
			</dl>
			@endforeach

		</section>
	</div>
	
	
	
	

</body>
</html>