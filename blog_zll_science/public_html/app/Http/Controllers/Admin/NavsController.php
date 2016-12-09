<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Model\Navs;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Validator;

class NavsController extends Controller
{
     //get admin/navs 全部自定义导航列表
    public function index(){
    	$data = Navs::orderby('nav_order')->get(); 
    	return view('admin/navs/index')->with('data', $data);
    }

    //ajax修改自定义导航排序
    public function changeord(){
    	$input = Input::all();
    	$nav = Navs::find($input['nav_id']);
    	$nav->nav_order = $input['nav_order'];
    	if($nav->update()){
    		return ['status'=>1,'msg'=>'排序更新成功！'];
    	} else {
    		return ['status'=>0,'msg'=>'排序更新成功！'];
    	}
    }

    //get admin/navs/create 添加自定义导航展示页
    public function create(){
    	return view('admin/navs/add');
    }

    //post admin/category 添加自定义导航提交页
    public function store(){
    	$input = Input::except('_token');
    	$rules = [
            'nav_name'=>'required',
            'nav_url'=>'required',
        ];

        $message = [
            'nav_name.required'=>'自定义导航名称不能为空！',
            'nav_url.required'=>'自定义导航链接不能为空！',
        ];

        $validator = Validator::make($input,$rules,$message);

        if($validator->passes()){
            $res = Navs::create($input);
            if($res){
                return redirect('admin/navs');
            }else{
                return back()->with('errors','数据填充失败，请稍后重试！');
            }
        }else{
            return back()->withErrors($validator);
        }
    }

    //get admin/lins/{id}/edit
    public function edit($nav_id){
        $field = Navs::find($nav_id);
        return view('admin/navs/edit', ['field'=>$field]);
    }

    //put admin/navs/{id}
    public function update($nav_id){
        $input = Input::except('_token', '_method');
        if(!Navs::where('nav_id', $nav_id)->update($input)){
            return back()->with('errors','自定义导航修改失败，请稍候重试！');
        } else {
            return redirect('admin/navs');
        }
    }

    //delete admin/navs/{id}
    public function destroy($nav_id){
        $res = Navs::where('nav_id',$nav_id)->delete();
        if($res){
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
        return $data;
    }
}
