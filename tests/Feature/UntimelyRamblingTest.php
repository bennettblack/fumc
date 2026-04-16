<?php

use App\Models\UntimelyRambling;
use Illuminate\Foundation\Testing\RefreshDatabase;

uses(RefreshDatabase::class);

test('untimely ramblings index page loads successfully', function () {
    $this->get(route('resources.untimely-ramblings'))->assertStatus(200);
});

test('untimely ramblings index shows published ramblings', function () {
    UntimelyRambling::factory()->create([
        'title' => 'Published Rambling',
        'published_at' => now()->subDay(),
    ]);

    UntimelyRambling::factory()->create([
        'title' => 'Draft Rambling',
        'published_at' => null,
    ]);

    $this->get(route('resources.untimely-ramblings'))
        ->assertSee('Published Rambling')
        ->assertDontSee('Draft Rambling');
});

test('untimely ramblings show page displays published rambling', function () {
    $rambling = UntimelyRambling::factory()->create([
        'published_at' => now()->subDay(),
    ]);

    $this->get(route('resources.untimely-ramblings.show', $rambling))
        ->assertStatus(200)
        ->assertSee($rambling->title);
});

test('untimely ramblings show page returns 404 for unpublished', function () {
    $rambling = UntimelyRambling::factory()->create([
        'published_at' => null,
    ]);

    $this->get(route('resources.untimely-ramblings.show', $rambling))
        ->assertStatus(404);
});

test('published scope filters correctly', function () {
    UntimelyRambling::factory()->create(['published_at' => now()->subDay()]);
    UntimelyRambling::factory()->create(['published_at' => now()->addDay()]);
    UntimelyRambling::factory()->create(['published_at' => null]);

    expect(UntimelyRambling::published()->count())->toBe(1);
});
