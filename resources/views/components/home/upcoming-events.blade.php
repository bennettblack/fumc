<section class="py-16 sm:py-24">
    <div class="mx-auto max-w-7xl px-4 sm:px-6 lg:px-8">
        <div class="text-center">
            <p class="text-sm font-semibold uppercase tracking-wider text-teal">What's Happening</p>
            <h2 class="mt-2 text-3xl font-bold tracking-tight text-black sm:text-4xl">Upcoming Events</h2>
            <div class="mx-auto mt-4 w-24 border-t-4 border-teal"></div>
        </div>

        <div class="mt-12 grid grid-cols-1 gap-6 md:grid-cols-2 lg:grid-cols-3">
            {{-- Placeholder event cards — replace with dynamic content --}}
            <div class="overflow-hidden rounded-xl bg-white shadow-sm ring-1 ring-black/5">
                <div class="bg-red px-6 py-3">
                    <p class="text-sm font-bold text-white">Sunday, April 6</p>
                </div>
                <div class="p-6">
                    <h3 class="text-lg font-semibold text-black">Palm Sunday Service</h3>
                    <p class="mt-1 text-sm text-gray-500">10:30 AM</p>
                    <p class="mt-3 text-sm leading-relaxed text-gray-600">Join us as we celebrate Jesus' triumphal entry into Jerusalem with a special worship service.</p>
                </div>
            </div>

            <div class="overflow-hidden rounded-xl bg-white shadow-sm ring-1 ring-black/5">
                <div class="bg-teal px-6 py-3">
                    <p class="text-sm font-bold text-white">Thursday, April 10</p>
                </div>
                <div class="p-6">
                    <h3 class="text-lg font-semibold text-black">Maundy Thursday</h3>
                    <p class="mt-1 text-sm text-gray-500">6:00 PM</p>
                    <p class="mt-3 text-sm leading-relaxed text-gray-600">A reflective evening service commemorating the Last Supper with communion.</p>
                </div>
            </div>

            <div class="overflow-hidden rounded-xl bg-white shadow-sm ring-1 ring-black/5">
                <div class="bg-red px-6 py-3">
                    <p class="text-sm font-bold text-white">Sunday, April 13</p>
                </div>
                <div class="p-6">
                    <h3 class="text-lg font-semibold text-black">Easter Sunday</h3>
                    <p class="mt-1 text-sm text-gray-500">10:30 AM</p>
                    <p class="mt-3 text-sm leading-relaxed text-gray-600">Celebrate the resurrection of Christ with our Easter worship celebration.</p>
                </div>
            </div>
        </div>

        <div class="mt-10 text-center">
            <a href="{{ route('ministries.upcoming-events') }}" class="inline-flex items-center gap-2 rounded-md bg-red px-6 py-3 text-sm font-semibold text-white shadow-sm transition-colors hover:bg-red-dark">
                View All Events
                <svg xmlns="http://www.w3.org/2000/svg" class="size-4" viewBox="0 0 20 20" fill="currentColor"><path fill-rule="evenodd" d="M7.21 14.77a.75.75 0 01.02-1.06L11.168 10 7.23 6.29a.75.75 0 111.04-1.08l4.5 4.25a.75.75 0 010 1.08l-4.5 4.25a.75.75 0 01-1.06-.02z" clip-rule="evenodd" /></svg>
            </a>
        </div>
    </div>
</section>
