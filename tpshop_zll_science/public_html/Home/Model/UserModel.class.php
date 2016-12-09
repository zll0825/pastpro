<?php

namespace Home\Model;
use Think\Model;

class UserModel extends Model {
	public $_validate = array(
			array('username','4,16','用户名在6-16个字符之间',1,'length',3),
			array('username','require','用户名已存在',1,'unique',3),
			array('email','email','email非法',1,'',3),
			array('passwd','/^.{4,10}/','密码4-10位',1, 'regex',3),
			array('rpwd','passwd','两次输入密码不一样',1,'confirm',3),
		);

	public function enc($str) {
		return md5($str);
	}

	public function rand($num = 6) {
		$str = "ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz1234567890";
		return substr(str_shuffle($str), 0, $num);
	}

	
}
