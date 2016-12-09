    <script src="http://libs.baidu.com/jquery/1.9.0/jquery.js"></script>
    <div id="topbar" class="color_999">
        <div class="w950">
            <div class="right">
                <a href="#" onclick="SetHome(this,window.location)" class="color_999">设为首页</a>&nbsp;
                <a href="#" onclick="AddFavorite(window.location,document.title)" class="color_999">
                    加入收藏</a>&nbsp; <a href="#" class="color_999">帮助中心</a>
            </div>
            @if(Request::user())
            <div class="left" id="ydl">
                {{Request::user()->name}}
                欢迎您登陆 <a href="{{url('/ucenter')}}">&nbsp;进入管理中心主页</a>
            </div>
        </div>
        <div class="left" id="wdl">
            &nbsp;&nbsp; <a href="{{url('/auth/logout')}}">注销</a>
        </div>
        @else
        <div class="left" id="wdl">
            <a href="{{url('/auth/login')}}"><button id="Button1">登录</button></a>&nbsp;&nbsp; <a href="{{url('/auth/register')}}" class="color_orage text_decoration">注册会员</a>
        </div>
        @endif
               
            </div>
            
        </div>
    </div>
    <div id="top">
        <div class="w950">

            <div style="float: right; width:100px; padding-top:25px;">
                <a href="{{url('/admin')}}" ><img src="/images/qq.jpg" alt="" border="0"></a>
            </div>
			<div style="float: right; padding: 25px 0 0 0;">
                <img src="/images/top_bn.gif" alt="尚才家教">
            </div>
            <div id="logo" style="float:left;">
                <img src="/images/logo.jpg" alt="尚才家教">
            </div>
			
        </div>
    </div>

   
  