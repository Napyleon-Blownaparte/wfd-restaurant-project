<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Menu extends Model
{
    use HasFactory;

    public function orders()
    {
        return $this->belongsToMany(Order::class, 'menu_orders', 'menu_id');
    }

    public function menu_orders()
    {
        return $this->hasMany(Order::class, 'menu_id');
    }
}
