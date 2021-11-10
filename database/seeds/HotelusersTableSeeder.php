<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class HotelusersTableSeeder extends Seeder
{
    public function run()
    {
        $param = [
            'name' => 'taro',
            'address' => 'taro@yamada.jp',
            'tel' => '0120123456',
        ];
        DB::table('hotelusers')->insert($param);

        $param = [
            'name' => 'hanako',
            'address' => 'hanako@flower.jp',
            'tel' => '0120654321',
        ];
        DB::table('hotelusers')->insert($param);

        $param = [
            'name' => 'sachiko',
            'address' => 'sachiko@happy.jp',
            'tel' => '0120987654',
        ];
        DB::table('hotelusers')->insert($param);

        //koaaaaa
    }
}
