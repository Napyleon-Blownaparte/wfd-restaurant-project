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
        $voucher_purchases = VoucherPurchase::where('user_id', Auth::user()->id)->get();
        $vouchers = Voucher::get()->whereNotIn('id', $voucher_purchases->pluck('voucher_id'));
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
        $voucher_purchases = VoucherPurchase::create([
            'created_at' => now(),
            'updated_at' => now(),
            'user_id' => $user->id,
            'voucher_id' => $voucher->id,
            'snap_token' => $snapToken,
            'payment_status' => 'Unpaid',
        ]);

        return view('user-views.vouchers.payment-voucher', ['voucher_purchase' => $voucher_purchases]);
    }

    public function status_update(Request $request, $id)
    {
        $voucher = VoucherPurchase::find($id);
        $json = json_decode($request->get('json'));

        if ($json->transaction_status == 'settlement' || $json->transaction_status == 'capture') {
            // dd($json);
            $voucher->payment_status = 'Paid';
            $voucher->payment_date_time = now();
        } else if ($json->transaction_status == 'pending') {
            $voucher->payment_status = 'Pending';
        } else if ($json->transaction_status == 'deny') {
            $voucher->payment_status = 'Denied';
        } else if ($json->transaction_status == 'expire') {
            $voucher->payment_status = 'Expired';
        } else if ($json->transaction_status == 'cancel') {
            $voucher->payment_status = 'Canceled';
        }

        $voucher->save();

        return redirect()->route('user.vouchers.index')->with('success', 'Order status updated successfully!');
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
