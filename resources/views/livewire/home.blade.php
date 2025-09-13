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

                <x-card class="bg-zinc-50/30 border border-zinc-200">
                    <x-review-carousel :reviews="[
                        [
                            'text' => 'I am impressed by the professionalism of the team at the Smile Point clinic. The attitude towards patients is also very good. I highly recommend it!',
                            'author' => 'Kalina Sirakova'
                        ],
                        [
                            'text' => 'Excellent service! The staff was incredibly gentle and thorough. My dental cleaning was the best I have ever had. Will definitely be coming back!',
                            'author' => 'Maria Rodriguez'
                        ],
                        [
                            'text' => 'From the moment I walked in, I felt welcome and comfortable. The team explained everything clearly and the treatment was painless. Highly recommend!',
                            'author' => 'David Thompson'
                        ]
                    ]">
                        <x-review-rating
                                rating="4.9"
                                :review-count="107"
                                provider="Google"
                                view-all-url="#"/>
                    </x-review-carousel>
                </x-card>
            </div>
        </div>


        <x-blobs/>
    </section>

    <div class="absolute top-14 right-0 w-1/2 z-1">
        <img src="{{ asset('images/woman2.png') }}" alt="">
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
