<?php

use App\Services\WebpImageConverter;
use Illuminate\Http\UploadedFile;
use Illuminate\Support\Facades\Storage;

it('encodes a PNG upload as WebP on the given disk', function () {
    Storage::fake('r2');

    $png = UploadedFile::fake()->image('rambling.png', 600, 400);

    $path = WebpImageConverter::store($png, 'untimely-ramblings');

    expect($path)
        ->toStartWith('untimely-ramblings/')
        ->toEndWith('.webp');

    Storage::disk('r2')->assertExists($path);

    // A valid WebP file starts with "RIFF" and has "WEBP" at byte offset 8.
    $bytes = Storage::disk('r2')->get($path);
    expect(substr($bytes, 0, 4))->toBe('RIFF');
    expect(substr($bytes, 8, 4))->toBe('WEBP');
});

it('respects the disk argument', function () {
    Storage::fake('local');

    $png = UploadedFile::fake()->image('team.png', 300, 400);

    $path = WebpImageConverter::store($png, 'team', disk: 'local');

    Storage::disk('local')->assertExists($path);
});
