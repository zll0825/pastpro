<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTableOrder extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('order', function (Blueprint $table) {
            $table->increments('oid');
            $table->integer('onum')->unsigned();//订单号
            $table->tinyInteger('tid')->unsigned();
            $table->tinyInteger('sid')->unsigned();
            $table->string('customername',255);//被服务的学生名字,可能不是注册人名字 customer:顾客  name:名字
            $table->string('customermobile',255);//被服务的学生电话,可能不是注册人电话
            $table->tinyInteger('style')->unsigned();//1小学 2初中 3高中
            $table->string('subject', 60);  //学生预定的学科
            $table->string('requirement',255);//学生要求
            $table->string('address', 255);
            $table->integer('pubtime')->unsigned();
            $table->tinyInteger('payment');  //老师的付款
            $table->tinyInteger('status')->unsigned(); //0是未预定 1已预定 2授课中 3,已结束
            //5月10号添加 from 郭
            $table->tinyInteger('checkstate')->unsigned(); //0未审核 1是已审核  2是不通过
            


        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('order');
    }
}
