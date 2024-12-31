<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Order;
use App\Models\User;
use Illuminate\Http\Request;

class OrderController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        // Ambil status pesanan dan periode dari input
        $order_status = $request->input('order_status');
        $period = $request->input('period');
        $start_date = $request->input('start_date');
        $end_date = $request->input('end_date');

        // Mulai query untuk mengambil data order
        $query = Order::query();

        // Jika status "Point of Sales", abaikan filter status
        if ($order_status && $order_status !== 'table') {
            $query->where('order_status', $order_status);
        }

        // Filter berdasarkan periode
        if ($period) {
            $today = now()->startOfDay();
            $thisWeekStart = now()->startOfWeek();
            $thisWeekEnd = now()->endOfWeek();

            switch ($period) {
                case 'today':
                    $query->whereDate('created_at', $today);
                    break;

                case 'this_week':
                    $query->whereBetween('created_at', [$thisWeekStart, $thisWeekEnd]);
                    break;

                case 'custom':
                    // Filter berdasarkan custom date range (start_date dan end_date)
                    if ($start_date && $end_date) {
                        $query->whereBetween('created_at', [$start_date, $end_date]);
                    }
                    break;

                default:
                    break;
            }
        }

        // Ambil data order setelah filter diterapkan dengan pagination
        $orders = $query->paginate(10); // Ambil 10 data per halaman

        // Kirim hasil ke view
        return view('admin-views.orders.index', [
            'orders' => $orders,
            'order_status' => $order_status,
        ]);
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
        // Validasi input status yang dikirimkan
        $request->validate([
            'order_status' => 'required|in:Pending,Preparing,Ready,Completed',
        ]);

        // Mengubah status pesanan
        $order->order_status = $request->input('order_status');

        // Menyimpan perubahan status
        $order->save();

        // Kembali ke halaman sebelumnya dengan pesan sukses
        return redirect()->route('admin.orders.index')->with('success', 'Order berhasil diupdate.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Order $order)
    {
        //
    }
}
