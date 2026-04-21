<x-layouts.app :title="$rambling->title">
    <x-page-hero title="Untimely Ramblings" />

    <article class="py-16 sm:py-20">
        <div class="mx-auto max-w-3xl px-4 sm:px-6 lg:px-8">
            {{-- Header --}}
            <header class="text-center">
                <p class="text-sm font-semibold uppercase tracking-widest text-teal">{{ $rambling->published_at->format('F j, Y') }}</p>
                <h1 class="mt-4 font-display text-4xl font-bold leading-tight tracking-tight text-black sm:text-5xl">
                    {{ $rambling->title }}
                </h1>
                <div class="mx-auto mt-8 w-24 border-t-4 border-red"></div>
            </header>

            {{-- Body --}}
            <div class="prose prose-lg prose-gray mt-12 max-w-none [&_img]:max-w-lg [&_img]:h-auto [&_img]:mx-auto [&_img]:rounded-md">
                {!! $rambling->body !!}
            </div>

            {{-- Back link --}}
            <div class="mt-16 border-t border-neutral-200 pt-8 text-center">
                <a href="{{ route('resources.untimely-ramblings') }}" class="inline-flex items-center gap-2 text-sm font-semibold text-teal hover:text-teal-dark">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4" fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" d="M10.5 19.5 3 12m0 0 7.5-7.5M3 12h18" /></svg>
                    All Untimely Ramblings
                </a>
            </div>
        </div>
    </article>
</x-layouts.app>
