<?php

namespace Database\Factories;

use DateTime;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Voucher>
 */
class VoucherFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $currentDate = now();
        return [
            'name' => $this->faker->word(),
            'description' => $this->faker->sentence(),
            'start_date' => $currentDate,
            'end_date' => $currentDate->addDay(7),
            'discount' => $this->faker->numberBetween(30000, 70000),
            'price' => $this->faker->numberBetween(30000, 70000),
        ];
    }
}
