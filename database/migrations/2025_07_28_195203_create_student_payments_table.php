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
        Schema::create('student_payments', function (Blueprint $table) {
            $table->id();
            $table->boolean('tranche1')->default(false);
            $table->boolean('tranche2')->default(false);
            $table->integer('amount_paid');
            $table->integer('remaining_amount');
            $table->foreignId('student_id')->constrained('students');
            $table->foreignId('round_id')->constrained('formation_rounds');
            $table->foreignId('month_id')->constrained('formation_months');
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
        Schema::dropIfExists('student_payments');
    }
};
