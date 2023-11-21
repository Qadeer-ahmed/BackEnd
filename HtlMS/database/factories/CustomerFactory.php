<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Faker\Generator as Faker;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Customer>
 */
class CustomerFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'customerName'=>fake()->name,
            'address'=>fake()->address,
            'phone_no'=>fake()->phoneNumber,
            'CNIC'=>fake()->unique()->numerify('##############'),
        ];
    }
}
