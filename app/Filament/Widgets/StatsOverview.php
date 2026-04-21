<?php

namespace App\Filament\Widgets;

use App\Models\Bulletin;
use App\Models\ContactSubmission;
use App\Models\Event;
use App\Models\UntimelyRambling;
use Filament\Support\Icons\Heroicon;
use Filament\Widgets\StatsOverviewWidget;
use Filament\Widgets\StatsOverviewWidget\Stat;

class StatsOverview extends StatsOverviewWidget
{
    protected static ?int $sort = 1;

    protected function getStats(): array
    {
        $nextEvent = Event::query()
            ->where('starts_at', '>=', today()->toDateString())
            ->orderBy('starts_at')
            ->first();

        $upcomingEvents = Event::query()
            ->where('starts_at', '>=', today()->toDateString())
            ->count();

        $weeklySubmissions = ContactSubmission::query()
            ->where('created_at', '>=', now()->subWeek())
            ->count();

        $submissionsByDay = collect(range(6, 0))
            ->map(fn (int $daysAgo) => ContactSubmission::query()
                ->whereDate('created_at', today()->subDays($daysAgo))
                ->count(),
            )
            ->all();

        return [
            Stat::make('Upcoming Events', $upcomingEvents)
                ->description($nextEvent ? 'Next: '.$nextEvent->starts_at->format('M j') : 'None scheduled')
                ->descriptionIcon(Heroicon::OutlinedCalendarDays)
                ->color($upcomingEvents > 0 ? 'info' : 'gray'),

            Stat::make('New Inquiries', $weeklySubmissions)
                ->description('Past 7 days')
                ->descriptionIcon(Heroicon::OutlinedEnvelope)
                ->chart($submissionsByDay)
                ->color($weeklySubmissions > 0 ? 'warning' : 'gray'),

            Stat::make('Published Ramblings', UntimelyRambling::published()->count())
                ->color('success'),

            Stat::make('Bulletins Posted', Bulletin::published()->count())
                ->color('success'),
        ];
    }
}
