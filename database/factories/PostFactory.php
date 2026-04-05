<?php

namespace Database\Factories;

use App\Enums\PostType;
use App\Models\Post;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends Factory<Post>
 */
class PostFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'type' => fake()->randomElement(PostType::cases()),
            'title' => fake()->sentence(4),
            'description' => fake()->optional(0.7)->sentence(),
            'image' => null,
            'body' => fake()->paragraphs(3, true),
            'published_at' => fake()->optional(0.8)->dateTimeBetween('-6 months'),
        ];
    }
}
