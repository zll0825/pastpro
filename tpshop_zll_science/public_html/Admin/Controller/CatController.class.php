<?php

namespace Admin\Controller;
use Think\Controller;

class CatController extends Controller {
	protected $model = NULL;

	public function __construct() {
		parent::__construct();
		$this->model = D('Home/Cat');
	}

	public function catadd() {
		if(!IS_POST) {
			// $cat = D('Home/Cat');
			// var_dump($cat);
			$data = $this->model->getTree();
			$this->assign('cats', $data);
			$this->display('cateadd');
		} else {
			// $cat = D('Home/Cat');

			if($this->model->add($_POST)) {
				$this->success('新增成功','catlist',1);
			} else {
				$this->geterror();
			}
		}
	}

	public function catlist() {
		// $cat = D('Home/Cat');
		// print_r($this->cat->getTree(1,1));
		$this->assign('cats', $this->model->getTree());
		// print_r($cats);
		$this->display('catelist');
	}

	public function catedit() {
		$cat_id = I('cat_id');
		if(!IS_POST) {
			$cat = $this->model->find($cat_id);
			$data = $this->model->getTree();
			$this->assign('cat', $cat);
			$this->assign('cats', $data);
			$this->display();
		} else {
			$rs = $this->model->where('cat_id=' . $_POST['cat_id'])->save($_POST);
			if($rs) {
				$this->redirect('Admin/cat/catlist');
			} else {
				$this->geterror();
			}
		}
	}

	public function catdel() {
		$cat_id = I('cat_id');
		if($this->model->find($cat_id) && empty($this->model->getTree($cat_id))) {
			if($this->model->delete($cat_id)) {
				$this->redirect('Admin/cat/catlist','',3);
			}
		} else {
			$this->redirect('Admin/cat/catlist');
		}
	}
}