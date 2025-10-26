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
        Schema::create('lab_reports', function (Blueprint $table) {
            $table->id('reportId')->primary();
            $table->unsignedBigInteger('medRecordId');
            $table->text('test_type')->nullable();
            $table->text('results')->nullable();
            $table->date('uploadedDate');
            $table->timestamps();

            $table->foreign('medRecordId')->references('recordId')->on('medical_records')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('lab_reports');
    }
};
