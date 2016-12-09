<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTableCategory extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('category', function (Blueprint $table) {
            $table->increments('cate_id');
            $table->string('cate_name', 50);
            $table->string('cate_title', 255);
            $table->string('cate_keywords', 255);
            $table->string('cate_description', 255);
            $table->integer('cate_view');
            $table->tinyinteger('cate_order');
            $table->tinyinteger('cate_pid');
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
        Schema::drop('category');
    }
}
