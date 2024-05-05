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
            $table->string('pickUpLocation');
            $table->dateTime('pickUpTime');
            $table->string('dropOffLocation');
            $table->dateTime('dropOffTime');
            $table->enum('status',['Pending','In Transit','Delivered','Out for Delivery','Attempted Delivery','Returned to Sender','Delayed','On Hold','Failed','Canceled']);
            $table->unsignedBigInteger('client_id')->nullable();
            $table->unsignedBigInteger('driver_id')->nullable();
            $table->foreign('client_id')->references('id')->on('users')->nullable();
            $table->foreign('driver_id')->references('id')->on('users')->nullable();
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
        Schema::dropIfExists('deliveries');
    }
};