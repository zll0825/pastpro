<?php

namespace App\Http\Controllers\Home;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Model\Navs;
use App\Model\Article;
use Illuminate\Support\Facades\View;

class CommonController extends Controller
{
    public function __construct(){
    	//点击量最高的6篇文章
        $hot = Article::orderBy('art_view','desc')->take(5)->get();

        //最新发布文章8篇
        $new = Article::orderBy('art_pubtime','desc')->take(8)->get();

        //自定义导航
        $navs = Navs::all();

        View::share('navs',$navs);
        View::share('hot',$hot);
        View::share('new',$new);
    }
}
