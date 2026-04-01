<?php

namespace App\Console\Commands;

use App\Models\User;
use Illuminate\Console\Attributes\Description;
use Illuminate\Console\Attributes\Signature;
use Illuminate\Console\Command;

#[Signature('app:create-admin-user')]
#[Description('Create the admin user')]
class CreateAdminUser extends Command
{
    public function handle(): void
    {
        $user = User::firstOrCreate(
            ['email' => 'bennett@sent.com'],
            [
                'name' => 'Bennett Black',
                'password' => bcrypt('8Oldcharter&$#'),
            ],
        );

        $this->info($user->wasRecentlyCreated ? 'Admin user created.' : 'Admin user already exists.');
    }
}
