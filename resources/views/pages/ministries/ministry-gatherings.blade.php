<x-layouts.app title="Ministry Gatherings">
    <x-page-hero title="Ministry Gatherings" subtitle="Community groups within our church family serving, connecting, and growing together in faith." />

    <section class="py-16 sm:py-20">
        <div class="mx-auto max-w-6xl px-4 sm:px-6 lg:px-8">
            @if($gatherings->isEmpty())
                <p class="text-center text-lg text-gray-500">Ministry gatherings coming soon.</p>
            @else
                <div class="grid grid-cols-1 gap-x-10 gap-y-14 md:grid-cols-2">
                    @foreach($gatherings as $gathering)
                        <article>
                            <div class="overflow-hidden rounded-md bg-neutral-100">
                                @if($gathering->image)
                                    <img src="{{ Storage::disk('r2')->url($gathering->image) }}" alt="{{ $gathering->name }}" class="aspect-4/3 w-full object-cover">
                                @else
                                    <div class="flex aspect-4/3 w-full items-center justify-center text-neutral-300">
                                        <svg xmlns="http://www.w3.org/2000/svg" class="h-20 w-20" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="1">
                                            <path stroke-linecap="round" stroke-linejoin="round" d="M2.25 15.75l5.159-5.159a2.25 2.25 0 013.182 0l5.159 5.159m-1.5-1.5l1.409-1.409a2.25 2.25 0 013.182 0l2.909 2.909m-18 3.75h16.5a1.5 1.5 0 001.5-1.5V6a1.5 1.5 0 00-1.5-1.5H3.75A1.5 1.5 0 002.25 6v12a1.5 1.5 0 001.5 1.5zm10.5-11.25h.008v.008h-.008V8.25zm.375 0a.375.375 0 11-.75 0 .375.375 0 01.75 0z" />
                                        </svg>
                                    </div>
                                @endif
                            </div>

                            <h2 class="mt-6 text-2xl font-bold text-black">{{ $gathering->name }}</h2>
                            <div class="mt-3 w-16 border-t-4 border-red"></div>
                            <div class="prose prose-gray mt-4 max-w-none text-base leading-7 text-gray-600">{!! $gathering->description !!}</div>
                            <p class="mt-5 text-sm text-gray-500">
                                <span class="font-semibold uppercase tracking-wider text-red">Contact</span>
                                <span class="ml-2">{{ $gathering->contact }}</span>
                            </p>
                        </article>
                    @endforeach
                </div>
            @endif
        </div>
    </section>
</x-layouts.app>
