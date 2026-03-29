<?php

namespace App\View\Components\Home;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\Support\Facades\Cache;
use Illuminate\Support\Facades\Http;
use Illuminate\View\Component;

class LatestVideo extends Component
{
    public ?string $videoId = null;

    public ?string $title = null;

    public function __construct()
    {
        $video = Cache::remember('vimeo:latest-video', now()->addHours(12), function () {
            $response = Http::get('https://vimeo.com/user98189407/videos/rss');

            if ($response->failed()) {
                return null;
            }

            $xml = simplexml_load_string($response->body());

            if (! $xml || empty($xml->channel->item)) {
                return null;
            }

            if (count($xml->channel->item) < 2) {
                return null;
            }

            $item = $xml->channel->item[1];
            $link = (string) $item->link;

            preg_match('/vimeo\.com\/(\d+)/', $link, $matches);

            return [
                'id' => $matches[1] ?? null,
                'title' => (string) $item->title,
            ];
        });

        $this->videoId = $video['id'] ?? null;
        $this->title = $video['title'] ?? null;
    }

    public function render(): View|Closure|string
    {
        return view('components.home.latest-video');
    }

    public function shouldRender(): bool
    {
        return $this->videoId !== null;
    }
}
