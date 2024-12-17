<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use App\Models\Order;
use App\Models\Voucher;
use Darryldecode\Cart\Facades\CartFacade as Cart;
use Illuminate\Http\Request;

class OrderController extends Controller
{
    /*
    CARA MENGECEK PEMAKAIAN VOUCHER :
    Cari tahu berapa kali relasi User-Voucher yang bersangkutan ada di tabel Order
    */


    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $orders = auth()->user()->orders->where('order_status', 'pending');

        return view('user-views.orders.list-order', [
            'orders' => $orders,
        ]);
    }

    public function payment($id)
    {
        $orders = Order::find($id);
        return view('user-views.orders.payment', [
            'orders' => $orders,
        ]);
    }

    public function pay($id)
    {

        $orders = Order::find($id);

        // Set your Merchant Server Key
        \Midtrans\Config::$serverKey = config('midtrans.serverKey');
        // Set to Development/Sandbox Environment (default). Set to true for Production Environment (accept real transaction).
        \Midtrans\Config::$isProduction = false;
        // Set sanitization on (default)
        \Midtrans\Config::$isSanitized = true;
        // Set 3DS transaction for credit card to true
        \Midtrans\Config::$is3ds = true;

        $params = [
            'transaction_details' => [
                'order_id' => $orders->id,
                'gross_amount' => $orders->total_price,
            ],
            'customer_details' => [
                'first_name' => $orders->user->name,
                'email' => $orders->user->email,
            ],
        ];

        $snapToken = \Midtrans\Snap::getSnapToken($params);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $cart = session()->get('cart', []);
        return view('user-views.orders.create', [
            'cart' => $cart,
        ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $cart = session()->get('cart');

        if (!isset($cart) || empty($cart)) {
            return redirect()->route('user.orders.create')->with('error', 'Your cart is empty.');
        }

        $subTotal = 0;
        foreach ($cart as $item) {
            $subTotal += $item['quantity'] * $item['price'];
        }

        $voucher = Voucher::find(1);
        if ($request->has('voucher_id')) {
            $voucher = Voucher::find($request->voucher_id);
        }

        $totalPrice = $subTotal;
        if ($voucher) {
            $discount = $voucher->discount / 100;
            $totalPrice -= $subTotal * $discount;
        }

        $order = new Order();
        $order->user_id = auth()->id();
        $order->voucher_id = $voucher ? $voucher->id : null;
        $order->sub_total_price = $subTotal;
        $order->total_price = $totalPrice;
        $order->order_date_time = now();
        $order->last_update_date_time = now();
        $order->order_status = 'Pending';
        $order->payment_method = 'Credit Card';
        $order->payment_status = 'Unpaid';
        $order->table_number = 10;
        $order->save();

        foreach ($cart as $key => $item) {
            $order->menus()->attach($key, [
                'quantity' => $item['quantity'],
            ]);
        }

        // Kosongkan cart setelah order disimpan
        session()->forget('cart');

        // Redirect ke halaman konfirmasi atau tampilan lainnya
        return redirect()->route('user.menus.index')->with('success', 'Order placed successfully!');
    }


    /**
     * Display the specified resource.
     */
    public function show(Order $order)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Order $order)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Order $order)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Order $order)
    {
        //
    }
}
