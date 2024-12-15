<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class VoucherPurchase extends Model
{
    use HasFactory;

    public function user()
    {
        return $this->belongsTo(User::class, 'user_id');
    }

    public function vouchers()
    {
        return $this->belongsToMany(Voucher::class, 'voucher_details', 'voucher_purchase_id', 'voucher_id');
    }
}
