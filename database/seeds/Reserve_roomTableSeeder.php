<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;


class Reserve_roomTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('reserve_room')->insert([

            [
                'reserve_id' => '1',
                'room_id' => '1',
                'room_numbers' => '101',
                'check_in' => '2021-11-11',
                'check_out' => '2021-11-21',
                'price' => '1000',
            ],

            [
                'reserve_id' => '2',
                'room_id' => '1',
                'room_numbers' => '101',
                'check_in' => '2021-11-22',
                'check_out' => '2021-11-24',
                'price' => '1000',
            ],

        ]);
    }
}
