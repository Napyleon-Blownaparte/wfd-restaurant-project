<?php

namespace Database\Seeders;

use App\Models\Menu;
use App\Models\MenuCategory;
use Illuminate\Database\Seeder;

class MenuSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Buat kategori terlebih dahulu
        $categories = [
            'Nigiri' => MenuCategory::create(['name' => 'Nigiri']),
            'Maki' => MenuCategory::create(['name' => 'Maki']),
            'Sashimi' => MenuCategory::create(['name' => 'Sashimi']),
        ];

        // Data menu berdasarkan kategori
        $menus = [
            // Nigiri
            [
                'menu_category_id' => $categories['Nigiri']->id,
                'name' => 'Salmon Nigiri',
                'description' => 'Potongan salmon segar di atas nasi.',
                'price' => 25000,
                'image_url' => 'menus_images/salmon_nigiri.jpg',
            ],
            [
                'menu_category_id' => $categories['Nigiri']->id,
                'name' => 'Tuna Nigiri',
                'description' => 'Potongan tuna segar dengan wasabi.',
                'price' => 27000,
                'image_url' => 'menus_images/tuna_nigiri.jpg',
            ],
            [
                'menu_category_id' => $categories['Nigiri']->id,
                'name' => 'Ebi Nigiri',
                'description' => 'Udang rebus lembut di atas nasi.',
                'price' => 24000,
                'image_url' => 'menus_images/ebi_nigiri.jpg',
            ],
            [
                'menu_category_id' => $categories['Nigiri']->id,
                'name' => 'Unagi Nigiri',
                'description' => 'Belut panggang dengan saus khas.',
                'price' => 30000,
                'image_url' => 'menus_images/unagi_nigiri.jpg',
            ],
            [
                'menu_category_id' => $categories['Nigiri']->id,
                'name' => 'Tamago Nigiri',
                'description' => 'Telur dadar manis di atas nasi.',
                'price' => 20000,
                'image_url' => 'menus_images/tamago_nigiri.jpg',
            ],

            // Maki
            [
                'menu_category_id' => $categories['Maki']->id,
                'name' => 'Kappa Maki',
                'description' => 'Gulungan kecil dengan mentimun segar.',
                'price' => 20000,
                'image_url' => 'menus_images/kappa_maki.jpg',
            ],
            [
                'menu_category_id' => $categories['Maki']->id,
                'name' => 'Tekka Maki',
                'description' => 'Gulungan nasi dengan tuna segar.',
                'price' => 25000,
                'image_url' => 'menus_images/tekka_maki.jpg',
            ],
            [
                'menu_category_id' => $categories['Maki']->id,
                'name' => 'California Roll',
                'description' => 'Gulungan dengan kepiting, alpukat, dan mentimun.',
                'price' => 35000,
                'image_url' => 'menus_images/california_roll.jpg',
            ],
            [
                'menu_category_id' => $categories['Maki']->id,
                'name' => 'Spicy Tuna Roll',
                'description' => 'Gulungan nasi dengan tuna pedas.',
                'price' => 32000,
                'image_url' => 'menus_images/spicy_tuna_roll.jpg',
            ],
            [
                'menu_category_id' => $categories['Maki']->id,
                'name' => 'Salmon Roll',
                'description' => 'Gulungan nasi dengan salmon segar.',
                'price' => 33000,
                'image_url' => 'menus_images/salmon_roll.jpg',
            ],

            // Sashimi
            [
                'menu_category_id' => $categories['Sashimi']->id,
                'name' => 'Salmon Sashimi',
                'description' => 'Potongan salmon segar berkualitas tinggi.',
                'price' => 40000,
                'image_url' => 'menus_images/salmon_sashimi.jpg',
            ],
            [
                'menu_category_id' => $categories['Sashimi']->id,
                'name' => 'Tuna Sashimi',
                'description' => 'Potongan tuna segar yang lembut.',
                'price' => 42000,
                'image_url' => 'menus_images/tuna_sashimi.jpg',
            ],
            [
                'menu_category_id' => $categories['Sashimi']->id,
                'name' => 'Octopus Sashimi',
                'description' => 'Potongan gurita yang segar dan kenyal.',
                'price' => 38000,
                'image_url' => 'menus_images/octopus_sashimi.jpg',
            ],
            [
                'menu_category_id' => $categories['Sashimi']->id,
                'name' => 'Hamachi Sashimi',
                'description' => 'Potongan ikan yellowtail berkualitas.',
                'price' => 45000,
                'image_url' => 'menus_images/hamachi_sashimi.jpg',
            ],
            [
                'menu_category_id' => $categories['Sashimi']->id,
                'name' => 'Scallop Sashimi',
                'description' => 'Kerang segar dengan rasa manis alami.',
                'price' => 46000,
                'image_url' => 'menus_images/scallop_sashimi.jpg',
            ],
        ];

        // Insert data menu ke dalam database
        foreach ($menus as $menu) {
            Menu::create($menu);
        }
    }
}
