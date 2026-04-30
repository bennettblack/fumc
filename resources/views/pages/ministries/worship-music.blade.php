<x-layouts.app title="Worship & Music">
    <x-page-hero title="Worship & Music">
        <blockquote class="mx-auto mt-5 max-w-2xl">
            <p class="font-display text-lg italic leading-8 text-white/90">"Make a joyful noise unto the Lord, all the earth: make a loud noise, and rejoice, and sing praise."</p>
            <cite class="mt-2 block text-sm font-semibold not-italic text-white/60">— Psalm 98:4</cite>
        </blockquote>
    </x-page-hero>


    @php
        $groups = [
            [
                'name' => 'Chancel Choir',
                'category' => 'Vocal · Choral',
                'description' => 'The Chancel Choir leads in worship each Sunday morning at the 10:30 a.m. worship service. This is our adult choir, and they rehearse from 6:00 to 7:30 p.m. on Wednesday evenings. This traditional choral group has a history dating back to the earliest days of First United Methodist Church. Within that traditional setting, we do a variety of choral anthems and works from Gospel to Classical in style.',
            ],
            [
                'name' => "Spirit of 'J'",
                'category' => 'Ensemble',
                'description' => 'This group is a combo made up of four musicians that provide music at the offertory and communion. They present nicely done, tasteful contemporary and folk style music.',
            ],
            [
                'name' => 'Spirit Singers',
                'category' => 'Vocal',
                'description' => 'The Spirit Singers is a group that sometimes sings with "Spirit of \'J\'" in worship or at special events. Currently they rehearse on an on call basis.',
            ],
            [
                'name' => 'Bethany Singers',
                'category' => 'Vocal · Youth Choir',
                'description' => 'desc here',
            ],
            [
                'name' => 'Celebration Choir',
                'category' => "Vocal · Children's Choir",
                'description' => "Celebration Choir is the children's choir, made up of elementary age children in grades 2nd through 6th. They rehearse on Wednesday afternoons at 3:30 and sing in worship on the fourth Sunday of each month. They are brought to the church via church vehicles, or parents are welcome to bring them. This group represents 7 different elementary schools in greater Texarkana. They join the Bethany Singers at the 5:00 p.m. Christmas Eve Service to lead the congregation in worship. A snack is served to them prior to the Wednesday rehearsal.",
            ],
            [
                'name' => 'Celebration Ringers',
                'category' => 'Handbell · Children',
                'description' => "Celebration Ringers convene at 4:30 p.m. immediately following the Celebration Choir rehearsal. We move to the Handbell Room and rehearse until 5:00 p.m. They then have the opportunity to go to Power Pak, a fellowship, activity, and study group that is part of the Children's Ministries.",
            ],
            [
                'name' => 'Chancel Handbell Choir',
                'category' => 'Handbell',
                'description' => 'The Chancel Handbell Choir is a 5-octave choir that rehearses from August through March and plays in worship 5 to 6 times a year. They meet from 5:45 to 7:00 p.m. on Sunday evenings for rehearsal. The performances mentioned include a concert during the Advent/Christmas Season. They prepare and participate annually in the Arkansas Chapter Handbell Musicians of America Festival on the last Saturday of February each year. This group has been rehearsing and playing for more than 35 years.',
            ],
            [
                'name' => 'Seasonal Singers',
                'category' => 'Vocal · Seasonal',
                'description' => 'We welcome those that are unable to make a regular commitment to Chancel Choir to join us 6 to 8 weeks prior to Palm Sunday, Easter, and Christmas, to prepare music for these Feast Days of the liturgical year. For these occasions we prepare additional anthems, cantatas, or major works.',
            ],
            [
                'name' => 'Chancel Chamber Orchestra',
                'category' => 'Instrumental · Orchestra',
                'description' => 'For Palm Sunday, Easter, and Christmas we have professional musicians who accompany the choirs and congregation to bring glorious sounds to the Worship Service.',
            ],
        ];
    @endphp

    {{-- Group Listings --}}
    <section class="bg-teal/5 py-12 sm:py-24">
        <div class="mx-auto max-w-7xl px-4 sm:px-6 lg:px-8">
            <div class="text-center">
                <p class="text-sm font-semibold uppercase tracking-wider text-teal">Ensembles</p>
                <h2 class="mt-2 text-2xl font-bold text-black sm:text-3xl">Our Music Groups</h2>
                <div class="mx-auto mt-3 w-16 border-t-4 border-teal"></div>
            </div>

            <div class="mt-10 space-y-10 sm:mt-12 sm:space-y-16">
                {{-- Block 1: image left --}}
                <div class="grid grid-cols-1 items-center gap-6 lg:grid-cols-12 lg:gap-8">
                    <div class="relative lg:order-1 lg:col-span-7">
                        <div class="absolute -bottom-4 -right-4 hidden aspect-4/3 w-full rounded-md bg-teal/20 sm:block"></div>
                        <div class="relative aspect-4/3 overflow-hidden rounded-md bg-light-gray shadow-lg">
                            <img src="{{ Storage::disk('r2')->url('music_1.webp') }}" alt="" loading="lazy" class="h-full w-full scale-105 object-cover">
                        </div>
                    </div>
                    <div class="space-y-4 lg:order-2 lg:col-span-5">
                        @foreach (array_slice($groups, 0, 3) as $group)
                            <article class="rounded-md bg-white p-5 shadow-sm ring-1 ring-black/5 transition-shadow hover:shadow-md sm:p-6">
                                <p class="text-xs font-semibold uppercase tracking-wider text-red">{{ $group['category'] }}</p>
                                <h3 class="mt-1 text-lg font-bold text-black">{{ $group['name'] }}</h3>
                                <p class="mt-2 text-sm leading-relaxed text-gray-600">{{ $group['description'] }}</p>
                            </article>
                        @endforeach
                    </div>
                </div>

                {{-- Block 2: image right --}}
                <div class="grid grid-cols-1 items-center gap-6 lg:grid-cols-12 lg:gap-8">
                    <div class="relative lg:order-2 lg:col-span-7">
                        <div class="absolute -bottom-4 -left-4 hidden aspect-4/3 w-full rounded-md bg-teal/20 sm:block"></div>
                        <div class="relative aspect-4/3 overflow-hidden rounded-md bg-light-gray shadow-lg">
                            <img src="{{ Storage::disk('r2')->url('music_2.webp') }}" alt="" loading="lazy" class="h-full w-full object-cover">
                        </div>
                    </div>
                    <div class="space-y-4 lg:order-1 lg:col-span-5">
                        @foreach (array_slice($groups, 3, 2) as $group)
                            <article class="rounded-md bg-white p-5 shadow-sm ring-1 ring-black/5 transition-shadow hover:shadow-md sm:p-6">
                                <p class="text-xs font-semibold uppercase tracking-wider text-red">{{ $group['category'] }}</p>
                                <h3 class="mt-1 text-lg font-bold text-black">{{ $group['name'] }}</h3>
                                <p class="mt-2 text-sm leading-relaxed text-gray-600">{{ $group['description'] }}</p>
                            </article>
                        @endforeach
                    </div>
                </div>

                {{-- Block 3: image left --}}
                <div class="grid grid-cols-1 items-center gap-6 lg:grid-cols-12 lg:gap-8">
                    <div class="relative lg:order-1 lg:col-span-7">
                        <div class="absolute -bottom-4 -right-4 hidden aspect-4/3 w-full rounded-md bg-teal/20 sm:block"></div>
                        <div class="relative aspect-4/3 overflow-hidden rounded-md bg-light-gray shadow-lg">
                            <img src="{{ Storage::disk('r2')->url('music_3.webp') }}" alt="" loading="lazy" class="h-full w-full object-cover scale-150">
                        </div>
                    </div>
                    <div class="space-y-4 lg:order-2 lg:col-span-5">
                        @foreach (array_slice($groups, 5, 2) as $group)
                            <article class="rounded-md bg-white p-5 shadow-sm ring-1 ring-black/5 transition-shadow hover:shadow-md sm:p-6">
                                <p class="text-xs font-semibold uppercase tracking-wider text-red">{{ $group['category'] }}</p>
                                <h3 class="mt-1 text-lg font-bold text-black">{{ $group['name'] }}</h3>
                                <p class="mt-2 text-sm leading-relaxed text-gray-600">{{ $group['description'] }}</p>
                            </article>
                        @endforeach
                    </div>
                </div>

                {{-- Block 4: image right --}}
                <div class="grid grid-cols-1 items-center gap-6 lg:grid-cols-12 lg:gap-8">
                    <div class="relative lg:order-2 lg:col-span-7">
                        <div class="absolute -bottom-4 -left-4 hidden aspect-4/3 w-full rounded-md bg-teal/20 sm:block"></div>
                        <div class="relative aspect-4/3 overflow-hidden rounded-md bg-light-gray shadow-lg"></div>
                    </div>
                    <div class="space-y-4 lg:order-1 lg:col-span-5">
                        @foreach (array_slice($groups, 7, 2) as $group)
                            <article class="rounded-md bg-white p-5 shadow-sm ring-1 ring-black/5 transition-shadow hover:shadow-md sm:p-6">
                                <p class="text-xs font-semibold uppercase tracking-wider text-red">{{ $group['category'] }}</p>
                                <h3 class="mt-1 text-lg font-bold text-black">{{ $group['name'] }}</h3>
                                <p class="mt-2 text-sm leading-relaxed text-gray-600">{{ $group['description'] }}</p>
                            </article>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </section>

    {{-- Forms --}}
    <section class="py-12 sm:py-24">
        <div class="mx-auto max-w-3xl px-4 sm:px-6 lg:px-8">
            <div class="text-center">
                <p class="text-sm font-semibold uppercase tracking-wider text-red">Downloads</p>
                <h2 class="mt-2 text-2xl font-bold text-black sm:text-3xl">Forms</h2>
                <div class="mx-auto mt-3 w-16 border-t-4 border-red"></div>
            </div>
            <div class="mt-8 space-y-3">
                <a href="{{ Storage::disk('r2')->url('forms/CelebrationChoirForm.pdf') }}" target="_blank" rel="noopener" class="group flex items-center gap-4 rounded-md bg-white p-4 shadow-sm ring-1 ring-black/5 transition-shadow hover:shadow-md">
                    <div class="flex size-10 shrink-0 items-center justify-center rounded-full bg-red/10 text-red">
                        <svg xmlns="http://www.w3.org/2000/svg" class="size-5" viewBox="0 0 20 20" fill="currentColor"><path fill-rule="evenodd" d="M4 4a2 2 0 012-2h4.586A2 2 0 0112 2.586L15.414 6A2 2 0 0116 7.414V16a2 2 0 01-2 2H6a2 2 0 01-2-2V4zm2 6a1 1 0 011-1h6a1 1 0 110 2H7a1 1 0 01-1-1zm1 3a1 1 0 100 2h6a1 1 0 100-2H7z" clip-rule="evenodd" /></svg>
                    </div>
                    <div class="flex-1">
                        <h3 class="text-base font-semibold text-black">Celebration Choir Enrollment Form</h3>
                        <p class="text-xs text-gray-500">PDF</p>
                    </div>
                    <svg xmlns="http://www.w3.org/2000/svg" class="size-5 text-gray-400 transition-colors group-hover:text-red" fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" d="M3 16.5v2.25A2.25 2.25 0 0 0 5.25 21h13.5A2.25 2.25 0 0 0 21 18.75V16.5M16.5 12 12 16.5m0 0L7.5 12m4.5 4.5V3" /></svg>
                </a>
            </div>
        </div>
    </section>

</x-layouts.app>
