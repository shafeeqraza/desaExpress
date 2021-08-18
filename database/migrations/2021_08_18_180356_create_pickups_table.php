<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePickupsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pickups', function (Blueprint $table) {
            $table->id();
            $table->integer("pickable_id")->nullable();
            $table->string("pickable_type")->nullable();
            $table->string("shipper")->nullable();
            $table->string("pickup_date")->nullable();
            $table->string("bol")->nullable();
            $table->string("instructions")->nullable();
            $table->string("customer_required_info")->nullable();
            $table->string("weight")->nullable();
            $table->string("quantity")->nullable();
            $table->string("type")->nullable();
            $table->string("notes")->nullable();
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
        Schema::dropIfExists('pickups');
    }
}
