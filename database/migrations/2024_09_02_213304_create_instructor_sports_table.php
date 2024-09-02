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
        Schema::create('instructor_sports', function (Blueprint $table) {
            $table->id('instructor_sports_id');
            $table->foreignId('instructor_id')->constrained('instructors')->references('instructor_id');
            $table->foreignId('sport_id')->constrained('sports')->references('sport_id');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('instructor_sports');
    }
};
