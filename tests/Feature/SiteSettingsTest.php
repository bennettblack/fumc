<?php

use App\Filament\Pages\SiteSettings;
use App\Models\Setting;
use App\Models\User;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Support\Facades\Http;
use Livewire\Livewire;

uses(RefreshDatabase::class);

beforeEach(function () {
    Http::fake([
        'vimeo.com/*' => Http::response('<rss><channel></channel></rss>', 200),
    ]);
});

test('Setting::get returns null when key is missing', function () {
    expect(Setting::get('missing_key'))->toBeNull();
});

test('Setting::set persists a value and Setting::get returns it', function () {
    Setting::set('featured_video_url', 'https://vimeo.com/123456789');

    expect(Setting::get('featured_video_url'))->toBe('https://vimeo.com/123456789');
});

test('Setting::set overwrites an existing value', function () {
    Setting::set('featured_video_url', 'https://vimeo.com/111');
    Setting::set('featured_video_url', 'https://vimeo.com/222');

    expect(Setting::get('featured_video_url'))->toBe('https://vimeo.com/222');
    expect(Setting::query()->where('key', 'featured_video_url')->count())->toBe(1);
});

test('home page does not render the featured video section when no URL is set', function () {
    $this->get('/')
        ->assertStatus(200)
        ->assertDontSee('Featured Video')
        ->assertDontSee('player.vimeo.com/video/', escape: false);
});

test('home page renders the featured video section when URL is set', function () {
    Setting::set('featured_video_url', 'https://vimeo.com/987654321');

    $this->get('/')
        ->assertStatus(200)
        ->assertSee('Featured Video')
        ->assertSee('player.vimeo.com/video/987654321', escape: false);
});

test('home page hides featured video section when URL is malformed', function () {
    Setting::set('featured_video_url', 'not-a-url');

    $this->get('/')
        ->assertStatus(200)
        ->assertDontSee('Featured Video');
});

test('admin can save a featured video URL through the settings page', function () {
    $user = User::factory()->create();

    $this->actingAs($user);

    Livewire::test(SiteSettings::class)
        ->fillForm(['featured_video_url' => 'https://vimeo.com/555000111'])
        ->call('save')
        ->assertHasNoFormErrors()
        ->assertNotified();

    expect(Setting::get('featured_video_url'))->toBe('https://vimeo.com/555000111');
});

test('settings page loads with the saved value pre-filled', function () {
    $user = User::factory()->create();
    Setting::set('featured_video_url', 'https://vimeo.com/42');

    $this->actingAs($user);

    Livewire::test(SiteSettings::class)
        ->assertOk()
        ->assertSchemaStateSet(['featured_video_url' => 'https://vimeo.com/42']);
});

test('settings page rejects a non-Vimeo URL', function () {
    $user = User::factory()->create();

    $this->actingAs($user);

    Livewire::test(SiteSettings::class)
        ->fillForm(['featured_video_url' => 'https://youtube.com/watch?v=abc'])
        ->call('save')
        ->assertHasFormErrors(['featured_video_url']);

    expect(Setting::get('featured_video_url'))->toBeNull();
});

test('clearFeaturedVideo removes the saved URL and empties the field', function () {
    $user = User::factory()->create();
    Setting::set('featured_video_url', 'https://vimeo.com/77');

    $this->actingAs($user);

    Livewire::test(SiteSettings::class)
        ->call('clearFeaturedVideo')
        ->assertNotified()
        ->assertSchemaStateSet(['featured_video_url' => null]);

    expect(Setting::get('featured_video_url'))->toBeNull();
});

test('clearing the URL hides the section on subsequent requests', function () {
    Setting::set('featured_video_url', 'https://vimeo.com/123');

    $this->get('/')->assertSee('Featured Video');

    Setting::set('featured_video_url', null);

    $this->get('/')->assertDontSee('Featured Video');
});
