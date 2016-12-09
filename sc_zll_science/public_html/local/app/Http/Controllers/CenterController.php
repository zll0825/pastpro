<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\User;
use App\Order;
use Input;
use DB;
use FORM;
use Validator;
use finfo;
use Crypt;

class CenterController extends Controller
{   
    public function index(Request $req){
        $uid = $req->user()->uid;
        $data = User::find($uid);
        return view('ucenter/centerindex', ['data'=>$data]);
    }

    public function getinfo(Request $req){
        $uid = $req->user()->uid;
        $data = User::find($uid);
        return view('ucenter/centerinfo', ['data'=>$data]);
    }

    public function getedit($uid){
        $data = User::find($uid);
        // dd($data);
        return view('ucenter/centeredit', ['data'=>$data]);
    }

    public function postedit($uid){
        $input = Input::except('_token');
        // dd($input);
        User::where('uid', $uid)->update($input);

        return redirect('/ucenter');
    }

    public function getorder(Request $req){
        $uid = $req->user()->uid;
        $role = $req->user()->role;
        $data = User::find($uid);
        if($role == 1){
            $data2 = Order::where('tid',$uid)->join('users','tid','=','uid')->get();
        } elseif($role == 2) {
            $data2 = Order::where('sid',$uid)->join('users','sid','=','uid')->get();
        }
        
        // dd($data2);
        return view('ucenter/centerlist', ['data'=>$data,'data2'=>$data2]);
    }

    public function getcode(Request $req){
        $uid = $req->user()->uid;
        $data = User::find($uid);
        return view('ucenter/centercode', ['data'=>$data]);
    }

    public function postcode($id){
        $user = User::find($id);
        // dd(Crypt::decrypt('eyJpdiI6IjNhOUltbVhwVG1RYllQbWFtS0MrWVE9PSIsInZhbHVlIjoibWNHYUQrSjdpRm9yaTJnS1gwMmV6UT09IiwibWFjIjoiOWFlMTI0NTdhYTQ4ZTY2ZDEzNTllNmMyMmVlNWJmYjE3MTZhODMwZmY3NDJiYTE1OWVlN2FjZGUxNWJjNmZjYyJ9'));
        $input = Input::except('_token');
        // if($input['password_o'] != Crypt::decrypt($user->password)){
        //         return '密码错误';
        // }

        $rules = [
            'password'=>'required|between:6,20'
        ];

        $message = [
            'password.required'=>'新密码不能为空！',
            'password.between'=>'新密码必须在6-20位之间！'
        ];

        $validator = Validator::make($input, $rules, $message);
        if($validator->passes()){
            $user->password = bcrypt($input['password']);
            $user->update();
            return '1';
        } else {
            return $validator->errors();
        }
    }

    public function getimage(Request $req){
        $uid = $req->user()->uid;
        $data = User::find($uid);
        return view('ucenter/centerimage', ['data'=>$data]);
    }

    public function postimage(Request $req){
       if($_FILES['images']['error'] != 0){
            return back();
        }
        // dd($request);
        $storage = new \Upload\Storage\FileSystem(base_path().'/public/upload/images/');
        $file = new \Upload\File('images', $storage);

        // Optionally you can rename the file on upload
        $new_filename = date('Ymd',time()).mt_rand(1000,9999);
        $file->setName($new_filename);

        // Validate file upload
        // MimeType List => http://www.iana.org/assignments/media-types/media-types.xhtml
        $file->addValidations(array(
            // Ensure file is of type "image/png"
            // new \Upload\Validation\Mimetype(array('image/png', 'image/jepg', 'image/gif')),

            //You can also add multi mimetype validation
            //new \Upload\Validation\Mimetype(array('image/png', 'image/gif'))

            // Ensure file is no larger than 5M (use "B", "K", M", or "G")
            new \Upload\Validation\Size('1M')
        ));

        // Access data about the file that has been uploaded
        $data = array(
            'name'       => $file->getNameWithExtension(),
            'extension'  => $file->getExtension(),
            'mime'       => $file->getMimetype(),
            'size'       => $file->getSize(),
            'md5'        => $file->getMd5(),
            'dimensions' => $file->getDimensions()
        );

        // Try to upload file
        try {
            // Success!
            $file->upload();
        } catch (\Exception $e) {
            // Fail!
            $errors = $file->getErrors();
        }

        if(!isset($errors)){
            $path = '/upload/images/'.$new_filename.'.'.$file->getExtension();
            // echo $path;
            $uid = $req->user()->uid;
            $user = User::find($uid);
            $user->photo = $path;
            $user->save();
            return redirect('/ucenter');
        } else {
            return back();
        }
    }


    public function checkname(){
        $name = Input::all()['name'];
        $res = User::where('name', $name)->first();
        if($res){
            $data = [
                'status' => 0,
                'msg'=>'用户名已存在！' 
            ];
        } else {
            $data = [
                'status' => 1,
            ];
        }
        return $data;
    }

    public function checkemail(){
        $email = Input::all()['email'];
        $res = User::where('email', $email)->first();
        if($res){
            $data = [
                'status' => 0,
                'msg'=>'邮箱已注册！' 
            ];
        } else {
            $data = [
                'status' => 1,
            ];
        }
        return $data;
    }
}
