<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('deliveries', function (Blueprint $table) {
            $table->id('delivery_id');
            $table->string('status');
            $table->string('pickuplocation');
            $table->dateTime('pickuptime')->nullable();
            $table->string('dropofflocation');
            $table->string('weight');
            $table->dateTime('dropofftime')->nullable();
            $table->unsignedBigInteger('vehicle_id')->nullable();
            $table->foreign('vehicle_id')->references('vehicle_id')->on('vehicles');
            $table->unsignedBigInteger('client_id');
            $table->unsignedBigInteger('driver_id');
            $table->foreign('client_id')->references('user_id')->on('users');
            $table->foreign('driver_id')->references('user_id')->on('users');
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
        Schema::dropIfExists('delivery');
    }
};
