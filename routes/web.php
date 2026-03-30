<?php

use App\Models\Organization;
use Illuminate\Support\Facades\Route;

Route::view('/', 'pages.home')->name('home');

// Ministries
Route::view('/ministries/children', 'pages.ministries.children')->name('ministries.children');
Route::view('/ministries/worship-music', 'pages.ministries.worship-music')->name('ministries.worship-music');
Route::view('/ministries/upcoming-events', 'pages.ministries.upcoming-events')->name('ministries.upcoming-events');
Route::get('/ministries/organizations', fn () => view('pages.ministries.organizations', ['organizations' => Organization::all()]))->name('ministries.organizations');

// About
Route::view('/about/our-team', 'pages.about.our-team')->name('about.our-team');
Route::view('/about/what-we-believe', 'pages.about.what-we-believe')->name('about.what-we-believe');
Route::view('/about/history', 'pages.about.history')->name('about.history');

// Standalone pages
Route::view('/being-the-church', 'pages.being-the-church')->name('being-the-church');
Route::view('/clark-weekday', 'pages.clark-weekday')->name('clark-weekday');
Route::view('/contact', 'pages.contact')->name('contact');

// Resources
Route::view('/resources/the-happenings', 'pages.resources.the-happenings')->name('resources.the-happenings');
Route::view('/resources/untimely-ramblings', 'pages.resources.untimely-ramblings')->name('resources.untimely-ramblings');
Route::view('/resources/videos', 'pages.resources.videos')->name('resources.videos');
Route::view('/resources/video-archive', 'pages.resources.video-archive')->name('resources.video-archive');
