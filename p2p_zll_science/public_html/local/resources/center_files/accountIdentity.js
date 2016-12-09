$(document).ready(function(){
	//账户中心左侧头像下面的小图标
	 $.ajax({
			type : "POST", 
			url : "/member/investorsAjax.do", 
			dataType:"json",
			contentType: "application/x-www-form-urlencoded; charset=UTF-8",
			success : function(result) { 
				var isBlackUser = result.isBlackUser;
				if(isBlackUser==1){
					
				} else {
					var ifcertIdentity=false;//是否实名
					var isBindPhone = false;//是否绑定手机号
					var isBindingBank = false;//是否绑银行卡
					var isBindingEmail = false;//是否绑email
					var isUpdatePwd = false;//是否修改密码
					if(result.member.certIdentity == 1) {
						ifcertIdentity = true;
					}
					if(result.member.certPhone == 1) {
						isBindPhone = true;
					}
					if(result.bindingBank == 1) {
						isBindingBank = true;
					}
					if(result.cert_email==1){
						isBindingEmail = true;
					}
					if(result.repwdFlag==1){
						isUpdatePwd = true;
					}
					var str="{'isRealName' :"+ifcertIdentity+",'isBindPhone':"+isBindPhone+",'level':"+result.level+" ,'phoneNoShort':'"+result.phoneHidden+"','isRealMail':"+isBindingEmail+", 'isRealBank':"+isBindingBank+"}"
					$("#phoneInfo").html(result.phoneHidden);//手机号码
					assetsCommon.init2(eval("(" + str + ")"));
					//账户中心消息
					$("#mmsg").html(result.memberMsgCount);//未读信息
					
					
					//用户头像显示 start
					var photo = result.baseInfo.photo;
					if(photo){
						$("#myphototip").html("<input type=\"hidden\" id=\"ph\" value=\""+photo+"\"></input>" +
								"<img id=\"bigtx-mask\" src=\""+staticCss+"/manage/img/bigtx.png\">" + 
								"<img id=\"exists\" src=\"/member1/memberPhotoView.do?imgPath="+photo+"\" />" +
										"<span class=\"xgtx\">修改头像</span>");
						$("#chooseImgShow").attr("src","/member1/memberPhotoView.do?imgPath="+photo);
						$("#smallImg").attr("src","/member1/memberPhotoView.do?imgPath="+photo);
					} else {
						$("#myphototip").html("<input type=\"hidden\" id=\"ph1\"></input>" +
								"<img id=\"noExists\" src=\""+staticCss+"/manage/images/touxiang.jpg\" />" +
								"<span class=\"xgtx\">修改头像</span>");
					}
					
					
					//用户头像显示 end
					
				}
			}
	 });
	 
	 /** 
		* @name 底部合作伙伴 轮播 
		* @import js/nwd_common.js 
		* @author lihe 
		* @revise time:2016-04-011 10:07 
		*/ 
		new Playimgone("firedBox",{ 
			time:0, 
			navo:"" 
		});		
});


//图像处理
var popUp = null; 
seajs.use('popup',function(popup){ 
	popUp = popup; 
}); 

//头像编辑
$(document).on('click', '.myphotoedit', function(){ 
	var attr = new Attention( popUp , '#myphoto-pop-manage' , true ); 
	attr.event(); 
}); 
$(".pop-close").click(function(){ popUp.hideLayer($("#myphoto-pop-manage"))}); 



function savembphoto(){
	var _photo = $('#mbphoto').val();
	if(!_photo) {
		alert('请选择需要上传的图片！');
	}else{
		var rightFileType = new Array("jpg","JPG","BMP","bmp","GIF","gif","PNG","png","JPEG","jpeg");  
		var fileType = _photo.substring(_photo.lastIndexOf(".") + 1); 
		if (false) {
			// $.inArray(fileType,rightFileType) == -1
			$("#fileMSG").html("只支持图片上传！");
			$("#fileMSG").attr("display","");
		}else{
			$("#fileMSG").attr("value","");
			$("#fileMSG").attr("display","none");
			$('#mbPhoto').ajaxSubmit({
				type: 'post',  
                success: function(data){
					if(data == ''){
						alert("上传失败");
					}else if(data == "1"){
						alert("头像不超过2M！");
					}                	
					// 增加文件类型判断 | zhenhua.xi | 20140826
                	else if(data == '2'){
                		$('#fileMSG2').css("display","");
                    	$("#fileMSG2").removeClass().addClass("prompt_1 error_1").html("<i></i>请上传以格式为jpg、png、bmp的图片！");
                	}else{
						$("#ph1").attr("value",data);
						$("#ph").attr("value",data);
						$('#exists').attr('src', "/member1/memberPhotoView.do?imgPath="+data+"");
						$('#noExists').attr('src', "/member1/memberPhotoView.do?imgPath="+data+"");
						$("#chooseImgShow").attr('src', "/member1/memberPhotoView.do?imgPath="+data+"");
						$("#smallImg").attr('src', "/member1/memberPhotoView.do?imgPath="+data+"");
						
						$('#myphoto-pop-manage').hide();
						$('#myphoto-pop-manage').slideUp();
						$('.windowmask').hide();
						
						$('#mbphoto').val("");
					}
              	}
			});
		}
	}
}