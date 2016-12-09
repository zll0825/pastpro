$(document).ready(function(){
	//资产媒体列表
    new Playimgone("mediaListCon",{
      time:0,
      navo:""
    });
	//升级提示
    /*var isGrateUp = $("#isGrateUp").val();
    if(isGrateUp == 1){
    	//升级提示Div浮动显示
    	grateUp.style.visibility="visible";
    } else{
    	//升级提示Div不显示
    	grateUp.style.visibility="hidden";
    }*/
    
//	  已经改成A链接直接完成
//    $.ajax({
//		type : "POST", 
//		url : "/index.do?method=loginClub", 
//		dataType:"json",
//		contentType: "application/x-www-form-urlencoded; charset=UTF-8",
//		success : function(result) { 
//		} 
//	});
  
	var sevenDayIncomeDate;
    $.ajax({
		type : "POST", 
		url : "/member/accountIncomeAjax.do", 
		dataType:"json",
		contentType: "application/x-www-form-urlencoded; charset=UTF-8",
		success : function(result) { 
			/*$("#yesterdayTotalIncome").html(formatNum(result.totalFinancialInfo.yesterdayTotalIncome/1000));
			$("#totalIncome").html(formatNum(result.totalFinancialInfo.totalIncome/1000));
			$("#yesterdayDate").text(result.yesterdayDate+"收益");
			$("#grandProfit").html("<i class=\"ico_all size30 img_icon zhuan_pos mr_10\"></i>"+formatNum(result.totalFinancialInfo.totalCreditoIncome/1000)+"<em class=\"fs_14 fc_3 fw\"> 元</em>");
			$("#totalMoney").html(formatNum(result.totalFinancialInfo.totalMoney/1000)+"<em class=\"fs_14 fc_3 fw\"> 元</em>");
			$("#jcsy").html("<i class=\"ico_all size30 img_icon zhuan_pos mr_10\"></i>"+formatNum(result.totalFinancialInfo.totalFinancialIncome/1000)+
								"<em class=\"fs_14 fc_3 fw\"> 元</em>");
			$("#yesterdayIncome").text(formatNum(result.totalFinancialInfo.financialYesterdayIncome/1000));
			$("#holdCount").text(result.totalFinancialInfo.holdCount);
			$("#exitingCount").text(result.totalFinancialInfo.exitingCount);
			$("#exitCount").text(result.totalFinancialInfo.exitCount);
			*/
			
			$("#totalIncome").html(formatNum(result.totalFinancialInfo.totalIncome/1000));//累计收益(历史累计)
			$("i[name=financialIncome]").text(formatNum(result.totalFinancialInfo.totalFinancialIncome/1000));//嘉财有道的累计收益
			$("i[name=bidIncome]").text(formatNum(result.totalFinancialInfo.totalCreditoIncome/1000));//债券的历史累计收益
			$("i[name=newProductIncome]").text(formatNum(result.totalNewHandProfit/1000));//新手的历史累计收益
			
			sevenDayIncomeDate = result.sevenDayIncomeList;//七日收益数据
			 function Charts (){
					var indexData = {
				            success: true,
				            maxIncome: sevenDayIncomeDate.maxIncome,
				            status: 3,
				            data: sevenDayIncomeDate.incomeData,
				            url:'/member/getProfitItems.do?tabIndex=2'
				        };
				        // 首页图表渲染
				        seajs.use('indexChart', function(indexChart){
				            new indexChart({
				                renderWrap: '#J_indexChart',
				                width: 270,
				                height: 60,
				                // 结果数据
				                data: indexData
				            });
				        });
			    }Charts();
		}
    });
   
    //红包
    $.ajax({
		type : "POST", 
		url : "/member/investorsAjax.do", 
		dataType:"json",
		contentType: "application/x-www-form-urlencoded; charset=UTF-8",
		success : function(result) {  
			var isGrateUp=result.isGrateUp;
			$("#isGrateUp").val(isGrateUp);
			var isBlackUser = result.isBlackUser;
			if(isBlackUser==1){
				$(".z").html("您好，"+result.member.userName+"<i class=\"ico_all size16 img_lv lvMini_"+result.level+"\"></i><span style=\"color:#f00;\">操作受限用户</span>");
			} else {
				var ifcertIdentity=false;//是否实名
				var isBindPhone = false;//是否绑定手机号
				var isBindingBank = false;//是否绑银行卡
				var isBindingEmail = false;//是否绑email
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
				
				/*var context = "您好，"+result.member.userName+"<a href=\"/member/growthInfo.html\" class=\"blue\">" +
						"<i class=\"ico_all size16 img_lv lvMini_"+result.level+"\"></i>"+result.levelName+"</a><span class=\"ml_10 newrzCon\">";
				if(result.member.certIdentity == 1) {
					context +="<a href=\"/member/safetyLevel.do?doWhat=sl\" class=\"no_1\" title=\"实名已认证\">" +
							"<i class=\"newicon newicon_sfz_y\"></i></a>";
				} else {
					context +="<a href=\"/member/identityAuthentication.do\" target=\"_blank\" class=\"no_1\" title=\"实名未认证\">" +
					"<i class=\"newicon newicon_sfz_n\"></i>";
				}
				if(result.member.certPhone == 0) {
					context +="<a href=\"/member/safetyLevel.do?doWhat=sl\" class=\"no_3\" title=\"手机未绑定\">" +
							"<i class=\"ml_10 mr_10 newicon newicon_tel_n\"></i></a>";
				} else {
					context +="<a href=\"/member/safetyLevel.do?doWhat=sl\" class=\"no_3\" title=\"手机已绑定\">" +
					"<i class=\"ml_10 mr_10 newicon newicon_tel_y\"></i></a>";
				}
				if(result.bindingBank == 1) {
					context +="<a href=\"/member/safetyLevel.do?doWhat=sl\" class=\"no_2\" title=\"银行卡已绑定\">" +
							"<i class=\"newicon newicon_card_y\"></i></a>";
					isBindingBank = true;
				} else {
					context +="<a href=\"/member/safetyLevel.do?doWhat=sl\" class=\"no_2\" title=\"银行卡未绑定\">" +
					"<i class=\"newicon newicon_card_n\"></i></a>";
				}*/
				////{ isRealName :true,  isBindPhone:true,   level:1 ,phoneNoShort:"130****9176",isRealMail:true, isRealBank:false}
				
			}
			
			$("#kyjf").html("可用积分<a href=\"/member/exchange.html\" class=\"blue\">"+result.grade+"</a>分");
			//积分
			if(Number(result.grade) >0 ){
				$("#mCount").css("display","inline-block");
				$("#mCount").html(result.grade);
				$("#dhHref").html("兑换");
				$('#dhHref').attr("href","/member/exchange.html"); 
			}else{
				$("#mCount").css("display","none");
				$("#dhHref").html("如何获得积分？");
				$('#dhHref').attr("href","/help/integral.html"); 
			}
			//红包
			if(Number(result.couponCount) >0){
				$("#coupons").css("display","inline-block");
				$("#coupons").html((result.couponCount)*0.001+"元");
				$('#couponsHref').attr("href","/member/coupon.do");//查看 
				$("#couponsHref").html("使用");
			}else{
				$("#coupons").css("display","none");
				$('#couponsHref').attr("href","/member/exchange.html");//如何获取红包
				$("#couponsHref").html("如何获得红包？");
			}
			//加息券 
			if(Number(result.plusCouponsCount) >0){
				$("#plusCoupons").css("display","inline-block");
				$("#plusCoupons").html(result.plusCouponsCount+"张");
				$('#plusCouponsHref').attr("href","/financial/financialDetail.do");//查看 
				$("#plusCouponsHref").html("使用");
			}else{
				$("#plusCoupons").css("display","none");
				$('#plusCouponsHref').attr("href","/tj2015.html?intcmp=hompage_kv_1");//获取
				$("#plusCouponsHref").html("如何获得加息券？");
			}
			if(parseInt(result.tyj)>0){
				$("#tyjCount").css("display","inline-block");
				$("#tyjCount").html((result.tyj)*0.001+"元");
				$("#tyjHref").attr("href","/LCB/moneyTreasureDetail.do");//使用
				$("#tyjHref").html("使用");//使用
			}else{
				$("#tyjHref").css("display","none");
				$("#tyjCount").css("display","none");
			}
			

			$("#accAmount").text(formatNum(result.fun.zhye/1000));//账户余额
			$("i[name=accAmount1]").text(formatNum(result.fun.zhye/1000));//账户余额
			dealwithDecimal();//处理金额小数位比整数位大的方法
			
			if(result.openJiaTreasureStatus){
				$("#ydtjDesc").text("查看有道添金");
			} else {
				$("#ydtjDesc").text("开通有道添金>>");
			}
			if(result.isWyhStatus=='0'){
				//$("#wyhDesc").text("查看万元户");
			} 
			
			$("#freezeAmount").text(formatNum(result.fun.freeze/1000));
			$("#balanceAmount").text(formatNum(result.fun.balance/1000));
			
			if(result.member.certPhone == 0 || result.member.certIdentity == 0 || result.bindingBank == 0){
				$("#zhaq").text("账户安全：低");
				$(".level_in").width("35%");
			} else if(result.pwdQuestion == 0 || result.member.certEmail == 0 || result.repwdFlag == 0){
				$("#zhaq").text("账户安全：中");
				$(".level_in").width("70%");
			} else {
				$("#zhaq").text("账户安全：高");
				$(".level_in").width("100%");
				$("#aqts").text("[查看]");
			}
			var zhrz ="";
			if(result.member.certIdentity == 1) {
				zhrz +="<a href=\"/member/safetyLevel.do?doWhat=sl\" class=\"no_1\" title=\"实名已认证\">" +
						"<i class=\"ico_all size32_22 img_icon anquan_a\"></i>已认证</a>";
			} else {
				zhrz +="<a href=\"/member/identityAuthentication.do\" target=\"_blank\" class=\"no_1\" title=\"实名未认证\">" +
				"<i class=\"ico_all size32_22 img_icon anquan_aa\"></i>未认证</a>";
			}
			if(result.bindingBank == 1) {
				zhrz +="<a href=\"/member/safetyLevel.do?doWhat=sl\" class=\"no_2\" title=\"银行卡已绑定\">" +
						"<i class=\"ico_all size32_22 img_icon anquan_b\"></i>已绑定</a>";
			} else {
				zhrz +="<a href=\"/member/safetyLevel.do?doWhat=sl\" class=\"no_2\" title=\"银行卡未绑定\">" +
				"<i class=\"ico_all size32_22 img_icon anquan_bb\"></i>未绑定</a>";
			}
			if(result.member.certPhone == 0) {
				zhrz +="<a href=\"/member/safetyLevel.do?doWhat=sl\" class=\"no_3\" title=\"手机未绑定\">" +
						"<i class=\"ico_all size32_22 img_icon anquan_cc\"></i>未绑定</a>";
			} else {
				zhrz +="<a href=\"/member/safetyLevel.do?doWhat=sl\" class=\"no_3\" title=\"手机已绑定\">" +
				"<i class=\"ico_all size32_22 img_icon anquan_c\"></i>已绑定</a>";
			}
			$("#zhrz").html(zhrz);
			$("#lasset").text(formatNum(result.fun.asset/1000));
			/*$("#xasset").text(formatNum(result.fun.asset/1000));*/ 
			$("i[name=llcjhzc]").text(formatNum(result.fun.lcjhzc/1000));//嘉财有道
			//$("#xlcjhzc").text(formatNum(result.fun.lcjhzc/1000));
			$("i[name=lzqzc]").text(formatNum(result.fun.zqzc/1000));//债权
			//$("#xzqzc").text(formatNum(result.fun.zqzc/1000));
			$("i[name=xinshouzx]").text(formatNum(result.fun.xinshou/1000));//新手
			//$("#lzhye").text(formatNum(result.fun.zhye/1000));
			//$("#xzhye").text(formatNum(result.fun.zhye/1000));
			$("i[name=lforceAmount]").text(formatNum((result.fun.forceAmount*0.001).toFixed(2)));//负债
			//$("#xforceAmount").text(formatNum(result.fun.forceAmount/1000));//负债
			
			/*if(result.fun.lcjhzc > 0){
				$("#jctz").css("display","none");
				$("#jcxq").css("display","block");
				$("#jcxq").attr("href","/member/findFinancial2Page.do");//详情
			}else{
				$("#jctz").css("display","inline-block");
				$("#jcxq").css("display","none");
				$("#jctz").attr("href","/financial/financialDetail.do");//投资
			}
			if(result.fun.zqzc > 0){
				$("#zqtz").css("display","none");
				$("#zqxq").css("display","block");
				$("#zqxq").attr("href","/member/myAcceptList.html");//详情
			}else{
				$("#zqtz").css("display","inline-block");
				$("#zqxq").css("display","none");
				$("#zqtz").attr("href","/xiangmu/");//详情
			}
			
			if(result.fun.xinshou > 0){
				$("#xstz").css("display","none");
				$("#xsxq").css("display","inline-block");
				$("#xsxq").attr("href","/member/noviceArea.do");//详情
			}else{
				$("#xstz").css("display","inline-block");
				$("#xsxq").css("display","none");
				$("#xstz").attr("href","/baiduFina/newPeople.do");//投资
			}
			
			if(result.fun.zhye >0){
				$("#czPage").css("display","none");
				$("#txPage").css("display","inline-block");
				$("#txPage").attr("href","/member/carry.html");//提现
			}else{
				$("#czPage").css("display","inline-blocknone");
				$("#txPage").css("display","none");
				$("#czPage").attr("href","/member/rechargeStep.do");//充值
			}*/
			
			if(result.fun.xinshou <= 0) {
				$("#xinshou").hide();
				$("#laoshou").show();
				$("#laoshou").show();
			} else {
				$("#xinshou").show();
				$("#laoshou").hide();
			}
			
			/*var payableFund =$("#payableFund").html();//负债
			if(result.fun.forceAmount >0){
				$("#hkButton").css("display","none");
				$("#jkButton").css("display","block");
				$("#jkButton").attr("href","/member/rechargeStep.do");//还款
			}else{
				$("#hkButton").css("display","none");
				$("#jkButton").css("display","none");
				$("#jkButton").attr("href","/member/rechargeStep.do");//详情
			}*/
			
			
			if(result.xiangdao == 0) {
				$(".guideOut").show();
			}
			
			$("#zqzc").html(formatNum(result.fun.zqzc/1000)+"<em class=\"fs_14 fc_3 fw\"> 元</em>");

			$("#shouldInterest").text(formatNum(result.fun.shouldInterest/1000));
			$("#levelName1").text(result.levelName);
			$("#levelName2").text(result.levelName);
			$("#privilegeCount1").text("您已经获得"+result.privilegeCount+"项特权");
			$("#privilegeCount2").text("您已经获得"+result.privilegeCount+"项特权");
			$("#ph").val(result.baseInfo.photo);
			$("#exists").attr('src',"/member1/memberPhotoView.do?imgPath="+result.baseInfo.photo); 
			$("#xdzhye").text(formatNum(result.fun.zhye/1000));
			$("#xdzhxq").text("冻结资金"+formatNum(result.fun.freeze/1000)+"   可用余额"+formatNum(result.fun.balance/1000)+"元");
			$("#xdasset").text(formatNum(result.fun.asset/1000));
			$("#xdcjhzc").text(formatNum(result.fun.lcjhzc/1000));
			$("#xdzqzc").text(formatNum(result.fun.zqzc/1000));
			$("#xdzhye").text(formatNum(result.fun.zhye/1000));
			$("#xdforceAmount").text(formatNum(result.fun.forceAmount/1000));
			$("#blackUser").val(result.isBlackUser);
			
			//PC促销活动banner
			$("#accountTopBanner").html(result.accountTopBanner);
			
			$("#mmsg").parent().attr("href","/member/memberMsg.do");//消息中心
			
			//账户中心最新一条消息
			var msgObj = result.memberMsg;//内容
			if(msgObj!=null){
				$("#msgDiv").css('display','block');
				var msgContent=result.memberMsg.content;
				if(msgContent){
					msgContent = msgContent.replace(/<[^>]+>/g,"");
					msgContent = msgContent.length >50 ? msgContent.substring(0,50)+"..." : msgContent;
					$("#msgInfo").html(msgContent);
				}else{
					$("#msgDiv").css('display','none');//无消息隐藏
				}
			}else{
				$("#msgDiv").css('display','none');//无消息隐藏
			}
			
		} 
	});
    
	//我的投资  本月收款
	$.ajax({
		type : "POST", 
		url : "/member/accountDetailAjax.do?judge=repaymentInfo", 
		dataType:"json",
		contentType: "application/x-www-form-urlencoded; charset=UTF-8",
		success : function(result) { 
			if(result.repayInfoCount==0){
				$("#tzwsy").html("<li class='mb_10'>本月无收益，钱都拿来打酱油了？赶快投标吧！</li>" +
						"<li><a href='http://www.niwodai.com/xiangmu/' class='btn btnSize_1 btn_blue mr_10'>即刻启程</a></li>"
                    );
			}
			var nextDay=result.nextGatheringDay;//下一次收款时间
			if(nextDay == null){
				$("#nextGatheringDay").text("0");
			} else {
				if(nextDay>0){
					$("#nextGatheringDay").text(nextDay);
				}else{
					$("#nextGatheringDay").text("0");
				}
			}
			
			var nextGatheringAmount=result.nextGatheringAmount;//下一次收款钱数
			if(nextGatheringAmount>0){
				$("#nextGatheringAmount").text(formatNum(nextGatheringAmount/1000));
			}
			//应收款项
			var gatheringFundNum=result.gatheringFundNum;
			if(gatheringFundNum>0){
				$("#gatheringFundNum").text(gatheringFundNum);
				//新手引导应用
				$("#gatheringFundNum1").text(gatheringFundNum);
			}
			var gatheringFund=result.gatheringFund;
			if(gatheringFund>0){
				$("#gatheringFund").text(formatNum(gatheringFund/1000));
				//新手引导应用
				$("#gatheringFund1").text(formatNum(gatheringFund/1000));
			}
			//实收款项
			var proceedsFundNum=result.proceedsFundNum;
			if(proceedsFundNum>0){
				$("#proceedsFundNum").text(proceedsFundNum);
				//新手引导应用
				$("#proceedsFundNum1").text(proceedsFundNum);
			}
			$("#tqhkspan").hide();
			var proceedsDiscountFundNum=result.proceedsDiscountFundNum;
			if(proceedsDiscountFundNum>0){
				$("#tqhkbs").text("提前还款"+proceedsDiscountFundNum+"笔");
				$("#tqhkspan").show();
			}
			var proceedsFund=result.proceedsFund;
			if(proceedsFund>0){
				$("#proceedsFund").text(formatNum(proceedsFund/1000));
				//新手引导应用
				$("#proceedsFund1").text(formatNum(proceedsFund/1000));
			}
			//待收款项
			var waitFundNum=result.waitFundNum;
			if(waitFundNum>0){
				$("#waitFundNum").text(waitFundNum);
				//新手引导应用
				$("#waitFundNum1").text(waitFundNum);
			}
			var waitFund=result.waitFund;
			if(waitFund>0){
				$("#waitFund").text(formatNum(waitFund/1000));
				//新手引导应用
				$("#waitFund1").text(formatNum(waitFund/1000));
			}
			//延迟收款
			var deferFundNum=result.deferFundNum;
			if(deferFundNum>0){
				$("#deferFundNum").text(deferFundNum);
				//新手引导应用
				$("#deferFundNum1").text(deferFundNum);
			}
			var deferFund=result.deferFund;
			if(deferFund>0){
				$("#deferFund").text(formatNum(deferFund/1000));
				//新手引导应用
				$("#deferFund1").text(formatNum(deferFund/1000));
			}
		} 
	});
	//我的借款   本月还款
	$.ajax({
		type : "POST", 
		url : "/member/accountDetailAjax.do?judge=repayment", 
		dataType:"json",
		contentType: "application/x-www-form-urlencoded; charset=UTF-8",
		success : function(result) { 
			if(result.repayCount==0){
				$("#jkwhk").html("<li class='mb_10'>轻松借款不求人，分期还款。月供无压力！</li>" +
						"<li><a href='http://www.niwodai.com/daikuan/jiekuan.html' class='btn btnSize_1 btn_blue mr_10'>我要借款</a></li>"
                    );
			}
			//应还款项
			var payableFundNum=result.payableFundNum;
			if(payableFundNum>0){
				$("#payableFundNum").text(payableFundNum);
			}
			var payableFund=result.payableFund;
			if(payableFund && payableFund>0){
				$("#payableFund").text(formatNum(payableFund/1000));
			}else{
				$("#payableFund").text("0.00");
			}
			//实还款项
			var pocketFundNum=result.pocketFundNum;
			if(pocketFundNum>0){
				$("#pocketFundNum").text(pocketFundNum);
			}
			var pocketFund=result.pocketFund;
			if(pocketFund>0){
				$("#pocketFund").text(formatNum(pocketFund/1000));
			}
			//待还款项
			var waitRepaymentFundNum=result.waitRepaymentFundNum;
			if(waitRepaymentFundNum>0){
				$("#waitRepaymentFundNum").text(waitRepaymentFundNum);
			}
			var waitRepaymentFund=result.waitRepaymentFund;
			if(waitRepaymentFund>0){
				$("#waitRepaymentFund").text(formatNum(waitRepaymentFund/1000));
			}
			//延迟还款
			var overdueRepaymentNum=result.overdueRepaymentNum;
			if(overdueRepaymentNum>0){
				$("#overdueRepaymentNum").text(overdueRepaymentNum);
			}
			var overdueRepaymentFund=result.overdueRepaymentFund;
			if(overdueRepaymentFund>0){
				$("#overdueRepaymentFund").text(formatNum(overdueRepaymentFund/1000));
			}
			if(overdueRepaymentNum>0){
				$("#jkwhk").html(
						"<li class='line_1'>您有<em id='nextRepaymentDay'>"+overdueRepaymentNum+"</em>笔逾期，请尽快还款</li>"+
						"<li class='line_2'>还款金额为 <em class='fc_orange fs_22' id='nextRepaymentAmount'>"+formatNum(overdueRepaymentFund/1000)+"</em> 元</li>"+
						"<li class='line_3'><a href='/member/repayment.do' class='btn btnSize_1 btn_blue mr_10'>我要还款</a></li>"
                    );
			} else {
				var nextRepaymentDay=result.nextRepaymentDay;//下一次还款时间
				if(nextRepaymentDay == null){
					$("#nextRepaymentDay").text("0");
				} else {
					if(nextRepaymentDay>0){
						$("#nextRepaymentDay").text(nextRepaymentDay);
					}else{
						$("#nextRepaymentDay").text("0");
					}
				}
				var nextRepaymentAmount=result.nextRepaymentAmount;//下一次还款钱数
				if(nextRepaymentAmount>0){
					$("#nextRepaymentAmount").text(formatNum(nextRepaymentAmount/1000));
				}
			}
			
		} 
	});
	
	 //初始化数据加载交易记录
	getFinancialRecords("transactionAttr");
	
	/**
	 * 获取资金记录
	 */
	function getFinancialRecords(typeObj){
		if(typeObj == "undefined" || typeObj == null || typeObj == ""){
			typeObj == "transactionAttr";
		}
		var html ="";
		$.ajax({
			type : "POST", 
			url : "/member/financialRecords.do", 
			dataType:"json",
			data: "moreCode="+typeObj,
			contentType: "application/x-www-form-urlencoded; charset=UTF-8",
			success : function(result) { 
				if(typeObj == "transactionAttr"){
					html="";
					html ='<tr class=""><th><span>时间</span></th><th>类型</th><th>金额</th><th>状态</th><th>操作</th></tr>';
					if(result.list.length >0){
						for (var int = 0; int < result.list.length; int++) {
							if(int < 5){
								var transaction=result.list[int];
								var type=transaction.PROD_TYPE;
								var id=transaction.FP_ID;
								var encryptLid=transaction.encryptLid;
								var typeDesc="";
								var href="#";
								var status = transaction.STATE;
								if(type==0){
									typeDesc ="嘉财有道";
									status ="交易成功";
									href ="/member/findFinancial2Page.do";
								}else if(type==1){
									typeDesc ="新手产品";
									status ="交易成功";
									href ="/member/noviceArea.do";
								}else if(type==2){
									typeDesc ="散标";
									href ="/member/myAcceptList.html";
								}else if(type==3){
									typeDesc ="转让标";
									href ="/member/myAcceptList.html";
								}
								html +='<tr><td class="Numfont"><span >'+transaction.TIME_JOIN+'</span></td><td>'+transaction.TITLE+'</td><td class="Numfont">-'+(transaction.AMOUNT_JOIN*0.001).toFixed(2)+'元</td><td>'+status+'</td><td><a href="'+href+'">详情</a></td></tr>';
							}
						}
						$("#transactionTable").html(html);
					}else{
						var noDataInfo = '<div class="noRecordBox"><div class="ui-noRecord"><div class="h-ulist"><div class="noRecord"></div></div></div></div>';
						var tableHtml='<table class="table fc_9" cellspacing="0" cellpadding="0" id="transactionTable">'+html+'</table>';
						$("#transactionTable").parent().html(tableHtml+noDataInfo);
					}
					
				}else if(typeObj == "rechargeAttr"){
					html="";
					html ='<tr class=""><th>充值时间</th><th>充值金额</th><th>手续费</th><th>充值方式</th><th>处理状态</th><th>处理时间</th><th>备注</th></tr>';
					if(result.List.length >0){
						for (var int = 0; int < result.List.length; int++) {
							if(int <5){
								var crush=result.List[int];
								var recharge_methods =crush.rechargeMethods;//充值方式
								var rechargeDesc="";
								var status = crush.status;//充值状态
								var statusDesc="";
								var businessTime=crush.businesstime;
								if(recharge_methods == "0"){
									rechargeDesc = "系统充值";
								}else if(recharge_methods == "1"){
									rechargeDesc = "网上充值";
								}else if(recharge_methods == "2"){
									rechargeDesc = "招领充值";
								}else if(recharge_methods == "3"){
									rechargeDesc = "快捷充值";
								}else{
									rechargeDesc = "系统充值";
								}
								if(status ==  "0"){
									statusDesc ="未付款";
								}else if(status ==  "1"){
									statusDesc ="处理中";
								}else if(status ==  "2"){
									statusDesc ="充值成功";
								}else if(status ==  "3"){
									statusDesc ="充值失败";
								}
								if(businessTime == null){
									businessTime = "";
								}
								html +='<tr><td class="Numfont">'+crush.createtime+'</td><td class="Numfont">'+(crush.amount*0.001).toFixed(2)+'</td><td class="Numfont">'+(crush.poundage*0.001).toFixed(2)+'</td><td>'+rechargeDesc+'</td><td>'+statusDesc+'</td><td class="Numfont table_time">'+businessTime+'</td><td>无</td></tr>'
							}
						}
						$("#crushTable").html(html);
					}else{
						var noDataInfo = '<div class="noRecordBox"><div class="ui-noRecord"><div class="h-ulist"><div class="noRecord"></div></div></div></div>';
						var tableHtml='<table class="table fc_9" cellspacing="0" cellpadding="0" id="crushTable">'+html+'</table>';
						$("#crushTable").parent().html(tableHtml+noDataInfo);
					}
					
				}else if(typeObj == "withdrawAttr"){
					html="";
					html='<tr class=""><th>提现时间</th><th>提现金额</th><th>手续费</th><th>处理状态</th><th>处理时间</th></tr>';
					if(result.List.length >0){
						for (var int = 0; int < result.List.length; int++) {
							if(int <5){
								var carry=result.List[int];
								var status=carry.status;
								var statusDesc="";
								if(status ==  0){
									statusDesc ="新增";
								}else if(status ==  "1"){
									statusDesc ="处理中";
								}else if(status ==  "2"){
									statusDesc ="提现成功";
								}else if(status ==  "3"){
									statusDesc ="提现失败";
								}
								html +='<tr class=""><td class="Numfont"><span>'+carry.createTime+'</span></td><td>'+(carry.amount*0.001).toFixed(2)+'</td><td>'+(carry.poundage*0.001).toFixed(2)+'</td><td>'+statusDesc+'</td><td>'+carry.auditTime+'</td></tr>';
							}
						}
						$("#carryTable").html(html);
					}else{
						var noDataInfo = '<div class="noRecordBox"><div class="ui-noRecord"><div class="h-ulist"><div class="noRecord"></div></div></div></div>';
						var tableHtml='<table class="table fc_9" cellspacing="0" cellpadding="0" id="refundRecord">'+html+'</table>';
						$("#carryTable").parent().html(tableHtml+noDataInfo);
					}
				}else if(typeObj == "refundRecord"){
					//回款
					html="";
					html='<tr class=""><th>收款时间</th><th>收款类型</th><th>收款金额</th><th>备注</th></tr>';
					if(result.fundDetailList.DATA_PAGE.result.length >0){
						//$(".ui-noRecord").css("display","none");
						for (var int = 0; int < result.fundDetailList.DATA_PAGE.result.length; int++) {
							if(int <5){
								var record= result.fundDetailList.DATA_PAGE.result[int];
								var returnType="";
								for (var j = 0; j < result.fundActionList.length; j++) {
									var fa=result.fundActionList[j];
									if(fa.dbCode == record.fundAction){
										returnType =fa.showName;
									}
								}
								html+='<tr><td class="Numfont">'+record.createDate+'</td><td class="Numfont">'+returnType+'</td><td class="Numfont">'+(record.amount*0.001).toFixed(2)+'元</td><td><span class="explain_td" title="'+record.remark+'">'+record.remark+'</span></td></tr>';
							}
						}
						$("#refundRecord").html(html);
					}else{
						var noDataInfo = '<div class="noRecordBox"><div class="ui-noRecord"><div class="h-ulist"><div class="noRecord"></div></div></div></div>';
						var tableHtml='<table class="table fc_9" cellspacing="0" cellpadding="0" id="refundRecord">'+html+'</table>';
						$("#refundRecord").parent().html(tableHtml+noDataInfo);
					}
				}
				
			} 
		});
	};
	
	
	//交易明细
	$("ul li a.pad_b10").click(function(){
		//交易，充值，提现
		getFinancialRecords($(this).attr("value"))
	});
	
	
	
	//查询投资问题6条   47
//	$.ajax({
//		type : "POST", 
//		url : "/member/accountDetailAjax.do?judge=1836469355621974", 
//		dataType:"json",
//		contentType: "application/x-www-form-urlencoded; charset=UTF-8",
//		success : function(result) { 
//			$.each(result,function(i, item){
//				var li = "<li><a target='_blank' href='/index.do?method=indexStaticPage1Detail&pid=45&artId="+item.artId+"&acId="+item.acId+"' title='" + item.artTitle+ "'>"+item.artTitle+"</a></li>";
//				$("#touziUl").append(li); 
//			}); 
//		} 
//	});
	//查询借款问题6条  48
//	$.ajax({
//		type : "POST", 
//		url : "/member/accountDetailAjax.do?judge=1836469355621975", 
//		dataType:"json",
//		contentType: "application/x-www-form-urlencoded; charset=UTF-8",
//		success : function(result) { 
//			 $.each(result,function(i, item){
//				var li = "<li><a target='_blank' href='/index.do?method=indexStaticPage1Detail&pid=45&artId="+item.artId+"&acId="+item.acId+"' title='" + item.artTitle+ "'>"+item.artTitle+"</a></li>";
//				$("#jiekuanUl").append(li); 
//			}); 
//		} 
//	});
	
//	if($('#cLogin').val().length>0){
//		$.getScript($('#cLogin').val(), function(_d,_s){
//		});
//	}
	
	//活动页面头部
		$.ajax({
	    	type: "post",
	   	 	url: "/index.do?method=showLogo",
	    	dataType: "json",
	    	contentType: "application/x-www-form-urlencoded; charset=UTF-8",
	    	success: function(returnDate){
	    		if(returnDate){
	    		 $("#headLogo").html(returnDate.artContent);
	    		}
	    	}
		});
});
//格式化金额
function formatNum(pamenth){
	pamenth = pamenth.toString().replace(/\$|\,/g,'');
    if(isNaN(pamenth)){
    	pamenth = "0";
    }
    var sign = (pamenth == (pamenth = Math.abs(pamenth)));
    pamenth = Math.floor(pamenth*100+0.50000000001);
    var cents = pamenth%100;
    pamenth = Math.floor(pamenth/100).toString();
    if(cents<10){
	    cents = "0" + cents;
    }
	for (var i = 0; i < Math.floor((pamenth.length-(1+i))/3); i++){
	    pamenth = pamenth.substring(0,pamenth.length-(4*i+3))+','+pamenth.substring(pamenth.length-(4*i+3));
	}
	return (((sign)?'':'-') + pamenth + '.' + cents);
}

//关闭升级提示框
function off(){
	grateUp.style.visibility="hidden";
}

//格式化金额
function formatNum(pamenth){
	pamenth = pamenth.toString().replace(/\$|\,/g,'');
    if(isNaN(pamenth)){
    	pamenth = "0";
    }
    var sign = (pamenth == (pamenth = Math.abs(pamenth)));
    pamenth = Math.floor(pamenth*100+0.50000000001);
    var cents = pamenth%100;
    pamenth = Math.floor(pamenth/100).toString();
    if(cents<10){
	    cents = "0" + cents;
    }
	for (var i = 0; i < Math.floor((pamenth.length-(1+i))/3); i++){
	    pamenth = pamenth.substring(0,pamenth.length-(4*i+3))+','+pamenth.substring(pamenth.length-(4*i+3));
	}
	return (((sign)?'':'-') + pamenth + '.' + cents);
}