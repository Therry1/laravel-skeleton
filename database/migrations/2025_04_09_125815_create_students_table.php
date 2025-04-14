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
            $table->string('name',128);
            $table->string('program',128);
            $table->string('school_name',128);
            $table->integer('school_level');
            $table->integer('phone_number');
            $table->string('choice_option',128);
            $table->integer('level_formation');
            $table->boolean('is_inscript');
            $table->integer('amount_paid_for_inscription');
            $table->integer('stay_to_paid_for_inscription')->default(0);
            $table->boolean('has_paid_formation')->default(false);
            $table->tinyInteger('state')->default();
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
