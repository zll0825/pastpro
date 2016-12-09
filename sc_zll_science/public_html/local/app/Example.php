<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Example extends Model
{
    protected $table="example";
    protected $primaryKey="eid";
    public $timestamps=false;
}
