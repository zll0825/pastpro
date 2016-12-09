
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml"><head><meta http-equiv="Content-Type" content="text/html; charset=UTF-8"><title>
	【尚才家教网 - 北京家教中心】北京一对一上门家教领航品牌!北京重点中小学老师和清华、北大、北师大等大学生家教兼职首选家教网! - 北京家教信息网 - 北京家教网站
</title><meta name="keywords" content="北京家教,家教,北京家教网"><meta name="description" content="●数万师资 服务全北京●北京一对一上门家教机构领航★四中,人大附,首师附,101等重点中小学特高级教师★清华,北大,北师大等名校大学生★请家教热线:010-88888888"><link href="css/css.css" rel="stylesheet" type="text/css">
<script src="http://libs.baidu.com/jquery/1.9.0/jquery.js"></script>

    {{csrf_field()}}
<div>
</div>


 @include('header')
<div id="menu" class="w950">
<ul id="top1_ulDH">
        <li id="l0" class="active" style="width:20%"><a href="{{url('/')}}" ><span >首页</span></a></li>
        <li id="l1" style="width:16%" id="lan_1"><a href="{{url('/teacher')}}"><span>教员库</span></a></li>
        <li id="l2" style="width:16%" id="lan_2"><a href="{{url('/student')}}"><span>学员库</span></a></li>
        <li id="l3" style="width:16%" id="lan_9"><a href="{{url('/examplelist')}}"><span>成功案例</span></a></li>
        <li id="l4" style="width:16%" id="lan_10"><a href="{{url('/fee')}}"><span>收费标准</span></a></li>
        <li id="l5" style="width:16%" id="lan_10"><a href="{{url('/fy')}}"><span>学习工具</span></a></li>
    </ul>
