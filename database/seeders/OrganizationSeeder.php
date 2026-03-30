<?php

namespace Database\Seeders;

use App\Models\Organization;
use App\Models\User;
use Illuminate\Database\Seeder;

class OrganizationSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        User::firstOrCreate(
            ['email' => 'bennett@sent.com'],
            [
                'name' => 'bennett',
                'password' => 'password',
            ],
        );

        Organization::factory(6)->create();
    }
}
