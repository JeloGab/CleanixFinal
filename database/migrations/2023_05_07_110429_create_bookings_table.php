<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBookingsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('bookings', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger("customer_id");
            $table->string("first_name");
            $table->string("last_name");
            $table->string("phone_number");
            $table->string("email");
            $table->string('address');
            $table->date("booking_date");
            $table->time("booking_time");
            $table->string("service");
            $table->string("comment")->nullable();
            $table->timestamps();
            $table->foreign('customer_id')->references('id')->on('users')->onUpdate('cascade')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('bookings');
    }
}
