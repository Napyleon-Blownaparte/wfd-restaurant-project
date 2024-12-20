<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    use HasFactory;
    protected $fillable = [
        'user_id',
        'voucher_id',
        'sub_total_price',
        'total_price',
        'snap_token',
        'order_date_time',
        'last_update_date_time',
        'order_status',
        'payment_method',
        'payment_status',
        'payment_date_time',
        'table_number',
    ];

    protected $guarded = [];


    public function user()
    {
        return $this->belongsTo(User::class, 'user_id');
    }

    public function menus()
    {
        return $this->belongsToMany(Menu::class, 'menu_orders', 'order_id', 'menu_id');
    }

    public function menu_orders()
    {
        return $this->hasMany(MenuOrder::class, 'order_id');
    }

    public function voucher()
    {
        return $this->belongsTo(Voucher::class, 'voucher_id');
    }
}
