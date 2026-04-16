<?php

use App\Models\Happening;
use Illuminate\Foundation\Testing\RefreshDatabase;

uses(RefreshDatabase::class);

test('happenings index page loads successfully', function () {
    $this->get(route('resources.the-happenings'))->assertStatus(200);
});

test('happenings index shows published happenings', function () {
    $published = Happening::factory()->create([
        'title' => 'Published Happening',
        'published_at' => now()->subDay(),
    ]);

    $draft = Happening::factory()->create([
        'title' => 'Draft Happening',
        'published_at' => null,
    ]);

    $this->get(route('resources.the-happenings'))
        ->assertSee('Published Happening')
        ->assertDontSee('Draft Happening');
});

test('published scope filters correctly', function () {
    Happening::factory()->create(['published_at' => now()->subDay()]);
    Happening::factory()->create(['published_at' => now()->addDay()]);
    Happening::factory()->create(['published_at' => null]);

    expect(Happening::published()->count())->toBe(1);
});
