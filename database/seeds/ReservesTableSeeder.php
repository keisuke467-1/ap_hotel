<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;


class ReservesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('reserves')->insert([

            [
                'hoteluser_id' => '1',
                'number_of_people' => '4',
                'check_in' => '2021-11-11',
                'check_out' => '2021-11-21',
            ],

            [
                'hoteluser_id' => '1',
                'number_of_people' => '5',
                'check_in' => '2021-11-22',
                'check_out' => '2021-11-24',
            ]

        ]);
    }
}
