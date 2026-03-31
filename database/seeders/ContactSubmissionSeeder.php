<?php

namespace Database\Seeders;

use App\Models\ContactSubmission;
use Illuminate\Database\Seeder;

class ContactSubmissionSeeder extends Seeder
{
    public function run(): void
    {
        ContactSubmission::factory(10)->create();
    }
}
