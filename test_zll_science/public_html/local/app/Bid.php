<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Bid extends Model
{
    //
    //public $table='bids';
    public $timestamps = false;
    protected $primiryKey='bid';
}
