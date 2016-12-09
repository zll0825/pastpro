<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->increments('uid');
            $table->string('name');
            $table->string('password', 60);
            $table->string('email')->unique();
            $table->integer('mobile')->unsign;
            $table->string('realname');
            $table->enum('gender',['男','女']);
            $table->tinyInteger('age')->unsigned();
            $table->tinyInteger('edu')->unsigned();//0大专 1本科 2研究生 4博士
            $table->tinyInteger('role');//1老师  2学生
            $table->string('goodat',60);  //老师的擅长学科
            $table->string('intro'); //老师的介绍
            $table->string('idnum',18);   //老师身份证号
            $table->tinyInteger('checkinfo')->unsigned();   //后台审核 0未审核  1 已审核 2 审核拒绝
            $table->tinyInteger('checkemail');//邮箱激活 0是已注册  1是邮箱也激活
            $table->string('address',255 ); //学生上课地址

            $table->integer('regtime')->unsigned();  //注册时间
            $table->integer('lastlogin')->unsigned(); //上次登录时间
            $table->rememberToken();
            //5月10 by 朱
            $table->string('verifycode'); //老师激活邮箱使用

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('users');
    }
}
