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
            $table->unsignedBigInteger('vehicle_id')->nullable();
            $table->foreign('vehicle_id')->references('vehicle_id')->on('vehicles');
            $table->timestamps();
        });
    }
    public function down()
    {
        Schema::dropIfExists('reports');
    }
};
