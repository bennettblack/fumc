<?php

use App\Models\ContactSubmission;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Livewire\Livewire;

uses(RefreshDatabase::class);

it('renders the contact page', function () {
    $this->get('/contact')->assertSuccessful();
});

it('submits a valid contact form', function () {
    Livewire::test('contact-form')
        ->set('name', 'Jane Doe')
        ->set('email', 'jane@example.com')
        ->set('phone', '870-555-1234')
        ->set('subject', 'Question about services')
        ->set('body', 'I would like to learn more about your Sunday services.')
        ->call('submit')
        ->assertHasNoErrors()
        ->assertSet('submitted', true);

    expect(ContactSubmission::count())->toBe(1);

    $submission = ContactSubmission::first();
    expect($submission->name)->toBe('Jane Doe')
        ->and($submission->email)->toBe('jane@example.com')
        ->and($submission->phone)->toBe('870-555-1234')
        ->and($submission->subject)->toBe('Question about services');
});

it('submits without optional phone', function () {
    Livewire::test('contact-form')
        ->set('name', 'Jane Doe')
        ->set('email', 'jane@example.com')
        ->set('subject', 'Hello')
        ->set('body', 'Just saying hi.')
        ->call('submit')
        ->assertHasNoErrors()
        ->assertSet('submitted', true);

    expect(ContactSubmission::count())->toBe(1);
});

it('requires all mandatory fields', function (string $field) {
    Livewire::test('contact-form')
        ->set('name', 'Jane Doe')
        ->set('email', 'jane@example.com')
        ->set('subject', 'Hello')
        ->set('body', 'Message body here.')
        ->set($field, '')
        ->call('submit')
        ->assertHasErrors($field);
})->with([
    'name',
    'email',
    'subject',
    'body',
]);

it('rejects an invalid email', function () {
    Livewire::test('contact-form')
        ->set('email', 'not-an-email')
        ->call('submit')
        ->assertHasErrors(['email']);
});

it('rejects a body exceeding 2000 characters', function () {
    Livewire::test('contact-form')
        ->set('name', 'Jane Doe')
        ->set('email', 'jane@example.com')
        ->set('subject', 'Hello')
        ->set('body', str_repeat('a', 2001))
        ->call('submit')
        ->assertHasErrors(['body']);
});

it('does not persist a record when validation fails', function () {
    Livewire::test('contact-form')
        ->call('submit');

    expect(ContactSubmission::count())->toBe(0);
});
