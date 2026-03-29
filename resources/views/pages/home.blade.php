<x-layouts.app>

    <x-home.hero />

    <x-home.welcome />

    <x-home.ministries />

    <x-home.upcoming-events />

    {{-- CTA --}}
    <section class="py-16 sm:py-24">
        <div class="mx-auto max-w-7xl px-4 sm:px-6 lg:px-8 text-center">
            <h2 class="text-3xl font-bold tracking-tight text-black sm:text-4xl">Join Us This Sunday</h2>
            <p class="mt-4 text-lg text-gray-600">We'd love to see you. Come as you are.</p>
            <a href="{{ route('contact') }}" class="mt-8 inline-block rounded-md bg-teal px-6 py-3 text-sm font-semibold text-white shadow-sm hover:bg-teal-dark transition-colors">Get Directions & Service Times</a>
        </div>
    </section>
</x-layouts.app>
