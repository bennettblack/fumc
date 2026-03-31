<x-layouts.app title="Contact Us">
    <x-page-hero title="Contact Us" subtitle="Thanks for visiting our website. If you need more information or have any other requests, please fill out the following form so we can be in touch with you!" />

    <section class="py-16 sm:py-20">
        <div class="mx-auto max-w-6xl px-4 sm:px-6 lg:px-8">
            <div class="grid grid-cols-1 gap-8 lg:grid-cols-5">
                {{-- Contact Info --}}
                <div class="lg:col-span-2">
                    <p class="text-sm font-semibold uppercase tracking-wider text-red">Get in Touch</p>
                    <h2 class="mt-1 text-2xl font-bold text-black">Church Information</h2>
                    <div class="mt-3 w-16 border-t-4 border-red"></div>

                    <dl class="mt-8 space-y-6">
                        <div>
                            <dt class="flex items-center gap-1.5 text-sm font-semibold text-teal">
                                <svg xmlns="http://www.w3.org/2000/svg" class="size-4" viewBox="0 0 20 20" fill="currentColor"><path fill-rule="evenodd" d="M5.05 4.05a7 7 0 119.9 9.9L10 18.9l-4.95-4.95a7 7 0 010-9.9zM10 11a2 2 0 100-4 2 2 0 000 4z" clip-rule="evenodd" /></svg>
                                Address
                            </dt>
                            <dd class="mt-1 text-gray-600"><a href="https://maps.app.goo.gl/2Pobtw6FuyyqfoxN6" target="_blank" rel="noopener noreferrer" class="hover:text-red transition-colors">420 East 9th St.<br>Texarkana, AR 71854</a></dd>
                        </div>
                        <div>
                            <dt class="flex items-center gap-1.5 text-sm font-semibold text-teal">
                                <svg xmlns="http://www.w3.org/2000/svg" class="size-4" viewBox="0 0 20 20" fill="currentColor"><path d="M2 3a1 1 0 011-1h2.153a1 1 0 01.986.836l.74 4.435a1 1 0 01-.54 1.06l-1.548.773a11.037 11.037 0 006.105 6.105l.774-1.548a1 1 0 011.059-.54l4.435.74a1 1 0 01.836.986V17a1 1 0 01-1 1h-2C7.82 18 2 12.18 2 5V3z" /></svg>
                                Phone
                            </dt>
                            <dd class="mt-1 text-gray-600"><a href="tel:+18707726931" class="hover:text-red transition-colors">870-772-6931</a></dd>
                        </div>
                        <div>
                            <dt class="flex items-center gap-1.5 text-sm font-semibold text-teal">
                                <svg xmlns="http://www.w3.org/2000/svg" class="size-4" viewBox="0 0 20 20" fill="currentColor"><path d="M2.003 5.884L10 9.882l7.997-3.998A2 2 0 0016 4H4a2 2 0 00-1.997 1.884z" /><path d="M18 8.118l-8 4-8-4V14a2 2 0 002 2h12a2 2 0 002-2V8.118z" /></svg>
                                Email
                            </dt>
                            <dd class="mt-1 text-gray-600"><a href="mailto:texarkanamethodist@gmail.com" class="hover:text-red transition-colors">texarkanamethodist@gmail.com</a></dd>
                        </div>
                    </dl>
                </div>

                {{-- Contact Form --}}
                <div class="rounded-md border border-gray-200 bg-neutral-50 p-6 sm:p-8 lg:col-span-3">
                    <p class="text-sm font-semibold uppercase tracking-wider text-red">Send a Message</p>
                    <h2 class="mt-1 text-2xl font-bold text-black">Contact Form</h2>
                    <div class="mt-3 w-16 border-t-4 border-red"></div>

                    <livewire:contact-form />
                </div>
            </div>
        </div>
    </section>
</x-layouts.app>
