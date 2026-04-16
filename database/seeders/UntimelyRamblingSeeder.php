<?php

namespace Database\Seeders;

use App\Models\UntimelyRambling;
use Illuminate\Database\Seeder;

class UntimelyRamblingSeeder extends Seeder
{
    public function run(): void
    {
        UntimelyRambling::factory()->count(5)->create();
    }
}
