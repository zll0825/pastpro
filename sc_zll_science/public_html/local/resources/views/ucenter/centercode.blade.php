@extends('muban')

@section('body')


      <!--右侧内容-->
      <form method="post" id="form1" name="form1">
        {{csrf_field()}}
        <div class="right" style="width: 750px;">
            <div class="atitle">
                密码修改</div>
            <div class="abox">
                <table width="100%" cellpadding="0" cellspacing="0">
                    <tr>
                        <td align="center" height="30" valign="middle">
                            原来的密码：
                            <input name="password_o" id="password_o" type="password" />
                        </td>
                    </tr>
                    <tr>
                        <td align="center" height="30" valign="middle">
                            输入新密码：
                            <input name="password" id="password" type="password" />
                        </td>
                    </tr>
                    <tr>
                        <td align="center" height="30" valign="middle">
                            确认新密码：
                            <input name="password_comfirmation" id="password_comfirmation" type="password" />
                        </td>
                    </tr>
					<input type="hidden" id="uid" value="{{$data->uid}}">
                    <tr>
                        <td align="center" height="40" valign="middle">
                            <input type="submit" name="Button3" value=" 提 交 "  class="button" />
                        </td>
                    </tr>
                </table>
            </div>
        </div>
        <form>
    </div>

<script>


$('#form1').submit(function(){

	if( $('#password_o').val() == '' ){
		alert('原密码不能为空');
		return false;
	}
	
	var reg = /[^\s]{6,12}/;
    if(!reg.test($('#password').val())){
		alert('新密码密码为6-12位（不含空格）');
		return false;
	}
	
	if($('#password_comfirmation').val() != $('#password').val()){
		alert('确认密码与新密码不一样');
		return false;
	}
	
	$.ajax({
        url:'/ucenter/code/'+$('#uid').val(),
        type:'post',
        data:{
            password_o:$('#password_o').val(),
            password:$('#password').val(),
            password_comfirmation:$('#password_comfirmation').val(),
            _token:"{{csrf_token()}}"
        },
        dataType: 'text',
        success:function(msg){
            if(msg == 1){
                alert('密码修改成功！');
                location.assign('/ucenter');                
            } else {
                alert(msg);
            }
        }       
    });
	return false;
});
</script>

@endsection('body')