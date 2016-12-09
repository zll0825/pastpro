<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use DB;

class grow extends Command
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
    protected $description = 'zhangli';

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
        //
        $today =date('Y-m-d');
        $tasks =  DB::table('tasks')->where('enddate','>=',$today)->get();//找出符合条件的预期收益
        
        foreach ($tasks as $t) {
            $t->paytime=$today;
            $t=(array)$t;
            unset($t['tid']);
            unset($t['enddate']);
            DB::table('grows')->insert($t);         
        }

        $this->info(date('Y/m/d').'grow done');
    }
}

/*
涨利任务windows自动完成:
1)打开:控制面板\所有控制面板项\管理工具
2)查找:任务计划程序 ---寻找左侧 操作--创建基本任务
3)名称(A):zhangli 描述:涨利 下一步 下一步 下一步 设置开始时间 发生间隔 --启动程序
程序或脚本:php
添加参数(可选)(A):D:\xampp\htdocs\p2p\artisan

*/
?>