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

                <form class="mt-8 space-y-5" x-data="{ multipleChildren: '' }">
                    @csrf

                    <h3 class="text-sm font-semibold uppercase tracking-wider text-teal">Child Information</h3>

                    <div>
                        <label for="child_name" class="block text-sm font-medium text-gray-700">Child's Full Name <span class="text-red">*</span></label>
                        <input type="text" id="child_name" name="child_name" required class="mt-1 block w-full rounded border border-gray-300 px-3 py-2 text-sm shadow-sm focus:border-teal focus:ring-1 focus:ring-teal focus:outline-none">
                    </div>

                    <div class="grid grid-cols-1 gap-5 sm:grid-cols-2">
                        <div>
                            <label for="child_dob" class="block text-sm font-medium text-gray-700">Child's Date of Birth <span class="text-red">*</span></label>
                            <input type="date" id="child_dob" name="child_dob" required class="mt-1 block w-full rounded border border-gray-300 px-3 py-2 text-sm shadow-sm focus:border-teal focus:ring-1 focus:ring-teal focus:outline-none">
                        </div>
                        <div>
                            <label for="child_siblings" class="block text-sm font-medium text-gray-700">Child's Siblings <span class="text-xs font-normal text-gray-400">(optional)</span></label>
                            <input type="text" id="child_siblings" name="child_siblings" class="mt-1 block w-full rounded border border-gray-300 px-3 py-2 text-sm shadow-sm focus:border-teal focus:ring-1 focus:ring-teal focus:outline-none">
                        </div>
                    </div>

                    <div class="pt-4">
                        <h3 class="text-sm font-semibold uppercase tracking-wider text-teal">Parent / Guardian Information</h3>
                    </div>

                    <div class="grid grid-cols-1 gap-5 sm:grid-cols-2">
                        <div>
                            <label for="parent_names" class="block text-sm font-medium text-gray-700">Parent's Full Names <span class="text-red">*</span></label>
                            <input type="text" id="parent_names" name="parent_names" required class="mt-1 block w-full rounded border border-gray-300 px-3 py-2 text-sm shadow-sm focus:border-teal focus:ring-1 focus:ring-teal focus:outline-none">
                        </div>
                        <div>
                            <label for="email" class="block text-sm font-medium text-gray-700">Email <span class="text-red">*</span></label>
                            <input type="email" id="email" name="email" required class="mt-1 block w-full rounded border border-gray-300 px-3 py-2 text-sm shadow-sm focus:border-teal focus:ring-1 focus:ring-teal focus:outline-none">
                        </div>
                    </div>

                    <div>
                        <label for="address" class="block text-sm font-medium text-gray-700">Address <span class="text-red">*</span></label>
                        <input type="text" id="address" name="address" required class="mt-1 block w-full rounded border border-gray-300 px-3 py-2 text-sm shadow-sm focus:border-teal focus:ring-1 focus:ring-teal focus:outline-none">
                    </div>

                    <div>
                        <label for="city_state_zip" class="block text-sm font-medium text-gray-700">City, State, Zip <span class="text-red">*</span></label>
                        <input type="text" id="city_state_zip" name="city_state_zip" required class="mt-1 block w-full rounded border border-gray-300 px-3 py-2 text-sm shadow-sm focus:border-teal focus:ring-1 focus:ring-teal focus:outline-none">
                    </div>

                    <div class="grid grid-cols-1 gap-5 sm:grid-cols-2 lg:grid-cols-3">
                        <div>
                            <label for="phone" class="block text-sm font-medium text-gray-700">Phone <span class="text-xs font-normal text-gray-400">(optional)</span></label>
                            <input type="tel" id="phone" name="phone" class="mt-1 block w-full rounded border border-gray-300 px-3 py-2 text-sm shadow-sm focus:border-teal focus:ring-1 focus:ring-teal focus:outline-none">
                        </div>
                        <div>
                            <label for="cell" class="block text-sm font-medium text-gray-700">Cell <span class="text-xs font-normal text-gray-400">(optional)</span></label>
                            <input type="tel" id="cell" name="cell" class="mt-1 block w-full rounded border border-gray-300 px-3 py-2 text-sm shadow-sm focus:border-teal focus:ring-1 focus:ring-teal focus:outline-none">
                        </div>
                        <div>
                            <label for="work_phone" class="block text-sm font-medium text-gray-700">Work <span class="text-xs font-normal text-gray-400">(optional)</span></label>
                            <input type="tel" id="work_phone" name="work_phone" class="mt-1 block w-full rounded border border-gray-300 px-3 py-2 text-sm shadow-sm focus:border-teal focus:ring-1 focus:ring-teal focus:outline-none">
                        </div>
                    </div>

                    <div class="pt-4">
                        <h3 class="text-sm font-semibold uppercase tracking-wider text-teal">Program Details</h3>
                    </div>

                    <fieldset>
                        <legend class="block text-sm font-medium text-gray-700">Schedule of Care <span class="text-red">*</span></legend>
                        <div class="mt-2 flex flex-wrap gap-x-6 gap-y-2">
                            <label class="flex items-center gap-2 text-sm text-gray-700">
                                <input type="radio" name="schedule" value="1st available opening" required class="text-red focus:ring-red">
                                1st Available Opening
                            </label>
                            <label class="flex items-center gap-2 text-sm text-gray-700">
                                <input type="radio" name="schedule" value="5 days" class="text-red focus:ring-red">
                                5 Days
                            </label>
                            <label class="flex items-center gap-2 text-sm text-gray-700">
                                <input type="radio" name="schedule" value="3 days" class="text-red focus:ring-red">
                                3 Days
                            </label>
                            <label class="flex items-center gap-2 text-sm text-gray-700">
                                <input type="radio" name="schedule" value="2 days" class="text-red focus:ring-red">
                                2 Days
                            </label>
                        </div>
                    </fieldset>

                    <label class="flex items-center gap-2 text-sm text-gray-700">
                        <input type="checkbox" name="extended_care" value="1" class="rounded text-red focus:ring-red">
                        Extended Care 3:00 – 5:30 PM
                    </label>

                    <fieldset>
                        <legend class="block text-sm font-medium text-gray-700">Do you have more than one child applying to Clark Weekday? <span class="text-red">*</span></legend>
                        <div class="mt-2 flex gap-6">
                            <label class="flex items-center gap-2 text-sm text-gray-700">
                                <input type="radio" name="multiple_children" value="yes" required class="text-red focus:ring-red" x-model="multipleChildren">
                                Yes
                            </label>
                            <label class="flex items-center gap-2 text-sm text-gray-700">
                                <input type="radio" name="multiple_children" value="no" class="text-red focus:ring-red" x-model="multipleChildren">
                                No
                            </label>
                        </div>
                    </fieldset>

                    <div x-show="multipleChildren === 'yes'" x-transition:enter.opacity x-cloak>
                        <label for="other_children" class="block text-sm font-medium text-gray-700">Names &amp; ages of other children</label>
                        <textarea id="other_children" name="other_children" rows="2" class="mt-1 block w-full rounded border border-gray-300 px-3 py-2 text-sm shadow-sm focus:border-teal focus:ring-1 focus:ring-teal focus:outline-none"></textarea>
                    </div>

                    <fieldset>
                        <legend class="block text-sm font-medium text-gray-700">Are you an active church member of FUMC Texarkana, AR? <span class="text-red">*</span></legend>
                        <div class="mt-2 flex gap-6">
                            <label class="flex items-center gap-2 text-sm text-gray-700">
                                <input type="radio" name="church_member" value="yes" required class="text-red focus:ring-red">
                                Yes
                            </label>
                            <label class="flex items-center gap-2 text-sm text-gray-700">
                                <input type="radio" name="church_member" value="no" class="text-red focus:ring-red">
                                No
                            </label>
                        </div>
                    </fieldset>

                    <div class="pt-2">
                        <button type="submit" class="inline-flex items-center rounded bg-red px-6 py-2.5 text-sm font-semibold text-white transition-colors hover:bg-red-dark">
                            Submit
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </section>
</x-layouts.app>
