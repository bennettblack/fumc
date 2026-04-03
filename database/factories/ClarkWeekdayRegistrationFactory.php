<?php

namespace Database\Factories;

use App\Models\ClarkWeekdayRegistration;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends Factory<ClarkWeekdayRegistration>
 */
class ClarkWeekdayRegistrationFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'child_name' => fake()->name(),
            'child_dob' => fake()->dateTimeBetween('-5 years', '-1 year'),
            'child_siblings' => fake()->optional(0.4)->name(),
            'parent_names' => fake()->name().' & '.fake()->name(),
            'address_1' => fake()->streetAddress(),
            'address_2' => fake()->optional(0.3)->secondaryAddress(),
            'city' => fake()->city(),
            'state' => fake()->stateAbbr(),
            'zip' => fake()->postcode(),
            'email' => fake()->safeEmail(),
            'phone' => fake()->optional(0.7)->phoneNumber(),
            'work_phone' => fake()->optional(0.5)->phoneNumber(),
            'schedule' => fake()->randomElement(['1st available opening', '5 days', '3 days', '2 days']),
            'extended_care' => fake()->boolean(30),
            'multiple_children' => fake()->boolean(20),
            'other_children' => fake()->optional(0.2)->sentence(),
            'church_member' => fake()->boolean(50),
        ];
    }
}
