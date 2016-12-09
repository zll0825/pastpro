<?php
namespace Home\Controller;
use Think\Controller;
class IndexController extends Controller {
    public function index(){
    	$cat = D('Home/Cat');
    	$tree = $cat->gettree();
    	$goods = D('Home/Goods');
    	$hot = $goods->where(array('is_hot'=>1))->order('goods_id desc')->limit(0,3)->select();

    	$this->assign('cats', $tree);
    	$this->assign('hot', $hot);
    	
    	if(!empty(cookie())) {
	    	$name = cookie('name');
	    	$passwd = cookie('passwd');
	    	$cc = cookie('cc');
	    	if($cc == md5($name . $passwd)) {
    			$this->assign('name',$name);
	    	}
    	}

        $arr = array('goods'=>'9527');
        session('goods',$arr);

    	// var_dump(session());
    	$this->display();

    }
}