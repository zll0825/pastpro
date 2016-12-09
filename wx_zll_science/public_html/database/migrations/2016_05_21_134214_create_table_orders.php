<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTableOrders extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('orders', function (Blueprint $table) {
            $table->increments('oid');
            $table->string('ordsn',15);
            $table->integer('uid');
            $table->string('openid',32);
            $table->string('name');
            $table->string('address');
            $table->string('mobile',11);
            $table->float('money',7,2);
            $table->tinyinteger('ispay')->default(0);
            $table->integer('ordtime');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('orders');
    }
}
