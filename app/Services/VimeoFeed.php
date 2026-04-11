<?php

namespace App\Services;

use Carbon\CarbonImmutable;
use Illuminate\Support\Collection;
use Illuminate\Support\Facades\Cache;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Log;

class VimeoFeed
{
    private const FEED_URL = 'https://vimeo.com/user98189407/videos/rss';

    private const CACHE_KEY = 'vimeo:videos';

    private const CACHE_TTL_HOURS = 12;

    /**
     * Fetch the church's Vimeo uploads, newest first.
     *
     * The public RSS feed returns ~10 items with no pagination, and occasionally
     * includes a scheduled-livestream placeholder (duration=0, default-live thumbnail)
     * that we filter out so only real recordings are returned.
     *
     * @return Collection<int, array{id: string, title: string, player_url: string, thumbnail: string, published_at: CarbonImmutable, duration: int, description: string}>
     */
    public static function videos(): Collection
    {
        $cached = Cache::remember(
            self::CACHE_KEY,
            now()->addHours(self::CACHE_TTL_HOURS),
            fn () => self::fetch()
        );

        // Hydrate primitive cache entries into rich value types. The cache driver
        // has `serializable_classes => false`, so we must store only primitives.
        return collect($cached)->map(function (array $video): array {
            $video['published_at'] = CarbonImmutable::parse($video['published_at']);

            return $video;
        });
    }

    public static function flush(): void
    {
        Cache::forget(self::CACHE_KEY);
    }

    /**
     * Fetch and parse the RSS feed into an array of primitive-only rows,
     * suitable for caching under `serializable_classes => false`.
     *
     * @return array<int, array{id: string, title: string, player_url: string, thumbnail: string, published_at: string, duration: int, description: string}>
     */
    private static function fetch(): array
    {
        $response = Http::timeout(10)->get(self::FEED_URL);

        if ($response->failed()) {
            Log::warning('Vimeo feed fetch failed', ['status' => $response->status()]);

            return [];
        }

        $xml = @simplexml_load_string($response->body());

        if (! $xml || empty($xml->channel->item)) {
            return [];
        }

        $videos = [];

        foreach ($xml->channel->item as $item) {
            $parsed = self::parseItem($item);

            if ($parsed !== null) {
                $videos[] = $parsed;
            }
        }

        return $videos;
    }

    /**
     * @return array{id: string, title: string, player_url: string, thumbnail: string, published_at: string, duration: int, description: string}|null
     */
    private static function parseItem(\SimpleXMLElement $item): ?array
    {
        $link = (string) $item->link;

        if (! preg_match('/vimeo\.com\/(\d+)/', $link, $matches)) {
            return null;
        }

        $id = $matches[1];
        $media = $item->children('media', true)->content;

        if (! $media) {
            return null;
        }

        $duration = (int) $media->attributes()->duration;
        $playerUrl = (string) $media->children('media', true)->player->attributes()->url;
        $thumbnail = (string) $media->children('media', true)->thumbnail->attributes()->url;

        // Filter out scheduled-livestream placeholders.
        if ($duration === 0 || str_contains($thumbnail, 'default-live')) {
            return null;
        }

        return [
            'id' => $id,
            'title' => (string) $item->title,
            'player_url' => $playerUrl,
            'thumbnail' => $thumbnail,
            'published_at' => CarbonImmutable::parse((string) $item->pubDate)->toIso8601String(),
            'duration' => $duration,
            'description' => trim(html_entity_decode((string) $item->description, ENT_QUOTES | ENT_HTML5)),
        ];
    }
}
