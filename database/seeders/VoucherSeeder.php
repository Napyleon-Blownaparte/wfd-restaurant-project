<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

class VoucherSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $vouchers = [
            [
                'name' => 'Voucher Diskon 10%',
                'description' => 'Voucher potongan harga sebesar 10% untuk semua menu.',
                'start_date' => Carbon::now(),
                'end_date' => Carbon::now()->addDays(30),
                'discount' => 10,
                'price' => 10000,
            ],
            [
                'name' => 'Voucher Diskon 20%',
                'description' => 'Voucher potongan harga sebesar 20% untuk pesanan di atas 100.000.',
                'start_date' => Carbon::now(),
                'end_date' => Carbon::now()->addDays(20),
                'discount' => 20,
                'price' => 15000,
            ],
            [
                'name' => 'Voucher Spesial Sushi Lovers',
                'description' => 'Potongan 25% khusus untuk kategori Nigiri dan Sashimi.',
                'start_date' => Carbon::now(),
                'end_date' => Carbon::now()->addDays(15),
                'discount' => 25,
                'price' => 20000,
            ],
            [
                'name' => 'Voucher Akhir Pekan',
                'description' => 'Diskon 15% untuk pesanan di hari Sabtu dan Minggu.',
                'start_date' => Carbon::now(),
                'end_date' => Carbon::now()->addDays(40),
                'discount' => 15,
                'price' => 12000,
            ],
            [
                'name' => 'Voucher Spesial Tahun Baru',
                'description' => 'Voucher spesial dengan diskon 30% untuk perayaan tahun baru.',
                'start_date' => '2024-12-31',
                'end_date' => '2025-01-01',
                'discount' => 30,
                'price' => 25000,
            ],
        ];

        // Insert data vouchers ke dalam database
        DB::table('vouchers')->insert($vouchers);
    }
}
