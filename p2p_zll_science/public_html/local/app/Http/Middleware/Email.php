<?php

namespace App\Http\Middleware;

use Closure;
use Nette\Mail\Message;
use Nette\Mail\SmtpMailer;


class Email
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next)
    {
        if($request->imgcode != $request->session()->get('phrase')){
            return back()->withInput();
        }

        $res =  $next($request);
        $mail = new Message;
        $mail->setFrom('Dexter <zll920825@163.com>')
        ->addTo($request->user()->email)
        ->setSubject('恭喜您注册成功，请激活您的会员身份')
        ->setBody("请点击以下链接，如果不能点击，请复制到浏览器地址栏打开");

        $mailer = new SmtpMailer(array(
            'host' => 'smtp.163.com',
            'username' => 'zll920825@163.com',
            'password' => 'zll920825'
        ));
        $mailer->send($mail);
return $res;
    }
}


 // $rs = $next($request);
 //        //  注册后发邮件
 //        //$request->user()->email;
 //        if($request->user()) {
 //        $mail = new Message;
 //        # 注意 , 下行的 setFrom 要和你的邮箱名保持一致
 //        $mail->setFrom('laowang <zll920825@163.com>')
 //        ->addTo($request->user()->email)
 //        ->setSubject(' 试试我的中间件 ')
 //        ->setBody(" 真好用 !");
 //        $mailer = new SmtpMailer(array(
 //        'host' => 'smtp.163.com',
 //        'username' => 'zll920825@163.com',# 你的 163 用户名
 //        'password' => 'zll920825'#  你的邮箱密码
 //        ));
 //        $mailer->send($mail);