<?php

use App\Models\ClarkWeekdayRegistration;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Livewire\Livewire;

uses(RefreshDatabase::class);

it('renders the clark weekday page', function () {
    $this->get('/clark-weekday')->assertSuccessful();
});

it('submits a valid registration', function () {
    Livewire::test('clark-weekday-form')
        ->set('child_name', 'Jane Doe')
        ->set('child_dob', '2023-01-15')
        ->set('child_siblings', 'John Doe')
        ->set('parent_names', 'Mary & James Doe')
        ->set('address_1', '123 Main St')
        ->set('address_2', 'Apt B')
        ->set('city', 'Texarkana')
        ->set('state', 'AR')
        ->set('zip', '71854')
        ->set('email', 'mary@example.com')
        ->set('phone', '870-555-1234')
        ->set('work_phone', '870-555-5678')
        ->set('schedule', '5 days')
        ->set('extended_care', true)
        ->set('multiple_children', true)
        ->set('other_children', 'John, age 5')
        ->set('church_member', true)
        ->call('submit')
        ->assertHasNoErrors()
        ->assertSet('submitted', true);

    expect(ClarkWeekdayRegistration::count())->toBe(1);

    $registration = ClarkWeekdayRegistration::first();
    expect($registration->child_name)->toBe('Jane Doe')
        ->and($registration->email)->toBe('mary@example.com')
        ->and($registration->schedule)->toBe('5 days')
        ->and($registration->extended_care)->toBeTrue()
        ->and($registration->church_member)->toBeTrue();
});

it('requires all mandatory fields', function (string $field) {
    Livewire::test('clark-weekday-form')
        ->set('child_name', 'Jane Doe')
        ->set('child_dob', '2023-01-15')
        ->set('parent_names', 'Mary & James Doe')
        ->set('address_1', '123 Main St')
        ->set('city', 'Texarkana')
        ->set('state', 'AR')
        ->set('zip', '71854')
        ->set('email', 'mary@example.com')
        ->set('schedule', '5 days')
        ->set($field, '')
        ->call('submit')
        ->assertHasErrors($field);
})->with([
    'child_name',
    'child_dob',
    'parent_names',
    'address_1',
    'city',
    'state',
    'zip',
    'email',
    'schedule',
]);

it('rejects an invalid email', function () {
    Livewire::test('clark-weekday-form')
        ->set('email', 'not-an-email')
        ->call('submit')
        ->assertHasErrors(['email']);
});

it('rejects an invalid schedule option', function () {
    Livewire::test('clark-weekday-form')
        ->set('schedule', 'every day')
        ->call('submit')
        ->assertHasErrors(['schedule']);
});

it('rejects a future date of birth', function () {
    Livewire::test('clark-weekday-form')
        ->set('child_dob', now()->addYear()->format('Y-m-d'))
        ->call('submit')
        ->assertHasErrors(['child_dob']);
});

it('does not persist a record when validation fails', function () {
    Livewire::test('clark-weekday-form')
        ->call('submit');

    expect(ClarkWeekdayRegistration::count())->toBe(0);
});
