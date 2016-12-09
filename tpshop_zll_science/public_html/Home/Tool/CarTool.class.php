<?php

namespace Home\Tool;
abstract class ACartTool {
	/**
	* 向购物车中添加1个商品
	* @param $goods_id int 商品id
	* @param $goods_name String 商品名
	* @param $shop_price float 价格
	* @return boolean
	*/
	abstract public function add($goods_id,$goods_name,$shop_price);
	/**
	* 减少购物中1个商品的数量,如果减至0,则从购物车删除此商品
	* @param $goods_id int 商品id
	*/
	abstract public function decr($goods_id);
	/**
	* 从购物车删除某商品
	* @param $goods_id 商品id
	*/
	abstract public function del($goods_id);
	/**
	* 列出购物车所有的商品
	* @return Array
	*/
	abstract public function items();
	/**
	* 返回购物车中有几种商品
	* @return int
	*/
	abstract public function calcType();
	/**
	* 返回购物中商品的个数
	* @return int
	*/
	abstract public function calcCnt();
	/**
	* 返回购物车中商品的总价格
	* @return float
	*/
	abstract public function calcMoney();
	/**
	* 清空购物车
	* @return void
	*/
	abstract public function clear();
}

class CarTool extends ACartTool {
	public $items = array();
	protected static $ins = null;

	public static function getIns() {
		if(self::$ins === null) {
			self::$ins = new self();
		}
		return self::$ins;
	}

	final protected function __construct() {
		if(session('?cart')) {
			$this->items = session('cart');
		}
	}

	public function add($goods_id,$goods_name,$shop_price) {
		if(isset($this->items[$goods_id])) {
			$this->items[$goods_id]['num'] += 1;
		} else {
			// echo $goods_id,$goods_name,$shop_price;
			$this->items[$goods_id]['goods_name'] = $goods_name;
			$this->items[$goods_id]['shop_price'] = $shop_price;
			$this->items[$goods_id]['num'] = 1;			
		// print_r($this->items);
		}
	}

	public function decr($goods_id) {
		if($this->items[$goods_id] > 0) {
			$this->items[$goods_id]['num'] -= 1;
		} else {
			$this->del($goods_id);
		}
	}

	public function del($goods_id) {
		unset($this->items[$goods_id]);
		// echo "nihao ";
	}

	public function items() {
		return $this->items;
	}

	public function calcType() {
		return count($this->items);
	}

	public function calcCnt() {
		$cnt = 0;
		foreach ($this->items as $v) {
			$cnt += $v['num'];
		}
		return $cnt;
	}

	public function calcMoney() {
		$money = 0;
		foreach ($this->items as $v) {
			$money += $v['num'] * $v['shop_price'];
		}
		return $money;
	}

	public function clear() {
		$this->items = array();
	}
 
	public function __destruct() {
		session('cart', $this->items);
		// echo "nihao";
	}

}