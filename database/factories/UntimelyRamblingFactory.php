<?php

namespace Database\Factories;

use App\Models\UntimelyRambling;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends Factory<UntimelyRambling>
 */
class UntimelyRamblingFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'title' => fake()->sentence(4),
            'body' => collect(fake()->paragraphs(rand(3, 6)))
                ->map(fn (string $p) => "<p>{$p}</p>")
                ->implode(''),
            'published_at' => fake()->optional(0.8)->dateTimeBetween('-6 months'),
        ];
    }
}