</div>




     
<div align="center">
      <object codebase="http://download.macromedia.com/pub/shockwave/cabs/flash/swflash.cab#version=6,0,29,0" classid="clsid:D27CDB6E-AE6D-11cf-96B8-444553540000" height="60" width="953">
        <param name="movie" value="http://drmcmm.baidu.com/media/id=PHbdP1TvnHf&amp;gp=401&amp;time=nHn1Pjb1rHbdP6.swf">
        <param name="quality" value="high">
        <param name="wmode" value="transparent">
        <embed src="/images/idPHbdP1TvnHfgp401timenHn1Pjb1rHbdP6.swf" quality="high" pluginspage="http://www.macromedia.com/go/getflashplayer" type="application/x-shockwave-flash" wmode="transparent" height="60" width="953">
      </object>
    </div>
    <div id="main" class="w950">
        <div class="right" style="width: 640px;">
            <!--最新学员信息-->
            <div class="box2" style="border-color: #bababa; margin: 0;">
                <div class="title" style="background-image: url(/images/box1_title_orage.jpg); border-color: #bababa;">
                    <h2 style="color: #e85200;">
                        <span class="more"><a href="{{url('student')}}"     >» 更多学员</a></span> 最新学员信息<span class="color_999" style="margin-left: 160px; font-weight: normal;">老师登录后,可直接在线预约</span></h2>
                </div>
                <div>
                    <table style="border-bottom: 1px solid rgb(226, 226, 226);" border="0" cellpadding="0" cellspacing="0" width="100%">
                        <tbody><tr>
                            <td class="color_orage" bgcolor="#fff5e8" height="25" width="80">
                                &nbsp;学员编号
                            </td>
                            <td class="color_orage" bgcolor="#fff5e8" height="25" width="80">
                                辅导科目
                            </td>
                            <td class="color_orage" bgcolor="#fff5e8" height="25" width="110">
                                学员要求
                            </td>
                            <td class="color_orage" bgcolor="#fff5e8" height="25" width="90">
                                所在区域
                            </td>
                            <td class="color_orage" bgcolor="#fff5e8" height="25" width="80">
                                发布时间
                            </td>
                            <td class="color_orage" bgcolor="#fff5e8" height="25" width="60">
                                状态
                            </td>
                            @if(Request::user() == '')   <!-- //判断用户角色 -->
                            <td class="color_orage" bgcolor="#fff5e8" height="25" width="47">
                                支付
                            </td>
                            @elseif(Request::user()->role == 1)
                            <td class="color_orage" bgcolor="#fff5e8" height="25" width="47">
                                支付
                            </td>
                            @elseif(Request::user()->role == 2)
                            <td class="color_orage" bgcolor="#fff5e8" height="25" width="47">
                            @endif

                        </tr>
                    </tbody></table>
                    
                            <table class="table_list" align="center" border="0" cellpadding="0" cellspacing="0" width="100%">
                        
                            <tbody><tr>
                                @foreach($order as $o)
                                <td width="60">
                                    &nbsp;<span style="color: #df4900;">{{$o->onum}}</span>({{$o->gender}})
                                </td>
                                <td title="地理历史" width="40">
                                    {{$o->subject}}
                                </td>
                                <td title="{{$o->requirement}}" width="95">
                                    {{$o->requirement}}
                                </td>
                                <td width="80">
                                    {{$o->address}}
                                </td>
                                <td width="69">
                                   {{date('Y-m-d',$o->pubtime)}}
                                </td>
                                <td class="color_green" width="48">
                                @if($o->status ==0)
                                未预定
                                @elseif($o->status ==1)
                                已预定
                                @elseif($o->status ==2)
                                授课中
                                @elseif($o->status ==3)
                                已结束
                                @endif
                                </td>
                                <td width="37">
                                
                                @if(Request::user() == '')   <!--  //判断用户角色 -->                  
                                
                                <a href="{{url('auth/login')}}">登陆支付</a>
                                @elseif(Request::user()->role == 1)
                                <form action="{{url('payment')}}" method="post">
                                    {!!csrf_field()!!}
                                    <input type="hidden"  name="onum" value="{{$o->onum}}"/>
                                    @if($o->status == 0)
                                    <input type="submit"  value='立即购买' class="color_999"/>
                                    @elseif($o->status ==1 )
                                    <input type="submit"  value='已预定' class="color_999" disabled="disabled"/>
                                    @elseif($o->status ==2 )
                                    <input type="submit"  value='授课中' class="color_999" disabled="disabled"/>
                                    @elseif($o->status ==3 )
                                    <input type="submit"  value='已结束' class="color_999" disabled="disabled"/>
                                    @endif    
                                </form>
                                 @elseif(Request::user()->role == 2)                                  
                                 @endif                                    
                                </td>
                            </tr>
                                @endforeach               
                            
                            </tbody></table>
                        
                </div>
            </div>
            <div style="margin: 6px auto;">
                <img src="/images/sc01.jpg"></div>
           
            <!--最新认证大学生教员-->
            <div class="box2">
                <div class="title">
                    <h2>
                        <span class="more"><a href="{{url('teacher')}}" style="color: rgb(232, 82, 0);">» 更多专业老师</a></span> 最新认证专业老师
                    </h2>
                </div>
                <div>
                    <table style="border-bottom: 1px solid rgb(226, 226, 226);" border="0" cellpadding="0" cellspacing="0" width="100%">
                        <tbody><tr>
                            <td class="color_orage" bgcolor="#fff5e8" height="25" width="65">
                                &nbsp;老师编号
                            </td>
                            <td class="color_orage" bgcolor="#fff5e8" height="25" width="65">
                                称呼
                            </td>
                            <td class="color_orage" bgcolor="#fff5e8" height="25" width="91">
                                资历
                            </td>
                            <td class="color_orage" bgcolor="#fff5e8" height="25" width="175">
                                可教授科目
                            </td>
                            <td class="color_orage" bgcolor="#fff5e8" height="25" width="126">
                                授课地点
                            </td>
                            <td class="color_orage" bgcolor="#fff5e8" height="25" width="69">
                                日期
                            </td>
                            
                        </tr>
                    </tbody></table>
                    
                    <div style="position: absolute; top: -878px;left: -967px;"></div><div style="position: absolute; top: -878px;left: -967px;"></div><div style="position: absolute; top: -878px;left: -967px;"></div><div style="position: absolute; top: -878px;left: -967px;"></div><div style="position: absolute; top: -878px;left: -967px;"></div><div style="position: absolute; top: -878px;left: -967px;"></div><div style="position: absolute; top: -878px;left: -967px;"></div><div style="position: absolute; top: -878px;left: -967px;"></div><div style="position: absolute; top: -878px;left: -967px;"></div><div style="position: absolute; top: -878px;left: -967px;"></div><div style="position: absolute; top: -878px;left: -967px;"></div><div style="position: absolute; top: -878px;left: -967px;"></div><div style="position: absolute; top: -878px;left: -967px;"></div><table class="table_list" align="center" border="0" cellpadding="0" cellspacing="0" width="100%">
                     
                        <tbody><tr>
                            @foreach($teacher as $t)
                            <td width="65">
                                &nbsp;<span style="color:#df4900;">{{$t->uid}}</span>({{$t->gender}})
                            </td>
                            <td width="65">
                                {{$t->name}}
                            </td>
                            <td width="91">
                            @if($t->edu == 0)
                            大专
                            @elseif($t->edu == 1)
                            本科
                            @elseif($t->edu == 2)
                            研究生
                            @elseif($t->edu ==3)
                            博士
                            @endif
                            </td>
                            <td width="175">
                                {{$t->goodat}}
                            </td>
                            <td width="126">
                                {{$t->address}}
                            </td>
                            <td width="69">
                                {{date('Y-m-d',$t->regtime)}}
                            </td>
                            
                        </tr>
                        @endforeach                       
                        
                            </tbody></table>
                        
                </div>
            </div>
           </div>
        <div class="left" style="width: 300px;">
            <div class="box1">
                <div style="background-color: #FFFFFF; padding: 6px 4px;">
                    @if(Request::user() == '')
					<a  href="{{url('/auth/login')}}"><img src="/images/qingjiajiao.jpg" border="0" hspace="2" vspace="3"><a href="{{url('/auth/login')}}"><img src="/images/zuojiaoyuang.jpg" border="0" hspace="2" vspace="3"></a>
                    @elseif(Request::user()->role == 1)
                    <a style="margin:70px" href="{{url('/ucenter')}}"><img src="/images/tcenter.jpg" border="0" hspace="2" vspace="3"></a>
                    @elseif(Request::user()->role == 2)
                    <a style="margin:70px" href="{{url('/student/issue')}}"><img src="/images/qingjiajiao.jpg" border="0" hspace="2" vspace="3"></a>
                    @endif
                </div>
                <div class="body">
                    <ul class="index_help">
                        <li><span class="color_orage">+</span> <a href="http://www.caijj.com/about/fwlc.html">请家教的流程</a></li>
                        <li><span class="color_orage">+</span> <a href="http://www.caijj.com/about/rhyydd.html">如何预约订单</a></li>
                        <li><span class="color_orage">+</span> <a href="http://www.caijj.com/about/qjjsfbz.html">学员收费标准</a></li>
                        <li><span class="color_orage">+</span> <a href="http://www.caijj.com/about/zjjsfbz.html">教员收费标准</a></li>
                        <li><span class="color_orage">+</span> <a href="http://www.caijj.com/teacher/index.aspx?type=1">挑选合适教员</a></li>
                        <li><span class="color_orage">+</span> <a href="http://www.caijj.com/about/hkjdsx.html">汇款接单手续</a></li>
                    </ul>
                    <div>
                        &nbsp;&nbsp;&nbsp;&nbsp;欢迎全市的大、中、小学生、成人和各种优秀教师到网上报名或来电请家教、做家教！<br>
                        &nbsp;&nbsp;&nbsp;&nbsp;我们为你提供在职优秀教师、离退休教师、大学生家教、研究生家教、留学生家教、外教家教等一对一上门精心辅导小、初、高学生语数英、理化
                        生、科学、政史地等科目。<br>
                        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="color:#e85200;"><strong>工作时间：8:30-22:00</strong>（周末正常上班）</span>
                    </div>
                </div>
            </div>

            <div class="box1">
                <div class="title">
                    <h2>
                        快捷搜索</h2>
                </div>
                <div class="body">
                    <div class="seachbar">
                <span class="seacbg1">
                    <select name="kjskm" id="kjskm" class="input_text ">
    <option selected="selected" value="">请选择家教科目</option>
    <option value="小学全科">小学全科 </option>
    <option value="初中全科">初中全科 </option>
    <option value="高中全科">高中全科 </option>
