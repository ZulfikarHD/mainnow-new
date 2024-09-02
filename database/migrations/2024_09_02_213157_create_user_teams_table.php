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
        Schema::create('user_teams', function (Blueprint $table) {
            $table->id('user_team_id');
            $table->foreignId('user_id')->constrained('users')->references('user_id');
            $table->foreignId('team_id')->constrained('teams')->references('team_id');
            $table->enum('role', ['captain', 'player']);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('user_teams');
    }
};
