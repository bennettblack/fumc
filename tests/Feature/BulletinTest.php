<?php

use App\Models\Bulletin;
use Illuminate\Foundation\Testing\RefreshDatabase;

uses(RefreshDatabase::class);

test('weekly bulletin page loads successfully', function () {
    $this->get(route('resources.weekly-bulletin'))->assertStatus(200);
});

test('weekly bulletin page shows published bulletins', function () {
    $published = Bulletin::factory()->create([
        'title' => 'Published Bulletin',
        'published_at' => now()->subDay(),
    ]);

    $draft = Bulletin::factory()->create([
        'title' => 'Draft Bulletin',
        'published_at' => null,
    ]);

    $this->get(route('resources.weekly-bulletin'))
        ->assertSee('Published Bulletin')
        ->assertDontSee('Draft Bulletin');
});

test('published scope filters correctly', function () {
    Bulletin::factory()->create(['published_at' => now()->subDay()]);
    Bulletin::factory()->create(['published_at' => now()->addDay()]);
    Bulletin::factory()->create(['published_at' => null]);

    expect(Bulletin::published()->count())->toBe(1);
});
