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
            'name' => '和室（松）',
            'max_capacity' => '6',
            'price' => '10000'
        ];
        DB::table('roomgroups')->insert($param);
        
        $param = [
            'name' => '和室（竹）',
            'max_capacity' => '5',
            'price' => '7000'
        ];
        DB::table('roomgroups')->insert($param);

        $param = [
            'name' => '和室（梅）',
            'max_capacity' => '4',
            'price' => '5000'
        ];
        DB::table('roomgroups')->insert($param);
    }
}
