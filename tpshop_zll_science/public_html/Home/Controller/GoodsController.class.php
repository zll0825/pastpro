<?php
namespace Home\Controller;

class GoodsController extends \Think\Controller {
	protected $model = null;

	public function __construct() {
		parent::__construct();
		$this->model = D('Goods');
	}

	public function category() {
		$goods = $this->model->where('cat_id=' . I('get.id'))->select();

		// $User = M('User'); // 实例化User对象
		$count = count($goods);// 查询满足要求的总记录数
		$Page = new \Think\Page($count,3);// 实例化分页类 传入总记录数和每页显示的记录数(25)
		$show = $Page->show();// 分页显示输出
		//进行分页数据查询 注意limit方法的参数要使用Page类的属性
		// $this->model->field('goods_id,goods_name,goods_sn,shop_price,is_best,is_new,is_hot,goods_number');
		$goods = $this->model->where('cat_id=' . I('get.id'))->order('goods_id desc')->limit($Page->firstRow.','.$Page->listRows)->select();
		$this->assign('goods',$goods);// 赋值数据集
		$this->assign('page',$show);// 赋值分页输出
		// $this->display(); // 输出模板
		// var_dump(session('his'));

		$his = array_reverse(session('his'), true);
		$this->assign('his',$his);
		$this->display('index/category');
	}

	public function goods() {
		if(IS_POST) {
			$comm = D('comment');
			$_POST['pubtime'] = time();
			$comm->add($_POST);
		}

		$goods_id = I('get.id');
		// $goods['goods_id'] = $goods_id;
		// $goods['goods_name'] = 'session';
		// session('goods_id',$goods);
		// $good = session('goods_id');
		// print_r($good);
		// exit;
		$goods = $this->model->where('goods_id=' . $goods_id)->find();

		$family = array();
		$cat_id = $goods['cat_id'];
		$cat = D('Home/Cat');
		$cats = $cat->where('cat_id=' . $cat_id)->find();
		$family[] = $cats;
		while ($cats['parent_id']>0) {
			$cats = $cat->where('cat_id=' . $cats['parent_id'])->find();
			$family[] = $cats;
			// echo $cats['cat_name'];
		}

		// print_r(array_reverse($family));exit;

		$his = session('?his')? session('his'): array();
		if(isset($his[$goods_id])) {
			unset($his[$goods_id]);
		}

		$row = array();
		$row['goods_name'] = $goods['goods_name'];
		$row['shop_price'] = $goods['shop_price'];
		$row['thumb_img'] = $goods['thumb_img'];
		$his[I('get.id')] = $row;

		if(count($his) >= 5) {
			$key = key($his);
			unset($his[$key]);
		}
		session('his',$his);

		$comms = $this->model->relationGet('comment');
		$this->assign('comms', array_reverse($comms));
		$this->assign('family', array_reverse($family));
		$this->assign('goods', $goods);
		// var_dump($his);
		$this->display('index/goods');
	}

}