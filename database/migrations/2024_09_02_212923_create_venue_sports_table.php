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
        Schema::create('venue_sports', function (Blueprint $table) {
            $table->id('venue_sport_id');
            $table->foreignId('venue_id')->constrained('venues')->references('venue_id');
            $table->foreignId('sport_id')->constrained('sports')->references('sport_id');
            $table->decimal('price_per_hour', 8, 2);
            $table->enum('availability', ['daily', 'weekends']);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('venue_sports');
    }
};
