<nav x-data="{ mobileOpen: false }" class="relative z-50 bg-white border-b border-light-gray">
    <div class="mx-auto max-w-7xl px-4 sm:px-6 lg:px-8">
        <div class="flex h-20 items-center justify-between">
            {{-- Logo / Church Name --}}
            <a href="{{ route('home') }}" class="flex items-center gap-3">
                <img src="{{ Storage::disk('r2')->url('fumc_v.png') }}" alt="FUMC Logo" class="h-20 w-auto">
            </a>

            {{-- Desktop Nav --}}
            <div class="hidden lg:flex lg:items-center lg:gap-1">
                <a href="{{ route('home') }}" class="px-3 py-2 text-sm font-medium text-black hover:text-red transition-colors {{ request()->routeIs('home') ? 'text-red' : '' }}">Home</a>

                {{-- Ministries Dropdown --}}
                <div x-data="{ open: false }" @mouseenter="open = true" @mouseleave="open = false" class="relative">
                    <button class="px-3 py-2 text-sm font-medium text-black hover:text-red transition-colors inline-flex items-center gap-1 {{ request()->routeIs('ministries.*') ? 'text-red' : '' }}">
                        Ministries
                        <svg class="h-4 w-4" fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" d="m19.5 8.25-7.5 7.5-7.5-7.5" /></svg>
                    </button>
                    <div x-show="open" x-transition.opacity class="absolute left-0 top-full mt-0 w-56 rounded bg-white py-2 shadow-lg ring-1 ring-black/5">
                        <span class="block px-4 py-2 text-sm text-gray-400">Adult <span class="text-xs">(Coming Soon)</span></span>
                        <a href="{{ route('ministries.children') }}" class="block px-4 py-2 text-sm text-black hover:bg-light-gray hover:text-red">Children</a>
                        <span class="block px-4 py-2 text-sm text-gray-400">Missions/Outreach <span class="text-xs">(Coming Soon)</span></span>
                        <a href="{{ route('ministries.organizations') }}" class="block px-4 py-2 text-sm text-black hover:bg-light-gray hover:text-red">Organizations</a>
                        <span class="block px-4 py-2 text-sm text-gray-400">Student <span class="text-xs">(Coming Soon)</span></span>
                        <a href="{{ route('ministries.worship-music') }}" class="block px-4 py-2 text-sm text-black hover:bg-light-gray hover:text-red">Worship & Music</a>
                    </div>
                </div>

                {{-- About Dropdown --}}
                <div x-data="{ open: false }" @mouseenter="open = true" @mouseleave="open = false" class="relative">
                    <button class="px-3 py-2 text-sm font-medium text-black hover:text-red transition-colors inline-flex items-center gap-1 {{ request()->routeIs('about.*') ? 'text-red' : '' }}">
                        About
                        <svg class="h-4 w-4" fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" d="m19.5 8.25-7.5 7.5-7.5-7.5" /></svg>
                    </button>
                    <div x-show="open" x-transition.opacity class="absolute left-0 top-full mt-0 w-48 rounded bg-white py-2 shadow-lg ring-1 ring-black/5">
                        <a href="{{ route('about.history') }}" class="block px-4 py-2 text-sm text-black hover:bg-light-gray hover:text-red">History</a>
                        <a href="{{ route('about.our-team') }}" class="block px-4 py-2 text-sm text-black hover:bg-light-gray hover:text-red">Our Team</a>
                        <a href="https://www.umc.org/en/who-we-are/what-we-believe" target="_blank" class="block px-4 py-2 text-sm text-black hover:bg-light-gray hover:text-red">What We Believe</a>
                    </div>
                </div>

                <a href="{{ route('being-the-church') }}" class="px-3 py-2 text-sm font-medium text-black hover:text-red transition-colors {{ request()->routeIs('being-the-church') ? 'text-red' : '' }}">Being the Church</a>

                {{-- Resources Dropdown --}}
                <div x-data="{ open: false }" @mouseenter="open = true" @mouseleave="open = false" class="relative">
                    <button class="px-3 py-2 text-sm font-medium text-black hover:text-red transition-colors inline-flex items-center gap-1 {{ request()->routeIs('resources.*') ? 'text-red' : '' }}">
                        Resources
                        <svg class="h-4 w-4" fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" d="m19.5 8.25-7.5 7.5-7.5-7.5" /></svg>
                    </button>
                    <div x-show="open" x-transition.opacity class="absolute left-0 top-full mt-0 w-48 rounded bg-white py-2 shadow-lg ring-1 ring-black/5">
                        <a href="{{ route('resources.the-happenings') }}" class="block px-4 py-2 text-sm text-black hover:bg-light-gray hover:text-red">The Happenings</a>
                        <a href="{{ route('ministries.upcoming-events') }}" class="block px-4 py-2 text-sm text-black hover:bg-light-gray hover:text-red">Upcoming Events</a>
                        <a href="{{ route('resources.untimely-ramblings') }}" class="block px-4 py-2 text-sm text-black hover:bg-light-gray hover:text-red">Untimely Ramblings</a>
                        <a href="{{ route('resources.videos') }}" class="block px-4 py-2 text-sm text-black hover:bg-light-gray hover:text-red">Videos</a>
                        <a href="{{ route('resources.weekly-bulletin') }}" class="block px-4 py-2 text-sm text-black hover:bg-light-gray hover:text-red">Weekly Bulletin</a>
                    </div>
                </div>

                <a href="{{ route('clark-weekday') }}" class="px-3 py-2 text-sm font-medium text-black hover:text-red transition-colors {{ request()->routeIs('clark-weekday') ? 'text-red' : '' }}">Clark Weekday</a>

                <a href="{{ route('contact') }}" class="ml-2 inline-flex items-center rounded bg-red px-4 py-2 text-sm font-semibold text-white hover:bg-red-dark transition-colors">Contact Us</a>
            </div>

            {{-- Mobile Menu Button --}}
            <button @click="mobileOpen = !mobileOpen" class="lg:hidden inline-flex items-center justify-center rounded p-2 text-black hover:text-red">
                <svg x-show="!mobileOpen" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" d="M3.75 6.75h16.5M3.75 12h16.5m-16.5 5.25h16.5" /></svg>
                <svg x-show="mobileOpen" x-cloak class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" d="M6 18 18 6M6 6l12 12" /></svg>
            </button>
        </div>
    </div>

    {{-- Mobile Menu --}}
    <div x-show="mobileOpen" x-cloak x-transition class="lg:hidden border-t border-light-gray bg-white">
        <div class="space-y-1 px-4 py-4">
            <a href="{{ route('home') }}" class="block rounded px-3 py-2 text-base font-medium hover:bg-light-gray hover:text-red">Home</a>

            {{-- Ministries --}}
            <div x-data="{ open: false }">
                <button @click="open = !open" class="flex w-full items-center justify-between rounded px-3 py-2 text-base font-medium hover:bg-light-gray hover:text-red">
                    Ministries
                    <svg :class="open && 'rotate-180'" class="h-4 w-4 transition-transform" fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" d="m19.5 8.25-7.5 7.5-7.5-7.5" /></svg>
                </button>
                <div x-show="open" x-collapse class="ml-4 space-y-1">
                    <span class="block px-3 py-2 text-sm text-gray-400">Adult (Coming Soon)</span>
                    <a href="{{ route('ministries.children') }}" class="block rounded px-3 py-2 text-sm hover:bg-light-gray hover:text-red">Children</a>
                    <span class="block px-3 py-2 text-sm text-gray-400">Missions/Outreach (Coming Soon)</span>
                    <a href="{{ route('ministries.organizations') }}" class="block rounded px-3 py-2 text-sm hover:bg-light-gray hover:text-red">Organizations</a>
                    <span class="block px-3 py-2 text-sm text-gray-400">Student (Coming Soon)</span>
                    <a href="{{ route('ministries.worship-music') }}" class="block rounded px-3 py-2 text-sm hover:bg-light-gray hover:text-red">Worship & Music</a>
                </div>
            </div>

            {{-- About --}}
            <div x-data="{ open: false }">
                <button @click="open = !open" class="flex w-full items-center justify-between rounded px-3 py-2 text-base font-medium hover:bg-light-gray hover:text-red">
                    About
                    <svg :class="open && 'rotate-180'" class="h-4 w-4 transition-transform" fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" d="m19.5 8.25-7.5 7.5-7.5-7.5" /></svg>
                </button>
                <div x-show="open" x-collapse class="ml-4 space-y-1">
                    <a href="{{ route('about.history') }}" class="block rounded px-3 py-2 text-sm hover:bg-light-gray hover:text-red">History</a>
                    <a href="{{ route('about.our-team') }}" class="block rounded px-3 py-2 text-sm hover:bg-light-gray hover:text-red">Our Team</a>
                    <a href="https://www.umc.org/en/who-we-are/what-we-believe" target="_blank" class="block rounded px-3 py-2 text-sm hover:bg-light-gray hover:text-red">What We Believe</a>
                </div>
            </div>

            <a href="{{ route('being-the-church') }}" class="block rounded px-3 py-2 text-base font-medium hover:bg-light-gray hover:text-red">Being the Church</a>

            {{-- Resources --}}
            <div x-data="{ open: false }">
                <button @click="open = !open" class="flex w-full items-center justify-between rounded px-3 py-2 text-base font-medium hover:bg-light-gray hover:text-red">
                    Resources
                    <svg :class="open && 'rotate-180'" class="h-4 w-4 transition-transform" fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" d="m19.5 8.25-7.5 7.5-7.5-7.5" /></svg>
                </button>
                <div x-show="open" x-collapse class="ml-4 space-y-1">
                    <a href="{{ route('resources.the-happenings') }}" class="block rounded px-3 py-2 text-sm hover:bg-light-gray hover:text-red">The Happenings</a>
                    <a href="{{ route('ministries.upcoming-events') }}" class="block rounded px-3 py-2 text-sm hover:bg-light-gray hover:text-red">Upcoming Events</a>
                    <a href="{{ route('resources.untimely-ramblings') }}" class="block rounded px-3 py-2 text-sm hover:bg-light-gray hover:text-red">Untimely Ramblings</a>
                    <a href="{{ route('resources.videos') }}" class="block rounded px-3 py-2 text-sm hover:bg-light-gray hover:text-red">Videos</a>
                    <a href="{{ route('resources.weekly-bulletin') }}" class="block rounded px-3 py-2 text-sm hover:bg-light-gray hover:text-red">Weekly Bulletin</a>
                </div>
            </div>

            <a href="{{ route('clark-weekday') }}" class="block rounded px-3 py-2 text-base font-medium hover:bg-light-gray hover:text-red">Clark Weekday</a>

            <a href="{{ route('contact') }}" class="mt-2 block rounded bg-red px-3 py-2 text-center text-base font-semibold text-white hover:bg-red-dark">Contact Us</a>
        </div>
    </div>
</nav>
