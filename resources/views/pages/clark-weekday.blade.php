<x-layouts.app title="Clark Weekday">
    {{-- Hero with large image --}}
    <section class="relative">
        <div class="aspect-[16/9] w-full overflow-hidden sm:aspect-[21/9] lg:aspect-[3/1]">
            <img src="https://placehold.co/1920x640/e5e7eb/9ca3af?text=Clark+Weekday" alt="Clark Weekday" class="h-full w-full object-cover">
            <div class="absolute inset-0 bg-gradient-to-t from-black/70 via-black/40 to-transparent"></div>
        </div>
        <div class="absolute inset-0 flex items-end">
            <div class="mx-auto w-full max-w-7xl px-4 pb-10 sm:px-6 sm:pb-14 lg:px-8">
                <p class="text-sm font-semibold uppercase tracking-wider text-red">First United Methodist Church</p>
                <h1 class="mt-1 text-3xl font-bold text-white sm:text-4xl lg:text-5xl">Clark Weekday</h1>
                <p class="mt-3 max-w-2xl text-base text-gray-200 sm:text-lg">Providing quality childcare and early education in a nurturing, faith-centered environment for families in our community.</p>
            </div>
        </div>
    </section>

    {{-- Info & Reminders --}}
    <section class="py-14 sm:py-20">
        <div class="mx-auto max-w-7xl px-4 sm:px-6 lg:px-8">
            <p class="text-sm font-semibold uppercase tracking-wider text-red">What to Know</p>
            <h2 class="mt-1 text-2xl font-bold text-black">Info &amp; Reminders</h2>
            <div class="mt-3 w-16 border-t-4 border-red"></div>

            <div class="prose prose-gray mt-8 max-w-none">
                <p>Program information and reminders coming soon.</p>
            </div>
        </div>
    </section>

    {{-- Hours & Fees side by side --}}
    <section class="bg-teal/5 py-14 sm:py-20">
        <div class="mx-auto max-w-7xl px-4 sm:px-6 lg:px-8">
            <div class="grid grid-cols-1 gap-8 lg:grid-cols-2">
                {{-- Hours --}}
                <div class="rounded-md border border-gray-200 bg-white p-6 sm:p-8">
                    <p class="text-sm font-semibold uppercase tracking-wider text-red">Schedule</p>
                    <h2 class="mt-1 text-2xl font-bold text-black">Hours</h2>
                    <div class="mt-3 w-16 border-t-4 border-red"></div>

                    <div class="prose prose-gray mt-6 max-w-none">
                        <p>Hours information coming soon.</p>
                    </div>
                </div>

                {{-- Fees --}}
                <div class="rounded-md border border-gray-200 bg-white p-6 sm:p-8">
                    <p class="text-sm font-semibold uppercase tracking-wider text-red">Tuition</p>
                    <h2 class="mt-1 text-2xl font-bold text-black">Fees</h2>
                    <div class="mt-3 w-16 border-t-4 border-red"></div>

                    <div class="prose prose-gray mt-6 max-w-none">
                        <p>Fee information coming soon.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    {{-- Video --}}
    <section class="py-14 sm:py-20">
        <div class="mx-auto max-w-4xl px-4 sm:px-6 lg:px-8">
            <div class="text-center">
                <p class="text-sm font-semibold uppercase tracking-wider text-red">See It in Action</p>
                <h2 class="mt-1 text-2xl font-bold text-black">Clark Weekday Video</h2>
                <div class="mx-auto mt-3 w-16 border-t-4 border-red"></div>
            </div>

            <div class="mt-8 aspect-video w-full overflow-hidden rounded-md shadow-lg">
                {{-- Replace src with actual video embed URL --}}
                <iframe src="about:blank" class="h-full w-full" frameborder="0" allow="autoplay; fullscreen; picture-in-picture" allowfullscreen></iframe>
            </div>
        </div>
    </section>

    {{-- Waiting List Form --}}
    <section class="bg-teal/5 py-14 sm:py-20">
        <div class="mx-auto max-w-3xl px-4 sm:px-6 lg:px-8">
            <div class="rounded-md border border-gray-200 bg-neutral-50 p-6 sm:p-8">
                <div class="text-center">
                    <p class="text-sm font-semibold uppercase tracking-wider text-red">Enroll Today</p>
                    <h2 class="mt-1 text-2xl font-bold text-black">Waiting List</h2>
                    <div class="mx-auto mt-3 w-16 border-t-4 border-red"></div>
                    <p class="mt-4 text-sm text-gray-600">Interested in enrolling your child? Fill out the form below and we'll be in touch.</p>
                </div>

                <livewire:clark-weekday-form />
            </div>
        </div>
    </section>
</x-layouts.app>
