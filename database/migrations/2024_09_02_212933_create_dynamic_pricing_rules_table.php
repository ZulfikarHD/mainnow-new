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
        Schema::create('dynamic_pricing_rules', function (Blueprint $table) {
            $table->id('pricing_rule_id');
            $table->foreignId('venue_id')->constrained('venues')->references('venue_id');
            $table->foreignId('sport_id')->constrained('sports')->references('sport_id');
            $table->date('start_date');
            $table->date('end_date');
            $table->time('start_time');
            $table->time('end_time');
            $table->decimal('price_modifier', 8, 2);
            $table->boolean('is_recurring')->default(false);
            $table->string('recurrence_pattern')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('dynamic_pricing_rules');
    }
};
