<html>


<head>

<script type="text/javascript">
	function pay() {
		var img = document.images[0];
		if(img.src.indexOf('/images/6.gif')>=0) {
			img.src="/images/7.gif";
		} else if(img.src.indexOf('/images/7.gif')>=0) {
			alert("支付成功!");
			document.forms[0].submit();
		}
	}
</script>
</head>
<img src="/images/6.gif" onclick="pay();" />
<form action="<?php echo $v_url; ?>" method="post">
	<input type="hidden" name="v_oid" value="<?php echo $payed['v_oid']; ?>" />
	<input type="hidden" name="v_pstatus" value="<?php echo $payed['v_pstatus']; ?>" />
	<input type="hidden" name="v_pstring" value="<?php echo $payed['v_pstring']; ?>" />
	<input type="hidden" name="v_pmode" value="<?php echo $payed['v_pmode']; ?>" />
	<input type="hidden" name="v_md5str" value="<?php echo $payed['v_md5str']; ?>" />
	<input type="hidden" name="v_amount" value="<?php echo $payed['v_amount']; ?>" />
	<input type="hidden" name="v_moneytype" value="<?php echo $payed['v_moneytype']; ?>" />
	<input type="hidden" name="remark1" value="<?php echo $payed['remark1']; ?>" />
	<input type="hidden" name="remark2" value="<?php echo $payed['remark2']; ?>" />
</form>
<body>
</body>
</html>