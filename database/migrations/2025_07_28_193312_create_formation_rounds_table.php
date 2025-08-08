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
        Schema::create('formation_rounds', function (Blueprint $table) {
            $table->id();
            $table->string('round_code',16);
            $table->string('round_label',32);
            $table->integer('round_level');
            $table->dateTime('start_date');
            $table->dateTime('end_date');
            $table->foreignId('year_id')->constrained('formation_years');
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
        Schema::dropIfExists('formation_rounds');
    }
};
