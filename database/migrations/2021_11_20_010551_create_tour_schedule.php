<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTourSchedule extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tbl_tour_schedule', function (Blueprint $table) {
            $table->id('tour_schedule_id');
            $table->integer('tour_id');
            $table->integer('tour_schedule_number');
            $table->text('tour_schedule_content');
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
        Schema::dropIfExists('tbl_tour_schedule');
    }
}
