<?php
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateOrdersTable extends Migration
{
    public function up()
    {
        Schema::create('orders', function (Blueprint $table) {
            $table->id();
            $table->string('order_number')->unique();
            $table->string('pickUpLocation'); // Add this line to create the pickup_location column
            $table->dateTime('pickUpTime');
            $table->string('dropOffLocation');
            $table->dateTime('dropOffTime');
            $table->enum('status', ['Pending', 'Paid', 'Canceled'])->default('Pending');
            $table->unsignedBigInteger('client_id');
            $table->foreign('client_id')->references('user_id')->on('users');
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('orders');
    }
}