<x-layouts.app title="History">
    <x-page-hero title="Our History" subtitle="A legacy of faith, community, and service" />

    <section class="py-16 sm:py-20">
        <div class="mx-auto max-w-7xl px-4 sm:px-6 lg:px-8">
            <div class="flex flex-col gap-12 lg:flex-row lg:gap-16">

                {{-- Main body --}}
                <div class="lg:w-3/5">
                    <p class="text-sm font-semibold uppercase tracking-wider text-red">Written by James Thomas</p>
                    <h2 class="mt-1 text-2xl font-bold text-black">Historical</h2>
                    <div class="mt-3 w-16 border-t-4 border-red"></div>
                    <p class="mt-2 text-xs italic text-gray-400">Written in the early 1900s</p>

                    <figure class="mt-8">
                        <img src="https://placehold.co/240x300/e5e7eb/9ca3af?text=Rev.+James+Thomas" alt="Rev. James Thomas" class="h-auto w-40 rounded-md object-cover sm:w-48">
                        <figcaption class="mt-2 text-xs italic text-gray-400">Rev. James Thomas</figcaption>
                    </figure>

                    <div class="prose prose-gray mt-8 max-w-none">
                        <p>The General Conference of the Methodist Episcopal Church, South, which convened in May, 1902, at Dallas, Texas, changed the boundary line between the Little Rock and Texas Conferences, making State Line Avenue the boundary, thereby putting into the Little Rock Conference all territory in the city of Texarkana east of State Line Avenue.</p>

                        <p>The following session of the Little Rock Conference, held in Benton November 26 to December 1, 1902 was resided over by Bishop E. E. Hoss, assigned Rev. James Thomas to the First Methodist Church, Texarkana, Ark. The church was imaginary save only in name, the good Bishop and his cabinet naming it before its birth.</p>

                        <p>On December 14, 1902, the church was organized in the Miller County Courthouse, with forty-seven members. During that week the little congregation was offered by Rabbi Bogen and his congregation the use of the Synagogue, which was accepted and occupied for one year by the pastor and congregation of the First Methodist Church.</p>

                        <p>Lots were secured and plans agreed upon and the first work on the new building was done in May, 1903.</p>

                        <p>The church continued to grow from week to week, until now she has between two hundred and fifty and three hundred members.</p>

                        <p>Rev. James Thomas was again appointed to the work at the El Dorado Conference, Bishop E. E. Hoss, presiding, in November, 1903.</p>

                        <p>In January, 1904, the congregation moved into the Sunday School apartment, in which they have worshiped until the completion of the church proper.</p>

                        <p>The building is modern in style. The material is brick and stone with concrete foundation and slate roof.</p>

                        <p>The auditorium is beautifully furnished, elegantly finished, and has a seating capacity of 600. The balcony will seat on pews 175. By using chairs to fill up aisle space, at least 1,000 can be accommodated in this apartment. The Sunday School apartment will seat 400. The basement is set apart for social purposes, under the management of the women. The parlors are commodious and modern, elegantly furnished and comfortable.</p>

                        <p>First Methodist Church, Texarkana, Ark., has some distinguishing marks which I wish to enumerate:</p>

                        <ol>
                            <li>The activity of the women.</li>
                            <li>The broad liberality of its membership.</li>
                            <li>An absence of schisms or differences of any character. The family idea prevails.</li>
                            <li>Its absolute loyalty to Methodism.</li>
                            <li>Its two choirs, Sunday School and Church, and the congregational singing.</li>
                            <li>For its number of consecrated old people.</li>
                            <li>For evidence of solid piety and growth in grace and in knowledge.</li>
                        </ol>
                    </div>
                </div>

                {{-- Sidebar --}}
                <div class="lg:w-2/5" x-data="{ active: 'sunday-school' }">
                    <div class="rounded-md border border-gray-200 bg-neutral-50 p-6 lg:sticky lg:top-8 sm:p-8">
                        <p class="text-sm font-semibold uppercase tracking-wider text-red">More History</p>
                        <h3 class="mt-1 text-xl font-bold text-black">Church Organizations</h3>
                        <div class="mt-3 w-16 border-t-4 border-red"></div>

                        <nav class="mt-6 flex flex-col gap-0.5">
                            <button
                                x-on:click="active = 'sunday-school'"
                                :class="active === 'sunday-school' ? 'bg-red text-white' : 'bg-white text-gray-700 hover:text-red border border-gray-200'"
                                class="cursor-pointer rounded px-4 py-2.5 text-left text-sm font-medium transition-colors"
                            >Sunday School</button>
                            <button
                                x-on:click="active = 'epworth-league'"
                                :class="active === 'epworth-league' ? 'bg-red text-white' : 'bg-white text-gray-700 hover:text-red border border-gray-200'"
                                class="cursor-pointer rounded px-4 py-2.5 text-left text-sm font-medium transition-colors"
                            >Epworth League</button>
                            <button
                                x-on:click="active = 'foreign-missionary'"
                                :class="active === 'foreign-missionary' ? 'bg-red text-white' : 'bg-white text-gray-700 hover:text-red border border-gray-200'"
                                class="cursor-pointer rounded px-4 py-2.5 text-left text-sm font-medium transition-colors"
                            >Woman's Foreign Missionary Society</button>
                            <button
                                x-on:click="active = 'home-missionary'"
                                :class="active === 'home-missionary' ? 'bg-red text-white' : 'bg-white text-gray-700 hover:text-red border border-gray-200'"
                                class="cursor-pointer rounded px-4 py-2.5 text-left text-sm font-medium transition-colors"
                            >Woman's Home Missionary Society</button>
                            <button
                                x-on:click="active = 'personal'"
                                :class="active === 'personal' ? 'bg-red text-white' : 'bg-white text-gray-700 hover:text-red border border-gray-200'"
                                class="cursor-pointer rounded px-4 py-2.5 text-left text-sm font-medium transition-colors"
                            >Personal</button>
                        </nav>

                        <div class="mt-6 prose prose-sm prose-gray max-w-none">
                            <div x-show="active === 'sunday-school'" x-transition:enter.opacity>
                                <p>The Sunday School was organized on the first Sunday in January, 1903, by Dr. E. H. T. Mann, Superintendent, and Charles M. Robertson, Secretary and Treasurer. Our Hebrew brethren held their school in the morning, so we were compelled to hold ours in the afternoon. We had but a couple of dozen to begin with, including officers and teachers, but now we number over two hundred, well organized and doing good work.</p>
                                <p>Mr. James L. Turner succeeded Dr. Mann as Superintendent at the beginning of this Conference year. To these two men and a faithful set of officers and teachers belongs the credit for this phenomenal growth. One of the great features of the Sunday School is its choir. Miss Myra Simms is the organist, and she, together with about thirty-five young people and children, make up the choir.</p>
                            </div>
                            <div x-show="active === 'epworth-league'" x-transition:enter.opacity>
                                <p>In July, 1903, the young people met at the home of the pastor and organized an Epworth League, with twenty-three members. Mr. J. I. Compton was elected President, and, through a period when they had no place to meet he held them together and developed them in Christian giving and on social lines as well as spiritually, until within less than a year they have done much work for the Master. The beautiful chancel rail was put in by the Epworth League. Mr. Compton left our city and Mr. Will D. Waters took his place as the present President.</p>
                            </div>
                            <div x-show="active === 'foreign-missionary'" x-transition:enter.opacity>
                                <p>On April 14, 1903, an Auxiliary of the Woman's Foreign Missionary Society was organized with Mrs. Q. O. Turner as President and seven others. They have grown some and done good work.</p>
                            </div>
                            <div x-show="active === 'home-missionary'" x-transition:enter.opacity>
                                <p>On January 5, 1903, the above named society was organized and from the date of its organization has done magnificent work in all departments. The Bible study class has been faithful from the very first.</p>
                                <p>Perhaps the local work of this band of women, under the guidance of Mrs. J. F. Giles, merits special mention in this connection. By systematic giving they have raised and are raising money for carpets throughout the entire structure, at a cost of perhaps $1,500.00.</p>
                                <p>First Church resorts to no other method of raising money save only to quietly and systematically give as the Lord prospers them.</p>
                            </div>
                            <div x-show="active === 'personal'" x-transition:enter.opacity>
                                <p>In preparing this little souvenir booklet I wish to make a few statements.</p>
                                <p>First. I never was thrown among a better people than the membership of First Church.</p>
                                <p>Second. The Christian people of Texarkana generally are alive to the interests of the Church, and are working in their fast growing city for its betterment.</p>
                                <p>Third. The citizenship generally of Texarkana are broad minded and liberal, and are satisfied with nothing less than the best.</p>
                                <p>Fourth. I am entitled to no credit, except that which comes from a faithful service for what has been accomplished. The credit is due alike to all, and especially to the self-sacrificing men and women who have made possible this great Church.</p>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </section>
</x-layouts.app>
