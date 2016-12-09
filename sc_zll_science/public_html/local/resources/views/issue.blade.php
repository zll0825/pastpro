
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml"><head><meta http-equiv="Content-Type" content="text/html; charset=UTF-8"><title>
	【学员需求】 - 尚才家教
</title><link href="/css/css.css" rel="stylesheet" type="text/css">
    
</head>
<body>
    <form name="form1" method="post" action="" id="form1">
    {!!csrf_field()!!}
<div>
</div>



 @include('header')
<div id="menu" class="w950">

 <ul id="top1_ulDH">
        <li id="l0" style="width:20%"><a href="{{url('/')}}" ><span>首页</span></a></li>
        <li id="l1" style="width:16%" id="lan_1"><a href="{{url('/teacher')}}"><span>教员库</span></a></li>
        <li id="l2" class="active" style="width:16%" id="lan_2"><a href="{{url('/student')}}"><span>学员库</span></a></li>
        <li id="l3" style="width:16%" id="lan_9"><a href="{{url('/examplelist')}}"><span>成功案例</span></a></li>
        <li id="l4" style="width:16%" id="lan_10"><a href="{{url('/fee')}}"><span>收费标准</span></a></li>
        <li id="l5" style="width:16%" id="lan_10"><a href="{{url('/fy')}}"><span>学习工具</span></a></li>
    </ul>
</div>

    <div id="main" class="w950">
        <div class="box2">
            <div class="title">
                <h2>
                    学员发布需求
                </h2>
                
            </div>
            <div class="">
                <div class="ffbg">
                    <div class="fangfa1">
                        <strong>直接拨打客服热线：</strong>010-62642730 62643630 客服人员将会根据您的要求挑选合适的教员
                    </div>
                    <div class="fangfa2">
                        <strong>自主填写订单：</strong><br>
                        请填写以下表单，为了更好的帮你找到合适的老师，以下<font color="red"><b>全为必填项</b></font>。
                    </div>
                  <div class="fangfa3">
                        <strong>在线预约：</strong><br>
                      您可以直接进入<a href="#">专业老师信息库</a>、<a href="#">大学生教员库</a>找到您中意的教员后，请在线预约此教员                    </div>
                </div>
                <div class="loginb5">
                    <fieldset>
                        
                        
                        <div class="btbg2">
                            <img src="/images/d19.gif"><strong>请填写您的联系方式 </strong>
                        </div>
                        <div>
                            <label for="confirm_password">
                                联系人</label>
                            <input name="customername" class="zcinput" id="lxr" size="30" maxlength="15" type="text">
                            @if($errors->has('customername'))
                            <span style="color:red;font-size: 12px;">{{$errors->first('customername')}}</span>
                            @endif                
                            <span class="zsbg">例如:王女士</span>
                
                        </div>
                        
                        <div>
                            <label for="checkbox">
                                移动电话</label>
                            <input name="customermobile" class="zcinput" id="yddh" size="30" maxlength="50" type="text">
                             @if($errors->has('customermobile'))
                            <span style="color:red;font-size: 12px;">{{$errors->first('customermobile')}}</span>
                            @endif    
                            <span class="zsbg">便于短信通知。该信息不会在网上公布</span>
                        </div>
                        
                        <div>
                            <label for="label">
                                授课地区详细描述</label>
                            <input name="address" id="skdqms" class="skdqms" size="35">
                            @if($errors->has('address'))
                            <span style="color:red;font-size: 12px;">{{$errors->first('address')}}</span>
                            @endif
                            <span class="zsbg">填写您的具体上课地址</span>
                        </div>
                        <div class="btbg2">
                            <img src="/images/d19.gif"><strong>请填写学员的基本信息</strong></div>
                        
                        <div>
                            <label for="confirm_password">
                                学员年级</label>
                            <select name="style" id="xynj">
                                <option selected="selected" value="">请选择</option>
                                <option value="1">小学 </option>
                                <option value="2">中学 </option>
                                <option value="3">高中 </option>
                                
                            </select>
                        </div>
                        <div>
                            <label for="label">
                                辅导科目</label>
                            <input name="subject" id="fdkm" class="zcinput" size="20" type="text">
                            @if($errors->has('style'))
                            <span style="color:red;font-size: 12px;">{{$errors->first('style')}}</span>
                            @endif
                            <span class="zsbg">例如:语文</span>
                        </div>
                        
                        <div>
                            <div style="float: left;">
                                <label for="label">
                                    请填写您的需求</label>
                                <textarea name="requirement" id="xyqkms" cols="30" rows="5" class="zcinput"></textarea>
                            </div>
                            @if($errors->has('requirement'))
                            <p style="color:red;font-size: 12px;">{{$errors->first('requirement')}}</p>
                            @endif
                            <div class="qdddiv2" style="margin-top: 45px;">
                                请简要说明下对教员的要求等便于有针对性地安排合适的教员
                            </div>
                        </div>
                        
                        <div class="r2">
                            <input name="houguo" id="houguo" value="" checked="checked" type="checkbox">
                            <span class="s2">因上述信息不真实，而引发的任何后果，一概由填表人负责</span>
                        </div>
                        <div class="ac" style="padding-top: 15px;">
                            <input name="Button1" value="　提 交　" onclick="return CheckForm_1();" id="Button1" class="button" type="submit">
                            &nbsp;<input name="reset1" class="button" value="　重 置　" type="reset">
                        </div>
                        
                    </fieldset>
                </div>
            </div>
        </div>
    </div>
    
<div id="footbar" class="w950">
        <div class="title">
          <table align="center" border="0" cellpadding="0" cellspacing="0" width="100%">
              <tbody><tr>
                <td height="30" valign="middle">
				<a href="#" target="_blank">做家教</a> | <a href="#" target="_blank">请家教</a> | <a href="#">教员搜索</a> | <a href="#">教员分类</a> | <a href="#">教员查询</a> | <a href="#">学习方法</a> | <a href="#">考试经验</a> | <a href="#">家长课堂</a> | <a href="#">家教经验</a> | <a href="#">家教相关</a> | <a href="#">公司路线</a> | <a href="#">
                    常见问题</a> | <a href="#">汇款方式</a> | <a href="#" target="_blank">联系我们</a>				</td>
              </tr>
            </tbody></table>
        </div>
        <div class="body">
            联系电话：010-62642730　62643630　客服邮箱：caijjkf@163.com　<br>
            版权所有：北京尚才家教 【<a href="#" target="_blank">北京家教</a>】　工信部备案号:<a href="#" target="_blank">京ICP备09031430号</a><br>
            家教服务中心：北京市海淀区清华大学南门华清嘉园8号楼304室<br>
            Powered by www.caijj.com copyright 2009-2011<a href="#" target="_blank" title="站长统计"><img src="/images/pic1.gif" border="0" hspace="0" vspace="0"></a><img src="/images/stat.gif" border="0" height="0" width="0">
        </div>
</div>
    </form>


</body>


</html>