<section class="relative h-[400px] sm:h-[550px] lg:h-[650px] overflow-hidden">
    <img src="{{ Storage::disk('r2')->url('church_ii.jpg') }}" alt="First United Methodist Church" class="absolute inset-0 h-full w-full object-cover object-center">
    <div class="absolute inset-0 bg-black/50"></div>
    <div class="relative flex h-full items-center justify-center">
        <div class="mx-auto max-w-7xl px-4 text-center sm:px-6 lg:px-8">
            <h1 class="text-4xl font-bold tracking-tight text-white sm:text-6xl">First United Methodist Church</h1>
            <div class="mx-auto mt-6 w-24 border-t-4 border-teal"></div>
            <p class="mt-6 text-xl font-light text-gray-200 sm:text-2xl">Serve Joyfully. Offering care and compassion to all.</p>
            <div class="mt-10 flex items-center justify-center gap-4">
                <a href="#" class="rounded bg-red px-6 py-3 text-sm font-semibold text-white shadow-sm transition-colors hover:bg-red-dark">Weekly Bulletin</a>
                <a href="{{ route('ministries.upcoming-events') }}" class="rounded border border-white px-6 py-3 text-sm font-semibold text-white transition-colors hover:bg-white hover:text-black">Upcoming Events</a>
            </div>
        </div>
    </div>
</section>
