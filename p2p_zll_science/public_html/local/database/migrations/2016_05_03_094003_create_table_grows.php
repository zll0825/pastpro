<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTableGrows extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('grows', function (Blueprint $table) {
            $table->increments('gid');
            $table->integer('uid');
            $table->integer('pid');
            $table->string('title');
            $table->integer('amount');
            $table->date('paytime');
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
        Schema::drop('grows');
    }
}
