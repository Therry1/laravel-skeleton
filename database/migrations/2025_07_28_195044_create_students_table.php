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
        Schema::create('students', function (Blueprint $table) {
            $table->id();
            $table->string('matricule',8);
            $table->string('first_name',32);
            $table->string('last_name',32);
            $table->integer('call_phone_number');
            $table->integer('whatsapp_phone_number');
            $table->boolean('is_registered')->default(false);
            $table->integer('amount_paid');
            $table->integer('remaining_amount');
            $table->string('school_sector',64);
            $table->foreignId('residence_city_id')->constrained('cities');
            $table->foreignId('formation_city_id')->constrained('formation_cities');
            $table->foreignId('faculty_id')->constrained('school_faculties');
            $table->foreignId('school_level_id')->constrained('school_levels');
            $table->foreignId('formation_option_id')->constrained('formation_options');
            $table->foreignId('formation_level_id')->constrained('formation_levels');
            $table->foreignId('payment_mode_id')->constrained('payment_modes');
            $table->tinyInteger('state')->default(1);
            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('students');
    }
};
