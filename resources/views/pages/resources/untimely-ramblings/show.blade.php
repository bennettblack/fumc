<x-layouts.app :title="$rambling->title">
    <x-page-hero title="Untimely Ramblings" />

    <article class="py-16 sm:py-20">
        <div class="mx-auto max-w-3xl px-4 sm:px-6 lg:px-8">
            {{-- Header --}}
            <header>
                <p class="text-sm font-semibold uppercase tracking-wider text-teal">{{ $rambling->published_at->format('F j, Y') }}</p>
                <h1 class="mt-3 text-3xl font-bold tracking-tight text-black sm:text-4xl">{{ $rambling->title }}</h1>
                @if($rambling->description)
                    <p class="mt-4 text-lg leading-8 text-gray-600">{{ $rambling->description }}</p>
                @endif
                <div class="mt-6 w-16 border-t-4 border-red"></div>
            </header>

            {{-- Body --}}
            <div class="prose prose-lg prose-gray mt-10 max-w-none">
                {!! $rambling->body !!}
            </div>

            {{-- Back link --}}
            <div class="mt-12 border-t border-neutral-200 pt-8">
                <a href="{{ route('resources.untimely-ramblings') }}" class="inline-flex items-center gap-2 text-sm font-semibold text-teal hover:text-teal-dark">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4" fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" d="M10.5 19.5 3 12m0 0 7.5-7.5M3 12h18" /></svg>
                    All Untimely Ramblings
                </a>
            </div>
        </div>
    </article>
</x-layouts.app>
