<footer class="bg-black text-white">
    <div class="mx-auto max-w-7xl px-4 py-12 sm:px-6 lg:px-8">
        <div class="grid grid-cols-1 gap-8 md:grid-cols-3 lg:grid-cols-4">
            {{-- Church Info --}}
            <div class="lg:col-span-1">
                <h3 class="text-lg font-bold text-red">FUMC</h3>
                <p class="mt-2 text-sm text-gray-400">First United Methodist Church</p>
                <p class="mt-4 text-sm text-gray-400">
                    Sunday Worship<br>
                    Service Times TBD
                </p>
            </div>

            {{-- Quick Links --}}
            <div>
                <h4 class="text-sm font-semibold uppercase tracking-wider text-gray-400">Quick Links</h4>
                <ul class="mt-4 space-y-2">
                    <li><a href="{{ route('about.our-team') }}" class="text-sm text-gray-300 hover:text-red transition-colors">Our Team</a></li>
                    <li><a href="{{ route('about.what-we-believe') }}" class="text-sm text-gray-300 hover:text-red transition-colors">What We Believe</a></li>
                    <li><a href="{{ route('ministries.upcoming-events') }}" class="text-sm text-gray-300 hover:text-red transition-colors">Upcoming Events</a></li>
                    <li><a href="{{ route('contact') }}" class="text-sm text-gray-300 hover:text-red transition-colors">Contact Us</a></li>
                </ul>
            </div>

            {{-- Ministries --}}
            <div>
                <h4 class="text-sm font-semibold uppercase tracking-wider text-gray-400">Ministries</h4>
                <ul class="mt-4 space-y-2">
                    <li><a href="{{ route('ministries.children') }}" class="text-sm text-gray-300 hover:text-red transition-colors">Children</a></li>
                    <li><a href="{{ route('ministries.worship-music') }}" class="text-sm text-gray-300 hover:text-red transition-colors">Worship & Music</a></li>
                    <li><a href="{{ route('clark-weekday') }}" class="text-sm text-gray-300 hover:text-red transition-colors">Clark Weekday</a></li>
                    <li><a href="{{ route('being-the-church') }}" class="text-sm text-gray-300 hover:text-red transition-colors">Being the Church</a></li>
                </ul>
            </div>

            {{-- Resources --}}
            <div>
                <h4 class="text-sm font-semibold uppercase tracking-wider text-gray-400">Resources</h4>
                <ul class="mt-4 space-y-2">
                    <li><a href="{{ route('resources.the-happenings') }}" class="text-sm text-gray-300 hover:text-red transition-colors">The Happenings</a></li>
                    <li><a href="{{ route('resources.untimely-ramblings') }}" class="text-sm text-gray-300 hover:text-red transition-colors">Untimely Ramblings</a></li>
                    <li><a href="{{ route('resources.videos') }}" class="text-sm text-gray-300 hover:text-red transition-colors">Videos</a></li>
                </ul>
            </div>
        </div>

        <div class="mt-12 border-t border-gray-800 pt-8 text-center">
            <p class="text-sm text-gray-500">&copy; {{ date('Y') }} First United Methodist Church. All rights reserved.</p>
        </div>
    </div>
</footer>