</select>
                  <select name="xb" id="xb" class="input_text">
    <option selected="selected" value="">性别</option>
    <option value="">不限</option>
    <option value="男">男</option>
    <option value="女">女</option>
</select>
                    <input name="jybh" id="jybh" class="input_text" onclick="check_jybh()" size="4" value="教员编号" type="text">
                    <input name="ImageButton1" id="ImageButton1" src="/images/so.gif" style="border-width: 0px;" type="image">
                </span>
            </div>
                </div>
            </div>
            <div class="box1" >
                <div class="title">
                    <ul class="menu_list" id='menus'>
                        <li class="active" id="t1"><a href="http://www.caijj.com/cjwt/cjwt.html"><span>常见问题</span></a></li>
                        <li id="t2" ><a href="http://www.caijj.com/xxff/xxff.html"><span>学习方法</span></a></li>
                        <li id="t3" ><a href="http://www.caijj.com/ksjy/ksjy.html"><span>考试经验</span></a></li>
                        <li id="t4" ><a href="http://www.caijj.com/jzkt/jzkt.html">家长课堂</a></li>
                    </ul>
                </div>
                <div id="bodys">
                <div class="body" id="c1">
                    <ul class="list"  style="display:block;">
                        
                                <li><a href="http://www.caijj.com/zjjcjwt/2433.html">
                                    关于未成功家教信息</a></li>
                            
                                <li><a href="http://www.caijj.com/zjjbz/767.html">
                                    教员做家教收费标准</a></li>
                            
                                <li><a href="http://www.caijj.com/zjjbz/766.html">
                                    怎样快速得到家教订单？</a></li>
                            
                                <li><a href="http://www.caijj.com/zjjbz/765.html">
                                    教员汇款方式</a></li>
                            
                                <li><a href="http://www.caijj.com/zjjbz/764.html">
                                    如何升级为星级教员？</a></li>
                            
                                <li><a href="http://www.caijj.com/zjjbz/763.html">
                                    北京做家教一小时多少钱？</a></li>
                            
                                <li><a href="http://www.caijj.com/zjjcjwt/762.html">
                                    做家教应注意的礼节！</a></li>                         
                                
                    </ul>
                    <span class="more"><a href="http://www.caijj.com/cjwt/cjwt.html">» 更多</a></span>
                </div>
                <div class="body" id="c2" style="display:none;">
                    <ul class="list">
                        
                                <li><a href="http://www.caijj.com/xxff/5907.html">
                                    管乐器为什么必须练长音？</a></li>
                            
                                <li><a href="http://www.caijj.com/xxff/5906.html">
                                    教育理解</a></li>
                            
                                <li><a href="http://www.caijj.com/xxff/5904.html">
                                    吉他自学支招</a></li>
                            
                                <li><a href="http://www.caijj.com/xxff/5903.html">
                                    北京高考成绩6月23日公布 首次采用大平行志愿</a></li>
                            
                                <li><a href="http://www.caijj.com/xxff/5902.html">
                                    高中物理</a></li>
                            
                                <li><a href="http://www.caijj.com/xxff/5901.html">
                                    数学学习认识</a></li>
                            
                                <li><a href="http://www.caijj.com/xxff/5899.html">
                                    训练孩子注意力的方法</a></li>
                            
                                <li><a href="http://www.caijj.com/xxff/5895.html">
                                    在高三家长座谈会上的发言</a></li>
                            
                    </ul>
                    <span class="more"><a href="http://www.caijj.com/xxff/xxff.html">» 更多</a></span>
                </div>
                 <div class="body" id="c3" style="display:none;">
                    <ul class="list">
                        
                                <li><a href="http://www.caijj.com/xxff/5895.html">
                                    怎样的阅读才是正确的阅读？</a></li>
                            
                                <li><a href="http://www.caijj.com/ksjy/3155.html">
                                    有针对性的学习才能考好语文</a></li>
                            
                                <li><a href="http://www.caijj.com/ksjy/3154.html">
                                    词语类题型的总结</a></li>
                            
                                <li><a href="http://www.caijj.com/ksjy/3153.html">
                                    语文考试技巧</a></li>
                            
                                <li><a href="http://www.caijj.com/ksjy/3149.html">
                                    面对考试要主动</a></li>
                            
                                <li><a href="http://www.caijj.com/ksjy/3109.html">
                                    把考试的精力放在基础上</a></li>
                            
                                <li><a href="http://www.caijj.com/ksjy/3107.html">
                                     养成好的解题习惯才能拿高分</a></li>
                            
                                <li><a href="http://www.caijj.com/ksjy/3106.html">
                                    基础不好的同学考试怎么办？</a></li>
                            
                    </ul>
                    <span class="more"><a href="http://www.caijj.com/ksjy/ksjy.html">» 更多</a></span>
                </div>
                <div class="body" id="c4" style="display:none;">
                    <ul class="list">
                        
                                <li><a href="http://www.caijj.com/jzkt/5900.html">
                                    孩子，快乐的高手</a></li>
                            
                                <li><a href="http://www.caijj.com//jzkt/5891.html">
                                    《浅谈中考语文复习的有效性》</a></li>
                            
                                <li><a href="http://www.caijj.com/jzkt/5848.html">
                                    五年级数学下册练习</a></li>
                            
                                <li><a href="http://www.caijj.com//jzkt/5847.html">
                                    练习题</a></li>
                            
                                <li><a href="http://www.caijj.com//jzkt/5808.html">
                                    家长和小朋友对学习架子鼓的一些疑惑</a></li>
                            
                                <li><a href="http://www.caijj.com//jzkt/5777.html">
                                    家长该如何预防孩子的网瘾？</a></li>
                            
                                <li><a href="http://www.caijj.com//jzkt/5761.html">
                                    独生子女父母的教育方式</a></li>
                            
                                <li><a href="http://www.caijj.com//jzkt/5757.html">
                                    中学生家庭教育方法</a></li>
                            
                    </ul>
                    <span class="more"><a href="http://www.caijj.com/jzkt/jzkt.html">» 更多</a></span>
                </div>
              </div>
            </div>
        </div>
    </div>
                <div align="center"><a href="#" target="_blank"><img src="/images/idPjn3P1DLP1Rgp401timenHnzn1mdrjmLrf.jpg" border="0" height="90" width="950"></a></div>
   
    <div id="footbar" class="w950">
        <div class="title">

			<table align="center" border="0" cellpadding="0" cellspacing="0" height="30" width="100%">
  <tbody><tr>
    <td align="center">
	<a href="#" target="_blank">做家教</a> | <a href="#" target="_blank">请家教</a> | <a href="#">教员搜索</a> | <a href="#">教员分类</a> | <a href="#">学习方法</a> | <a href="#">考试经验</a> | <a href="#">家长课堂</a> | <a href="#">家教相关</a> | <a href="#">家教经验</a> | <a href="#">公司路线</a> | <a href="#">
                    常见问题</a> | <a href="#">汇款方式</a> | <a href="#" target="_blank">联系我们</a> | <a href="#"><img src="/images/zhaopin.gif" align="absmiddle" border="0"></a>	
	</td>
  </tr>
