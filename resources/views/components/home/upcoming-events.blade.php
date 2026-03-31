<section class="py-16 sm:py-24">
    <div class="mx-auto max-w-7xl px-4 sm:px-6 lg:px-8">
        <div class="text-center">
            <p class="text-sm font-semibold uppercase tracking-wider text-teal">What's Happening</p>
            <h2 class="mt-2 text-3xl font-bold tracking-tight text-black sm:text-4xl">Upcoming Events</h2>
            <div class="mx-auto mt-4 w-24 border-t-4 border-teal"></div>
        </div>

        <div class="mt-12 grid grid-cols-1 gap-6 md:grid-cols-2 lg:grid-cols-3">
            {{-- Placeholder event cards — replace with dynamic content --}}
            <div class="group flex gap-5 rounded-md border border-gray-200 bg-white p-5 transition-shadow hover:shadow-md">
                <div class="shrink-0 text-center">
                    <p class="text-3xl font-bold leading-none text-red">6</p>
                    <p class="mt-1 text-xs font-semibold uppercase tracking-wider text-gray-500">Apr</p>
                </div>
                <div>
                    <h3 class="text-base font-bold text-black">Palm Sunday Service</h3>
                    <p class="mt-0.5 text-sm font-medium text-teal">10:30 AM</p>
                    <p class="mt-2 text-sm leading-relaxed text-gray-600">Join us as we celebrate Jesus' triumphal entry into Jerusalem with a special worship service.</p>
                </div>
            </div>

            <div class="group flex gap-5 rounded-md border border-gray-200 bg-white p-5 transition-shadow hover:shadow-md">
                <div class="shrink-0 text-center">
                    <p class="text-3xl font-bold leading-none text-red">10</p>
                    <p class="mt-1 text-xs font-semibold uppercase tracking-wider text-gray-500">Apr</p>
                </div>
                <div>
                    <h3 class="text-base font-bold text-black">Maundy Thursday</h3>
                    <p class="mt-0.5 text-sm font-medium text-teal">6:00 PM</p>
                    <p class="mt-2 text-sm leading-relaxed text-gray-600">A reflective evening service commemorating the Last Supper with communion.</p>
                </div>
            </div>

            <div class="group flex gap-5 rounded-md border border-gray-200 bg-white p-5 transition-shadow hover:shadow-md">
                <div class="shrink-0 text-center">
                    <p class="text-3xl font-bold leading-none text-red">13</p>
                    <p class="mt-1 text-xs font-semibold uppercase tracking-wider text-gray-500">Apr</p>
                </div>
                <div>
                    <h3 class="text-base font-bold text-black">Easter Sunday</h3>
                    <p class="mt-0.5 text-sm font-medium text-teal">10:30 AM</p>
                    <p class="mt-2 text-sm leading-relaxed text-gray-600">Celebrate the resurrection of Christ with our Easter worship celebration.</p>
                </div>
            </div>
        </div>

        <div class="mt-10 text-center">
            <a href="{{ route('ministries.upcoming-events') }}" class="inline-flex items-center gap-2 rounded bg-red px-6 py-3 text-sm font-semibold text-white shadow-sm transition-colors hover:bg-red-dark">
                View All Events
                <svg xmlns="http://www.w3.org/2000/svg" class="size-4" viewBox="0 0 20 20" fill="currentColor"><path fill-rule="evenodd" d="M7.21 14.77a.75.75 0 01.02-1.06L11.168 10 7.23 6.29a.75.75 0 111.04-1.08l4.5 4.25a.75.75 0 010 1.08l-4.5 4.25a.75.75 0 01-1.06-.02z" clip-rule="evenodd" /></svg>
            </a>
        </div>
    </div>
</section>
