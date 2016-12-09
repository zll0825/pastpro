<?php

// print_r($_POST);exit;

if($_POST){
	if($_POST['act'] != "restart"){
		$data = $_POST;
		$str = json_encode($data);
		file_put_contents('./wiziqi.txt', $str);
		echo $str;
	} else{
		file_put_contents('./wiziqi.txt', '');
	}
} 

$str = file_get_contents('./wiziqi.txt');
echo $str;

?>