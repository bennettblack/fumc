<?php

namespace Database\Factories;

use App\Models\Bulletin;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends Factory<Bulletin>
 */
class BulletinFactory extends Factory
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
