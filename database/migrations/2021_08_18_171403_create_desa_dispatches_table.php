<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDesaDispatchesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('desa_dispatches', function (Blueprint $table) {
            $table->id();
            $table->string("custom_trip_number")->nullable();
            $table->string("driver_username")->nullable();
            $table->integer("dispatcher_id")->nullable();
            $table->string("truck_number")->nullable();
            $table->string("trailer")->nullable();
            $table->string("odometer")->nullable();
            $table->string("customer_name")->nullable();
            $table->string("primary_fee")->nullable();
            $table->string("primary_fee_type")->nullable();
            $table->string("additional")->nullable();
            $table->string("detention")->nullable();
            $table->string("lumper")->nullable();
            $table->string("stop_off")->nullable();
            $table->string("tarp_fee")->nullable();
            $table->string("fsc_amount")->nullable();
            $table->string("fsc_amount_type")->nullable();
            $table->string("invoice_advance")->nullable();
            $table->string("truck_expense")->nullable();
            $table->string("fuel_expense")->nullable();
            $table->string("refer_fuel_expense")->nullable();
            $table->string("status")->default(0);
            $table->boolean("booked")->default(0);
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
        Schema::dropIfExists('desa_dispatches');
    }
}
