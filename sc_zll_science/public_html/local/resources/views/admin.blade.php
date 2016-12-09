<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml"><head><meta http-equiv="Content-Type" content="text/html; charset=UTF-8"><title>
	【请家教 - 北京请家教】 - 尚才家教
</title>
<link href="/css/css.css" rel="stylesheet" type="text/css">

<!-- test by 朱柯成 -->
 <link rel="stylesheet" href="http://apps.bdimg.com/libs/bootstrap/3.3.0/css/bootstrap.min.css">
   <script src="http://apps.bdimg.com/libs/jquery/2.1.1/jquery.min.js"></script>
   <script src="http://apps.bdimg.com/libs/bootstrap/3.3.0/js/bootstrap.min.js"></script>
<!-- 测试end 朱柯成-->



</head>
<body>
    
<div>
<style>
    body{
    	margin-top: 300px;
    	background-image: url('images/admin_bk3.jpg');
    	background-repeat: no-repeat;

    	background-size: cover;
    }
	h1{
		/*text-align: center;
		line-height: 100px;*/
	}
	
	

	form{
		margin: 200px 0px 0px 150px;
		width:600px;
		color:white;
	}
</style>
</div>


<!-- <div id="topbar" class="color_999">
  
</div> -->

<!-- <div id="top">
  <div class="w950">
 
            
  <div>
  <h1 >尚才教育管理后台</h1>
  </div>
</div>
 -->
<div id="container">

	<div class="" style="width:400px; margin-top:100px" id="form">
		
	    <form  action='' class="form-horizontal "  id='form ' role="form" method="post">
		    <div class="form-group">
		      <label for="firstname" class="col-sm-2 control-label">管理员账号</label>
		      <div class="col-sm-4">
		         <input type="text" class="form-control "  name ='name'  id="firstname">
		      </div>
		   </div>
		   <div class="form-group" >
		      <label for="lastname" class="col-sm-2 control-label">管理员密码</label>
		      <div class="col-sm-4">
		         <input type="password" class="form-control" id="lastname"  name="password"
		         >
		      </div>
		   </div>
		   <div class="form-group">
		      <div class="col-sm-offset-2 col-sm-10">
		         <div class="checkbox">
		            
		         </div>
		      </div>
		   </div>
		   <div class="form-group">
		      <div class="col-sm-offset-2 col-sm-10">
		      {!!csrf_field()!!}
		       <button type="submit" class="btn btn-success btn-lg">
		          <span class="glyphicon glyphicon-user"></span>
		         点击登录
		         </button> 
		      </div>
		   </div>
		</form>
	</div>
</div>
</body>
</html>
<script>
	$("#form").submit(function(){
		var name = $('#firstname').val();
		var patt = /^\w{6,}$/;
		if(!patt.test(name)){
			alert('管理员账号不对');
			return false;
		}
		var last =$('#lastname').val();
		if (!patt.test(last) ){
			alert('密码不对啊');
			return false;
		}
	});
</script>