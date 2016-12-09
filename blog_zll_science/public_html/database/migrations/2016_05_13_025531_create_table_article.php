<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTableArticle extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('article', function (Blueprint $table) {
            $table->increments('art_id');//主键
            $table->string('art_title',100);//标题
            $table->integer('art_cateid');//文章分类
            $table->tinyinteger('atr_type');
            $table->string('art_tag',100);//标签
            $table->string('art_description',255);//描述
            $table->string('art_thumb',255);//缩略图
            $table->text('art_content');//文章内容
            $table->integer('art_pubtime');//发布时间
            $table->string('art_editor');//作者
            $table->integer('art_view');//查看次数

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('article');
    }
}
