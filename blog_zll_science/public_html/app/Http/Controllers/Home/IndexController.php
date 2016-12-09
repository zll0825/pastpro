<?php

namespace App\Http\Controllers\Home;

use App\Model\Article;
use App\Model\Category;
use App\Model\Links;
use App\Model\Navs;

class IndexController extends CommonController
{
        public function index(){
                //点击量最高的6篇文章（站长推荐）
                $pics = Article::orderBy('art_view','desc')->take(6)->get();

                //图文列表5篇（带分页）
                $data = Article::join('category','art_cateid','=','cate_id')->orderBy('art_pubtime','desc')->paginate(5);

                //友情链接
                $links = Links::orderBy('link_order','asc')->get();

                //一级栏目
                $submenu = Category::where('cate_pid',1)->get();

                return view('home.index',compact('pics','data','links','submenu'));
        }

        public function cate($cate_id=1){
                // dd($cate_id);
                if($cate_id==1){
                        $data = Article::join('category','art_cateid','=','cate_id')->paginate(4);
                        $submenu = Category::where('cate_pid', '1')->get();
                        // dd($submenu);
                        $field = Category::find($cate_id);
                } else {
                        $arr = Category::where('cate_pid',$cate_id)->get();
                        $cates = [];
                        foreach($arr as $a){
                                $cates[] = $a->cate_id;
                        }
                        $cates[] = $cate_id;
                        //图文列表4篇（带分页）
                        $data = Article::join('category','art_cateid','=','cate_id')->whereIn('art_cateid',$cates)->orderBy('art_pubtime','desc')->paginate(4);
                        // dd($data);

                        //查看次数自增
                        Category::where('cate_id',$cate_id)->increment('cate_view');

                        //当前分类的子分类
                        $submenu = Category::where('cate_pid',$cate_id)->get();

                        $field = Category::find($cate_id);
                }
                return view('home.list',compact('data','field','submenu'));
        }

        public function art($art_id){
                $field = Article::Join('category','article.art_cateid','=','category.cate_id')->where('art_id',$art_id)->first();

                //查看次数自增
                Article::where('art_id',$art_id)->increment('art_view');

                $article['pre'] = Article::where('art_id','<',$art_id)->orderBy('art_id','desc')->first();
                $article['next'] = Article::where('art_id','>',$art_id)->orderBy('art_id','asc')->first();

                $data = Article::where('art_cateid',$field->cate_id)->orderBy('art_id','desc')->take(6)->get();

// dd($field);
                return view('home/art',compact('field','article','data'));
        }
}
