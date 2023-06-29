<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTourTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tbl_tour', function (Blueprint $table) {
            $table->id('tour_id');
            $table->integer('destination_id');
            $table->integer('typetour_id');
            $table->string('tour_name_VI');
            $table->string('tour_name_EN');
            $table->string('tour_price');
            $table->string('tour_desc_VI');
            $table->string('tour_desc_EN');
            $table->string('tour_overview_VI');
            $table->string('tour_overview_EN');
            $table->string('tour_thumb');
            $table->string('tour_banner');
            $table->string('tour_img1');
            $table->string('tour_img2');
            $table->string('tour_img3');
            $table->string('tour_img4');
            $table->string('tour_img5');
            $table->string('tour_img6');
            $table->integer('tour_day');
            $table->integer('tour_night');
            $table->string('tour_sche');
            $table->string('tour_arrival');
            $table->string('tour_departure');
            $table->text('tour_service_in');
            $table->text('tour_service_ex');
            $table->integer('tour_status');
            $table->text('tour_map');
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
        Schema::dropIfExists('tbl_tour');
    }
}
