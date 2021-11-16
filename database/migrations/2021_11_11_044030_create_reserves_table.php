<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateReservesTable extends Migration
{
    public function up()
    {
        Schema::create('reserves', function (Blueprint $table) {
            $table->increments('id');
            $table->string('hoteluser_id');
            $table->string('Number_of_people');
            $table->string('check_in');
            $table->string('check_out');
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('reserves');
    }
}
