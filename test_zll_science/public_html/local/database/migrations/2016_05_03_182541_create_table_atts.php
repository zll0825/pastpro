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
            $table->integer('uid')->unsigned();
            $table->integer('pid')->unsigned();
            $table->string('realname',20);
            $table->tinyinteger('age');
            $table->enum('gender',['男','女']);
            $table->tinyinteger('salary');
            $table->string('jobcity');
            $table->string('udesc');
            
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
