<?php

namespace Database\Seeders;

use App\Models\ClarkWeekdayRegistration;
use Illuminate\Database\Seeder;

class ClarkWeekdayRegistrationSeeder extends Seeder
{
    public function run(): void
    {
        ClarkWeekdayRegistration::factory(15)->create();
    }
}
