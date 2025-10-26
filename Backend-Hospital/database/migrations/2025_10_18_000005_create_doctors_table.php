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
        Schema::create('doctors', function (Blueprint $table) {
            $table->id('doctorId')->primary();
            $table->string('name');
            $table->enum('gender',['M','F']);
            $table->date('date_of_birth')->nullable();
            $table->string('specialization')->nullable();
            $table->unsignedBigInteger('deptId');
            $table->json('availability')->nullable();
            $table->timestamps();

            $table->foreign('deptId')->references('deptId')->on('departments')->onDelete('cascade');
            $table->foreign('doctorId')->references('userId')->on('users')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('doctors');
    }
};
