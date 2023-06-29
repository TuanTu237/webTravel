<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDestinationTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tbl_Destination', function (Blueprint $table) {
            $table->id('destination_id');
            $table->string('destination_thumb');
            $table->string('destination_banner');
            $table->string('destination_name_VI');
            $table->string('destination_name_EN');
            $table->text('destination_desc_VI');
            $table->text('destination_desc_EN');
            $table->integer('destination_status');
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
        Schema::dropIfExists('Destination');
    }
}
