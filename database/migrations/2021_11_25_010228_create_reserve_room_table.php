<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateReserveRoomTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('reserve_room', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('reserve_id');
            $table->string('room_id');
            $table->string('room_numbers');
            $table->string('check_in');
            $table->string('check_out');
            $table->string('price');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('reserve_room');
    }
}
