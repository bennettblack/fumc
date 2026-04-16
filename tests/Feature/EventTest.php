<?php

use App\Models\Event;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Support\Carbon;

uses(RefreshDatabase::class);

test('upcoming events page loads successfully', function () {
    $this->get(route('ministries.upcoming-events'))->assertStatus(200);
});

test('upcoming events page shows future events', function () {
    Event::factory()->create([
        'title' => 'Future Event',
        'starts_at' => now()->addWeek(),
    ]);

    Event::factory()->create([
        'title' => 'Past Event',
        'starts_at' => now()->subWeek(),
    ]);

    $this->get(route('ministries.upcoming-events'))
        ->assertSee('Future Event')
        ->assertDontSee('Past Event');
});

test('factory creates valid event', function () {
    $event = Event::factory()->create();

    expect($event->title)->toBeString()
        ->and($event->starts_at)->toBeInstanceOf(Carbon::class);
});
