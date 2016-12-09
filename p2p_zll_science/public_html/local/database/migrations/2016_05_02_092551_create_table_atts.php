<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTableAtts extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('atts', function (Blueprint $table) {
            $table->increments('aid');
            $table->integer('uid');
            $table->integer('pid');
            $table->string('title');
            $table->string('realname');
            $table->string('jobcity');
            $table->string('udesc');
            $table->enum('gender', ['男','女']);
            $table->tinyinteger('salary');
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
        Schema::drop('atts');
    }
}
