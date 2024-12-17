<?php

namespace App\Http\Controllers\User;

use App\Models\Voucher;
use Illuminate\Http\Request;
use App\Models\VoucherPurchase;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

class VoucherController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $vouchers = Voucher::all();
        return view('user-views.vouchers.index', [
            'vouchers' => $vouchers,
        ]);
    }

    public function payment($id)
    {
        $user = Auth::user();
        $voucher = Voucher::find($id);

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
                'order_id' => rand(),
                'gross_amount' => $voucher->price,
            ],
            'customer_details' => [
                'first_name' => $user->name,
                'email' => $user->email,
            ],
            'item_details' => [
                [
                    'id' => $voucher->id,
                    'price' => $voucher->price,
                    'quantity' => 1,
                    'name' => $voucher->name,
                ],
            ],
        ];

        $snapToken = \Midtrans\Snap::getSnapToken($params);
        VoucherPurchase::create([
            'created_at' => now(),
            'updated_at' => now(),
            'user_id' => $user->id,
            'voucher_id' => $voucher->id,
            'snap_token' => $snapToken,
            'payment_status' => 'Unpaid',
        ]);

        return view();
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(Voucher $voucher)
    {
        return view('user-views.vouchers.show', [
            'voucher' => $voucher,
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Voucher $voucher)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Voucher $voucher)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Voucher $voucher)
    {
        //
    }
}
