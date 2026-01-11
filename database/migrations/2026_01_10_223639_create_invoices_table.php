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
            $table->id();
            $table->foreignId('client_id');
            $table->string('invoice_number');
            $table->foreignId('business_address_id');
            $table->dateTime('payment_terms');
            $table->dateTime('payment_due')->nullable();
            $table->text('project_description');
            $table->enum('status', ['pending', 'paid', 'draft']);
            $table->timestamps();
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
