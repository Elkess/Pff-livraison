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
        Schema::create('payments', function (Blueprint $table) {
            $table->id('payment_id');
            $table->dateTime('PaymentDate');
            $table->float('amount');
            $table->string('card_number');
            $table->string('expiry_date');
            $table->string('cvv');
            $table->enum('status', ['Pending','Failed','Refunded','Authorized','Voided','Processing','Chargeback','On hold']);
            $table->unsignedBigInteger('client_id');
            $table->foreign('client_id')->references('user_id')->on('users');
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
        Schema::dropIfExists('payments');
    }
};