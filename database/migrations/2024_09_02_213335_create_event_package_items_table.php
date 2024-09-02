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
        Schema::create('event_package_items', function (Blueprint $table) {
            $table->id();
            $table->foreignId('package_id')->constrained('event_packages');
            $table->enum('item_type', ['venue_rental', 'equipment', 'instructor', 'catering']);
            $table->unsignedBigInteger('item_reference_id');
            $table->integer('quantity');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('event_package_items');
    }
};
