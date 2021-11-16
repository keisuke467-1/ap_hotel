<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;


class RoomsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('rooms')->insert([

            [
                'roomgroups_id' => '1',
                'room_numbers' => '101',
            ],
            
            [
                'roomgroups_id' => '1',
                'room_numbers' => '102',
            ],

            [
                'roomgroups_id' => '2',
                'room_numbers' => '201',
            ],

            [
                'roomgroups_id' => '2',
                'room_numbers' => '202',
            ],

            [
                'roomgroups_id' => '3',
                'room_numbers' => '301',
            ],

            [
                'roomgroups_id' => '3',
                'room_numbers' => '302',
            ],

            [
                'roomgroups_id' => '3',
                'room_numbers' => '303',
            ],

        ]);
    }
}
