<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateReservationsTable extends Migration
{
    public function up()
    {
        Schema::create('reservations', function (Blueprint $table) {
            $table->increments('id');
            $table->string('hoteluser_id');
            $table->string('Number of people');
            $table->string('check in date');
            $table->string('checkout date');
        });
    }

    public function down()
    {
        Schema::dropIfExists('reservations');
    }
}
