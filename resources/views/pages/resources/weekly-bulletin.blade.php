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
                                    <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" d="M2.036 12.322a1.012 1.012 0 0 1 0-.639C3.423 7.51 7.36 4.5 12 4.5c4.638 0 8.573 3.007 9.963 7.178.07.207.07.431 0 .639C20.577 16.49 16.64 19.5 12 19.5c-4.638 0-8.573-3.007-9.963-7.178Z" /><path stroke-linecap="round" stroke-linejoin="round" d="M15 12a3 3 0 1 1-6 0 3 3 0 0 1 6 0Z" /></svg>
                                    View
                                </a>
                            @endif
                        </div>
                    @endforeach
                </div>
            @endif
        </div>
    </section>
</x-layouts.app>
