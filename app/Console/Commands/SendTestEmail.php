<?php

namespace App\Console\Commands;

use Illuminate\Console\Attributes\Description;
use Illuminate\Console\Attributes\Signature;
use Illuminate\Console\Command;
use Illuminate\Support\Facades\Mail;

#[Signature('mail:test {email=bennett@sent.com : Recipient address}')]
#[Description('Send a plain test email to verify mailer configuration.')]
class SendTestEmail extends Command
{
    public function handle(): int
    {
        $email = (string) $this->argument('email');

        $this->info("Sending test email to {$email} via mailer [".config('mail.default').']...');

        Mail::raw(
            "This is a test email from ".config('app.name').".\n\nSent at ".now()->toIso8601String().'.',
            function ($message) use ($email) {
                $message->to($email)->subject('FUMC mailer test');
            }
        );

        $this->info('Sent.');

        return self::SUCCESS;
    }
}
