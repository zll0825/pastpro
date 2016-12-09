<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<!-- saved from url=(0038)http://www.caijj.com/tuser/zxxyxq.aspx -->
<html xmlns="http://www.w3.org/1999/xhtml"><head><meta http-equiv="Content-Type" content="text/html; charset=UTF-8"><title>
    尚才家教－教员管理后台
</title>


<link rel="stylesheet" href="http://apps.bdimg.com/libs/bootstrap/3.3.0/css/bootstrap.min.css">
   <script src="http://apps.bdimg.com/libs/jquery/2.1.1/jquery.min.js"></script>
  <!--  <script src="http://apps.bdimg.com/libs/bootstrap/3.3.0/css/bootstrap-theme.min.css"></script> -->
   <script src="http://apps.bdimg.com/libs/bootstrap/3.3.0/js/bootstrap.min.js"></script>


<style>
    body{
        background-image: url('/images/admin_bk4.jpg');
        background-size: cover;
    }

    ul li{
       
       
    }
    li a {
        font-size: 30px;
        font-family: "微软雅黑";
        color: #000000;

    }
    #bigtitle{
        font-family: "微软雅黑";
        width: 600px;
        margin: 0px auto;
        /*text-align: center;*/
    }

    #rightside{

         width: 1100px;
        margin: 50px auto;
    }
    #nav_forcenter{
         width: 1200px;
        margin: 0px auto;
    }
    
</style>
<body>
    <div >
        欢迎您登陆 <a href="">进入管理中心主页</a>
        <a href="{{url('/')}}"><button type="button" class="btn">   查看网站</button></a>
    </div>
    </div id="bigtitle">
            <h1 style="text-align: center">后台管理中心</h1>
    </div>

        <div id="nav_forcenter" >
<nav class="navbar navbar-default " style="background: transparent;" >
    <ul class="nav nav-pills nav-justified" id="act">
            
        <li style="" id="nav1" >
            <a  href="{{url('managecenter')}}">权限管理</a>
        </li>
        <li  style="" id="nav2" >
            <a href="{{url('checklist')}}"><span>用户审核</a>
        </li>
        <li style="" id="nav3"  >
            <a href="{{url('orderlist')}}">订单审核</a>
            </li> 
        <li style="" id="nav4" >
            <a href="{{url('allorder')}}">全部订单</a>
            </li>
        <li  style="" id="nav5">
            <a href="{{url('alluser')}}">全部用户</a>
        </li>
        <li  style=""  id="nav6">
            <a href="{{url('resorder')}}">订单跟踪</a>
        </li>
        <li  style="" id="nav7">
            <a href="{{url('example')}}">成功案例</a>
        </li>
    </ul>
</nav>
        </div>

@yield('content')


</body>

<script>

   if (window.location.href=='http://sc.zll.science/admin') {

        $('#nav1').attr('class','active');
    }
    if (window.location.href=='http://sc.zll.science/checklist') {

        $('#nav2').attr('class','active');
    }
    if (window.location.href=='http://sc.zll.science/orderlist') {

        $('#nav3').attr('class','active');
    }
    if (window.location.href=='http://sc.zll.science/allorder') {

        $('#nav4').attr('class','active');
    }
    if (window.location.href=='http://sc.zll.science/alluser') {

        $('#nav5').attr('class','active');
    }
    if (window.location.href=='http://sc.zll.science/resorder') {

        $('#nav6').attr('class','active');
    }
    if (window.location.href=='http://sc.zll.science/example') {

        $('#nav7').attr('class','active');
    }
    if (window.location.href=='http://sc.zll.science/managecenter') {

        $('#nav1').attr('class','active');
    }

</script>

</html>