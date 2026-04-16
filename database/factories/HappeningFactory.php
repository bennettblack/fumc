<?php

namespace Database\Factories;

use App\Models\Happening;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends Factory<Happening>
 */
class HappeningFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'title' => fake()->sentence(3),
            'published_at' => fake()->optional(0.8)->dateTimeBetween('-6 months'),
            'file_name' => null,
        ];
    }
}
