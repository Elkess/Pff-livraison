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
        Schema::create('reports', function (Blueprint $table) {
            $table->id('report_id');
            $table->string('description');
            $table->string('location');
            $table->string('subject');
            $table->string('report_status')->nullable();
            $table->unsignedBigInteger('vehicle_id')->nullable();
            $table->unsignedBigInteger('delivery_id')->nullable();
            $table->foreign('vehicle_id')->references('vehicle_id')->on('vehicles');
            $table->foreign('delivery_id')->references('delivery_id')->on('deliveries');
            $table->timestamps();
        });
    }
    public function down()
    {
        Schema::dropIfExists('reports');
    }
};
