<section class="bg-light-gray py-16 sm:py-24">
    <div class="mx-auto max-w-7xl px-4 sm:px-6 lg:px-8">
        <div class="text-center">
            <p class="text-sm font-semibold uppercase tracking-wider text-teal">Watch</p>
            <h2 class="mt-2 text-3xl font-bold tracking-tight text-black sm:text-4xl">Latest Message</h2>
            <div class="mx-auto mt-4 w-24 border-t-4 border-teal"></div>
        </div>

        <div class="mx-auto mt-12 max-w-4xl">
            <div class="aspect-video overflow-hidden rounded-md shadow-lg">
                <iframe src="https://player.vimeo.com/video/{{ $videoId }}?dnt=1" class="h-full w-full" frameborder="0" allow="autoplay; fullscreen; picture-in-picture" allowfullscreen></iframe>
            </div>
            @if ($title)
                <p class="mt-4 text-center text-lg font-semibold text-black">{{ $title }}</p>
            @endif
        </div>
    </div>
</section>
