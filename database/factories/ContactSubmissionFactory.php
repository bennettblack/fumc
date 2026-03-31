<?php

namespace Database\Factories;

use App\Models\ContactSubmission;
use Illuminate\Database\Eloquent\Factories\Factory;

/** @extends Factory<ContactSubmission> */
class ContactSubmissionFactory extends Factory
{
    public function definition(): array
    {
        return [
            'name' => fake()->name(),
            'email' => fake()->safeEmail(),
            'phone' => fake()->optional(0.6)->phoneNumber(),
            'subject' => fake()->sentence(4),
            'body' => fake()->paragraphs(2, true),
        ];
    }
}
