<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use DB;

class GrowController extends Controller
{
    public function run(){
        $tasks = DB::table('tasks')->where('enddate','>=', date('Y-m-d'))->get();
        foreach($tasks as $t){
            $data = [
                'uid'=>$t->uid,
                'pid'=>$t->pid,
                'title'=>$t->title,
                'amount'=>($t->amount/100),
                'paytime'=>date('Y-m-d')
            ];

            DB::table('grows')->insert($data);
        }
    }
}
