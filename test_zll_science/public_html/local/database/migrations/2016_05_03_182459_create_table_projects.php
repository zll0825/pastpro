<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTableProjects extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('projects', function (Blueprint $table) {
            $table->increments('pid');
            $table->integer('uid')->unsigned();
            $table->integer('money')->unsigned();
            $table->tinyinteger('rate')->unsigned();
            $table->string('title',20);
            $table->tinyinteger('hrange');
            $table->tinyinteger('status');
            $table->integer('receive');
            $table->integer('pubtime');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('projects');
    }
}
