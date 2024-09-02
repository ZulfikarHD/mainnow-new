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
        Schema::create('payments', function (Blueprint $table) {
            $table->id('payment_id');
            $table->foreignId('booking_id')->constrained('bookings')->references('booking_id');
            $table->foreignId('user_id')->constrained('users')->references('user_id');
            $table->foreignId('owner_id')->constrained('venue_owners')->references('owner_id');
            $table->decimal('amount', 8, 2);
            $table->date('payment_date');
            $table->string('payment_method');
            $table->enum('status', ['completed', 'pending']);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('payments');
    }
};
