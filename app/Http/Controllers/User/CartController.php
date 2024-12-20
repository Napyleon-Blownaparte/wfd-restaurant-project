<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use App\Models\Menu;
use Darryldecode\Cart\Facades\CartFacade as Cart;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class CartController extends Controller
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

    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Menu $menu, Request $request)
    {
        $validated = $request->validate([
            'quantity' => 'required|integer|min:1',
        ]);

        $cart = session()->get('cart', []);

        if (isset($cart[$menu->id])) {
            $cart[$menu->id]['quantity'] += $validated['quantity'];
        }
        else {
            $cart[$menu->id] = [
                'name' => $menu->name,
                'quantity' => $validated['quantity'],
                'price' => $menu->price,
            ];
        }

        session()->put('cart', $cart);
        return redirect()->route('user.menus.index')->with('success', 'Tambah item berhasil.');
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

    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request)
    {
        $cart = session()->get('cart', []);

        // Perbarui kuantitas untuk setiap item dalam cart
        foreach ($request->cart as $id => $data) {
            if (isset($cart[$id])) {
                $cart[$id]['quantity'] = $data['quantity']; // Update quantity
            }
        }

        // Simpan kembali ke session
        session()->put('cart', $cart);

        return redirect()->back();
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($key)
    {
        // Retrieve the cart from session
        $cart = session()->get('cart', []);

        // Remove the item from the cart
        if (isset($cart[$key])) {
            unset($cart[$key]);
        }

        // Update the session with the modified cart
        session()->put('cart', $cart);

        // Redirect back with a success message
        return redirect()->back()->with('success', 'Item batal ditambahkan.');
    }

}
