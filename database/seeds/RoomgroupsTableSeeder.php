<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class RoomgroupsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $param = [
            'name' => 'taro',
            'address' => 'taro@yamada.jp',
            'tel' => '0120123456',
        ];
        DB::table('hotelusers')->insert($param);

    }
}
