@props(['title', 'subtitle' => null])

<section class="bg-black py-16 sm:py-24">
    <div class="mx-auto max-w-7xl px-4 sm:px-6 lg:px-8 text-center">
        <h1 class="text-3xl font-bold tracking-tight text-white sm:text-5xl">{{ $title }}</h1>
        @if($subtitle)
            <p class="mt-4 text-lg text-gray-400">{{ $subtitle }}</p>
        @endif
    </div>
</section>
