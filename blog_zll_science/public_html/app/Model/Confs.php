<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Confs extends Model
{
    protected $table = 'confs';
    protected $primaryKey = 'conf_id';
    public $timestamps = false;
    protected $guarded = [];
}
