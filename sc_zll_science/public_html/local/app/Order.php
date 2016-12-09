<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
	//增加订单表的控制
    protected $primaryKey='oid';
    protected $table='order';
    public $timestamps=false;
}
