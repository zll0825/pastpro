<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use Overtrue\Wechat\Server;
use Overtrue\Wechat\Message;
use Overtrue\Wechat\User as Wuser;
use Overtrue\Wechat\QRCode;
use Overtrue\Wechat\Media;
use App\User;
use DB;

class WxController extends Controller
{
    public function index(){

        $appId = env('WX_ID');
        $token = env('WX_TK'); 

        // $encodingAESKey 可以为空
        $server = new Server($appId, $token);

        // 监听所有类型
        // $server->on('message', function($message) {
        //     return Message::make('text')->content('您好！');
        // });

        //获取位置信息，返回景点详情
        $server->on('message','location', [$this,'weizhi']);
        // $server->on('message','location', function($message){
        //     return Message::make('text')->content($message->Location_X.$message->Location_Y);
        // });



        //只监听指定类型事件 关注事件
        // $server->on('event', 'subscribe', function($event){
        //     return Message::make('text')->content($event['FromUserName'].'感谢您的关注');
        // });


 //成为代理
        $server->on('message', 'text',function($message) {
if($message->content == "代理"){

        $media = new Media(env('WX_ID'), env('WX_SEC'));
$wxuser =Request::session()->get('user');
            $openid = $wuser['openid'];
            $user = User::where('openid' , $openid)->first();
$path=$user->qr;
        $image = $media->image( public_path().$path ); // 上传并返回媒体ID

        return Message::make('image')->media($image['media_id']);

}
            return Message::make('text')->content('您好！');
        });


        $server->on('event', 'subscribe', [$this, 'guanzhu']);
        $server->on('event', 'unsubscribe', function($event){
            $user = User::where('openid',$event->FromUserName)->first();
            if($user){
                $user->state = 0;
                $user->save();
            }
        });

        $result = $server->serve();

        echo $result;
    }

   public function guanzhu($event){

        $openid = $event->FromUserName; 
        $wxuser = (new Wuser( env('WX_ID'), env('WX_SEC')))->get($openid);

        $user = User::where('openid', $openid)->first();
        if($user && $user->state==1){
            return;
        } elseif($user && $user->state==0){
            $user->state = 1;
            $user->pubtime = time();
        } elseif(!$user) {
            $user = new User();
            $user->openid = $openid;
            $user->nick = $wxuser->nickname;
            $user->pubtime = time();
            if($event->EventKey){
                $puid = substr($event->EventKey, 8);
                $puser = User::find($puid);
                $user->p1 = $puid;
                $user->p2 = $puser->p1;
                $user->p3 = $puser->p2;
            } 
        }

        $user->save();
        if($user->qr == ''){
            $path = $this->qr($user->uid);
        }
        
        // $url = $this->qr($user->uid);

        //$media = new Media(env('WX_ID'), env('WX_SEC'));
        //$image = $media->image( public_path().$path ); // 上传并返回媒体ID

        // return Message::make('image')->media($image['media_id']);
        return Message::make('text')->content($wxuser->nickname .'感谢您的关注');
        // return Message::make('text')->content('请点击下面的url下载你的推广二维码'.$url);
   }

    protected function qr($uid){
        $qrcode = new QRCode(env('WX_ID'), env('WX_SEC'));
        $result = $qrcode->forever($uid); // 或者 $qrcode->forever("foo");

        $ticket = $result->ticket;  // 或者 $result['ticket']
        $url = $result->url;

        $path = $this->mkd() . "/qr_$uid.jpg";
        $qrcode->download($ticket, public_path(). $path);

        // User::find($uid)->update(['qr'=>$path]);
        User::where('uid',$uid)->update(['qr'=>$path]);
        // DB::table('users')->where('uid',$uid)->update(['qr'=>$path]);
        // // dd(User::find($uid));
        // $user = User::where('uid',$uid);
        // dd($user);
        // $user->update(['qr'=>$path]);
        // $user->qr = $path;
        // $user->save();
        return $path;
        // $str = $qrcode->show($ticket);
        // return $str;
   }

   protected function mkd(){
        $path = public_path();
        $today = date('/Y/m');
        $path .= $today;

        is_dir($path)? true : mkdir($path, 0777, true);
        return $today;
   }

   public function weizhi($message){
        $wd = $message->Location_X;
        $jd = $message->Location_Y;
        $ak = 'DYgU7N4VMuvM0uxHBCFsnB972a56rHfZ';

        $url = "http://api.map.baidu.com/telematics/v3/local?location=$jd,$wd&keyWord=酒店&output=json&ak=$ak";
        $res = json_decode(file_get_contents($url), true);
        // print_r($res);
        if($res['status'] != 'Success'){
            return Message::make('text')->content('您附近没有找到酒店，抱歉');
        }
        $hotels = $res['pointList'];
        // print_r($hotels);
        $str = '';
        for($i=0;$i<5&&$i<count($hotels);$i++){
            $str.= ($i+1).'.'.$hotels[$i]['name'].' 地址：'.$hotels[$i]['address']."\n";
        }
        return Message::make('text')->content($str);
   }
}

        
        
        