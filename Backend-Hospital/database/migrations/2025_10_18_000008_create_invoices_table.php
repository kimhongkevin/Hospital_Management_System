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
        Schema::create('invoices', function (Blueprint $table) {
            $table->id('invoiceId')->primary();
            $table->unsignedBigInteger('patientId');
            $table->unsignedBigInteger('appointmentId');
            $table->string('invoiceNumber')->unique();
            $table->decimal('total_amount', 10, 2);
            $table->decimal('paid_amount', 10, 2);
            $table->enum('status', ['paid', 'unpaid', 'pending'])->default('pending');
            $table->enum('payment_method', ['cash', 'credit_card', 'insurance', 'other'])->nullable();
            $table->timestamps();

            $table->foreign('patientId')->references('patientId')->on('patients')->onDelete('cascade');
            $table->foreign('appointmentId')->references('appointmentId')->on('appointments')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('invoices');
    }
};
