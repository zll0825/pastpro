<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Article extends Model
{
    protected $table = 'article';
    protected $primaryKey = 'art_id';
    public $timestamps = false;
    protected $guarded = [];

    //缩略图片
    //传入原始图片绝对路径$optah，存放缩略图相对路径加上名字$tpath，缩略宽高值
    //返回bool
    public static function thumb($opath , $tpath, $width=180 , $height=160){
		//获取原始图片的宽高以及类型
		list($ow,$oh,$otype) = getimagesize($opath);

		$map = array(
		1 => 'imagecreatefromgif',
		2 => 'imagecreatefromjpeg',
		3 => 'imagecreatefrompng',
		6 => 'imagecreatefrombmp'
		);

		if(!isset($map[$otype])) {
			return false;
		}

		//创建原图画布，以及缩略图画布
		$om = $map[$otype]($opath);
		$tm = imagecreatetruecolor($width, $height);

		//创建白色
		$white = imagecolorallocate($tm, 255, 255, 255);

		//给缩略图填充白色背景
		imagefill($tm, 0, 0, $white);

		//计算缩略比,缩略图实际宽高
		$rate = min($width/$ow,$height/$oh);
		$tw = $ow*$rate;
		$th = $oh*$rate;

		//将原图缩略到小画布上
		imagecopyresampled($tm, $om, ($width-$tw)/2, ($height-$th)/2, 0, 0, $tw, $th, $ow, $oh);

		//保存缩略图
		$res = imagepng($tm, base_path(). $tpath);

		//销毁画布
		imagedestroy($om);
		imagedestroy($tm);

		return $res;
	}
}
