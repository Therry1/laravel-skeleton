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
        Schema::create('student_bill_payments', function (Blueprint $table) {
            $table->id();
            $table->integer('month_number');
            $table->string('month_label');
            $table->boolean('tranche1')->default(false);
            $table->boolean('tranche2')->default(false);
            $table->integer('amount_paid');
            $table->integer('remaining_amount');
            $table->foreignId('student_id')->constrained('students');
            $table->foreignId('payer_id')->nullable()->constrained('users');
            $table->foreignId('student_payment_id')->constrained('student_payments');
            $table->foreignId('round_id')->constrained('formation_rounds');
            $table->tinyInteger('state')->default(1);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('student_bill_payments');
    }
};
