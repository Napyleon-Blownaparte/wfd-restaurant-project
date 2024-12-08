<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    use HasFactory;

    public function user()
    {
        return $this->belongsTo(User::class, 'order_id');
    }

    public function menus()
    {
        return $this->belongsToMany(Menu::class, 'menu_orders', 'order_id');
    }

    public function menu_orders()
    {
        return $this->hasMany(MenuOrder::class, 'order_id');
    }
}
