<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // \App\Models\User::factory(10)->create();

        \App\Models\User::factory()->create([
            'name' => 'Test Admin',
           'email' => 'test_admin@example.com',
            'is_admin' => 1,
        ]);

        \App\Models\User::factory()->create([
            'name' => 'Test User',
           'email' => 'test_user@example.com',
            'is_admin' => 0,
        ]);

        $this->call([
            MenuSeeder::class,
            OrderSeeder::class,
        ]);
    }
}
