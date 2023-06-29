<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateContractTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tbl_contract', function (Blueprint $table) {
            $table->id('contract_id');
            $table->integer('booking_id');
            $table->integer('customer_id');
            $table->integer('staff_id');
            $table->date('contract_date')->nullable(true);
            $table->integer('contract_status');
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
        Schema::dropIfExists('tbl_contract');
    }
}
