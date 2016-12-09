<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml"><head>
<meta http-equiv="content-type" content="text/html; charset=UTF-8"><title>
	【做家教 - 北京做家教】 - 尚才家教
</title><link href="/css/css.css" rel="stylesheet" type="text/css">
<script src="http://libs.baidu.com/jquery/1.9.0/jquery.js"></script>   

<script>
    var s = 1;//当前显示的
    function cui(v){
        document.getElementById('form_'+s).style.display = 'none';//隐藏上一个显示的
        document.getElementById('form_'+v).style.display = '';//显示选择的.
        s = v;
    }
    window.onload=function(){
        var role = document.getElementById('xuanze').value;
        cui(role);   
    }
</script>
</head>
<body> 
    @include('header')
<div id="menu" class="w950">
<ul id="top1_ulDH">
        <li id="l0" style="width:20%"><a href="{{url('/')}}" ><span>首页</span></a></li>
        <li id="l1" style="width:16%" id="lan_1"><a href="{{url('/teacher')}}"><span>教员库</span></a></li>
        <li id="l2" style="width:16%" id="lan_2"><a href="{{url('/student')}}"><span>学员库</span></a></li>
        <li id="l3" style="width:16%" id="lan_9"><a href="{{url('/examplelist')}}"><span>成功案例</span></a></li>
        <li id="l4" style="width:16%" id="lan_10"><a href="{{url('/fee')}}"><span>收费标准</span></a></li>
        <li id="l5" style="width:16%" id="lan_10"><a href="{{url('/fy')}}"><span>学习工具</span></a></li>
    </ul>
