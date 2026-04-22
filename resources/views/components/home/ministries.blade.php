<section class="bg-teal/5 py-16 sm:py-24">
    <div class="mx-auto max-w-7xl px-4 sm:px-6 lg:px-8">
        <div class="text-center">
            <p class="text-sm font-semibold uppercase tracking-wider text-teal">Get Involved</p>
            <h2 class="mt-2 text-3xl font-bold tracking-tight text-black sm:text-4xl">Our Ministries</h2>
            <div class="mx-auto mt-4 w-24 border-t-4 border-teal"></div>
        </div>

        {{-- Top row: 2 active ministries --}}
        <div class="mt-12 grid grid-cols-1 gap-6 sm:grid-cols-2">
            {{-- Children --}}
            <a href="{{ route('ministries.children') }}" class="group relative h-64 overflow-hidden rounded-md shadow-sm ring-1 ring-black/5 transition-shadow hover:shadow-lg">
                <img src="{{ Storage::disk('r2')->url('fumc_children_600_400.png') }}" alt="Children's Ministry" class="absolute inset-0 h-full w-full object-cover object-[center_35%] transition-transform group-hover:scale-105">
                <div class="absolute inset-0 bg-gradient-to-t from-black/70 via-black/30 to-transparent"></div>
                <div class="absolute inset-0 flex flex-col justify-end p-8">
                    <h3 class="text-2xl font-bold text-white">Children's Ministry</h3>
                    <p class="mt-2 text-sm text-white/80">Nurturing the faith of our youngest members through fun, fellowship, and learning.</p>
                </div>
            </a>

            {{-- Worship & Music --}}
            <a href="{{ route('ministries.worship-music') }}" class="group relative h-64 overflow-hidden rounded-md shadow-sm ring-1 ring-black/5 transition-shadow hover:shadow-lg">
                <img src="https://images.unsplash.com/photo-1510915361894-db8b60106cb1?w=600&h=400&fit=crop" alt="Worship & Music" class="absolute inset-0 h-full w-full object-cover transition-transform group-hover:scale-105">
                <div class="absolute inset-0 bg-gradient-to-t from-black/70 via-black/30 to-transparent"></div>
                <div class="absolute inset-0 flex flex-col justify-end p-8">
                    <h3 class="text-2xl font-bold text-white">Worship & Music</h3>
                    <p class="mt-2 text-sm text-white/80">Lifting our voices together in praise and worship every Sunday.</p>
                </div>
            </a>
        </div>

        {{-- Bottom row: 3 coming soon --}}
        <div class="mt-6 grid grid-cols-1 gap-6 sm:grid-cols-2 lg:grid-cols-4">
            {{-- Student (Coming Soon) --}}
            <div class="relative h-44 overflow-hidden rounded-md shadow-sm ring-1 ring-black/5">
                <img src="https://images.unsplash.com/photo-1529390079861-591de354faf5?w=600&h=400&fit=crop" alt="Student Ministry" class="absolute inset-0 h-full w-full object-cover grayscale">
                <div class="absolute inset-0 bg-gradient-to-t from-black/70 via-black/40 to-black/20"></div>
                <div class="absolute inset-0 flex flex-col justify-end p-6">
                    <h3 class="text-lg font-bold text-white">Youth Ministry</h3>
                    <p class="mt-1 text-sm text-white/70">Coming soon.</p>
                </div>
            </div>

            {{-- Adult (Coming Soon) --}}
            <div class="relative h-44 overflow-hidden rounded-md shadow-sm ring-1 ring-black/5">
                <img src="https://images.unsplash.com/photo-1511632765486-a01980e01a18?w=600&h=400&fit=crop" alt="Adult Ministry" class="absolute inset-0 h-full w-full object-cover grayscale">
                <div class="absolute inset-0 bg-gradient-to-t from-black/70 via-black/40 to-black/20"></div>
                <div class="absolute inset-0 flex flex-col justify-end p-6">
                    <h3 class="text-lg font-bold text-white">Adult Ministry</h3>
                    <p class="mt-1 text-sm text-white/70">Coming soon.</p>
                </div>
            </div>

            {{-- Missions/Outreach (Coming Soon) --}}
            <div class="relative h-44 overflow-hidden rounded-md shadow-sm ring-1 ring-black/5">
                <img src="https://images.unsplash.com/photo-1469571486292-0ba58a3f068b?w=600&h=400&fit=crop" alt="Missions/Outreach" class="absolute inset-0 h-full w-full object-cover grayscale">
                <div class="absolute inset-0 bg-gradient-to-t from-black/70 via-black/40 to-black/20"></div>
                <div class="absolute inset-0 flex flex-col justify-end p-6">
                    <h3 class="text-lg font-bold text-white">Missions/Outreach</h3>
                    <p class="mt-1 text-sm text-white/70">Coming soon.</p>
                </div>
            </div>

            {{-- Ministry Gatherings (Coming Soon) --}}
            <div class="relative h-44 overflow-hidden rounded-md shadow-sm ring-1 ring-black/5">
                <img src="https://images.unsplash.com/photo-1531206715517-5c0ba140b2b8?w=600&h=400&fit=crop" alt="Ministry Gatherings" class="absolute inset-0 h-full w-full object-cover grayscale">
                <div class="absolute inset-0 bg-gradient-to-t from-black/70 via-black/40 to-black/20"></div>
                <div class="absolute inset-0 flex flex-col justify-end p-6">
                    <h3 class="text-lg font-bold text-white">Ministry Gatherings</h3>
                    <p class="mt-1 text-sm text-white/70">Coming soon.</p>
                </div>
            </div>
        </div>
    </div>
</section>
