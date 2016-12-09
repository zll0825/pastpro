<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Model\Article;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Validator;

class ToolController extends Controller
{
    //图片上传
    public function upload(){
    	$file = Input::file('Filedata');
    	$extension = $file->getClientOriginalExtension();//获取文件的后缀
    	$newName = date('Ymd'). mt_rand(1000,9999). '.'. $extension;
    	$filePath = '/uploads/images/'.$newName;
    	$realPath = $file->getRealPath();
    	$res = Article::thumb($realPath, $filePath);
    	if($res){
    		return $filePath;
    	} 
    }

   
}
