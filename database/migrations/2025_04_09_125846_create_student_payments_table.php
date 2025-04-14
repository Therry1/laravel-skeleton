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
            $table->string('current_month',128);
            $table->integer('level_formation');
            $table->boolean('tranche1')->default(true);
            $table->boolean('tranche2')->default(false);
            $table->integer('amount_paid');
            $table->integer('stay_to_paid');
            $table->tinyInteger('state');
            $table->foreignId('student_id')->constrained('students');
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
