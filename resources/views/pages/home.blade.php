<x-layouts.app>
    {{-- Hero --}}
    <section class="relative bg-black py-24 sm:py-32">
        <div class="mx-auto max-w-7xl px-4 sm:px-6 lg:px-8 text-center">
            <h1 class="text-4xl font-bold tracking-tight text-white sm:text-6xl">First United Methodist Church</h1>
            <p class="mt-6 text-lg text-gray-300">Open Hearts. Open Minds. Open Doors.</p>
            <div class="mt-10 flex items-center justify-center gap-4">
                <a href="{{ route('contact') }}" class="rounded-md bg-red px-6 py-3 text-sm font-semibold text-white shadow-sm hover:bg-red-dark transition-colors">Plan Your Visit</a>
                <a href="{{ route('ministries.upcoming-events') }}" class="rounded-md border border-white px-6 py-3 text-sm font-semibold text-white hover:bg-white hover:text-black transition-colors">Upcoming Events</a>
            </div>
        </div>
    </section>

    {{-- Welcome Section --}}
    <section class="py-16 sm:py-24">
        <div class="mx-auto max-w-7xl px-4 sm:px-6 lg:px-8">
            <div class="mx-auto max-w-3xl text-center">
                <h2 class="text-3xl font-bold tracking-tight text-black sm:text-4xl">Welcome Home</h2>
                <p class="mt-6 text-lg leading-8 text-gray-600">Whether you've been part of our family for years or are just discovering us, we're so glad you're here. At FUMC, you'll find a warm and welcoming community grounded in faith, service, and love.</p>
            </div>
        </div>
    </section>

    {{-- Quick Links Grid --}}
    <section class="bg-light-gray py-16 sm:py-24">
        <div class="mx-auto max-w-7xl px-4 sm:px-6 lg:px-8">
            <div class="grid grid-cols-1 gap-8 sm:grid-cols-2 lg:grid-cols-3">
                <a href="{{ route('ministries.children') }}" class="group rounded-lg bg-white p-8 shadow-sm hover:shadow-md transition-shadow">
                    <h3 class="text-lg font-semibold text-black group-hover:text-red transition-colors">Children's Ministry</h3>
                    <p class="mt-2 text-sm text-gray-600">Nurturing the faith of our youngest members through fun, fellowship, and learning.</p>
                </a>
                <a href="{{ route('ministries.worship-music') }}" class="group rounded-lg bg-white p-8 shadow-sm hover:shadow-md transition-shadow">
                    <h3 class="text-lg font-semibold text-black group-hover:text-red transition-colors">Worship & Music</h3>
                    <p class="mt-2 text-sm text-gray-600">Lifting our voices together in praise and worship every Sunday.</p>
                </a>
                <a href="{{ route('being-the-church') }}" class="group rounded-lg bg-white p-8 shadow-sm hover:shadow-md transition-shadow">
                    <h3 class="text-lg font-semibold text-black group-hover:text-teal transition-colors">Being the Church</h3>
                    <p class="mt-2 text-sm text-gray-600">Living out our faith beyond Sunday through service and community engagement.</p>
                </a>
            </div>
        </div>
    </section>

    {{-- CTA --}}
    <section class="py-16 sm:py-24">
        <div class="mx-auto max-w-7xl px-4 sm:px-6 lg:px-8 text-center">
            <h2 class="text-3xl font-bold tracking-tight text-black sm:text-4xl">Join Us This Sunday</h2>
            <p class="mt-4 text-lg text-gray-600">We'd love to see you. Come as you are.</p>
            <a href="{{ route('contact') }}" class="mt-8 inline-block rounded-md bg-teal px-6 py-3 text-sm font-semibold text-white shadow-sm hover:bg-teal-dark transition-colors">Get Directions & Service Times</a>
        </div>
    </section>
</x-layouts.app>
