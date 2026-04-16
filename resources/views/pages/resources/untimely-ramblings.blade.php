<x-layouts.app title="Untimely Ramblings">
    <x-page-hero title="Untimely Ramblings" subtitle="Thoughts, reflections, and devotions from our church family." />

    <section class="py-16 sm:py-20">
        <div class="mx-auto max-w-6xl px-4 sm:px-6 lg:px-8">
            @if($ramblings->isEmpty())
                <p class="text-center text-lg text-gray-500">No ramblings yet. Check back soon.</p>
            @else
                @php $featured = $ramblings->first(); $rest = $ramblings->skip(1); @endphp

                {{-- Featured post --}}
                <a href="{{ route('resources.untimely-ramblings.show', $featured) }}" class="group block">
                    <div class="grid grid-cols-1 items-center gap-8 lg:grid-cols-2">
                        <div class="overflow-hidden rounded-md bg-neutral-100">
                            <div class="flex aspect-4/3 w-full items-center justify-center bg-gradient-to-br from-teal/10 to-teal/5">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-16 w-16 text-teal/30" fill="none" viewBox="0 0 24 24" stroke-width="1" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" d="M12 6.042A8.967 8.967 0 0 0 6 3.75c-1.052 0-2.062.18-3 .512v14.25A8.987 8.987 0 0 1 6 18c2.305 0 4.408.867 6 2.292m0-14.25a8.966 8.966 0 0 1 6-2.292c1.052 0 2.062.18 3 .512v14.25A8.987 8.987 0 0 0 18 18a8.967 8.967 0 0 0-6 2.292m0-14.25v14.25" /></svg>
                            </div>
                        </div>
                        <div>
                            <p class="text-sm font-semibold uppercase tracking-wider text-teal">{{ $featured->published_at->format('F j, Y') }}</p>
                            <h2 class="mt-3 text-2xl font-bold text-black group-hover:text-red sm:text-3xl">{{ $featured->title }}</h2>
                            <div class="mt-4 w-16 border-t-4 border-red"></div>
                            @if($featured->description)
                                <p class="mt-4 text-base leading-7 text-gray-600">{{ $featured->description }}</p>
                            @endif
                            <p class="mt-6 text-sm font-semibold text-red group-hover:underline">Read more &rarr;</p>
                        </div>
                    </div>
                </a>

                {{-- Remaining posts --}}
                @if($rest->isNotEmpty())
                    <div class="mt-14 border-t border-neutral-200 pt-14">
                        <div class="grid grid-cols-1 gap-8 sm:grid-cols-2">
                            @foreach($rest as $rambling)
                                <a href="{{ route('resources.untimely-ramblings.show', $rambling) }}" class="group block">
                                    <div class="overflow-hidden rounded-md bg-neutral-100">
                                        <div class="flex aspect-video w-full items-center justify-center bg-gradient-to-br from-teal/10 to-teal/5">
                                            <svg xmlns="http://www.w3.org/2000/svg" class="h-10 w-10 text-teal/30" fill="none" viewBox="0 0 24 24" stroke-width="1" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" d="M12 6.042A8.967 8.967 0 0 0 6 3.75c-1.052 0-2.062.18-3 .512v14.25A8.987 8.987 0 0 1 6 18c2.305 0 4.408.867 6 2.292m0-14.25a8.966 8.966 0 0 1 6-2.292c1.052 0 2.062.18 3 .512v14.25A8.987 8.987 0 0 0 18 18a8.967 8.967 0 0 0-6 2.292m0-14.25v14.25" /></svg>
                                        </div>
                                    </div>
                                    <p class="mt-4 text-sm font-semibold uppercase tracking-wider text-teal">{{ $rambling->published_at->format('F j, Y') }}</p>
                                    <h3 class="mt-2 text-lg font-bold text-black group-hover:text-red">{{ $rambling->title }}</h3>
                                    @if($rambling->description)
                                        <p class="mt-1 text-sm leading-6 text-gray-600">{{ $rambling->description }}</p>
                                    @endif
                                </a>
                            @endforeach
                        </div>
                    </div>
                @endif
            @endif
        </div>
    </section>
</x-layouts.app>
