<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/*
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Booking>
 */
class BookingFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $statuses = ['pending', 'confirmed', 'cancelled'];
        return [
            'customer_id' => \App\Models\Customer::factory(),
            'checkin' => fake()->date,
            'checkout' => fake()->date,
            'status' => fake()->randomElement($statuses),
            'usedServices' => fake()->text,
        ];
    }
}
