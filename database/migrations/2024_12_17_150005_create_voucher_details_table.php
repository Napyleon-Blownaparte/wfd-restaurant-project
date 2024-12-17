<?php

use App\Models\Voucher;
use App\Models\VoucherPurchase;
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
        Schema::create('voucher_details', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->foreignIdFor(VoucherPurchase::class, 'voucher_purchase_id');
            $table->foreignIdFor(Voucher::class, 'voucher_id');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('voucher_details');
    }
};
