<?php

namespace Home\Model;
use Think\Model;

class OrderinfoModel extends Model {
	public function sn() {
		$sn = time() . mt_rand(10000,99999);
		if($this->where('order_sn=' . $sn)->count()) {
			$this->sn();
		}
		return $sn;
	}
}