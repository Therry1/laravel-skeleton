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
        Schema::create('formation_participations', function (Blueprint $table) {
            $table->id();
            $table->integer('amount_paid');
            $table->integer('remaining_amount')->nullable();
            $table->string('financial_reference', 20)->nullable();
            $table->foreignId('student_id')->constrained('students');
            $table->foreignId('round_id')->constrained('formation_rounds');
            $table->foreignId('payment_mode_id')->constrained('payment_modes');
            $table->foreignId('formation_mode_id')->constrained('formation_modes');
            $table->foreignId('formation_option_id')->constrained('formation_options');
            $table->foreignId('formation_level_id')->constrained('formation_levels');
            $table->foreignId('formation_city_id')->constrained('formation_cities');
            $table->tinyInteger('state')->default(1);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('formation_participations');
    }
};
