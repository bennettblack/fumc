<x-layouts.app title="Organizations">
    <x-page-hero title="Organizations" subtitle="Community groups within our church family serving, connecting, and growing together in faith." />

    <section class="py-16 sm:py-24">
        <div class="mx-auto max-w-7xl px-4 sm:px-6 lg:px-8">
            @if($organizations->isEmpty())
                <p class="text-center text-lg text-gray-500">Organizations coming soon.</p>
            @else
                <div class="grid grid-cols-1 gap-6 sm:grid-cols-2 lg:grid-cols-3">
                    @foreach($organizations as $organization)
                        <div class="group overflow-hidden rounded-md bg-white shadow-sm ring-1 ring-black/5 transition-shadow hover:shadow-md">
                            @if($organization->image)
                                <img src="{{ Storage::disk('r2')->url($organization->image) }}" alt="{{ $organization->name }}" class="h-48 w-full object-cover">
                            @else
                                <div class="flex h-2 {{ $loop->iteration % 2 === 1 ? 'bg-teal' : 'bg-red' }}"></div>
                            @endif
                            <div class="p-6">
                                <div class="flex items-start gap-4">
                                    <div class="flex h-10 w-10 shrink-0 items-center justify-center rounded-full {{ $loop->iteration % 2 === 1 ? 'bg-teal/10 text-teal' : 'bg-red/10 text-red' }}">
                                        <svg xmlns="http://www.w3.org/2000/svg" class="size-5" viewBox="0 0 20 20" fill="currentColor"><path d="M13 6a3 3 0 11-6 0 3 3 0 016 0zM18 8a2 2 0 11-4 0 2 2 0 014 0zM14 15a4 4 0 00-8 0v3h8v-3zM6 8a2 2 0 11-4 0 2 2 0 014 0zM16 18v-3a5.972 5.972 0 00-.75-2.906A3.005 3.005 0 0119 15v3h-3zM4.75 12.094A5.973 5.973 0 004 15v3H1v-3a3 3 0 013.75-2.906z" /></svg>
                                    </div>
                                    <div>
                                        <h3 class="text-lg font-bold text-black">{{ $organization->name }}</h3>
                                        <p class="mt-1 text-xs font-semibold uppercase tracking-wider {{ $loop->iteration % 2 === 1 ? 'text-teal' : 'text-red' }}">{{ $organization->contact }}</p>
                                    </div>
                                </div>
                                <div class="mt-4 prose prose-sm text-gray-600">{!! $organization->description !!}</div>
                            </div>
                        </div>
                    @endforeach
                </div>
            @endif
        </div>
    </section>
</x-layouts.app>
