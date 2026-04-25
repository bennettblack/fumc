@props(['title', 'subtitle' => null])

<section class="bg-gradient-to-r from-teal to-teal-dark py-12 sm:py-16">
    <div class="mx-auto max-w-7xl px-4 text-center sm:px-6 lg:px-8">
        <h1 class="text-3xl font-bold tracking-tight text-white sm:text-4xl">{{ $title }}</h1>
        <div class="mx-auto mt-4 w-16 border-t-4 border-white/30"></div>
        @if($subtitle)
            <p class="mx-auto mt-4 max-w-3xl text-base leading-7 text-white/80">{!! $subtitle !!}</p>
        @endif
        {{ $slot }}
    </div>
</section>
