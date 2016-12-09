<?php

use Illuminate\Database\Seeder;

class LinksTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $data = [
        	[
        		'link_name'=>'百度',
        		'link_title'=>'众里寻他千百度，蓦然回首，那人却在，灯火阑珊处',
        		'link_url'=>'www.baidu.com',
        		'link_order'=>'',
        	],

        	[
        		'link_name'=>'腾讯',
        		'link_title'=>'小企鹅',
        		'link_url'=>'www.qq.com',
        		'link_order'=>'',
        	],

        	[
        		'link_name'=>'淘宝',
        		'link_title'=>'你想要的，我这里都有',
        		'link_url'=>'www.taobao.com',
        		'link_order'=>'',
        	]
        ];

        DB::table('links')->insert($data);
    }
}