</tbody></table>

		</div>
        <div class="body">
            <table align="center">
              <tbody><tr>
                <td rowspan="3"><div align="right"><img src="images/gs.gif" height="57" width="44"></div></td>
                <td width="">联系电话：010-62642730 62643630 客服邮箱：caijjkf@163.com </td>
              </tr>
              <tr>
                <td>公安备案：京公网安备110108008199号  工信部备案:<a href="#" target="_blank">京ICP备09031430号</a></td>
              </tr>
              <tr>
                <td>家教服务中心：北京市海淀区清华大学南门华清嘉园8号楼304室</td>
              </tr>
          </tbody></table>
        版权：北京尚才家教 【<a href="#" target="_blank">北京家教</a>】2009-2012

            <a href="#" target="_blank" title="站长统计"><img src="/images/pic1.gif" border="0" hspace="0" vspace="0"></a><img src="images/stat.gif" border="0" height="0" width="0">
      </div>
    </div>
    

</body>
<script>
//左下角链接tab

$('#menus').on('mouseover','li',function(){  
  $("#bodys").children().eq(0).hide();
  
  var index = $(this).index();
  $('#bodys').children().eq(index).show();
  $(this).addClass("active")   
});
$('#menus').on('mouseout','li',function(){ 
    var index = $(this).index();  
    $(this).removeClass("active")
    $('#bodys').children().eq(index).hide();
     $("#bodys").children().eq(0).show();
});        

</script>
</html>