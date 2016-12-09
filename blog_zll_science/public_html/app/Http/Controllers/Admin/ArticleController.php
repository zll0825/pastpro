<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Model\Article;
use App\Model\Category;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Validator;

class ArticleController extends Controller
{
    //get admin/article 全部分类列表
    public function index(){
    	$data = Article::orderBy('art_id','desc')->paginate(8);
        // dd($data);
        return view('admin.article.index',compact('data'));
    	// return view('admin/article/index')->with('data', $data);
    }

    //ajax修改分类排序
    public function changeord(){
    	$input = Input::all();
    	$cate = Category::find($input['cate_id']);
    	$cate->cate_order = $input['cate_ord'];
    	if($cate->update()){
    		return ['status'=>1,'msg'=>'排序更新成功！'];
    	} else {
    		return ['status'=>0,'msg'=>'排序更新成功！'];
    	}
    }

    //get admin/article/create 添加文章展示页
    public function create(){
    	$categorys = new Category();
    	$data = $categorys->tree();
    	return view('admin/article/add', ['data'=>$data]);
    }

    //post admin/article 添加文章提交页
    public function store(){
        $input = Input::except('_token','often');
        $input['art_pubtime'] = time();

        $rules = [
            'art_title'=>'required',
            'art_content'=>'required',
        ];

        $message = [
            'art_title.required'=>'文章名称不能为空！',
            'art_content.required'=>'文章内容不能为空！',
        ];

        $validator = Validator::make($input,$rules,$message);

        if($validator->passes()){
            $re = Article::create($input);
            if($re){
                return redirect('admin/article');
            }else{
                return back()->with('errors','数据填充失败，请稍后重试！');
            }
        }else{
            // dd($validator->errors());
            return back()->withErrors($validator);
            // return back()->with('message','数据填充失败，请稍后重试！');
        }
    }

    //get admin/category/{id}/edit
    public function edit($art_cateid){
        $data = (new Category)->tree();
        $field = Article::find($art_cateid);
        return view('admin.article.edit',compact('data','field'));
    }

    //put admin/article/{id}
    public function update($art_id){
        $input = Input::except('_token', '_method');
        if(!Article::where('art_id', $art_id)->update($input)){
            return back()->with('errors','文章修改失败，请稍候重试！');
        } else {
            return redirect('admin/article');
        }
    }

    //delete admin/cateagory/{id}
    public function destroy($art_id){
        $res = Article::where('art_id',$art_id)->delete();
        if($res){
            $data = [
                'status' => 0,
                'msg' => '文章删除成功！',
            ];
        }else{
            $data = [
                'status' => 1,
                'msg' => '文章删除失败，请稍后重试！',
            ];
        }
        return $data;
    }
}
