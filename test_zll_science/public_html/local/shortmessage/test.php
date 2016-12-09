<?php
    include (__DIR__."\TopSdk.php");
    date_default_timezone_set('Asia/Shanghai'); 

  

    $c = new TopClient;
	$c->appkey = $appkey;
	$c->secretKey = $secret;
	$req = new AlibabaAliqinFcSmsNumSendRequest;
	$req->setExtend("123456");
	$req->setSmsType("normal");
	$req->setSmsFreeSignName("活动验证");
	$req->setSmsParam("{\"code\":\"1234\",\"product\":\"思科教育\",\"item\":\"送课程积分活动\"}");
	$req->setRecNum("15201548757");
	$req->setSmsTemplateCode("SMS_8325226");
	$resp = $c->execute($req);
// 模板内容: 验证码${code}，您正在参加${product}的${item}活动，请确认系本人申请。
	var_dump($resp);


?>