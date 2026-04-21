<x-layouts.app title="Untimely Ramblings">
    <x-page-hero title="Untimely Ramblings" subtitle="A journal of thoughts, reflections, and devotions from our church family." />

    <section class="py-16 sm:py-20">
        <div class="mx-auto max-w-4xl px-4 sm:px-6 lg:px-8">
            @if($ramblings->isEmpty())
                <p class="text-center text-lg text-gray-500">No ramblings yet. Check back soon.</p>
            @else
                @php
                    $featured = $ramblings->first();
                    $rest = $ramblings->skip(1);
                    $excerpt = fn ($body, $limit = 220) => \Illuminate\Support\Str::limit(trim(preg_replace('/\s+/', ' ', strip_tags($body))), $limit);
                @endphp

                {{-- Featured entry --}}
                <article class="relative overflow-hidden rounded-md bg-teal/5 px-6 py-10 sm:px-12 sm:py-14">
                    <span aria-hidden="true" class="pointer-events-none absolute -top-10 left-2 select-none font-display text-[10rem] leading-none text-teal/15 sm:-top-14 sm:left-6 sm:text-[14rem]">&ldquo;</span>
                    <a href="{{ route('resources.untimely-ramblings.show', $featured) }}" class="group relative block">
                        <p class="text-xs font-semibold uppercase tracking-widest text-teal">
                            Latest Entry
                            <span class="mx-2 text-teal/40">&bull;</span>
                            <span class="text-gray-500">{{ $featured->published_at->format('F j, Y') }}</span>
                        </p>
                        <h2 class="mt-5 font-display text-3xl font-bold leading-tight text-black transition group-hover:text-red sm:text-4xl">
                            {{ $featured->title }}
                        </h2>
                        <p class="mt-5 text-base leading-7 text-gray-700 sm:text-lg sm:leading-8">
                            {{ $excerpt($featured->body) }}
                        </p>
                        <p class="mt-6 inline-flex items-center gap-2 text-sm font-semibold text-red transition group-hover:gap-3">
                            Continue reading
                            <span aria-hidden="true">&rarr;</span>
                        </p>
                    </a>
                </article>

                {{-- Archive --}}
                @if($rest->isNotEmpty())
                    <div class="mt-20 border-t border-neutral-200 pt-16">
                        <p class="text-center text-sm font-semibold uppercase tracking-wider text-teal">From the Archive</p>
                        <div class="mx-auto mt-3 w-24 border-t-4 border-red"></div>

                        <ul class="mt-12 divide-y divide-neutral-200">
                            @foreach($rest as $rambling)
                                <li>
                                    <a href="{{ route('resources.untimely-ramblings.show', $rambling) }}" class="group grid grid-cols-1 gap-3 py-8 sm:grid-cols-12 sm:gap-8">
                                        <p class="text-xs font-semibold uppercase tracking-widest text-teal sm:col-span-3 sm:pt-2">
                                            {{ $rambling->published_at->format('F j, Y') }}
                                        </p>
                                        <div class="sm:col-span-9">
                                            <h3 class="font-display text-2xl font-bold leading-snug text-black transition group-hover:text-red sm:text-3xl">
                                                {{ $rambling->title }}
                                            </h3>
                                            <p class="mt-3 text-base leading-7 text-gray-600">{{ $excerpt($rambling->body, 160) }}</p>
                                            <p class="mt-4 inline-flex items-center gap-2 text-xs font-semibold uppercase tracking-widest text-red transition group-hover:gap-3">
                                                Read
                                                <span aria-hidden="true">&rarr;</span>
                                            </p>
                                        </div>
                                    </a>
                                </li>
                            @endforeach
                        </ul>
                    </div>
                @endif
            @endif
        </div>
    </section>
</x-layouts.app>
