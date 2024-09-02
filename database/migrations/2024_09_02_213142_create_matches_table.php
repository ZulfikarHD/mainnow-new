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
        Schema::create('matches', function (Blueprint $table) {
            $table->id('match_id');
            $table->foreignId('tournament_id')->constrained('tournaments')->references('tournament_id');
            $table->foreignId('team_a_id')->constrained('teams')->references('team_id');
            $table->foreignId('team_b_id')->constrained('teams')->references('team_id');
            $table->date('match_date');
            $table->integer('score_team_a')->nullable();
            $table->integer('score_team_b')->nullable();
            $table->enum('status', ['scheduled', 'completed']);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('matches');
    }
};
