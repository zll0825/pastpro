<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Model\Confs;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Validator;

class ConfsController extends Controller
{
    //get admin/confs 全部网站配置列表
    public function index(){
    	$data = Confs::orderby('conf_order')->get(); 
        foreach($data as $k=>$v){
            switch ($v->field_type) {
                case 'input':
                    $data[$k]->_html = '<input type="text" name="conf_content[]" class="lg" value="'.$v->conf_content.'"></input>';
                    break;

                case 'textarea':
                    $data[$k]->_html = '<textarea name="conf_content[]" class="lg">'.$v->conf_content.'</textarea>';
                    break;
                
                case 'radio':
                    $arr = explode(',', $v->field_value);
                    $str = '';
                    foreach($arr as $m=>$n){
                        $a = explode('|', $n);
                        $c = $v->conf_content == $a[0]? 'checked':'';
                        $str .= '<input type="radio" name="conf_content[]" value="'.$a[0].'" '.$c.'>'.$a[1].'</input>';
                    }
                    $data[$k]->_html = $str;
                    break;
            }
        }
    	return view('admin/confs/index')->with('data', $data);
    }

    //ajax修改网站配置排序
    public function changeord(){
    	$input = Input::all();
    	$link = Confs::find($input['conf_id']);
    	$link->conf_order = $input['conf_order'];
    	if($link->update()){
    		return ['status'=>1,'msg'=>'排序更新成功！'];
    	} else {
    		return ['status'=>0,'msg'=>'排序更新成功！'];
    	}
    }

    //修改网站配置内容
    public function changecontent(){
        $input = Input::except('_token');
        $conf_ids = $input['conf_id'];
        $conf_contents = $input['conf_content'];
        $data = [];
        for($i=0;$i<count($conf_ids);$i++){
            $row = ['conf_id'=>$conf_ids[$i],'conf_content'=>$conf_contents[$i]];
            $data[] = $row;
        }
        // dd($data);
        foreach ($data as $v) {
            Confs::where('conf_id',$v['conf_id'])->update($v);
        }
        $this->putFile();
        return redirect('/admin/confs');
    }

    //把配置项写入配置文件
    public function putFile(){
        $config = Confs::pluck('conf_content','conf_name')->all();
        $path = base_path().'\config\web.php';
        $str = '<?php return '.var_export($config, true) . ';';
        file_put_contents($path, $str);
    }

    //get admin/confs/create 添加网站配置展示页
    public function create(){
    	return view('admin/confs/add');
    }

    //post admin/category 添加网站配置提交页
    public function store(){
    	$input = Input::except('_token');
    	$rules = [
            'conf_title'=>'required',
            'conf_name'=>'required',
        ];

        $message = [
            'conf_title.required'=>'网站配置标题不能为空！',
            'conf_name.required'=>'网站配置名称不能为空！',
        ];

        $validator = Validator::make($input,$rules,$message);

        if($validator->passes()){
            $res = Confs::create($input);
            if($res){
                return redirect('admin/confs');
            }else{
                return back()->with('errors','数据填充失败，请稍后重试！');
            }
        }else{
            return back()->withErrors($validator);
        }
    }

    //get admin/lins/{id}/edit
    public function edit($conf_id){
        $field = Confs::find($conf_id);
        return view('admin/confs/edit', ['field'=>$field]);
    }

    //put admin/confs/{id}
    public function update($conf_id){
        $input = Input::except('_token', '_method');
        if(!Confs::where('conf_id', $conf_id)->update($input)){
            return back()->with('errors','网站配置修改失败，请稍候重试！');
        } else {
            $this->putFile();
            return redirect('admin/confs');
        }
    }

    //delete admin/confs/{id}
    public function destroy($conf_id){
        $res = Confs::where('conf_id',$conf_id)->delete();
        if($res){
            $this->putFile();
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
