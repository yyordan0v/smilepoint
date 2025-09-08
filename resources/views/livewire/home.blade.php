<flux:main container class="space-y-24">
    <section class="relative isolate flex gap-12 ">
        <div class="max-w-2xl lg:max-w-xl flex-shrink-0 lg:mt-24">
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
                <x-card class="flex flex-col bg-lime-400">
                    <flux:heading class="italic">The</flux:heading>
                    <flux:heading size="2xl" class="-tracking-tighter">Smile</flux:heading>
                    <flux:heading size="2xl" class="-tracking-tighter">of Your</flux:heading>
                    <flux:heading size="2xl" class="-tracking-tighter">Dreams</flux:heading>

                    <flux:spacer/>

                    <div class="w-36 self-end mt-16">
                        <img src="{{ asset('images/smile.svg') }}" alt="">
                    </div>

                    <div class="flex items-center justify-between mt-8">
                        <flux:avatar.group class="**:!ring-lime-400">
                            <flux:avatar circle src="https://unavatar.io/x/calebporzio"/>
                            <flux:avatar circle src="https://unavatar.io/github/hugosaintemarie"/>
                            <flux:avatar circle src="https://unavatar.io/github/joshhanley"/>
                            <flux:avatar circle>3+</flux:avatar>
                        </flux:avatar.group>

                        <flux:link variant="subtle" :accent="false" href="#"
                                   class="text-xs !text-zinc-600 hover:!text-zinc-800">
                            <span>Team</span>
                            <br>
                            <span>of Experts</span>
                        </flux:link>
                    </div>
                </x-card>

                <x-card class="flex flex-col gap-6 bg-zinc-50 !p-3">
                    <div class="flex items-center justify-between pt-3">
                        <flux:heading>
                            Our Services
                        </flux:heading>

                        <flux:button variant="ghost" icon-trailing="arrow-long-right" size="xs">
                            View All
                        </flux:button>
                    </div>

                    <div class="grid grid-cols-2 gap-3 h-full">
                        <x-service-card
                                title="Aligners"
                                image="images/aligners.png"
                                color="orange"/>

                        <x-service-card
                                title="Teeth Whitening"
                                image="images/whitening.png"
                                color="blue"/>

                        <x-service-card
                                title="Dental Veneers"
                                image="images/veneers.png"
                                color="pink"/>

                        <x-service-card
                                title="Dental Implants"
                                image="images/implants.png"
                                color="emerald"/>
                    </div>
                </x-card>
            </div>
        </div>

        <div class="-mt-8 -mr-28">
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
