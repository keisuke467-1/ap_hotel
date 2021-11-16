<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    public function run()
    {
        $this->call(HotelusersTableSeeder::class);
        $this->call(RoomgroupsTableSeeder::class);
        $this->call(RoomsTableSeeder::class);
        $this->call(ReservesTableSeeder::class);
    }
}
