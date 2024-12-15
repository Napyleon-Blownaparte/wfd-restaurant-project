<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use App\Models\Voucher;
use Illuminate\Http\Request;

class VoucherCartController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
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
    public function store(Voucher $voucher, Request $request)
    {
        $validated = $request->validate([
            'quantity' => 'required|integer|min:1',
        ]);

        $cart = session()->get('voucher_cart', []);

        if (isset($cart[$voucher->id])) {
            $cart[$voucher->id]['quantity'] += $validated['quantity'];
        }
        else {
            $cart[$voucher->id] = [
                'name' => $voucher->name,
                'price' => $voucher->price,
            ];
        }

        session()->put('voucher_cart', $cart);
        return redirect()->back();
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request)
    {
        $cart = session()->get('voucher_cart', []);

        foreach ($request->cart as $id => $data) {
            if (isset($cart[$id])) {
                $cart[$id]['quantity'] = $data['quantity'];
            }
        }

        session()->put('voucher-cart', $cart);

        return redirect()->back();
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Voucher $voucher)
    {
        $cart = session()->get('voucher_cart', []);

        if (isset($cart[$voucher->id])) {
            unset($cart[$voucher->id]);
        }

        session()->put('cart', $cart);
        return redirect()->back();
    }
}
