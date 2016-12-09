<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    protected $table = 'category';
    protected $primaryKey = 'cate_id';
    public $timestamps = false;
    protected $guarded = [];

    public function tree($pid=0){
    	$data = $this->orderby('cate_order','asc')->get();
    	return $this->getTree($data,$pid);
    }

    public function getTree($data,$pid,$lev=0){
    	$tree = array();

    	foreach($data as $d){
    		if($d->cate_pid == $pid){
    			$d->lev = $lev;
    			$tree[] = $d;

    			$tree = array_merge($tree, $this->getTree($data,$d->cate_id,$lev+1));
    		}
    	}

    	return $tree;
    }
}