</div>

    <div id="main" class="w950">
        <div class="box2">
            <div class="title">
                <h2>
                    用户注册
                </h2>   
            </div>
                <div class="loginb3">
                    <tr>
                        <td>
                            <strong id="cfmm" class="red">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;*</strong>请选择您的注册身份</label>
                        </td>
                        <td>
                           <select name="xuanze" id="xuanze" onchange="cui(this.value)">
                               @if(!old('role'))
                               <option value="1" >您是老师</option>
                               <option value="2">您是学生</option>
                               @elseif(old('role')==1)
                               <option value="1" selected>您是老师</option>
                               <option value="2">您是学生</option>
                               @elseif(old('role')==2)
                               <option value="1">您是老师</option>
                               <option value="2" selected>您是学生</option>
                               @endif
                           </select>
                        </td>
                    </tr>
                    <fieldset>   
                        <div class="btbg1">
                            <img src="/images/zcimg1.gif">请选择密码用户名、身份
                        </div>
                        <div id="form_1">
                            <form action="" method="post">
                                {!!csrf_field()!!}
                                <input type="hidden" name="role" value="1" />
                                <div>                          
                                    <label for="confirm_password">
                                        <strong class="red">*</strong>请输入新用户名</label>
                                    <input name="name" id="xyhm" class="zcinput" size="18" maxlength="15"  onblur="checkname(this)" value="{{old('name')}}">
                                    @if($errors->has('name'))
                                    <span class="zsbg" id="check">{{$errors->first('name')}}</span>
                                    @else
                                     <span class="zsbg" id="check">必须由英文字母或字母、数字组合组成</span>
                                    @endif
                                </div>
                                <div>
                                    <label for="checkbox">
                                        <strong class="red">*</strong>请输入您的密码</label>
                                    <input name="password" id="mm" class="zcinput" size="18" maxlength="10" type="password" value="{{old('password')}}">
                                     @if($errors->has('password'))
                                    <span class="zsbg">{{$errors->first('password')}}</span>
                                     @else
                                    <span class="zsbg">请不少于六位、不超过十位,包含数字和字母</span>
                                     @endif
                                </div>
                                <div>
                                    <label for="confirm_password">
                                        <strong class="red">*</strong>请重复输入密码</label>
                                    <input name="password_confirmation" id="cui" class="zcinput" size="18" maxlength="10" type="password" > 
                                </div>
                                <div>
                                    <label for="confirm_password">
                                        <strong class="red">*</strong>请输入手机号码</label>
                                    <input name="mobile" id="mobile1" class="zcinput" size="18" maxlength="11" type="type" value="{{old('mobile')}}">
                                    @if($errors->has('mobile'))
                                    <span class="zsbg">{{$errors->first('mobile')}}</span>
                                    @endif
                                </div>
                                <div>
                                    <label for="confirm_password">
                                        <strong class="red">*</strong>请输入短信验证码</label>
                                    <input name="checkmessage" id="yzm" class="zcinput" size="18" maxlength="15" type="text"> 
                                    <button type="button" id="sendsms1">请点击获取验证码</button>
                                </div>
                                <div>
                                    <label for="confirm_password">
                                        <strong class="red">*</strong>请输入邮件地址</label>
                                    <input name="email" id="email" class="zcinput" size="18" maxlength="30" type="text"  onchange="checkemail(this)" onblur="checkemail(this)" value="{{old('email')}}">  
                                     @if($errors->has('email'))
                                    <span class="zsbg">{{$errors->first('email')}}</span>
                                    @endif
                                </div>
                                <div>
                                    <label for="confirm_password">
                                        <strong class="red">*</strong>姓名</label>
                                    <input name="realname" id="realname" class="zcinput" size="18" maxlength="15" type="text" value="{{old('realname')}}">  
                                 @if($errors->has('realname'))
                                    <span class="zsbg">{{$errors->first('realname')}}</span>
                                    @endif
                                </div>
                                <div>
                                    <label for="confirm_password">
                                        <strong class="red">*</strong>年龄</label>
                                    <input name="age" id="age" class="zcinput" size="18" maxlength="15" type="text" value="{{old('age')}}">  
                                     @if($errors->has('age'))
                                    <span class="zsbg">{{$errors->first('age')}}</span>
                                    @endif
                                </div>
                                @if(!old('gender'))
                                <div>
                                    <label for="confirm_password">
                                        <strong class="red">*</strong>性别</label>
                                         女：<input type="radio" id="cfmm" class="zcinput" name="gender"  value="女"  id='gender' checked="checked" />
                                          男：<input type="radio" id="cfmm" class="zcinput"  name="gender"  value="男"  id='gender'  />
                                </div>
                                @elseif(old('gender') == '女')
                                <div>
                                    <label for="confirm_password">
                                        <strong class="red">*</strong>性别</label>
                                         女：<input type="radio" id="cfmm" class="zcinput" name="gender"  value="女"  id='gender' checked="checked"/>
                                          男：<input type="radio" id="cfmm" class="zcinput"  name="gender"  value="男"  id='gender' /> 
                                </div>
                                @elseif(old('gender') == '男')
                                <div>
                                    <label for="confirm_password">
                                        <strong class="red">*</strong>性别</label>
                                         女：<input type="radio" id="cfmm" class="zcinput" name="gender"  value="女"  id='gender' />
                                          男：<input type="radio" id="cfmm" class="zcinput"  name="gender"  value="男"  id='gender'checked="checked" />  
                                </div>
                                @endif
                                <div>
                                    <label for="confirm_password">
                                        <strong class="red">*</strong>住址</label>
                                    <input name="address" id="address" class="zcinput" size="18" maxlength="30" type="text" value="{{old('address')}}">  
                                     @if($errors->has('address'))
                                    <span class="zsbg">{{$errors->first('address')}}</span>
                                     @endif
                                </div>
                                <div>
                                    <label for="confirm_password">
                                        <strong class="red">*</strong>身份证号</label>
                                    <input name="idnum" id="idnum" class="zcinput" size="18" maxlength="20" type="text" value="{{old('idnum')}}">  
                                    @if($errors->has('idnum'))
                                    <span class="zsbg">{{$errors->first('idnum')}}</span>
                                    @endif
                                </div>
                                @if(!old('edu'))
                                <div>
                                    <label for="confirm_password">
                                        <strong class="red">*</strong>学历信息</label>
                                        <select name="edu" id="edu" >
                                        <option value="0" selected >请选择</option>
                                           <option value="1">大专</option>
                                           <option value="2">本科</option>
                                           <option value="3">研究生</option>
                                           <option value="4">博士</option>
                                       </select>  
                                </div>
                                @elseif(old('edu')==0)
                                <div>
                                    <label for="confirm_password">
                                        <strong class="red">*</strong>学历信息</label>
                                        <select name="edu" id="edu" >
                                        <option value=""  >请选择</option>
                                           <option value="0" selected>大专</option>
                                           <option value="1">本科</option>
                                           <option value="2">研究生</option>
                                           <option value="3">博士</option>
                                       </select>  
                                </div>
                                @elseif(old('edu')==1)
                                <div>
                                    <label for="confirm_password">
                                        <strong class="red">*</strong>学历信息</label>
                                        <select name="edu" id="edu" >
                                        <option value=""  >请选择</option>
                                           <option value="0" >大专</option>
                                           <option value="1" selected>本科</option>
                                           <option value="2">研究生</option>
                                           <option value="3">博士</option>
                                       </select>  
                                </div>
                                @elseif(old('edu')==2)
                                <div>
                                    <label for="confirm_password">
                                        <strong class="red">*</strong>学历信息</label>
                                        <select name="edu" id="edu" >
                                        <option value=""  >请选择</option>
                                           <option value="0" >大专</option>
                                           <option value="1" >本科</option>
                                           <option value="2" selected>研究生</option>
                                           <option value="3">博士</option>
                                       </select>  
                                </div>
                                @elseif(old('edu')==3)
                                <div>
                                    <label for="confirm_password">
                                        <strong class="red">*</strong>学历信息</label>
                                        <select name="edu" id="edu" >
                                        <option value=""  >请选择</option>
                                           <option value="0" >大专</option>
                                           <option value="1" >本科</option>
                                           <option value="2" >研究生</option>
                                           <option value="3" selected>博士</option>
                                       </select>  
                                </div>
                                @endif
                                <div>
                                    <label for="confirm_password">
                                        <strong class="red">*</strong>擅长科目</label>
                                    <input name="goodat" id="goodat" class="zcinput" size="18" maxlength="15" type="text" value="{{old('goodat')}}">  
                                    @if($errors->has('goodat'))
                                    <span class="zsbg">{{$errors->first('goodat')}}</span>
                                    @endif
                                </div>
                                <div>
                                    <label for="confirm_password">
                                        <strong class="red">*</strong>个人简介</label>
                                        <textarea name="intro" id="intro" cols="50" rows="5" >{{old('intro')}}</textarea>
                                    @if($errors->has('intro'))
                                    <span style="float:right;margin-right:70px;"class="zsbg">{{$errors->first('intro')}}</span>
                                    @endif
                                </div>
                                <div class="zctk">
                                    <div align="left">
                                        是否同意注册条款
                                        <input name="acceptxieyi" id="acceptxieyi" value="checkbox" checked="checked" type="checkbox">
                                        <strong class="red">是</strong>
                                    </div>
                                </div>
                                <div class="ac" style="padding-top: 15px;">
                                    <input name="Button1" value="　提 交　" onclick="return CheckForm_1();" id="Button1" class="button" type="submit">
                                    &nbsp;<input name="reset1" class="button" value="　重 置　" type="reset">
                                </div>
                                <div class="btbg1">
                                    <img src="/images/jz.gif">注 册 条 款<a name="zc" id="zc"></a>
                                </div>
                                <div class="ac">
                                    <textarea name="textarea" cols="90" rows="11">  　北京尚才家教网是立足于互联网络，面向广大家教教员及学员提供家教服务的专业公司。目前我们面向广大北京市民服务，乐意为您提供优质的家教信息服务，如有疑问请电话咨询我们。
    1、本站只接收各类教师、 正规大学大专以上大学生、研究生和有专业特长的工作者。
    【注】对于在校大学生，本站只接受国家承认学历的正规大学生、研究生注册
    2、注册和发布简历不收费，但每接一份家教应立即交纳家教信息费，并预先垫付学员的家教信息费。（第一次与学员见面即可收回，皆以收据为凭）
    3、保证所填信息真实有效，如因信息不实而引起的各种不良事宜，一律自行承担全部责任。
    4、如果有学员家长觉得你的条件与他的要求相符，会在线预约您；在核实了家长的情况后，我们会通知您。
    5、如果是女教员，从个人的安全角度出发，在初次上门试讲时，最好带上一名男性同伴，以免发生意外。
    6、尚才家教仅负责提供家教信息，不承担家教信息以外的其它责任。
    7、请分步骤一次性填写好自己的全部资料，否则尚才家教工作人员将删除信息不全的注册用户！
    一旦成为我们的会员保证不填写隐瞒信息，如有不实，责任完全由会员自行承担责任。  　
                                    </textarea>
                                </div>
                            </form>
                        </div>
                        
                        <div id = "form_2" style="display:none">
                            <form action="" method="post">
                              {!! csrf_field() !!}
                                <input type="hidden" name="role" value="2" />
                                <input type="hidden" name="edu" value="" />
                                <input type="hidden" name="idnum" value="null" />
                                <div> 
                                    <label for="confirm_password">
                                    <strong class="red">*</strong>请输入新用户名</label>
                                    <input name="name" id="yhmm" class="zcinput" size="18" maxlength="15" onchange="checkname(this)" onblur="checkname(this)" type="text" value="{{old('name')}}">
                                    @if($errors->has('name'))
                                    <span class="zsbg" id="check">{{$errors->first('name')}}</span>
                                    @else
                                     <span class="zsbg" id="check">必须由英文字母或字母、数字组合组成</span>
                                    @endif
                                </div>
                                <div>
                                    <label for="checkbox">
                                    <strong class="red">*</strong>请输入您的密码</label>
                                    <input name="password" id="mmm" class="zcinput" size="18" maxlength="10" type="password" value="{{old('password')}}">
                                     @if($errors->has('password'))
                                    <span class="zsbg">{{$errors->first('password')}}</span>
                                     @else
                                    <span class="zsbg">请不少于六位、不超过十位,包含数字和字母</span>
                                    @endif
                                </div>
                                <div>
                                    <label for="confirm_password">
                                        <strong class="red">*</strong>请重复输入密码</label>
                                    <input name="password_confirmation" id="cfmmm" class="zcinput" size="18" maxlength="10" type="password" >
                                </div>
                                <div>                            
                                    <label for="confirm_password">
                                        <strong class="red">*</strong>请输入手机号码</label>
                                    <input name="mobile" id="mobile2" class="zcinput" size="18" maxlength="11" type="type" value="{{old('mobile')}}">
                                    @if($errors->has('mobile'))
                                    <span class="zsbg">{{$errors->first('mobile')}}</span>
                                    @endif
                                </div>
                                <div>
                                    <label for="confirm_password">
                                        <strong class="red">*</strong>请输入短信验证码</label>
                                    <input name="checkmessage" id="yzmm" class="zcinput" size="18" maxlength="15" type="text"> <button type="button" id="sendsms2">请点击获取验证码</button>
								</div>
                                <div>
                                    <label for="confirm_password">
                                        <strong class="red">*</strong>请输入邮件地址</label>
                                    <input name="email" id="emailm" class="zcinput" size="18" maxlength="30" type="text" onchange="checkemail(this)" onblur="checkemail(this)" value="{{old('email')}}">  
                                    @if($errors->has('email'))
                                    <span class="zsbg">{{$errors->first('email')}}</span>
                                    @endif
                                </div>
                                <div>
                                    <label for="confirm_password">
                                        <strong class="red">*</strong>姓名</label>
                                    <input name="realname" id="realnamem" class="zcinput" size="18" maxlength="15" type="text" value="{{old('realname')}}">  
                                    @if($errors->has('realname'))
                                    <span class="zsbg">{{$errors->first('realname')}}</span>
                                    @endif
                                </div>
                                <div>
                                    <label for="confirm_password">
                                        <strong class="red">*</strong>年龄</label>
                                    <input name="age" id="agem" class="zcinput" size="18" maxlength="2" type="text" value="{{old('age')}}">  
                                    @if($errors->has('age'))
                                    <span class="zsbg">{{$errors->first('age')}}</span>
                                    @endif
                                </div>
                                @if(!old('gender'))
                                <div>
                                    <label for="confirm_password">
                                        <strong class="red">*</strong>性别</label>
                                         女：<input type="radio" class="zcinput" name="gender"  value="女"   checked="checked" />
                                          男：<input type="radio"  class="zcinput"  name="gender"  value="男"    />                        
                                </div>
                                @elseif(old('gender') == '女')
                                <div>
                                    <label for="confirm_password">
                                        <strong class="red">*</strong>性别</label>
                                         女：<input type="radio"  class="zcinput" name="gender"  value="女"  checked="checked"/>
                                          男：<input type="radio"  class="zcinput"  name="gender"  value="男"   />
                                </div>
                                @elseif(old('gender') == '男')
                                <div>
                                    <label for="confirm_password">
                                        <strong class="red">*</strong>性别</label>
                                         女：<input type="radio" class="zcinput" name="gender"  value="女"   />
                                          男：<input type="radio" class="zcinput"  name="gender"  value="男"  checked="checked" />
                                </div>
                                @endif
                                <div>
                                    <label for="confirm_password">
                                        <strong class="red">*</strong>住址</label>
                                    <input name="address" id="addressm" class="zcinput" size="18" maxlength="50" type="text" value="{{old('address')}}">  
                                    @if($errors->has('address'))
                                    <span class="zsbg">{{$errors->first('address')}}</span>
                                    @endif
                                </div> 
                                <div>
                                    <label for="confirm_password">
                                        <strong class="red">*</strong>补习科目</label>
                                    <input name="goodat" id="goodatm" class="zcinput" size="18" maxlength="30" type="text" value="{{old('goodat')}}">  
                                    @if($errors->has('goodat'))
                                    <span class="zsbg">{{$errors->first('goodat')}}</span>
                                    @endif
                                </div>
                                <div>
                                    <label for="confirm_password">
                                        <strong class="red">*</strong>个人简介</label>
                                        <textarea name="intro" id="introm" cols="50" rows="5">{{old('intro')}}</textarea>
                                    @if($errors->has('intro'))
                                    <span class="zsbg" style="float:right;margin-right:70px;">{{$errors->first('intro')}}</span>
                                    @endif
                                </div>
                                <div class="ac" style="padding-top: 15px;">
                                    <input name="Button1" value="　提 交　" onclick="return CheckForm_2();" id="Button1" class="button" type="submit">
                                    &nbsp;<input name="reset1" class="button" value="　重 置　" type="reset">
                                </div>
                            </form>
                        </div>
                    </fieldset>
                </div>          
        </div>
    </div>

    <div id="footbar" class="w950">
        <div class="title">
        <table align="center" border="0" cellpadding="0" cellspacing="0" width="100%">
              <tbody>
                <tr>
                    <td height="30" valign="middle">
    			     <a href="#" target="_blank">做家教</a> | <a href="#" target="_blank">请家教</a> | <a href="#">教员搜索</a> | <a href="#">教员分类</a> | <a href="#">教员查询</a> | <a href="#">学习方法</a> | <a href="#">考试经验</a> | <a href="#">家长课堂</a> | <a href="#">家教经验</a> | <a href="#">家教相关</a> | <a href="#">公司路线</a> | <a href="#">
                    常见问题</a> | <a href="#">汇款方式</a> | <a href="#" target="_blank">联系我们</a>				</td>
                </tr>
            </tbody>
        </table>
        </div>
        <div class="body">
            联系电话：010-62642730　62643630　客服邮箱：caijjkf@163.com　<br>
            版权所有：北京尚才家教 【<a href="#" target="_blank">北京家教</a>】　工信部备案号:<a href="#" target="_blank">京ICP备09031430号</a><br>
            家教服务中心：北京市海淀区清华大学南门华清嘉园8号楼304室<br>
            Powered by www.caijj.com copyright 2009-2011<a href="#" target="_blank" title="站长统计"><img src="/images/pic1.gif" border="0" hspace="0" vspace="0"></a><img src="/images/stat.gif" border="0" height="0" width="0">
        </div>
    </div>
