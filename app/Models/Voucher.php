<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Voucher extends Model
{
    use HasFactory;

    public function orders()
    {
        return $this->hasMany(Order::class, 'order_id');
    }

    public function voucher_purchases()
    {
        return $this->belongsToMany(VoucherPurchase::class, 'voucher_details', 'voucher_id', 'voucher_purchase_id');
    }
}
