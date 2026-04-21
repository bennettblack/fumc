<?php

use App\Models\Bulletin;
use App\Models\Event;
use App\Models\Happening;
use App\Models\Organization;
use App\Models\TeamMember;
use App\Models\UntimelyRambling;
use App\Services\VimeoFeed;
use Illuminate\Support\Facades\Route;

Route::view('/', 'pages.home')->name('home');

// Ministries
Route::view('/ministries/children', 'pages.ministries.children')->name('ministries.children');
Route::view('/ministries/worship-music', 'pages.ministries.worship-music')->name('ministries.worship-music');
Route::get('/ministries/upcoming-events', fn () => view('pages.ministries.upcoming-events', [
    'events' => Event::where('starts_at', '>=', today()->toDateString())->orderBy('starts_at')->get(),
]))->name('ministries.upcoming-events');
Route::get('/ministries/ministry-gatherings', fn () => view('pages.ministries.ministry-gatherings', ['gatherings' => Organization::all()]))->name('ministries.ministry-gatherings');

// About
Route::get('/about/our-team', fn () => view('pages.about.our-team', ['team' => TeamMember::orderBy('sort_order')->get()]))->name('about.our-team');
Route::view('/about/history', 'pages.about.history')->name('about.history');

// Standalone pages
Route::view('/being-the-church', 'pages.being-the-church')->name('being-the-church');
Route::view('/clark-weekday', 'pages.clark-weekday')->name('clark-weekday');
Route::view('/contact', 'pages.contact')->name('contact');

// Resources
Route::get('/resources/the-happenings', fn () => view('pages.resources.the-happenings', [
    'happenings' => Happening::published()->latest('published_at')->get(),
]))->name('resources.the-happenings');
Route::get('/resources/untimely-ramblings', fn () => view('pages.resources.untimely-ramblings', [
    'ramblings' => UntimelyRambling::published()->latest('published_at')->get(),
]))->name('resources.untimely-ramblings');
Route::get('/resources/untimely-ramblings/{untimelyRambling}', function (UntimelyRambling $untimelyRambling) {
    abort_unless($untimelyRambling->published_at?->lte(now()), 404);

    return view('pages.resources.untimely-ramblings.show', ['rambling' => $untimelyRambling]);
})->name('resources.untimely-ramblings.show');
Route::get('/resources/videos', fn () => view('pages.resources.videos', ['videos' => VimeoFeed::videos()]))->name('resources.videos');
Route::get('/resources/weekly-bulletin', fn () => view('pages.resources.weekly-bulletin', [
    'bulletins' => Bulletin::published()->latest('published_at')->get(),
]))->name('resources.weekly-bulletin');
