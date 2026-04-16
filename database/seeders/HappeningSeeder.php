<?php

namespace Database\Seeders;

use App\Models\Happening;
use Illuminate\Database\Seeder;

class HappeningSeeder extends Seeder
{
    public function run(): void
    {
        Happening::factory()->count(5)->create();
    }
}
