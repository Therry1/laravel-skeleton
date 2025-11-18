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
            $table->string('matricule',15)->unique();
            $table->string('name',128);
            $table->string('email')->unique(); 
            $table->string('password');
            $table->integer('call_phone_number');
            $table->integer('whatsapp_phone_number');
            $table->integer('relative_phone_number');
            $table->boolean('is_registered')->default(false);
            $table->boolean('confirm_payment')->default(false);
            $table->integer('amount_paid');
            $table->integer('remaining_amount');
            $table->string('school_sector',64);
            $table->integer('guid_parent_id')->nullable();
            $table->string('financial_reference', 20)->nullable();
            $table->foreignId('register_by')->nullable()->constrained('users');
            $table->foreignId('residence_city_id')->constrained('cities');
            $table->foreignId('faculty_id')->constrained('school_faculties');
            $table->foreignId('school_level_id')->constrained('school_levels');
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
