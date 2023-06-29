<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTypetourTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tbl_TypeTour', function (Blueprint $table) {
            $table->id('typetour_id');
            $table->string('typetour_thumb');
            $table->string('typetour_banner');
            $table->string('typetour_name_VI');
            $table->string('typetour_name_EN');
            $table->text('typetour_desc_VI');
            $table->text('typetour_desc_EN');
            $table->integer('typetour_status');
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
        Schema::dropIfExists('TypeTour');
    }
}
