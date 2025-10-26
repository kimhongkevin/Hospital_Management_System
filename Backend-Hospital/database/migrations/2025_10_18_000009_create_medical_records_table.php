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
        Schema::create('medical_records', function (Blueprint $table) {
            $table->id('recordId')->primary();
            $table->unsignedBigInteger('patientId');
            $table->unsignedBigInteger('doctorId');
            $table->text('medical_history')->nullable();
            $table->text('allergies')->nullable();
            $table->text('medications')->nullable();
            $table->timestamps();

            $table->foreign('patientId')->references('patientId')->on('patients')->onDelete('cascade');
            $table->foreign('doctorId')->references('doctorId')->on('doctors')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('medical_records');
    }
};
