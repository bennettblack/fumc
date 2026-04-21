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

test('ics download returns all-day calendar entry for event', function () {
    $event = Event::factory()->create([
        'title' => 'Easter Egg Hunt',
        'starts_at' => '2026-05-15',
    ]);

    $response = $this->get(route('ministries.upcoming-events.ics', $event));

    $response->assertOk()
        ->assertHeader('Content-Type', 'text/calendar; charset=utf-8')
        ->assertHeader('Content-Disposition', 'attachment; filename="easter-egg-hunt.ics"');

    expect($response->getContent())
        ->toContain('BEGIN:VCALENDAR')
        ->toContain('SUMMARY:Easter Egg Hunt')
        ->toContain('DTSTART;VALUE=DATE:20260515')
        ->toContain('DTEND;VALUE=DATE:20260516')
        ->toContain('END:VCALENDAR');
});

test('ics escapes special characters in title', function () {
    $event = Event::factory()->create([
        'title' => 'Fish Fry; BBQ, Bingo',
        'starts_at' => '2026-06-01',
    ]);

    $response = $this->get(route('ministries.upcoming-events.ics', $event));

    expect($response->getContent())->toContain('SUMMARY:Fish Fry\\; BBQ\\, Bingo');
});
