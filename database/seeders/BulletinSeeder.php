<?php

namespace Database\Seeders;

use App\Models\Bulletin;
use Illuminate\Database\Seeder;

class BulletinSeeder extends Seeder
{
    public function run(): void
    {
        Bulletin::factory()->count(5)->create();
    }
}
