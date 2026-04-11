@props(['code', 'title', 'message'])

<x-layouts.app :title="$title">
    <x-page-hero :title="$title">
        <p class="mt-4 font-display text-6xl italic leading-none text-white sm:text-7xl">{{ $code }}</p>
    </x-page-hero>

    <section class="bg-teal/5 py-16 sm:py-20">
        <div class="mx-auto max-w-2xl px-4 sm:px-6 lg:px-8">
            <div class="rounded-md border border-neutral-200 bg-white p-8 text-center shadow-sm sm:p-12">
                <p class="text-base leading-7 text-neutral-700 sm:text-lg">{{ $message }}</p>

                <div class="mt-8 flex flex-wrap items-center justify-center gap-3">
                    <a href="{{ route('home') }}"
                       class="inline-flex items-center rounded bg-red px-6 py-3 text-sm font-semibold text-white transition hover:bg-red-dark">
                        Return home
                    </a>
                    <a href="{{ route('contact') }}"
                       class="inline-flex items-center rounded border border-neutral-300 px-6 py-3 text-sm font-semibold text-neutral-700 transition hover:border-teal hover:text-teal">
                        Contact us
                    </a>
                </div>
            </div>
        </div>
    </section>
</x-layouts.app>
