<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Customers>
 */
class CustomersFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    protected $model = \App\Models\Customers::class;

    public function definition()
    {
        return [
            'name' => $this->faker->name,
            'country' => $this->faker->country,
            'sex' => $this->faker->boolean,
            'created_at' => now()
        ];
    }
}
