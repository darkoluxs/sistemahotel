<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTableHabitaciones extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
         Schema::create('habitaciones', function (Blueprint $table) {
            $table->increments('hab_id');
            $table->string('hab_tip');
            $table->string('hab_num');
            $table->string('hab_cp');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('habitaciones');
    }
}
