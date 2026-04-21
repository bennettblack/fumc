<?php

namespace App\View\Components\Home;

use App\Models\Event;
use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\Support\Collection;
use Illuminate\View\Component;

class UpcomingEvents extends Component
{
    public Collection $events;

    public function __construct()
    {
        $this->events = Event::query()
            ->where('starts_at', '>=', today()->toDateString())
            ->orderBy('starts_at')
            ->limit(3)
            ->get();
    }

    public function render(): View|Closure|string
    {
        return view('components.home.upcoming-events');
    }

    public function shouldRender(): bool
    {
        return $this->events->isNotEmpty();
    }
}
