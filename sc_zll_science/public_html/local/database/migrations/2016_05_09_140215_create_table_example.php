<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTableExample extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('example', function (Blueprint $table) {
            $table->increments('eid');
            $table->tinyInteger('tid')->unsigned();
            $table->tinyInteger('sid')->unsigned();
            $table->string('subject',60);  //学生需要的学科
            $table->string('comment');
            $table->integer('pubtime')->unsigned();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('example');
    }
}
