<?php

namespace Home\Controller;
use Think\Controller;

class FlowController extends Controller{
	protected $model = null;

	public function __construct() {
		parent::__construct();
		$this->model = \Home\Tool\CarTool::getIns();
	}

	public function buy() {
		$goods_id = I('id');
		$goods = D('Goods');
		$info = $goods->field('goods_id,goods_name,shop_price')->where('goods_id=' . $goods_id)->find();
		// $cart = \Home\Tool\CarTool::getIns();
		// print_r($info);
		$rs = $this->model->add($goods_id,$info['goods_name'],$info['shop_price']);
		// var_dump($this->model);exit;

		
		$this->redirect('flow_cart');
	}

	public function flow_cart() {

		$items = $this->model->items();
		// var_dump($items);exit;
		$this->assign('items', $items);
		$this->display();
	}

	public function del() {
		$goods_id = I('get.id');
		// echo $goods_id;
		$this->model->del($goods_id);
		$this->success('flow_cart');
	}

	public function flow_checkout() {
		if(IS_POST) {
			// print_r($_POST);exit;
			$og = D('ordergoods');
			$oi = D('orderinfo');

			$info['order_sn'] = $oi->sn();
			$info['address'] = $_POST['address'];
			$info['email'] = $_POST['email'];
			$info['mobile'] = $_POST['mobile'];
			$oi->add($info);

			$items = $this->model->items();
			foreach ($items as $k => $v) {
				$goods = array();
				$goods['order_sn'] = $info['order_sn'];
				$goods['goods_id'] = $k;
				$goods['goods_name'] = $v['goods_name'];
				$goods['goods_number'] = $v['num'];
				$goods['subtotal'] = $v['num'] * $v['shop_price'];
				$og->add($goods);
			}

			$this->redirect('flow_done?sn=' . $info['order_sn']);
		}

		$items = $this->model->items();
		$money = $this->model->calcMoney();
		// var_dump($items);exit;
		// echo $money;
		$this->assign('items', $items);
		$this->assign('money', $money);
		$this->assign('n',0);
		$this->display();
	}

	public function flow_done() {
		$sn = I('get.sn');
		$this->assign('sn', $sn);
		$this->display();
	}
}