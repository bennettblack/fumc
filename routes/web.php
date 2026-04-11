<?php

use App\Models\Organization;
use App\Models\TeamMember;
use App\Services\VimeoFeed;
use Illuminate\Support\Facades\Route;

Route::view('/', 'pages.home')->name('home');

// Ministries
Route::view('/ministries/children', 'pages.ministries.children')->name('ministries.children');
Route::view('/ministries/worship-music', 'pages.ministries.worship-music')->name('ministries.worship-music');
Route::view('/ministries/upcoming-events', 'pages.ministries.upcoming-events')->name('ministries.upcoming-events');
Route::get('/ministries/ministry-gatherings', fn () => view('pages.ministries.ministry-gatherings', ['gatherings' => Organization::all()]))->name('ministries.ministry-gatherings');

// About
Route::get('/about/our-team', fn () => view('pages.about.our-team', ['team' => TeamMember::orderBy('sort_order')->get()]))->name('about.our-team');
Route::view('/about/history', 'pages.about.history')->name('about.history');

// Standalone pages
Route::view('/being-the-church', 'pages.being-the-church')->name('being-the-church');
Route::view('/clark-weekday', 'pages.clark-weekday')->name('clark-weekday');
Route::view('/contact', 'pages.contact')->name('contact');

// Resources
Route::view('/resources/the-happenings', 'pages.resources.the-happenings')->name('resources.the-happenings');
Route::view('/resources/untimely-ramblings', 'pages.resources.untimely-ramblings')->name('resources.untimely-ramblings');
Route::get('/resources/videos', fn () => view('pages.resources.videos', ['videos' => VimeoFeed::videos()]))->name('resources.videos');
Route::view('/resources/weekly-bulletin', 'pages.resources.weekly-bulletin')->name('resources.weekly-bulletin');
