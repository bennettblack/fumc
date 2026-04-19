<?php

namespace App\Services;

use Illuminate\Http\UploadedFile;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;
use Intervention\Image\Encoders\WebpEncoder;
use Intervention\Image\Laravel\Facades\Image;

class WebpImageConverter
{
    /**
     * Re-encode an uploaded image as WebP and store it on the given disk.
     *
     * Returns the stored path, formatted as "{directory}/{ulid}.webp".
     */
    public static function store(
        UploadedFile $file,
        string $directory,
        string $disk = 'r2',
        int $quality = 80,
    ): string {
        $path = $directory.'/'.Str::ulid().'.webp';

        $webp = Image::decode($file->getRealPath())
            ->encode(new WebpEncoder($quality));

        Storage::disk($disk)->put($path, (string) $webp);

        return $path;
    }
}
