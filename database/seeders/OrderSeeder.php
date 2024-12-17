<?php
namespace Database\Seeders;

use App\Models\Order;
use App\Models\Menu;
use App\Models\User;
use App\Models\Voucher;
use Illuminate\Database\Seeder;

class OrderSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $users = User::all();
        $orders = Order::factory(5)->make();

        foreach ($orders as $order) {
            $order->user_id = $users->random()->id;
            $menus = Menu::inRandomOrder()->take(3)->get();
            $voucher = Voucher::inRandomOrder()->first();

            $subTotal = 0;
            foreach ($menus as $menu) {
                $quantity = rand(1, 5);
                $subTotal += $menu->price * $quantity;
            }
            $order->voucher_id = $voucher->id;

            $totalPrice = $subTotal;

            $order->sub_total_price = $subTotal;
            $order->total_price = $totalPrice;
            $order->order_date_time = now();
            $order->last_update_date_time = now();
            $order->order_status = 'Pending';
            $order->payment_method = 'Credit Card';
            $order->payment_status = 'Unpaid';
            $order->payment_date_time = null;
            $order->table_number = rand(1, 10);
            $order->save();

            foreach ($menus as $menu) {
                $order->menus()->attach($menu->id, [
                    'quantity' => rand(1, 5),
                ]);
            }
        }
    }
}
