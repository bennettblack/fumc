<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Cache;

class Setting extends Model
{
    protected $fillable = [
        'key',
        'value',
    ];

    private const CACHE_PREFIX = 'setting:';

    public static function get(string $key, ?string $default = null): ?string
    {
        return Cache::rememberForever(
            self::CACHE_PREFIX.$key,
            fn () => self::query()->where('key', $key)->value('value')
        ) ?? $default;
    }

    public static function set(string $key, ?string $value): void
    {
        self::query()->updateOrCreate(['key' => $key], ['value' => $value]);

        Cache::forget(self::CACHE_PREFIX.$key);
    }

    protected static function booted(): void
    {
        static::saved(fn (self $setting) => Cache::forget(self::CACHE_PREFIX.$setting->key));
        static::deleted(fn (self $setting) => Cache::forget(self::CACHE_PREFIX.$setting->key));
    }
}
