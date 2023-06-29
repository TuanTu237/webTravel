<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBookingTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tbl_booking', function (Blueprint $table) {
            $table->id('booking_id');
            $table->integer('tour_id');
            $table->integer('booking_status');
            $table->string('booking_code');
            $table->string('booking_customer_name');
            $table->string('booking_customer_email');
            $table->string('booking_customer_phone_domain');
            $table->string('booking_customer_phone_number');
            $table->string('booking_customer_address');
            $table->string('booking_customer_nationality');
            $table->date('booking_date');
            $table->integer('booking_customer_adult');
            $table->integer('booking_customer_child');
            $table->integer('booking_customer_ifant');
            $table->text('booking_customer_message');
            $table->integer('customer_id')->nullable(true);
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
        Schema::dropIfExists('tbl_booking');
    }
}
