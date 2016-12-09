
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
	<header class="top-header fixed-header">
		<a class="icona" href="javascript:history.go(-1)">
				<img src="/public/images/left.png"/>
			</a>
		<h3>男装专区</h3>
			
			<a class="iconb" href="{{url('/cart')}}">
				<img src="/public/images/shopbar.png"/>
			</a>
	</header>
	
	<div class="contaniner fixed-conta">
		<section class="list">
			<figure><img src="/public/images/list-ban01.png"/></figure>
			<div class="search">
				<input type="search" placeholder="韩版卫衣" />
				<label><img src="/public/images/list-search.png"/></label>
			</div>
			<nav>
				<ul>
					<li>
						<a href="#">
							<span>全部</span>
						</a>
					</li>
					<li class="list-active">
						<a href="#">
							<span>销量</span>
							<img src="/public/images/up-red.png"/>
						</a>
					</li>
					<li>
						<a href="#">
							<span>价格</span>
						</a>
					</li>
					<li>
						<a href="#">
							<span>评价</span>
						</a>
					</li>
				</ul>


			</nav>
			<ul class="wall">
				@foreach($items as $i)
				<li class="pic">
					<a href="{{url('/goods',$i['gid'])}}">
						<img src="/public/images/list-ph01.png"/>
						<p>{{$i['gname']}}</p>
						<b>￥{{$i['gprice']}}</b><del>￥538</del>
					</a>
				</li>
				@endforeach
			</ul>
		</section>
	</div>
	
	
	
	
<script src="/public/js/jquery.min.js" type="text/javascript" charset="utf-8"></script>
<script type="text/javascript" src="/public/js/jaliswall.js"></script>
	<script type="text/javascript">
	$(window).load(function(){
		$('.wall').jaliswall({ item: '.pic' });
	});
	</script>
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