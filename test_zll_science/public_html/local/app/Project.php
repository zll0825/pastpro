<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class project extends Model
{
    //
    
    public $timestamps =false;
    protected $primaryKey='pid';
    protected $fillable = ['age', 'money', 'mobile'];
}
