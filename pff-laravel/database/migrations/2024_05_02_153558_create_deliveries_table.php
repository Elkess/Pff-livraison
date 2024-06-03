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
            $table->enum('status', ['Ready', 'in_transit', 'Other']);
            $table->string('pickuplocation');
            $table->dateTime('pickuptime')->nullable();
            $table->string('dropofflocation');
            $table->string('weight')->nullable();
            $table->dateTime('dropofftime')->nullable();
            $table->unsignedBigInteger('client_id');
            $table->unsignedBigInteger('driver_id');
            $table->unsignedBigInteger('vehicle_id');
            $table->foreign('client_id')->references('user_id')->on('users');
            $table->foreign('driver_id')->references('user_id')->on('users')->nullable();;
            $table->foreign('vehicle_id')->references('vehicle_id')->on('vehicles')->nullable();;
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