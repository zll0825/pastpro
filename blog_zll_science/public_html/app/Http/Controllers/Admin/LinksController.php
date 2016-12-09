<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Model\Links;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Validator;

class LinksController extends Controller
{
    //get admin/links 全部友情链接列表
    public function index(){
    	$data = Links::orderby('link_order')->get(); 
    	return view('admin/links/index')->with('data', $data);
    }

    //ajax修改友情链接排序
    public function changeord(){
    	$input = Input::all();
    	$link = Links::find($input['link_id']);
    	$link->link_order = $input['link_order'];
    	if($link->update()){
    		return ['status'=>1,'msg'=>'排序更新成功！'];
    	} else {
    		return ['status'=>0,'msg'=>'排序更新成功！'];
    	}
    }

    //get admin/links/create 添加友情链接展示页
    public function create(){
    	return view('admin/links/add');
    }

    //post admin/category 添加友情链接提交页
    public function store(){
    	$input = Input::except('_token');
    	$rules = [
            'link_name'=>'required',
            'link_url'=>'required',
        ];

        $message = [
            'link_name.required'=>'友情链接名称不能为空！',
            'link_url.required'=>'友情链接链接不能为空！',
        ];

        $validator = Validator::make($input,$rules,$message);

        if($validator->passes()){
            $res = Links::create($input);
            if($res){
                return redirect('admin/links');
            }else{
                return back()->with('errors','数据填充失败，请稍后重试！');
            }
        }else{
            return back()->withErrors($validator);
        }
    }

    //get admin/lins/{id}/edit
    public function edit($link_id){
        $field = Links::find($link_id);
        return view('admin/links/edit', ['field'=>$field]);
    }

    //put admin/links/{id}
    public function update($link_id){
        $input = Input::except('_token', '_method');
        if(!Links::where('link_id', $link_id)->update($input)){
            return back()->with('errors','友情链接修改失败，请稍候重试！');
        } else {
            return redirect('admin/links');
        }
    }

    //delete admin/links/{id}
    public function destroy($link_id){
        $res = Links::where('link_id',$link_id)->delete();
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
