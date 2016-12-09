<?php

namespace Home\Model;
use Think\Model\RelationModel;

class GoodsModel extends RelationModel {

	protected $_link = array(
			'comment'=>self::HAS_MANY,
		);

	//自动过滤字段
	protected $updateFields = 'goods_id,goods_sn,cat_id,brand_id,goods_name,shop_price,market_price,goods_number,click_count,goods_weight,goods_brief,goods_desc,thumb_img,goods_img,ori_img,is_on_sale,is_delete,is_best,is_new,is_hot,add_time';

	//array(
	//array(验证字段1,验证规则,错误提示,[验证条件,附加规则,验证时间]),
	//array(验证字段2,验证规则,错误提示,[验证条件,附加规则,验证时间]),
	//......
	//);
	public $_validate = array(
			array('goods_name','6,16','商品名称在6-16个字符之间',1,'length',3),
			array('is_best',array(0,1),'精品只能是0或1',0,'in',3),
			array('cat_id','ckc','请先分类',1,'callback',3),
			array('goods_sn','','goods_sn重复了',1,'unique',3)
		);

	//array(
	//array(完成字段1,完成规则,[完成条件,附加规则]),
	//array(完成字段2,完成规则,[完成条件,附加规则]),
	//......);
	public $_auto = array(
			array('add_time','time',1,'function'),
			array('last_time','time',2,'function')
		);



	public function ckc() {
		$cat = D('Home/Cat');
		return $cat->find($_POST['cat_id']) ? true:false; 
	}


}