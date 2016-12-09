<?php

namespace App\Http\Middleware;

use Closure;
use Nette\Mail\EmailMiddlewar;
use Nette\Mail\SmtpMailer;
use Nette\Mail\Message;
class EmailMiddleware
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
        $rs = $next($request);//先执行注册
        if ($request->user()) { //如果登录
           $mail = new Message;

           #生成邮件主体
           $mail->setFrom('laowang <gejianming1986@163.com>')
            ->addTo($request->user()->email)
            ->setSubject('试试我的中间件')
            ->setBody("真好用!");

            #完成发送
            $mailer = new SmtpMailer(array(
            'host' => 'smtp.163.com',
            'username' =>'gejianming1986@163.com',#你的163用户名
            'password' => '860114jian'# 你的邮箱密码
            ));
            
            $mailer->send($mail);
        }
            return $rs;
    }
}
