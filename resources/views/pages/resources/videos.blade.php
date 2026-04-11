<x-layouts.app title="Videos">
    <x-page-hero title="Videos" subtitle="Sermons, services, and special events from our church." />

    <section class="bg-teal/5 py-16 sm:py-24" x-data="{ playing: null }">
        <div class="mx-auto max-w-7xl px-4 sm:px-6 lg:px-8">
            @if($videos->isEmpty())
                <p class="text-center text-lg text-gray-500">Videos coming soon.</p>
            @else
                <div class="grid grid-cols-1 gap-6 sm:grid-cols-2 lg:grid-cols-3">
                    @foreach($videos as $video)
                        <button
                            type="button"
                            @click="playing = { id: '{{ $video['id'] }}', url: '{{ $video['player_url'] }}', title: @js($video['title']) }"
                            class="group overflow-hidden rounded-md bg-white text-left shadow-sm ring-1 ring-black/5 transition-shadow hover:shadow-md focus:outline-none focus-visible:ring-2 focus-visible:ring-teal"
                        >
                            <div class="relative aspect-video overflow-hidden bg-neutral-100">
                                <img
                                    src="{{ $video['thumbnail'] }}"
                                    alt="{{ $video['title'] }}"
                                    class="h-full w-full object-cover transition-transform duration-300 group-hover:scale-105"
                                    loading="lazy"
                                >
                                <div class="absolute inset-0 bg-gradient-to-t from-black/40 via-transparent to-transparent"></div>
                                <div class="absolute inset-0 flex items-center justify-center">
                                    <div class="flex h-14 w-14 items-center justify-center rounded-full bg-white/90 text-red shadow-md transition-transform duration-300 group-hover:scale-110">
                                        <svg xmlns="http://www.w3.org/2000/svg" class="ml-1 h-6 w-6" viewBox="0 0 20 20" fill="currentColor">
                                            <path d="M6.3 2.841A1.5 1.5 0 0 0 4 4.11v11.78a1.5 1.5 0 0 0 2.3 1.269l9.344-5.89a1.5 1.5 0 0 0 0-2.538L6.3 2.84Z" />
                                        </svg>
                                    </div>
                                </div>
                                @if($video['duration'])
                                    <span class="absolute bottom-2 right-2 rounded bg-black/70 px-2 py-0.5 text-xs font-medium text-white">
                                        {{ gmdate($video['duration'] >= 3600 ? 'G:i:s' : 'i:s', $video['duration']) }}
                                    </span>
                                @endif
                            </div>
                            <div class="p-5">
                                <h3 class="text-base font-bold text-black group-hover:text-red">{{ $video['title'] }}</h3>
                                <p class="mt-1 text-xs font-semibold uppercase tracking-wider text-teal">{{ $video['published_at']->format('F j, Y') }}</p>
                            </div>
                        </button>
                    @endforeach
                </div>
            @endif
        </div>

        {{-- Lightbox modal --}}
        <div
            x-show="playing"
            x-cloak
            x-transition.opacity
            @keydown.escape.window="playing = null"
            class="fixed inset-0 z-[60] flex items-center justify-center bg-black/80 p-4"
            @click.self="playing = null"
        >
            <div class="relative w-full max-w-5xl">
                <button
                    type="button"
                    @click="playing = null"
                    class="absolute -top-10 right-0 inline-flex items-center gap-1 text-sm font-medium text-white/80 hover:text-white"
                >
                    Close
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4" fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" d="M6 18 18 6M6 6l12 12" /></svg>
                </button>
                <div class="aspect-video overflow-hidden rounded-md bg-black shadow-2xl">
                    <template x-if="playing">
                        <iframe
                            :src="playing.url + (playing.url.includes('?') ? '&' : '?') + 'autoplay=1&dnt=1'"
                            :title="playing.title"
                            class="h-full w-full"
                            frameborder="0"
                            allow="autoplay; fullscreen; picture-in-picture"
                            allowfullscreen
                        ></iframe>
                    </template>
                </div>
            </div>
        </div>
    </section>
</x-layouts.app>
