<?php


namespace Admin\Controller;
use \Think\Controller;

class GoodsController extends Controller {
	protected $model = null;

	public function __construct() {
		parent::__construct();
		$this->model = D('Home/Goods');
	}

	public function goodsadd() {
		if(!IS_POST) {
			$cat = D('Home/Cat');
			$cats = $cat->getTree();
			$this->assign('cats',$cats);
			$this->display();
		} else {
			if(!$this->model->create()) {
				echo $this->model->getError();
			} else {
				$upload = new \Think\Upload();
				// $upload->maxsize = 1*1024*1024;
				$upload->rootPath = APP_PATH . 'Public/uploads/';
				$upload->savePath = 'images/';				
				if($info = $upload->upload()) {
					$this->model->ori_img = $info['goods_img']['savepath'] . $info['goods_img']['savename'];
					$this->model->goods_img = $this->model->ori_img . 'x230.jpg';
					// echo $this->model->goods_img; exit;
					$this->model->thumb_img = $this->model->ori_img . 'x100.jpg';

					$img = new \Think\Image();
					$img->open($upload->rootPath . $this->model->ori_img);
					$img->thumb(100,100, \Think\Image::IMAGE_THUMB_FILLED)->save($upload->rootPath . $this->model->thumb_img);
					$img->thumb(230,230, \Think\Image::IMAGE_THUMB_FILLED)->save($upload->rootPath . $this->model->goods_img);
				$this->model->add();
				// var_dump($model);
				$this->success('商品添加成功','goodslist',2);
				}
				echo $upload->geterror();
			}
		}
	}

	public function goodslist() {
		// $User = M('User'); // 实例化User对象
		$count = $this->model->count();// 查询满足要求的总记录数
		$Page = new \Think\Page($count,2);// 实例化分页类 传入总记录数和每页显示的记录数(25)
		$show = $Page->show();// 分页显示输出
		//进行分页数据查询 注意limit方法的参数要使用Page类的属性
		$this->model->field('goods_id,goods_name,goods_sn,shop_price,is_best,is_new,is_hot,goods_number');
		// $goods = $this->model->where('is_del=0')->order('goods_id desc')->limit(0,10)->select();
		$list = $this->model->where('is_delete=0')->order('goods_id desc')->limit($Page->firstRow.','.$Page->listRows)->select();
		$this->assign('list',$list);// 赋值数据集
		$this->assign('page',$show);// 赋值分页输出
		// $this->display(); // 输出模板

		$cat = D('Home/Cat');
		$cats = $cat->getTree();
		$this->assign('cats',$cats);
		// $this->assign('goods',$goods);
		$this->display();
	}

	public function goodsedit() {
		if(!IS_POST) {
			$goods_id = I('id');
			$cat = D('Home/Cat');
			$cats = $cat->getTree();
			$this->assign('cats',$cats);
			$goods = $this->model->find($goods_id);
			$this->assign('goods', $goods);
			$this->display();
		} else {
			$googs_id = $_POST['goods_id'];
			$this->model->where('goods_id=' . $goods_id)->save($_POST);
		}
	}

	public function goodsdel() {
		$goods_id = I('id');
		if($this->model->find($goods_id)) {
			$data['is_delete'] = 1;
			if($this->model->where('goods_id='.$goods_id)->save($data)) {
				$this->redirect('Admin/goods/goodslist');
			}
		}
	}

	public function upload() {
		$upload = new \Think\Upload();
		$upload->maxsize = 1*1024*1024;
		$upload->rootPath = APP_PATH . 'Public/upload/';
		$upload->savePath = 'images/';
		return $info = $upload->upload();
	}

}