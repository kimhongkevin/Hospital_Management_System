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
        Schema::create('appointments', function (Blueprint $table) {
            $table->id('appointmentId')->primary();
            $table->unsignedBigInteger('patientId');
            $table->unsignedBigInteger('deptId');
            $table->unsignedBigInteger('doctorId')->nullable();
            $table->dateTime('appointmentDate');
            $table->enum('status', ['scheduled', 'completed', 'canceled','pending'])->default('pending');
            $table->text('notes')->nullable();
            $table->timestamps();

            $table->foreign('patientId')->references('patientId')->on('patients')->onDelete('cascade');
            $table->foreign('deptId')->references('deptId')->on('departments')->onDelete('cascade');
            $table->foreign('doctorId')->references('doctorId')->on('doctors')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('appointments');
    }
};
