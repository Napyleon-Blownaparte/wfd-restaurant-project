<?php

use App\Models\User;
use App\Models\Voucher;
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
        Schema::create('orders', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->foreignIdFor(User::class, 'user_id');
            $table->foreignIdFor(Voucher::class, 'voucher_id')->nullable();
            $table->integer('sub_total_price');
            $table->integer('total_price');
            $table->dateTime('order_date_time');
            $table->dateTime('last_update_date_time')->nullable();
            $table->string('order_status');
            $table->string('payment_method');
            $table->string('payment_status');
            $table->dateTime('payment_date_time')->nullable();
            $table->integer('table_number')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('orders');
    }
};
