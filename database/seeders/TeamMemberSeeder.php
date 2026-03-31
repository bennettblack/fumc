<?php

namespace Database\Seeders;

use App\Models\TeamMember;
use Illuminate\Database\Seeder;

class TeamMemberSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        TeamMember::factory(9)->sequence(
            fn ($sequence) => ['sort_order' => $sequence->index],
        )->create();
    }
}
