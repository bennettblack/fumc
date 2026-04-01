<x-layouts.app title="Our Team">
    <x-page-hero title="Our Team" subtitle="Our ministry team is dedicated to making disciples of Jesus Christ through nurture, education, mission, outreach, and worship. We invite you to First United Methodist Church and look forward to developing a close relationship with you." />

    @if($team->isEmpty())
        <section class="py-16">
            <p class="text-center text-lg text-gray-500">Team members coming soon.</p>
        </section>
    @else
        <div class="divide-y divide-gray-100">
            @foreach($team as $member)
                <section class="{{ $loop->even ? 'bg-teal/5' : 'bg-white' }}">
                    <div class="mx-auto max-w-5xl px-4 py-14 sm:px-6 sm:py-16 lg:px-8">
                        <div class="flex flex-col items-center gap-8 sm:gap-12 {{ $loop->even ? 'sm:flex-row-reverse' : 'sm:flex-row' }}">
                            <div class="relative shrink-0">
                                <div class="absolute -bottom-3 {{ $loop->even ? '-left-3' : '-right-3' }} hidden aspect-[3/4] w-56 rounded-md bg-gray-200 sm:block sm:w-64"></div>
                                <div class="relative aspect-[3/4] w-56 overflow-hidden rounded-md sm:w-64">
                                    @if($member->image)
                                        <img src="{{ Storage::disk('r2')->url($member->image) }}" alt="{{ $member->name }}" class="h-full w-full object-cover">
                                    @else
                                        <div class="flex h-full w-full items-center justify-center bg-light-gray">
                                            <svg xmlns="http://www.w3.org/2000/svg" class="size-16 text-gray-300" viewBox="0 0 20 20" fill="currentColor"><path fill-rule="evenodd" d="M10 9a3 3 0 100-6 3 3 0 000 6zm-7 9a7 7 0 1114 0H3z" clip-rule="evenodd" /></svg>
                                        </div>
                                    @endif
                                </div>
                            </div>
                            <div class="text-center sm:text-left">
                                <p class="text-sm font-semibold uppercase tracking-wider text-red">{{ $member->title }}</p>
                                <h3 class="mt-1 text-2xl font-bold text-black">{{ $member->name }}</h3>
                                <div class="mx-auto mt-3 w-16 border-t-4 border-red sm:mx-0"></div>
                                @if($member->description)
                                    <div class="mt-4 prose prose-sm text-gray-600">{!! $member->description !!}</div>
                                @endif
                            </div>
                        </div>
                    </div>
                </section>
            @endforeach
        </div>
    @endif
</x-layouts.app>
