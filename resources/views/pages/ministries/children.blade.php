<x-layouts.app title="Children's Ministry">
    <x-page-hero title="Children's Ministry" subtitle="Kidz @ First is designed with you and your child in mind! We are passionate about kids learning about Jesus in a way they can understand and share with others. We have fun, age appropriate environments where kids can learn and grow. We're excited to partner with families by providing the latest information to continue faith conversations at home." />

    {{-- Programs --}}
    <div class="space-y-0">
        {{-- Nursery --}}
        <section class="bg-teal/5 py-12 sm:py-16">
            <div class="mx-auto max-w-7xl px-4 sm:px-6 lg:px-8">
                <div class="grid grid-cols-1 items-center gap-10 lg:grid-cols-2">
                    <div class="relative">
                        <div class="absolute -bottom-4 -right-4 hidden aspect-4/3 w-full rounded-md sm:block bg-teal/20"></div>
                        <div class="relative overflow-hidden rounded-md shadow-lg">
                            <img src="{{ Storage::disk('r2')->url('nursery.jpeg') }}" alt="Nursery" class="aspect-4/3 w-full object-cover">
                        </div>
                    </div>
                    <div>
                        <p class="text-sm font-semibold uppercase tracking-wider text-teal">Birth – 2 Years</p>
                        <h2 class="mt-2 text-2xl font-bold text-black">Nursery</h2>
                        <div class="mt-3 w-16 border-t-4 border-teal"></div>
                        <p class="mt-4 text-base leading-7 text-gray-600">Our nursery in the Clark Center is a loving and fun environment filled with Bible stories and songs, designed with experienced and CPR trained staff to care for and nurture children birth through two years of age. It is our desire that your child would feel incredibly loved and secure during their time with us each Sunday.</p>
                    </div>
                </div>
            </div>
        </section>

        {{-- Two Year Kid Venture Class --}}
        <section class="py-12 sm:py-16">
            <div class="mx-auto max-w-7xl px-4 sm:px-6 lg:px-8">
                <div class="grid grid-cols-1 items-center gap-10 lg:grid-cols-2">
                    <div class="order-2 lg:order-1">
                        <p class="text-sm font-semibold uppercase tracking-wider text-red">2 Years</p>
                        <h2 class="mt-2 text-2xl font-bold text-black">Two Year Kid Venture Class</h2>
                        <div class="mt-3 w-16 border-t-4 border-red"></div>
                        <p class="mt-4 text-base leading-7 text-gray-600">Sunday School - Two year olds are welcomed with songs, snacks, and hands on Bible stories. Each child takes home a Bible story page to enjoy with parents during the week.</p>
                    </div>
                    <div class="relative order-1 lg:order-2">
                        <div class="absolute -bottom-4 -left-4 hidden aspect-4/3 w-full rounded-md sm:block bg-red/20"></div>
                        <div class="relative overflow-hidden rounded-md shadow-lg">
                            <img src="{{ Storage::disk('r2')->url('kid_venture.jpeg') }}" alt="Two Year Kid Venture Class" class="aspect-4/3 w-full object-cover">
                        </div>
                    </div>
                </div>
            </div>
        </section>

        {{-- Deep Blue Sunday School --}}
        <section class="bg-teal/5 py-12 sm:py-16">
            <div class="mx-auto max-w-7xl px-4 sm:px-6 lg:px-8">
                <div class="grid grid-cols-1 items-center gap-10 lg:grid-cols-2">
                    <div class="relative">
                        <div class="absolute -bottom-4 -right-4 hidden aspect-4/3 w-full rounded-md sm:block bg-teal/20"></div>
                        <div class="relative overflow-hidden rounded-md shadow-lg">
                            <img src="{{ Storage::disk('r2')->url('deep_blue.jpeg') }}" alt="Deep Blue Sunday School" class="aspect-4/3 w-full object-cover">
                        </div>
                    </div>
                    <div>
                        <p class="text-sm font-semibold uppercase tracking-wider text-teal">3 Years – 1st Grade</p>
                        <h2 class="mt-2 text-2xl font-bold text-black">Deep Blue Sunday School</h2>
                        <div class="mt-3 w-16 border-t-4 border-teal"></div>
                        <p class="mt-4 text-base leading-7 text-gray-600">Three years through first grade meet in the Clark Center, Sundays from 9:30–10:15 A.M.</p>
                        <p class="mt-3 text-base leading-7 text-gray-600">Come meet the Deep Blue kids, dive deep into the exciting Bible stories and learn how to live as disciples of Jesus. Together with the Deep Blue kids crew they will travel through animated video storytelling, arts and crafts, snacks and games to learn about God and what God is doing all over the world.</p>
                        <p class="mt-3 text-base font-semibold leading-7 text-gray-800">So kids… come get your passport and join the adventure!</p>
                        <p class="mt-3 text-sm text-gray-600">Be sure to get the Deep Blue Adventures App to keep up with the latest Deep Blue info as well as play the games, see the videos and more.</p>
                        <div class="mt-4 flex gap-3">
                            <a href="https://apps.apple.com/us/app/deep-blue-adventures/id986366832" target="_blank" class="inline-flex items-center gap-2 rounded bg-black px-4 py-2 text-sm font-semibold text-white transition-colors hover:bg-black/80">
                                <svg class="size-5" viewBox="0 0 384 512" fill="currentColor"><path d="M318.7 268.7c-.2-36.7 16.4-64.4 50-84.8-18.8-26.9-47.2-41.7-84.7-44.6-35.5-2.8-74.3 20.7-88.5 20.7-15 0-49.4-19.7-76.4-19.7C63.3 141.2 4 184.8 4 273.5c0 26.2 4.8 53.3 14.4 81.2 12.8 36.7 59 126.7 107.2 125.2 25.2-.6 43-17.9 75.8-17.9 31.8 0 48.3 17.9 76.4 17.9 48.6-.7 90.4-82.5 102.6-119.3-65.2-30.7-61.7-90-61.7-91.9zm-56.6-164.2c27.3-32.4 24.8-61.9 24-72.5-24.1 1.4-52 16.4-67.9 34.9-17.5 19.8-27.8 44.3-25.6 71.9 26.1 2 49.9-11.4 69.5-34.3z"/></svg>
                                App Store
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        {{-- Cross Walk Sunday School --}}
        <section class="py-12 sm:py-16">
            <div class="mx-auto max-w-7xl px-4 sm:px-6 lg:px-8">
                <div class="grid grid-cols-1 items-center gap-10 lg:grid-cols-2">
                    <div class="order-2 lg:order-1">
                        <p class="text-sm font-semibold uppercase tracking-wider text-red">2nd – 6th Grade</p>
                        <h2 class="mt-2 text-2xl font-bold text-black">Cross Walk Sunday School</h2>
                        <div class="mt-3 w-16 border-t-4 border-red"></div>
                        <p class="mt-4 text-base leading-7 text-gray-600">Second through sixth grades meet on the second floor of the Family Life Center Sundays from 9:30–10:15 A.M.</p>
                        <p class="mt-3 text-base leading-7 text-gray-600">Using a Rotation format, kids will focus on one Bible story per month, visiting a different, exciting station each Sunday to bring the Bible story to life. Stations are Faith Flicks (Movies), Creation Station (Art), Game Garden (Games), Storytelling Tent (Story) and fishers.net (Computer). In their time with us, visiting the different stations with games, art and activities help kids understand and apply God's Word to their everyday lives.</p>
                        <p class="mt-3 text-base font-semibold leading-7 text-gray-800">Come join us!</p>
                    </div>
                    <div class="relative order-1 lg:order-2">
                        <div class="absolute -bottom-4 -left-4 hidden aspect-4/3 w-full rounded-md sm:block bg-red/20"></div>
                        <div class="relative overflow-hidden rounded-md shadow-lg">
                            <img src="{{ Storage::disk('r2')->url('cross_walk.jpeg') }}" alt="Cross Walk Sunday School" class="aspect-4/3 w-full object-cover">
                        </div>
                    </div>
                </div>
            </div>
        </section>

        {{-- Kidz Church --}}
        <section class="bg-teal/5 py-12 sm:py-16">
            <div class="mx-auto max-w-7xl px-4 sm:px-6 lg:px-8">
                <div class="grid grid-cols-1 items-center gap-10 lg:grid-cols-2">
                    <div class="relative">
                        <div class="absolute -bottom-4 -right-4 hidden aspect-4/3 w-full rounded-md sm:block bg-teal/20"></div>
                        <div class="relative overflow-hidden rounded-md shadow-lg">
                            <img src="{{ Storage::disk('r2')->url('kidz_church.jpeg') }}" alt="Kidz Church" class="aspect-4/3 w-full object-cover">
                        </div>
                    </div>
                    <div>
                        <p class="text-sm font-semibold uppercase tracking-wider text-teal">3 Years – 1st Grade</p>
                        <h2 class="mt-2 text-2xl font-bold text-black">Kidz Church</h2>
                        <div class="mt-3 w-16 border-t-4 border-teal"></div>
                        <p class="mt-4 text-base leading-7 text-gray-600">Following the Children's Moment in Worship, three years through first grades are invited to the Clark Center for Kidz Church. Using Deep Blue Kidz Church, kids enjoy a mini worship time with fun songs, offering, and prayer. Kids then visit classrooms where each Sunday is designed to incite wonder in the hearts of each child that leads to a love for Jesus Christ through interactive Bible stories, games, crafts, videos and more.</p>
                        <p class="mt-3 text-sm text-gray-500">Deep Blue Activity bulletins are available in the back of the Sanctuary during Worship for 3 years–6th grades not attending Kidz Church.</p>
                    </div>
                </div>
            </div>
        </section>

        {{-- Power Pak --}}
        <section class="py-12 sm:py-16">
            <div class="mx-auto max-w-7xl px-4 sm:px-6 lg:px-8">
                <div class="grid grid-cols-1 items-center gap-10 lg:grid-cols-2">
                    <div class="order-2 lg:order-1">
                        <p class="text-sm font-semibold uppercase tracking-wider text-red">2nd – 6th Grade</p>
                        <h2 class="mt-2 text-2xl font-bold text-black">Power Pak</h2>
                        <div class="mt-3 w-16 border-t-4 border-red"></div>
                        <p class="mt-4 text-base leading-7 text-gray-600">Power Pak is our Wednesday afternoon program designed for 2nd–6th graders! It is offered Wednesdays (except major holidays) from August through May from 5–6 P.M. in the Family Life Center. Power Pak immediately follows Celebration Choir on Wednesdays.</p>
                        <p class="mt-3 text-base leading-7 text-gray-600">In Power Pak, we engage kids by offering devotionals, Bible fun, mission projects, praise and worship, and games, as well as presenting an Easter play to the congregation, as a way to support kids and families on their child's faith journey.</p>
                        <p class="mt-3 text-sm text-gray-500">Questions? Contact Cheryl Dodson at <a href="tel:8707726931" class="font-medium text-red hover:underline">(870) 772-6931 ext. 130</a> or <a href="mailto:Cheryl@Bethechurch.email" class="font-medium text-red hover:underline">Cheryl@Bethechurch.email</a></p>
                    </div>
                    <div class="relative order-1 lg:order-2">
                        <div class="absolute -bottom-4 -left-4 hidden aspect-4/3 w-full rounded-md sm:block bg-red/20"></div>
                        <div class="relative overflow-hidden rounded-md shadow-lg">
                            <img src="{{ Storage::disk('r2')->url('power_pak.jpeg') }}" alt="Power Pak" class="aspect-4/3 w-full object-cover">
                        </div>
                    </div>
                </div>
            </div>
        </section>

        {{-- Special Events --}}
        <section class="bg-teal/5 py-12 sm:py-16">
            <div class="mx-auto max-w-7xl px-4 sm:px-6 lg:px-8">
                <div class="grid grid-cols-1 items-center gap-10 lg:grid-cols-2">
                    <div class="relative">
                        <div class="absolute -bottom-4 -right-4 hidden aspect-4/3 w-full rounded-md sm:block bg-teal/20"></div>
                        <div class="relative overflow-hidden rounded-md shadow-lg">
                            <img src="{{ Storage::disk('r2')->url('special_events.jpeg') }}" alt="Special Events" class="aspect-4/3 w-full object-cover">
                        </div>
                    </div>
                    <div>
                        <p class="text-sm font-semibold uppercase tracking-wider text-teal">Throughout the Year</p>
                        <h2 class="mt-2 text-2xl font-bold text-black">Special Events</h2>
                        <div class="mt-3 w-16 border-t-4 border-teal"></div>
                        <ul class="mt-4 space-y-2 text-base leading-7 text-gray-600">
                            <li>Vacation Bible School</li>
                            <li>Blessing of the Backpacks</li>
                            <li>Second Grade Bible Presentation & Exploration</li>
                            <li>Thanksgiving Program</li>
                            <li>Easter Egg Hunt</li>
                            <li>Easter Play</li>
                            <li>A Night in Bethlehem</li>
                        </ul>
                        <p class="mt-4 text-sm text-gray-500">Be sure to pick up a monthly newsletter or sign up to receive by email.</p>
                    </div>
                </div>
            </div>
        </section>
    </div>
</x-layouts.app>
