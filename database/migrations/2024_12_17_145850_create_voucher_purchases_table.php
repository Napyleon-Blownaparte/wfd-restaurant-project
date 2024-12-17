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
        Schema::create('voucher_purchases', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->string('payment_method');
            $table->dateTime('payment_date_time')->nullable();
            $table->string('payment_status');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('voucher_purchases');
    }
};