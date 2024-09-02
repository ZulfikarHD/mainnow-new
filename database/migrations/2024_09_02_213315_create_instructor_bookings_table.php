<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('instructor_bookings', function (Blueprint $table) {
            $table->id('instructor_booking_id');
            $table->foreignId('booking_id')->constrained('bookings')->references('booking_id');
            $table->foreignId('instructor_id')->constrained('instructors')->references('isntructor_id');
            $table->foreignId('user_id')->constrained('users')->references('user_id');
            $table->time('start_time');
            $table->time('end_time');
            $table->decimal('total_fee', 8, 2);
            $table->enum('status', ['confirmed', 'canceled']);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('instructor_bookings');
    }
};
