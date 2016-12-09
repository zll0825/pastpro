<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Model\Category;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Validator;

class CategoryController extends Controller
{
    //get admin/category 全部分类列表
    public function index(){
    	$categorys = new Category();
    	// dd($categorys);
    	$data = $categorys->tree();
    	// dd($data);
    	// return view('admin/category/list',['categorys'=>$categorys]);
    	return view('admin/category/index')->with('data', $data);
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

    //get admin/category/create 添加分类展示页
    public function create(){
    	$categorys = new Category();
    	$data = $categorys->tree();
    	return view('admin/category/add', ['data'=>$data]);
    }

    //post admin/category 添加分类提交页
    public function store(){
    	$input = Input::except('_token');
    	$rules = [
            'cate_name'=>'required',
        ];

        $message = [
            'cate_name.required'=>'分类名称不能为空！',
        ];

        $validator = Validator::make($input,$rules,$message);

        if($validator->passes()){
            $res = Category::create($input);
            if($res){
                return redirect('admin/category');
            }else{
                return back()->with('errors','数据填充失败，请稍后重试！');
            }
        }else{
            return back()->withErrors($validator);
        }
    }

    //get admin/category/{id}/edit
    public function edit($cate_id){
        $field = Category::find($cate_id);
        // dd($field);
        $categorys = new Category();
        $data = $categorys->tree();
        return view('admin/category/edit', ['data'=>$data,'field'=>$field]);
    }

    //put admin/category/{id}
    public function update($cate_id){
        $input = Input::except('_token', '_method');
        if(!Category::where('cate_id', $cate_id)->update($input)){
            return back()->with('errors','栏目信息修改失败，请稍候重试！');
        } else {
            return redirect('admin/category');
        }
    }

    //delete admin/cateagory/{id}
    public function destroy($cate_id){
        $res = Category::where('cate_pid', $cate_id)->first();
        if($res){
            $data = [
                'status' => 1,
                'msg' => '请先删除子栏目！',
            ];
        } else {
             $re = Category::where('cate_id',$cate_id)->delete();
             if($re){
                $data = [
                    'status' => 0,
                    'msg' => '栏目删除成功！',
                ];
            }else{
                $data = [
                    'status' => 1,
                    'msg' => '栏目删除失败，请稍后重试！',
                ];
            }
        }
        return $data;
    }
}
