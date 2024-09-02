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
        Schema::create('instructor_venues', function (Blueprint $table) {
            $table->id('instructor_venue_id');
            $table->foreignId('instructor_id')->constrained('instructors')->references('instructor_id');
            $table->foreignId('venue_id')->constrained('venues')->references('venue_id');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('instructor_venues');
    }
};
