<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Menu extends Model
{
    use HasFactory;

    protected $guarded = [];

    public function orders()
    {
        return $this->belongsToMany(Order::class, 'menu_orders', 'menu_id', 'order_id');
    }

    public function menu_orders()
    {
        return $this->hasMany(MenuOrder::class, 'menu_id');
    }

    public function menu_category()
    {
        return $this->belongsTo(MenuCategory::class, 'menu_category_id');
    }
}
