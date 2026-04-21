<x-layouts.app title="Clark Weekday">
    {{-- Hero with large image --}}
    <section class="relative">
        <div class="aspect-[16/9] w-full overflow-hidden sm:aspect-[21/9] lg:aspect-[3/1]">
            <img src="{{ Storage::disk('r2')->url('clark_i.jpg') }}" alt="Clark Weekday" class="h-full w-full object-cover">
            <div class="absolute inset-0 hidden bg-gradient-to-t from-black/70 via-black/40 to-transparent sm:block"></div>
        </div>
        <div class="bg-neutral-900 py-10 sm:absolute sm:inset-x-0 sm:bottom-0 sm:bg-transparent sm:py-0 sm:pb-14">
            <div class="mx-auto w-full max-w-7xl px-4 sm:px-6 lg:px-8">
                <p class="text-sm font-semibold uppercase tracking-wider text-red">First United Methodist Church</p>
                <h1 class="mt-1 text-3xl font-bold text-white sm:text-4xl lg:text-5xl">Clark Weekday</h1>
                <p class="mt-3 max-w-2xl text-base text-gray-200 sm:text-lg">The Clark Weekday Program "Clark", is dedicated to providing quality care in a loving and educational environment. Your child is very important to us at the First United Methodist Church. We want children to have nurturing, happy experiences while in our care. We will provide a safe, secure, and stimulating environment so they can learn and develop in their own special ways.</p>
            </div>
        </div>
    </section>

    {{-- Action Bar --}}
    <section class="bg-teal py-6">
        <div class="mx-auto max-w-7xl px-4 sm:px-6 lg:px-8">
            <div class="flex flex-col items-center gap-8 sm:flex-row sm:justify-between">
                <div class="text-center sm:text-left">
                    <p class="text-xs font-semibold uppercase tracking-widest text-white/70">Get Started</p>
                    <h2 class="mt-1 font-display text-[2rem] font-bold italic text-white">A Place to Grow</h2>
                </div>
                <div class="h-px w-full bg-gradient-to-r from-transparent via-white/30 to-transparent sm:h-16 sm:w-px sm:bg-gradient-to-b"></div>
                <a href="#waiting-list" class="flex items-center gap-3 rounded-md bg-white/10 px-5 py-3 transition-colors hover:bg-white/20">
                    <div class="flex h-10 w-10 shrink-0 items-center justify-center rounded-full bg-white/20 text-white">
                        <svg xmlns="http://www.w3.org/2000/svg" class="size-5" viewBox="0 0 20 20" fill="currentColor"><path d="M13.586 3.586a2 2 0 112.828 2.828l-.793.793-2.828-2.828.793-.793zM11.379 5.793L3 14.172V17h2.828l8.38-8.379-2.83-2.828z" /></svg>
                    </div>
                    <div>
                        <p class="text-xs font-semibold uppercase tracking-widest text-white/70">Enroll Today</p>
                        <p class="text-sm font-bold text-white">Join the Waiting List</p>
                    </div>
                </a>
                <div class="h-px w-full bg-gradient-to-r from-transparent via-white/30 to-transparent sm:h-16 sm:w-px sm:bg-gradient-to-b"></div>
                <a href="tel:8707791923" class="flex items-center gap-3 rounded-md bg-white/10 px-5 py-3 transition-colors hover:bg-white/20">
                    <div class="flex h-10 w-10 shrink-0 items-center justify-center rounded-full bg-white/20 text-white">
                        <svg xmlns="http://www.w3.org/2000/svg" class="size-5" viewBox="0 0 20 20" fill="currentColor"><path d="M2 3a1 1 0 011-1h2.153a1 1 0 01.986.836l.74 4.435a1 1 0 01-.54 1.06l-1.548.773a11.037 11.037 0 006.105 6.105l.774-1.548a1 1 0 011.059-.54l4.435.74a1 1 0 01.836.986V17a1 1 0 01-1 1h-2C7.82 18 2 12.18 2 5V3z" /></svg>
                    </div>
                    <div>
                        <p class="text-xs font-semibold uppercase tracking-widest text-white/70">Schedule a Tour</p>
                        <p class="text-sm font-bold text-white">870-779-1923</p>
                    </div>
                </a>
            </div>
        </div>
    </section>

    {{-- Info & Reminders --}}
    <section class="py-14 sm:py-20">
        <div class="mx-auto max-w-7xl px-4 sm:px-6 lg:px-8">
            <p class="text-sm font-semibold uppercase tracking-wider text-red">What to Know</p>
            <h2 class="mt-1 text-2xl font-bold text-black">Info &amp; Reminders</h2>
            <div class="mt-3 w-16 border-t-4 border-red"></div>

            <p class="mt-8 max-w-3xl text-gray-600">Please feel free to discuss with the director or your child's teacher anything that will help us understand your child better. The following is a list of helpful hints and important reminders that will help make each day a positive experience for your child.</p>

            <ul class="mt-6 max-w-3xl space-y-3">
                <li class="flex gap-3 text-gray-700">
                    <span class="mt-1 h-1.5 w-1.5 shrink-0 rounded-full bg-teal"></span>
                    Arrive by 8:30 each morning. This allows children the full benefit of learning and participating in the lessons and activities prepared for each class.
                </li>
                <li class="flex gap-3 text-gray-700">
                    <span class="mt-1 h-1.5 w-1.5 shrink-0 rounded-full bg-teal"></span>
                    Allow ample preparation time each morning so that your child will not be hurried.
                </li>
                <li class="flex gap-3 text-gray-700">
                    <span class="mt-1 h-1.5 w-1.5 shrink-0 rounded-full bg-teal"></span>
                    Be sure your child eats breakfast prior to arriving each morning.
                </li>
                <li class="flex gap-3 text-gray-700">
                    <span class="mt-1 h-1.5 w-1.5 shrink-0 rounded-full bg-teal"></span>
                    Eagerly look at things your child brings home, and proudly display his/her creations in a prominent place.
                </li>
                <li class="flex gap-3 text-gray-700">
                    <span class="mt-1 h-1.5 w-1.5 shrink-0 rounded-full bg-teal"></span>
                    Mark your child's coat, cap, sweater, lunch kit, cups, blankets, diaper bag, or any other item your child may bring.
                </li>
                <li class="flex gap-3 text-gray-700">
                    <span class="mt-1 h-1.5 w-1.5 shrink-0 rounded-full bg-teal"></span>
                    Talk with your child about his/her teacher, the other boys and girls, and events of their day.
                </li>
            </ul>
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

                    <dl class="mt-6 space-y-4">
                        <div class="flex justify-between border-b border-gray-100 pb-3">
                            <dt class="text-sm font-medium text-gray-700">Monday – Friday</dt>
                            <dd class="text-sm text-gray-900">8:00 AM – 3:00 PM</dd>
                        </div>
                        <div class="flex justify-between border-b border-gray-100 pb-3">
                            <dt class="text-sm font-medium text-gray-700">Early Drop-Off</dt>
                            <dd class="text-sm text-gray-900">7:30 AM</dd>
                        </div>
                        <div class="flex justify-between pb-3">
                            <dt class="text-sm font-medium text-gray-700">Extended Care</dt>
                            <dd class="text-sm text-gray-900">3:05 PM – 5:30 PM</dd>
                        </div>
                    </dl>
                    <p class="mt-4 text-xs text-gray-500">Note: Clark Weekday Program follows the Texarkana Arkansas School District schedule.</p>
                </div>

                {{-- Fees --}}
                <div class="rounded-md border border-gray-200 bg-white p-6 sm:p-8">
                    <p class="text-sm font-semibold uppercase tracking-wider text-red">Tuition</p>
                    <h2 class="mt-1 text-2xl font-bold text-black">Fees</h2>
                    <div class="mt-3 w-16 border-t-4 border-red"></div>

                    <dl class="mt-6 space-y-4">
                        <div class="flex justify-between border-b border-gray-100 pb-3">
                            <dt class="text-sm font-medium text-gray-700">Registration Fee</dt>
                            <dd class="text-sm text-gray-900">$200.00 / year</dd>
                        </div>
                        <div class="flex justify-between border-b border-gray-100 pb-3">
                            <dt class="text-sm font-medium text-gray-700">Extended Care</dt>
                            <dd class="text-sm text-gray-900">$7.00 / day</dd>
                        </div>
                        <div class="flex justify-between pb-3">
                            <dt class="text-sm font-medium text-gray-700">Supply Fee</dt>
                            <dd class="text-sm text-gray-900">Due August &amp; January</dd>
                        </div>
                    </dl>
                </div>
            </div>

            {{-- Tuition Table --}}
            <div class="mt-8 rounded-md border border-gray-200 bg-white p-6 sm:p-8">
                <p class="text-sm font-semibold uppercase tracking-wider text-teal">Tuition</p>
                <h3 class="mt-1 text-xl font-bold text-black">By Class</h3>
                <div class="mt-3 w-16 border-t-4 border-teal"></div>

                {{-- Mobile: stacked cards --}}
                <div class="mt-6 space-y-6 sm:hidden">
                    @foreach([
                        ['name' => 'Nursery 1', 'age' => '3 months as of Aug 1', 'options' => [['5 days', '$650', '$90'], ['3 days', '$500', '$70'], ['2 days', '$350', '$60']]],
                        ['name' => 'Nursery 2', 'age' => '1 year as of Aug 1', 'options' => [['5 days', '$650', '$90'], ['3 days', '$500', '$70'], ['2 days', '$350', '$60']]],
                        ['name' => '2 Year Old', 'age' => '2 years as of Aug 1', 'options' => [['5 days', '$495', '$90'], ['3 days', '$380', '$70'], ['2 days', '$265', '$60']]],
                        ['name' => '3 Year Old Pre-K', 'age' => '3 years as of Aug 1', 'options' => [['5 days', '$468', '$90']]],
                        ['name' => '4 Year Old Pre-K', 'age' => '4 years as of Aug 1', 'options' => [['5 days', '$468', '$90']]],
                    ] as $class)
                        <div class="rounded border border-gray-100 bg-gray-50 p-4">
                            <p class="font-medium text-gray-900">{{ $class['name'] }}</p>
                            <p class="text-xs text-gray-500">{{ $class['age'] }}</p>
                            <div class="mt-3 divide-y divide-gray-200">
                                @foreach($class['options'] as $option)
                                    <div class="flex justify-between py-2 text-sm">
                                        <span class="text-gray-700">{{ $option[0] }}</span>
                                        <span class="text-gray-900">{{ $option[1] }}/mo <span class="text-gray-500">+ {{ $option[2] }} supplies</span></span>
                                    </div>
                                @endforeach
                            </div>
                        </div>
                    @endforeach
                </div>

                {{-- Desktop: table --}}
                <div class="mt-6 hidden sm:block">
                    <table class="w-full text-left text-sm">
                        <thead>
                            <tr class="border-b border-gray-200">
                                <th class="pb-3 pr-4 font-semibold text-gray-900">Class</th>
                                <th class="pb-3 pr-4 font-semibold text-gray-900">Schedule</th>
                                <th class="pb-3 pr-4 font-semibold text-gray-900">Monthly</th>
                                <th class="pb-3 font-semibold text-gray-900">Supplies</th>
                            </tr>
                        </thead>
                        <tbody class="divide-y divide-gray-100">
                            <tr>
                                <td class="py-3 pr-4 align-top font-medium text-gray-700" rowspan="3">Nursery 1 <span class="block text-xs font-normal text-gray-500">3 months as of Aug 1</span></td>
                                <td class="py-3 pr-4 text-gray-700">5 days</td>
                                <td class="py-3 pr-4 text-gray-700">$650</td>
                                <td class="py-3 text-gray-700">$90</td>
                            </tr>
                            <tr>
                                <td class="py-3 pr-4 text-gray-700">3 days</td>
                                <td class="py-3 pr-4 text-gray-700">$500</td>
                                <td class="py-3 text-gray-700">$70</td>
                            </tr>
                            <tr>
                                <td class="py-3 pr-4 text-gray-700">2 days</td>
                                <td class="py-3 pr-4 text-gray-700">$350</td>
                                <td class="py-3 text-gray-700">$60</td>
                            </tr>
                            <tr>
                                <td class="py-3 pr-4 align-top font-medium text-gray-700" rowspan="3">Nursery 2 <span class="block text-xs font-normal text-gray-500">1 year as of Aug 1</span></td>
                                <td class="py-3 pr-4 text-gray-700">5 days</td>
                                <td class="py-3 pr-4 text-gray-700">$650</td>
                                <td class="py-3 text-gray-700">$90</td>
                            </tr>
                            <tr>
                                <td class="py-3 pr-4 text-gray-700">3 days</td>
                                <td class="py-3 pr-4 text-gray-700">$500</td>
                                <td class="py-3 text-gray-700">$70</td>
                            </tr>
                            <tr>
                                <td class="py-3 pr-4 text-gray-700">2 days</td>
                                <td class="py-3 pr-4 text-gray-700">$350</td>
                                <td class="py-3 text-gray-700">$60</td>
                            </tr>
                            <tr>
                                <td class="py-3 pr-4 align-top font-medium text-gray-700" rowspan="3">2 Year Old <span class="block text-xs font-normal text-gray-500">2 years as of Aug 1</span></td>
                                <td class="py-3 pr-4 text-gray-700">5 days</td>
                                <td class="py-3 pr-4 text-gray-700">$495</td>
                                <td class="py-3 text-gray-700">$90</td>
                            </tr>
                            <tr>
                                <td class="py-3 pr-4 text-gray-700">3 days</td>
                                <td class="py-3 pr-4 text-gray-700">$380</td>
                                <td class="py-3 text-gray-700">$70</td>
                            </tr>
                            <tr>
                                <td class="py-3 pr-4 text-gray-700">2 days</td>
                                <td class="py-3 pr-4 text-gray-700">$265</td>
                                <td class="py-3 text-gray-700">$60</td>
                            </tr>
                            <tr>
                                <td class="py-3 pr-4 font-medium text-gray-700">3 Year Old Pre-K <span class="block text-xs font-normal text-gray-500">3 years as of Aug 1</span></td>
                                <td class="py-3 pr-4 text-gray-700">5 days</td>
                                <td class="py-3 pr-4 text-gray-700">$468</td>
                                <td class="py-3 text-gray-700">$90</td>
                            </tr>
                            <tr>
                                <td class="py-3 pr-4 font-medium text-gray-700">4 Year Old Pre-K <span class="block text-xs font-normal text-gray-500">4 years as of Aug 1</span></td>
                                <td class="py-3 pr-4 text-gray-700">5 days</td>
                                <td class="py-3 pr-4 text-gray-700">$468</td>
                                <td class="py-3 text-gray-700">$90</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </section>

    {{-- Video --}}
    <section class="py-14 sm:py-20">
        <div class="mx-auto max-w-4xl px-4 sm:px-6 lg:px-8">
            <div class="rounded-md border border-gray-200 bg-neutral-50 p-6 sm:p-8">
                <div class="text-center">
                    <p class="text-sm font-semibold uppercase tracking-wider text-red">See It in Action</p>
                    <h2 class="mt-1 text-2xl font-bold text-black">Clark Weekday Video</h2>
                    <div class="mx-auto mt-3 w-16 border-t-4 border-red"></div>
                </div>

                <div class="mt-8 aspect-video w-full overflow-hidden rounded-md shadow-lg">
                    <iframe title="vimeo-player" src="https://player.vimeo.com/video/338319560?h=436cfdfbbd" class="h-full w-full" frameborder="0" referrerpolicy="strict-origin-when-cross-origin" allow="autoplay; fullscreen; picture-in-picture; clipboard-write; encrypted-media; web-share" allowfullscreen></iframe>
                </div>
            </div>
        </div>
    </section>

    {{-- Waiting List Form --}}
    <section id="waiting-list" class="scroll-mt-24 bg-teal/5 py-14 sm:py-20">
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
