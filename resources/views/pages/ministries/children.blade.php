<x-layouts.app title="Children's Ministry">
    <x-page-hero title="Children's Ministry"
                 subtitle="<strong class='font-semibold text-white'>FirstKids</strong> is designed with you and your child in mind! We love helping kids discover who Jesus is in ways they can understand and share with others. Our fun, age-appropriate environments are created for kids to learn, grow, and have a great time doing it. We’re excited to partner with families by providing helpful resources and the latest information to keep faith conversations going at home."
    />

    {{-- Programs --}}
    <div class="space-y-0">
        {{-- FirstKids Littles --}}
        <section class="bg-teal/5 py-12 sm:py-16">
            <div class="mx-auto max-w-7xl px-4 sm:px-6 lg:px-8">
                <div class="grid grid-cols-1 items-center gap-10 lg:grid-cols-2">
                    <div class="relative">
                        <div class="absolute -bottom-4 -right-4 hidden aspect-4/3 w-full rounded-md sm:block bg-teal/20"></div>
                        <div class="relative overflow-hidden rounded-md shadow-lg">
                            <img src="{{ Storage::disk('r2')->url('nursery.jpeg') }}" alt="Littles" class="aspect-4/3 w-full object-cover">
                        </div>
                    </div>
                    <div>
                        <p class="text-sm font-semibold uppercase tracking-wider text-teal">Birth – 3 Years</p>
                        <h2 class="mt-2 text-2xl font-bold text-black">FirstKids Littles</h2>
                        <div class="mt-3 w-16 border-t-4 border-teal"></div>
                        <div class="mt-4 inline-flex items-center gap-2 rounded border border-teal/30 bg-white px-3 py-1.5 text-sm font-semibold text-teal">
                            <svg class="size-4" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" d="M12 6v6h4.5m4.5 0a9 9 0 1 1-18 0 9 9 0 0 1 18 0Z"/></svg>
                            Sundays · 9:30 – 10:15 A.M.
                        </div>
                        <p class="mt-4 text-base leading-7 text-gray-600">
                            Our nursery, located in the Clark Center, is a loving, joyful place where little ones are cared for by our experienced, CPR-trained staff.
                            We welcome children from birth through three years of age and fill their time with sweet moments, including Bible stories, songs, and plenty
                            of care and attention. On Sunday mornings, we want every child to feel safe, loved, and right at home.
                        </p>
                        <p class="mt-4 text-base leading-7 text-gray-600">
                            For our two-year-olds, Sunday School is full of fun with songs, snacks, and hands-on Bible stories. Each child also takes home a Bible story
                            page to share with their family during the week
                        </p>
                    </div>
                </div>
            </div>
        </section>

        {{-- FirstKids Friends --}}
        <section class="py-12 sm:py-16">
            <div class="mx-auto max-w-7xl px-4 sm:px-6 lg:px-8">
                <div class="grid grid-cols-1 items-center gap-10 lg:grid-cols-2">
                    <div class="order-2 lg:order-1">
                        <p class="text-sm font-semibold uppercase tracking-wider text-red">3 years - 1st Grade</p>
                        <h2 class="mt-2 text-2xl font-bold text-black">FirstKids Friends</h2>
                        <div class="mt-3 w-16 border-t-4 border-red"></div>
                        <div class="mt-4 flex flex-wrap gap-2">
                            <div class="inline-flex items-center gap-2 rounded border border-red/30 bg-white px-3 py-1.5 text-sm font-semibold text-red">
                                <svg class="size-4" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" d="M12 6v6h4.5m4.5 0a9 9 0 1 1-18 0 9 9 0 0 1 18 0Z"/></svg>
                                Sundays · 9:30 – 10:15 A.M.
                            </div>
                            <div class="inline-flex items-center gap-2 rounded border border-red/30 bg-white px-3 py-1.5 text-sm font-semibold text-red">
                                <svg class="size-4" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" d="M15 10.5a3 3 0 1 1-6 0 3 3 0 0 1 6 0Z"/><path stroke-linecap="round" stroke-linejoin="round" d="M19.5 10.5c0 7.142-7.5 11.25-7.5 11.25S4.5 17.642 4.5 10.5a7.5 7.5 0 1 1 15 0Z"/></svg>
                                Family Learning Center
                            </div>
                        </div>
                        <p class="mt-4 text-base leading-7 text-gray-600">
                            Sunday School for our PreK3 through 1st grade FirstKids friends is full of energy, laughter, and lots
                            of hands-on fun! Each week, kids experience Jesus’ love through lively songs, creative activities,
                            engaging Bible stories, and even some fun, themed snacks. Everything is designed just for their age, so
                            they can learn, explore, and grow in a way that makes sense to them. Most of all, we have a great time
                            together as we learn about God’s love!
                        </p>
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

        {{-- FirstKids Crew --}}
        <section class="bg-teal/5 py-12 sm:py-16">
            <div class="mx-auto max-w-7xl px-4 sm:px-6 lg:px-8">
                <div class="grid grid-cols-1 items-center gap-10 lg:grid-cols-2">
                    <div class="relative">
                        <div class="absolute -bottom-4 -right-4 hidden aspect-4/3 w-full rounded-md sm:block bg-teal/20"></div>
                        <div class="relative overflow-hidden rounded-md shadow-lg">
                            <img src="{{ Storage::disk('r2')->url('deep_blue.jpeg') }}" alt="FirstKids Crew" class="aspect-4/3 w-full object-cover">
                        </div>
                    </div>
                    <div>
                        <p class="text-sm font-semibold uppercase tracking-wider text-teal">2nd Grade - 6th Grade</p>
                        <h2 class="mt-2 text-2xl font-bold text-black">FirstKids Crew</h2>
                        <div class="mt-3 w-16 border-t-4 border-teal"></div>
                        <div class="mt-4 flex flex-wrap gap-2">
                            <div class="inline-flex items-center gap-2 rounded border border-teal/30 bg-white px-3 py-1.5 text-sm font-semibold text-teal">
                                <svg class="size-4" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" d="M12 6v6h4.5m4.5 0a9 9 0 1 1-18 0 9 9 0 0 1 18 0Z"/></svg>
                                Sundays · 9:30 – 10:15 A.M.
                            </div>
                            <div class="inline-flex items-center gap-2 rounded border border-teal/30 bg-white px-3 py-1.5 text-sm font-semibold text-teal">
                                <svg class="size-4" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" d="M15 10.5a3 3 0 1 1-6 0 3 3 0 0 1 6 0Z"/><path stroke-linecap="round" stroke-linejoin="round" d="M19.5 10.5c0 7.142-7.5 11.25-7.5 11.25S4.5 17.642 4.5 10.5a7.5 7.5 0 1 1 15 0Z"/></svg>
                                Family Learning Center
                            </div>
                        </div>
                        <p class="mt-4 text-base leading-7 text-gray-600">
                            For our 2nd through 6th grade FirstKids Crew, Sunday School is where we start digging a little deeper! Kids explore the Bible in
                            a way that’s engaging and meaningful, with interactive lessons, group discussions, and hands-on activities that help bring God’s
                            Word to life. We encourage questions, build friendships, and help kids understand how Biblical truths connect to their everyday lives.
                            It’s a place where they can grow in their faith, feel supported, and have a great time doing it!
                        </p>
                    </div>
                </div>
            </div>
        </section>

        {{-- FirstKids Church --}}
        <section class="py-12 sm:py-16">
            <div class="mx-auto max-w-7xl px-4 sm:px-6 lg:px-8">
                <div class="grid grid-cols-1 items-center gap-10 lg:grid-cols-2">
                    <div class="order-2 lg:order-1">
                        <p class="text-sm font-semibold uppercase tracking-wider text-red">3 years - 2nd Grade</p>
                        <h2 class="mt-2 text-2xl font-bold text-black">FirstKids Church</h2>
                        <div class="mt-3 w-16 border-t-4 border-red"></div>
                        <p class="mt-4 text-base leading-7 text-gray-600">
                            After the Children’s Moment during worship, kids ages 3 through 2ndgrade are warmly invited to head over to the Family Life Center for FirstKids Church. There, we explore the main sermon in a way that’s fun and easy for kids to understand. Children will enjoy a short worship time with upbeat songs, an offering, and prayer before heading to their classrooms.
                        </p>
                        <p class="mt-4 text-base leading-7 text-gray-600">
                            Each Sunday is thoughtfully designed to spark curiosity and wonder, helping children grow in their love for Jesus through engaging Bible stories, games, crafts, videos, and more.
                        </p>
                        <p class="mt-4 text-base leading-7 text-gray-600">
                            For children ages 3 through 6th grade who choose to remain in the sanctuary, Praise Packets are available in the narthex during worship.
                        </p>


                    </div>
                    <div class="relative order-1 lg:order-2">
                        <div class="absolute -bottom-4 -left-4 hidden aspect-4/3 w-full rounded-md sm:block bg-red/20"></div>
                        <div class="relative overflow-hidden rounded-md shadow-lg">
                            <img src="{{ Storage::disk('r2')->url('FirstKids Church.jpg') }}" alt="FirstKids Church" class="aspect-4/3 w-full object-cover">
                        </div>
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
                        <p class="mt-4 text-base leading-7 text-gray-600">
                            PowerPack is our Wednesday afternoon program designed for 2nd–6th graders! It is offered Wednesdays (except major holidays)
                            from August through May from 5:15–6 P.M. in the Family Life Center. Power Pak immediately follows Celebration Choir on Wednesdays.
                        </p>
                        <p class="mt-3 text-base leading-7 text-gray-600">
                            In PowerPack, we engage kids by offering devotionals, Bible fun, mission projects, praise and worship, and games, as well as
                            preparing and presenting a Children's Sabbath and an Easter play to the congregation, as a way to support kids and families on
                            their child's faith journey.
                        </p>
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
                            <li>Third Grade Bible Presentation & Bible Boot Camp</li>
                            <li>Children's Sabbath</li>
                            <li>Easter Egg Hunt</li>
                            <li>Easter Play</li>
                            <li>Breakfast in Bethlehem</li>
                        </ul>
                        <p class="mt-4 text-sm text-gray-500">Be sure to pick up a monthly newsletter or sign up to receive by email.</p>
                    </div>
                </div>
            </div>
        </section>

        {{-- Contact --}}
        <section class="py-12 sm:py-16">
            <div class="mx-auto max-w-3xl px-4 sm:px-6 lg:px-8">
                <div class="rounded-md border border-teal/20 bg-teal/5 p-6 text-center sm:p-8">
                    <p class="text-sm font-semibold uppercase tracking-wider text-teal">Get in Touch</p>
                    <h2 class="mt-2 text-xl font-bold text-black sm:text-2xl">Questions about FirstKids?</h2>
                    <p class="mt-3 text-base leading-7 text-gray-600">
                        Contact Rochelle Gray at
                        <a href="tel:8707726931" class="font-medium text-red hover:underline">(870) 772-6931</a>
                        or
                        <a href="mailto:rochelle@bethechurch.email" class="font-medium text-red hover:underline">rochelle@bethechurch.email</a>
                    </p>
                </div>
            </div>
        </section>
    </div>
</x-layouts.app>