</body>
<script> 
 //调用短信
    $('#sendsms1').click(function(){
        console.log('wo');
        //获取电话号码
        var mobile = $('#mobile1').val();
        console.log(mobile);
        //带上电话号码 去地址栏请求
        $.get('/sms/'+mobile,function(msg){
            console.log(msg);
        })
    });  



    $('#sendsms2').click(function(){
        console.log('wo');
        //获取电话号码
        var mobile = $('#mobile2').val();
        console.log(mobile);
        //带上电话号码 去地址栏请求
        $.get('/sms/'+mobile,function(msg){
            console.log(msg);
        })
    });  






    //ajax验证用户名是否已注册
    var b = 1;
    function checkname(obj){
        var name = $(obj).val();
        $.ajax({
            url:"{{url('/ucenter/checkname')}}",
            data:{name:name,_token:"{{csrf_token()}}"},
            type:'post',
            async:false,
            success:function(msg){
                if(msg.status == 0){
                    alert(msg.msg);
                    b = 1;
                }else{
                   b = 2;
                }
            }            
        });
    }
    
    //ajax验证邮箱是否已注册
    var f = 1;
    function checkemail(obj){
        var name = $(obj).val();
        $.ajax({
            url:"{{url('/ucenter/checkemail')}}",
            data:{email:name,_token:"{{csrf_token()}}"},
            type:'post',
            async:false,
            success:function(cui){
                if(cui.status == 0){
                    alert(cui.msg);
                    f = 1;
                }else {
                    f = 2;
                }
            }            
        });
    }

    function trim(str){
        regExp1 = /^ */;
        regExp2 = / *$/;
        return str.replace(regExp1,'').replace(regExp2,'');
    }
    

    function CheckForm_1(){  
        if ($("#xyhm").val()==""){ 
            alert("请输入用户名"); 
            $("#xyhm").focus();
            return false; 
        } 
        var len=trim($("#xyhm").val()).length
        if(len==0 || len<2 || len>15){
            alert("用户名填写不正确,长度为2-15位，建议使用英文(a-z、A-Z)、数字(0-9)组合！"); 
            $("#xyhm").focus();
            return false; 
        }
        var len=trim($("#mm").val()).length
        if(len==0 || len<6 || len>20){
            alert("请重新输入密码,密码长度为6-10位英文或数字 !!");
            $("#mm").focus();
            return false;
        }
        if($("#cui").val()==""){
            alert("请输入密码确认 !!");
            $("#cui").focus();
            return false;
        }
        if( $("#mm").val() != $("#cui").val()){
            alert("两次密码输入不一致 !!");
            $("#cui").focus();
            return false;
        }
        if ($("#mobile").val()==""){ 
            alert("请输入手机号码"); 
            $("#mobile").focus();
            return false; 
        }      
        // var a =/^1[73458]\d{9}$/;
        // if(!($('#mobile').val().match(a))){
        //     alert("手机号码错误"); 
        //     $("#mobile").focus();
        //     return false; 
        // }
        if ($("#yzm").val()==""){ 
            alert("请输入验证码"); 
            $("#yzm").focus();
            return false; 
        }
        if ($("#email").val()==""){ 
            alert("请输入邮件地址"); 
            $("#email").focus();
            return false; 
        }
        // var c = /^(\w)+(\.\w+)*@(\w)+((\.\w+)+)$/;
        // if (!($('#email').val().match(c))){ 
        //     alert("请输入正确的邮件地址"); 
        //     $("#email").focus();
        //     return false; 
        // }
        if ($("#realname").val()==""){ 
            alert("请输入您的姓名"); 
            $("#realname").focus();
            return false; 
        }
        if ($("#age").val()==""){ 
            alert("请输入您的年龄"); 
            $("#age").focus();
            return false; 
        }
        if ($("#address").val()==""){ 
            alert("请输入您的住址"); 
            $("#address").focus();
            return false; 
        }
        if ($("#idnum").val()==""){ 
            alert("请输入您的身份证号码"); 
            $("#idnum").focus();
            return false; 
        }
        if ($("#goodat").val()==""){ 
            alert("请输入您的擅长科目"); 
            $("#goodat").focus();
            return false; 
        }
        if ($("#edu").val()=="5"){ 
            alert("请输入您的学历信息"); 
            $("#edu").focus();
            return false; 
        }
        if ($("#intro").val()==""){ 
            alert("请输入您的个人简介"); 
            $("#intro").focus();
            return false; 
        }
        if ($("#acceptxieyi").checked==false) {
            alert("请同意我们的注册条款！");
            $("#acceptxieyi").focus();
            return false;
          }
        if (b == 1){
            alert('用户名已注册,请重新填写用户名')
            return false;        
        } 
        if (f == 1){
            alert('邮箱已注册,请重新填写邮箱地址')
            return false;        
        }

          //验证  短信
        var smcode;
        $.ajax('/checksms',{
            'async':false,
            'sms':$('#yzm').val(),
            'type':'post',
            '_token':{{csrf_token()}},
            'sucess':function(msg){
                smcode = msg;
            }
            });
        if(smcode!=1){
            alert('验证码不对');
            return false;
        }

        return false;
   
    }

    function CheckForm_2(){                 
        if ($("#yhmm").val()==""){ 
            alert("请输入用户名"); 
            $("#yhmm").focus();
            return false; 
        } 
        var len=trim($("#yhmm").val()).length
        if(len==0 || len<2 || len>15){
            alert("用户名填写不正确,长度为2-15位，建议使用英文(a-z、A-Z)、数字(0-9)组合！"); 
            $("#yhmm").focus();
            return false; 
        }
        var len=trim($("#mmm").val()).length
        if(len==0 || len<6 || len>20){
            alert("请重新输入密码,密码长度为6-10位英文或数字 !!");
            $("#mmm").focus();
            return false;
        }
        if($("#cfmmm").val()==""){
            alert("请输入密码确认 !!");
            $("#cfmmm").focus();
            return false;
        }
        if( $("#mmm").val() != $("#cfmmm").val()){
            alert("两次密码输入不一致 !!");
            $("#cfmmm").focus();
            return false;
        }
        if ($("#mobilem").val()==""){ 
            alert("请输入手机号码"); 
            $("#mobilem").focus();
            return false; 
        }
        // var a =/^1[73458]\d{9}$/;
        // if(!($('#mobilem').val().match(a))){
        //     alert("手机号码错误"); 
        //     $("#mobilem").focus();
        //     return false; 
        // }
        if ($("#yzmm").val()==""){ 
            alert("请输入验证码"); 
            $("#yzmm").focus();
            return false; 
        }
        if ($("#emailm").val()==""){ 
            alert("请输入邮件地址"); 
            $("#emailm").focus();
            return false; 
        }
        // var d = /^(\w)+(\.\w+)*@(\w)+((\.\w+)+)$/;
        // if (!($('#emailm').val().match(d))){ 
        //     alert("请输入正确的邮件地址"); 
        //     $("#emailm").focus();
        //     return false; 
        // }
        if ($("#realnamem").val()==""){ 
            alert("请输入您的姓名"); 
            $("#realnamem").focus();
            return false; 
        }
        if ($("#agem").val()==""){ 
            alert("请输入您的年龄"); 
            $("#agem").focus();
            return false; 
        }
        if ($("#addressm").val()==""){ 
            alert("请输入您的住址"); 
            $("#addressm").focus();
            return false; 
        }
        if ($("#goodatm").val()==""){ 
            alert("请输入需要补习的科目"); 
            $("#goodatm").focus();
            return false; 
        }
        if ($("#introm").val()==""){ 
            alert("请输入您的个人简介"); 
            $("#introm").focus();
            return false; 
        } 
        if (b == 1){
            alert('用户名已注册,请重新填写用户名')
            return false;        
        } 
        if (f == 1){
            alert('邮箱已注册,请重新填写邮箱地址')
            return false;        
        }   

        //验证  短信
        var smcode;
        $.ajax('/checksms',{
            'async':false,
            'sms': $('#yzmm').val(),
            'type':'post',
            '_token':{{csrf_token()}},
            'sucess':function(msg){
                smcode = msg;
            }
            });
        if(smcode!= 1){
            alert('验证码不对');
            return false;
        }
        return false;
    }

</script>
</html>

