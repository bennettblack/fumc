<?php

namespace App\View\Components\Home;

use App\Services\VimeoFeed;
use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class LatestVideo extends Component
{
    public ?string $videoId = null;

    public ?string $title = null;

    public function __construct()
    {
        $latest = VimeoFeed::videos()->first();

        $this->videoId = $latest['id'] ?? null;
        $this->title = $latest['title'] ?? null;
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
