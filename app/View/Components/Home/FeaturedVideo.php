<?php

namespace App\View\Components\Home;

use App\Models\Setting;
use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class FeaturedVideo extends Component
{
    public ?string $videoId = null;

    public function __construct()
    {
        $url = Setting::get('featured_video_url');

        if ($url && preg_match('/vimeo\.com\/(\d+)/', $url, $matches)) {
            $this->videoId = $matches[1];
        }
    }

    public function render(): View|Closure|string
    {
        return view('components.home.featured-video');
    }

    public function shouldRender(): bool
    {
        return $this->videoId !== null;
    }
}
