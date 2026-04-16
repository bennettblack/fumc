<x-layouts.app title="Weekly Bulletin">
    <x-page-hero title="Weekly Bulletin" subtitle="View our latest weekly bulletin" />

    <section class="py-16 sm:py-20">
        <div class="mx-auto max-w-4xl px-4 sm:px-6 lg:px-8">
            @if($bulletins->isEmpty())
                <p class="text-center text-lg text-gray-500">No bulletins yet. Check back soon.</p>
            @else
                <div class="space-y-4">
                    @foreach($bulletins as $bulletin)
                        <div class="flex items-center justify-between rounded-md border border-neutral-200 bg-white px-6 py-4">
                            <div>
                                <h3 class="text-lg font-bold text-black">{{ $bulletin->title }}</h3>
                                <p class="mt-1 text-sm text-gray-500">{{ $bulletin->published_at->format('F j, Y') }}</p>
                            </div>
                            @if($bulletin->file_name)
                                <a href="{{ Storage::disk('r2')->url($bulletin->file_name) }}" target="_blank" class="inline-flex items-center gap-2 rounded bg-teal px-4 py-2 text-sm font-semibold text-white transition hover:bg-teal-dark">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4" fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" d="M3 16.5v2.25A2.25 2.25 0 0 0 5.25 21h13.5A2.25 2.25 0 0 0 21 18.75V16.5M16.5 12 12 16.5m0 0L7.5 12m4.5 4.5V3" /></svg>
                                    Download
                                </a>
                            @endif
                        </div>
                    @endforeach
                </div>
            @endif
        </div>
    </section>
</x-layouts.app>
