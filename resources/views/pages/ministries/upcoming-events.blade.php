<x-layouts.app title="Upcoming Events">
    <x-page-hero title="Upcoming Events" subtitle="What's happening at FUMC" />

    <section class="py-16 sm:py-20">
        <div class="mx-auto max-w-4xl px-4 sm:px-6 lg:px-8">
            @if($events->isEmpty())
                <p class="text-center text-lg text-gray-500">No upcoming events. Check back soon.</p>
            @else
                <div class="space-y-4">
                    @foreach($events as $event)
                        <div class="flex items-center gap-6 rounded-md border border-neutral-200 bg-white px-6 py-4">
                            <div class="flex h-14 w-14 shrink-0 flex-col items-center justify-center rounded-md bg-teal/10 text-teal">
                                <span class="text-xs font-semibold uppercase leading-none">{{ $event->starts_at->format('M') }}</span>
                                <span class="text-xl font-bold leading-tight">{{ $event->starts_at->format('j') }}</span>
                            </div>
                            <div>
                                <h3 class="text-lg font-bold text-black">{{ $event->title }}</h3>
                                <p class="mt-1 text-sm text-gray-500">{{ $event->starts_at->format('l, F j, Y') }}</p>
                            </div>
                        </div>
                    @endforeach
                </div>
            @endif
        </div>
    </section>
</x-layouts.app>
