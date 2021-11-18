<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class HotelusersTableSeeder extends Seeder
{
    public function run()
    {
        factory(App\Hoteluser::class,20)->create();
    }
}
