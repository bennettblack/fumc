<section class="py-16 sm:py-24">
    <div class="mx-auto max-w-7xl px-4 sm:px-6 lg:px-8">
        <div class="text-center">
            <p class="text-sm font-semibold uppercase tracking-wider text-teal">What's Happening</p>
            <h2 class="mt-2 text-3xl font-bold tracking-tight text-black sm:text-4xl">Upcoming Events</h2>
            <div class="mx-auto mt-4 w-24 border-t-4 border-teal"></div>
        </div>

        <div class="mt-12 grid grid-cols-1 gap-6 md:grid-cols-2 lg:grid-cols-3">
            @foreach($events as $event)
                <div class="flex flex-col gap-5 rounded-md border border-gray-200 bg-white p-5 transition-shadow hover:shadow-md">
                    <div class="flex gap-5">
                        <div class="shrink-0 text-center">
                            <p class="text-3xl font-bold leading-none text-red">{{ $event->starts_at->format('j') }}</p>
                            <p class="mt-1 text-xs font-semibold uppercase tracking-wider text-gray-500">{{ $event->starts_at->format('M') }}</p>
                        </div>
                        <div class="min-w-0">
                            <h3 class="text-base font-bold text-black">{{ $event->title }}</h3>
                            <p class="mt-0.5 text-sm font-medium text-teal">{{ $event->starts_at->format('l') }}</p>
                        </div>
                    </div>
                    <a href="{{ route('ministries.upcoming-events.ics', $event) }}" class="mt-auto inline-flex w-fit items-center gap-2 rounded-full border border-red/40 bg-white px-4 py-1.5 text-xs font-semibold text-red transition hover:border-red hover:bg-red hover:text-white">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-3.5 w-3.5" fill="none" viewBox="0 0 24 24" stroke-width="1.75" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" d="M6.75 3v2.25M17.25 3v2.25M3 18.75V7.5a2.25 2.25 0 0 1 2.25-2.25h13.5A2.25 2.25 0 0 1 21 7.5v11.25m-18 0A2.25 2.25 0 0 0 5.25 21h13.5A2.25 2.25 0 0 0 21 18.75m-18 0v-7.5A2.25 2.25 0 0 1 5.25 9h13.5A2.25 2.25 0 0 1 21 11.25v7.5" /></svg>
                        Add to Calendar
                    </a>
                </div>
            @endforeach
        </div>

        <div class="mt-10 text-center">
            <a href="{{ route('ministries.upcoming-events') }}" class="inline-flex items-center gap-2 rounded bg-red px-6 py-3 text-sm font-semibold text-white shadow-sm transition-colors hover:bg-red-dark">
                View All Events
                <svg xmlns="http://www.w3.org/2000/svg" class="size-4" viewBox="0 0 20 20" fill="currentColor"><path fill-rule="evenodd" d="M7.21 14.77a.75.75 0 01.02-1.06L11.168 10 7.23 6.29a.75.75 0 111.04-1.08l4.5 4.25a.75.75 0 010 1.08l-4.5 4.25a.75.75 0 01-1.06-.02z" clip-rule="evenodd" /></svg>
            </a>
        </div>
    </div>
</section>
