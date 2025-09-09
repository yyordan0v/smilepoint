<flux:main container class="space-y-24">
    <section class="relative isolate flex gap-12 ">
        <div class="max-w-2xl flex-shrink-0 lg:mt-24">
            <flux:heading level="1" size="3xl" class="mt-10 flex flex-col">
                <span>{{ __('Bright Smiles,') }}</span>
                <span>{{ __('Expert Care.') }}</span>
            </flux:heading>

            <flux:subheading size="lg" class="mt-6">
                {{ __('The SmilePoint team delivers expert care with a gentle touch — helping you achieve the confident, radiant smile you deserve.') }}
            </flux:subheading>

            <div class="mt-10 flex items-center gap-x-6">
                <flux:button variant="primary" color="zinc" icon="phone">
                    {{ __('Book Now') }}
                </flux:button>

                <flux:button variant="ghost" icon-trailing="arrow-long-right">
                    {{ __('Write Us') }}
                </flux:button>
            </div>

            <div class="grid grid-cols-2 gap-3 w-full mt-24">
                <x-card class="flex flex-col bg-zinc-50 border border-zinc-200">
                    <flux:heading class="italic">Your</flux:heading>
                    <flux:heading size="2xl" class="-tracking-tighter">Dental</flux:heading>
                    <flux:heading size="2xl" class="-tracking-tighter">Care</flux:heading>
                    <flux:heading size="2xl" class="-tracking-tighter">Team</flux:heading>

                    <flux:spacer/>

                    <div class="w-36 self-end mt-16">
                        <img src="{{ asset('images/smile.svg') }}" alt="">
                    </div>

                    <div class="flex items-center justify-between mt-8">
                        <flux:avatar.group class="**:!ring-zinc-50">
                            <flux:avatar circle src="https://unavatar.io/x/calebporzio"/>
                            <flux:avatar circle src="https://unavatar.io/github/hugosaintemarie"/>
                            <flux:avatar circle src="https://unavatar.io/github/joshhanley"/>
                            <flux:avatar circle>3+</flux:avatar>
                        </flux:avatar.group>

                        <flux:link variant="ghost" href="#" :accent="true"
                                   class="text-xs hover:!no-underline hover:brightness-110">
                            <div class="flex items-end gap-1">
                                <div>
                                    <span>Meet</span>
                                    <br>
                                    <span>our Experts</span>
                                </div>

                                <flux:icon.arrow-up-right variant="micro"/>
                            </div>
                        </flux:link>
                    </div>
                </x-card>

                <x-card class="relative flex flex-col items-center gap-12 bg-zinc-50/30 border border-zinc-200">
                    <div class="absolute w-20 h-20 opacity-10 top-24 left-4">
                        <img src="{{ asset('images/quotes.png') }}" alt="Quotes Image">
                    </div>
                    <!-- Rating -->
                    <div class="flex flex-col items-center gap-2">
                        <div class="flex gap-3 items-center">
                            <div>
                                <img src="{{ asset('images/google.svg') }}" class="w-5 h-5" alt="Google Logo">
                            </div>
                            <div class="flex items-center">
                                <flux:icon.star variant="solid" class="text-amber-400 w-4"/>
                                <flux:icon.star variant="solid" class="text-amber-400 w-4"/>
                                <flux:icon.star variant="solid" class="text-amber-400 w-4"/>
                                <flux:icon.star variant="solid" class="text-amber-400 w-4"/>
                                <flux:icon.star variant="solid" class="text-amber-400 w-4"/>
                            </div>
                        </div>
                        <flux:text size="sm">
                            4.9 rating (107 reviews)
                        </flux:text>

                        <flux:link href="#" size="sm" variant="ghost" :accent="false">
                            <div class="flex items-center gap-2 text-xs">
                                <span>
                                    View All Google Reviews
                                </span>
                                <flux:icon.arrow-top-right-on-square variant="micro"/>
                            </div>
                        </flux:link>
                    </div>

                    <!-- Review -->
                    <div class="flex flex-col items-center gap-4 text-center h-full">
                        <div class="flex flex-col h-full">
                            <flux:heading size="lg">
                                “I am impressed by the professionalism of the team at the Smile Point clinic. The
                                attitude
                                towards patients is also very good. I highly recommend it!”
                            </flux:heading>

                            <flux:spacer/>

                            <flux:subheading>
                                Kalina Sirakova
                            </flux:subheading>
                        </div>

                        <div class="flex items-center gap-2">
                            <div class="bg-zinc-600 rounded-full w-2 h-2"></div>
                            <div class="bg-zinc-300 rounded-full w-2 h-2"></div>
                            <div class="bg-zinc-300 rounded-full w-2 h-2"></div>
                            <div class="bg-zinc-300 rounded-full w-2 h-2"></div>
                            <div class="bg-zinc-300 rounded-full w-2 h-2"></div>
                        </div>
                    </div>
                </x-card>
            </div>
        </div>

        <div class="-mt-8 -mr-64">
            <img src="{{ asset('images/woman_clean.png') }}" alt="">
        </div>

        <x-blobs/>
    </section>

    <div>
        Lorem ipsum dolor sit amet, consectetur adipisicing elit. Esse, nobis, quo. Ad doloribus expedita illo illum
        nesciunt, nostrum quae similique tempore veniam voluptatem! Eligendi enim error et mollitia obcaecati pariatur
        quas quo tempore. Aspernatur doloremque harum id minima non odit porro. Doloribus eos harum ipsam sed suscipit
        totam velit voluptates! Autem cumque delectus ea illo ipsum labore, maiores minus modi molestiae nam nulla
        numquam perferendis provident, quae qui quidem quo quos repellendus saepe velit veniam voluptas voluptatem?
        Architecto at atque autem doloribus, eius hic illum inventore ipsam laboriosam maiores minima nobis officiis
        quas quisquam quo reiciendis unde veritatis vitae voluptatem!
    </div>

    <div>
        Lorem ipsum dolor sit amet, consectetur adipisicing elit. Esse, nobis, quo. Ad doloribus expedita illo illum
        nesciunt, nostrum quae similique tempore veniam voluptatem! Eligendi enim error et mollitia obcaecati pariatur
        quas quo tempore. Aspernatur doloremque harum id minima non odit porro. Doloribus eos harum ipsam sed suscipit
        totam velit voluptates! Autem cumque delectus ea illo ipsum labore, maiores minus modi molestiae nam nulla
        numquam perferendis provident, quae qui quidem quo quos repellendus saepe velit veniam voluptas voluptatem?
        Architecto at atque autem doloribus, eius hic illum inventore ipsam laboriosam maiores minima nobis officiis
        quas quisquam quo reiciendis unde veritatis vitae voluptatem!
    </div>

    <div>
        Lorem ipsum dolor sit amet, consectetur adipisicing elit. Esse, nobis, quo. Ad doloribus expedita illo illum
        nesciunt, nostrum quae similique tempore veniam voluptatem! Eligendi enim error et mollitia obcaecati pariatur
        quas quo tempore. Aspernatur doloremque harum id minima non odit porro. Doloribus eos harum ipsam sed suscipit
        totam velit voluptates! Autem cumque delectus ea illo ipsum labore, maiores minus modi molestiae nam nulla
        numquam perferendis provident, quae qui quidem quo quos repellendus saepe velit veniam voluptas voluptatem?
        Architecto at atque autem doloribus, eius hic illum inventore ipsam laboriosam maiores minima nobis officiis
        quas quisquam quo reiciendis unde veritatis vitae voluptatem!
    </div>

    <div>
        Lorem ipsum dolor sit amet, consectetur adipisicing elit. Esse, nobis, quo. Ad doloribus expedita illo illum
        nesciunt, nostrum quae similique tempore veniam voluptatem! Eligendi enim error et mollitia obcaecati pariatur
        quas quo tempore. Aspernatur doloremque harum id minima non odit porro. Doloribus eos harum ipsam sed suscipit
        totam velit voluptates! Autem cumque delectus ea illo ipsum labore, maiores minus modi molestiae nam nulla
        numquam perferendis provident, quae qui quidem quo quos repellendus saepe velit veniam voluptas voluptatem?
        Architecto at atque autem doloribus, eius hic illum inventore ipsam laboriosam maiores minima nobis officiis
        quas quisquam quo reiciendis unde veritatis vitae voluptatem!
    </div>
</flux:main>
