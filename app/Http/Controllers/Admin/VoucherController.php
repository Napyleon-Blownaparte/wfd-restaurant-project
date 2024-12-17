<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Voucher;
use Illuminate\Http\Request;

class VoucherController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('admin-views.vouchers.index');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin-views.vouchers.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'description' => 'required|string|max:255',
            'start_date' => 'required|date',
            'end_date' => 'required|date|after_or_equal:start_date',
            'discount' => 'required|integer|min:1|max:100',
            'price' => 'required|integer|min:1',
        ]);

        Voucher::create($validated);

        return redirect()->route('admin.vouchers.index')->with('success', 'Voucher berhasil ditambahkan.');
    }

    /**
     * Display the specified resource.
     */
    public function show(Voucher $voucher)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Voucher $voucher)
    {
        return view('admin-views.vouchers.edit');
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Voucher $voucher)
    {
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'description' => 'required|string|max:255',
            'start_date' => 'required|date',
            'end_date' => 'required|date|after_or_equal:start_date',
            'discount' => 'required|integer|min:1|max:100',
            'price' => 'required|integer|min:1',
        ]);

        $voucher->update($validated);
        $voucher->save();

        return redirect()->route('admin.vouchers.index')->with('success', 'Voucher berhasil diupdate.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Voucher $voucher)
    {
        $voucher->delete();

        return redirect()->route('admin.vouchers.index')->with('success', 'Voucher berhasil dihapus.');
    }
}
