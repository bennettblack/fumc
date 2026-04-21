<x-layouts.app title="Upcoming Events">
    <x-page-hero title="Upcoming Events" subtitle="What's happening at FUMC" />

    <section class="py-16 sm:py-20">
        <div class="mx-auto max-w-4xl px-4 sm:px-6 lg:px-8">
            @if($events->isEmpty())
                <p class="text-center text-lg text-gray-500">No upcoming events. Check back soon.</p>
            @else
                <div class="space-y-4">
                    @foreach($events as $event)
                        <div class="flex flex-col gap-4 rounded-md border border-neutral-200 bg-white px-6 py-4 sm:flex-row sm:items-center sm:gap-6">
                            <div class="flex h-14 w-14 shrink-0 flex-col items-center justify-center rounded-md bg-teal/10 text-teal">
                                <span class="text-xs font-semibold uppercase leading-none">{{ $event->starts_at->format('M') }}</span>
                                <span class="text-xl font-bold leading-tight">{{ $event->starts_at->format('j') }}</span>
                            </div>
                            <div class="min-w-0 flex-1">
                                <h3 class="text-lg font-bold text-black">{{ $event->title }}</h3>
                                <p class="mt-1 text-sm text-gray-500">{{ $event->starts_at->format('l, F j, Y') }}</p>
                            </div>
                            <a href="{{ route('ministries.upcoming-events.ics', $event) }}" class="inline-flex shrink-0 items-center gap-2 rounded-full border border-red/40 bg-white px-4 py-1.5 text-xs font-semibold text-red transition hover:border-red hover:bg-red hover:text-white">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-3.5 w-3.5" fill="none" viewBox="0 0 24 24" stroke-width="1.75" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" d="M6.75 3v2.25M17.25 3v2.25M3 18.75V7.5a2.25 2.25 0 0 1 2.25-2.25h13.5A2.25 2.25 0 0 1 21 7.5v11.25m-18 0A2.25 2.25 0 0 0 5.25 21h13.5A2.25 2.25 0 0 0 21 18.75m-18 0v-7.5A2.25 2.25 0 0 1 5.25 9h13.5A2.25 2.25 0 0 1 21 11.25v7.5" /></svg>
                                Add to Calendar
                            </a>
                        </div>
                    @endforeach
                </div>
            @endif
        </div>
    </section>
</x-layouts.app>
