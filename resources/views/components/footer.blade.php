<footer class="bg-neutral-900 text-white">
    <div class="mx-auto max-w-7xl px-4 py-12 sm:px-6 lg:px-8">
        {{-- Top row: Logo + Links --}}
        <div class="grid grid-cols-1 gap-8 md:grid-cols-2 lg:grid-cols-4">
            {{-- Church Identity --}}
            <div>
                <img src="{{ Storage::disk('r2')->url('cross-and-flame-footer.svg') }}" alt="FUMC" class="h-24 w-auto">
                <p class="mt-3 text-base font-bold text-white">First United Methodist Church</p>
                <p class="text-sm font-bold text-red">Texarkana, Arkansas</p>
            </div>

            {{-- Quick Links --}}
            <div>
                <h4 class="text-sm font-semibold uppercase tracking-wider text-teal">Quick Links</h4>
                <ul class="mt-4 space-y-2">
                    <li><a href="{{ route('about.our-team') }}" class="text-sm text-gray-300 hover:text-red transition-colors">Our Team</a></li>
                    <li><a href="{{ route('about.what-we-believe') }}" class="text-sm text-gray-300 hover:text-red transition-colors">What We Believe</a></li>
                    <li><a href="{{ route('ministries.upcoming-events') }}" class="text-sm text-gray-300 hover:text-red transition-colors">Upcoming Events</a></li>
                    <li><a href="{{ route('contact') }}" class="text-sm text-gray-300 hover:text-red transition-colors">Contact Us</a></li>
                </ul>
            </div>

            {{-- Ministries --}}
            <div>
                <h4 class="text-sm font-semibold uppercase tracking-wider text-teal">Ministries</h4>
                <ul class="mt-4 space-y-2">
                    <li><a href="{{ route('ministries.children') }}" class="text-sm text-gray-300 hover:text-red transition-colors">Children</a></li>
                    <li><a href="{{ route('ministries.worship-music') }}" class="text-sm text-gray-300 hover:text-red transition-colors">Worship & Music</a></li>
                    <li><a href="{{ route('clark-weekday') }}" class="text-sm text-gray-300 hover:text-red transition-colors">Clark Weekday</a></li>
                    <li><a href="{{ route('being-the-church') }}" class="text-sm text-gray-300 hover:text-red transition-colors">Being the Church</a></li>
                </ul>
            </div>

            {{-- Resources --}}
            <div>
                <h4 class="text-sm font-semibold uppercase tracking-wider text-teal">Resources</h4>
                <ul class="mt-4 space-y-2">
                    <li><a href="{{ route('resources.the-happenings') }}" class="text-sm text-gray-300 hover:text-red transition-colors">The Happenings</a></li>
                    <li><a href="{{ route('resources.untimely-ramblings') }}" class="text-sm text-gray-300 hover:text-red transition-colors">Untimely Ramblings</a></li>
                    <li><a href="{{ route('resources.videos') }}" class="text-sm text-gray-300 hover:text-red transition-colors">Videos</a></li>
                </ul>
            </div>
        </div>

        {{-- Info strip: Address + Service Times --}}
        <div class="mt-10 grid grid-cols-1 gap-4 border-t border-neutral-700 pt-8 sm:grid-cols-3">
            <div class="rounded-md border border-white/10 bg-white/5 px-6 py-5">
                <p class="flex items-center gap-1.5 text-xs font-semibold uppercase tracking-wider text-teal">
                    <svg xmlns="http://www.w3.org/2000/svg" class="size-4" viewBox="0 0 20 20" fill="currentColor"><path fill-rule="evenodd" d="M6 2a1 1 0 00-1 1v1H4a2 2 0 00-2 2v10a2 2 0 002 2h12a2 2 0 002-2V6a2 2 0 00-2-2h-1V3a1 1 0 10-2 0v1H7V3a1 1 0 00-1-1zm0 5a1 1 0 000 2h8a1 1 0 100-2H6z" clip-rule="evenodd" /></svg>
                    Sundays
                </p>
                <p class="mt-2 text-base font-medium text-white">9:30 — Sunday School</p>
                <p class="text-base font-medium text-white">10:30 — Worship Service</p>
            </div>
            <a href="https://maps.app.goo.gl/2Pobtw6FuyyqfoxN6" target="_blank" rel="noopener noreferrer" class="group rounded-md border border-white/10 bg-white/5 px-6 py-5 transition-colors hover:bg-white/10">
                <p class="flex items-center gap-1.5 text-xs font-semibold uppercase tracking-wider text-teal">
                    <svg xmlns="http://www.w3.org/2000/svg" class="size-4" viewBox="0 0 20 20" fill="currentColor"><path fill-rule="evenodd" d="M5.05 4.05a7 7 0 119.9 9.9L10 18.9l-4.95-4.95a7 7 0 010-9.9zM10 11a2 2 0 100-4 2 2 0 000 4z" clip-rule="evenodd" /></svg>
                    Address
                </p>
                <p class="mt-2 text-base font-medium text-white">420 East 9th St.</p>
                <p class="text-base font-medium text-white">Texarkana, AR 71854</p>
            </a>
            <div class="rounded-md border border-white/10 bg-white/5 px-6 py-5">
                <p class="flex items-center gap-1.5 text-xs font-semibold uppercase tracking-wider text-teal">
                    <svg xmlns="http://www.w3.org/2000/svg" class="size-4" viewBox="0 0 20 20" fill="currentColor"><path fill-rule="evenodd" d="M3.172 5.172a4 4 0 015.656 0L10 6.343l1.172-1.171a4 4 0 115.656 5.656L10 17.657l-6.828-6.829a4 4 0 010-5.656z" clip-rule="evenodd" /></svg>
                    Follow Us
                </p>
                <div class="mt-3 flex items-center gap-4">
                    <a href="https://www.facebook.com/texarkanamethodist" target="_blank" rel="noopener noreferrer" class="flex items-center gap-2 text-base font-medium text-white transition-colors hover:text-[#1877F2]">
                        <svg class="size-5" fill="currentColor" viewBox="0 0 24 24"><path d="M24 12.073c0-6.627-5.373-12-12-12s-12 5.373-12 12c0 5.99 4.388 10.954 10.125 11.854v-8.385H7.078v-3.47h3.047V9.43c0-3.007 1.792-4.669 4.533-4.669 1.312 0 2.686.235 2.686.235v2.953H15.83c-1.491 0-1.956.925-1.956 1.874v2.25h3.328l-.532 3.47h-2.796v8.385C19.612 23.027 24 18.062 24 12.073z" /></svg>
                        Facebook
                    </a>
                    <a href="https://vimeo.com/user98189407" target="_blank" rel="noopener noreferrer" class="flex items-center gap-2 text-base font-medium text-white transition-colors hover:text-[#1AB7EA]">
                        <svg class="size-5" fill="currentColor" viewBox="0 0 24 24"><path d="M23.977 6.416c-.105 2.338-1.739 5.543-4.894 9.609-3.268 4.247-6.026 6.37-8.29 6.37-1.409 0-2.578-1.294-3.553-3.881L5.322 11.4C4.603 8.816 3.834 7.522 3.01 7.522c-.179 0-.806.378-1.881 1.132L0 7.197c1.185-1.044 2.351-2.084 3.501-3.128C5.08 2.701 6.266 1.984 7.055 1.91c1.867-.18 3.016 1.1 3.447 3.838.465 2.953.789 4.789.971 5.507.539 2.45 1.131 3.674 1.776 3.674.502 0 1.256-.796 2.265-2.385 1.004-1.589 1.54-2.797 1.612-3.628.144-1.371-.395-2.061-1.614-2.061-.574 0-1.167.121-1.777.391 1.186-3.868 3.434-5.757 6.762-5.637 2.473.06 3.628 1.664 3.493 4.797l-.013.01z" /></svg>
                        Vimeo
                    </a>
                </div>
            </div>
        </div>

        {{-- Copyright --}}
        <div class="mt-8 border-t border-neutral-700 pt-8 text-center">
            <p class="text-sm text-gray-500">&copy; {{ date('Y') }} First United Methodist Church</p>
        </div>
    </div>
</footer>
