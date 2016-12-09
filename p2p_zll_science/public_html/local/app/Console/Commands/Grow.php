<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use DB;

class Grow extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'grow';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'income';

    /**
     * Create a new command instance.
     *
     * @return void
     */
    public function __construct()
    {
        parent::__construct();
    }

    /**
     * Execute the console command.
     *
     * @return mixed
     */
    public function handle()
    {
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

        echo date('Y-m-d').'grow done';
    }
}
