<flux:main container class="space-y-24">
    <section class="relative isolate flex gap-12 ">
        <div class="max-w-2xl lg:max-w-xl flex-shrink-0 lg:mt-24">
            <flux:heading level="1" size="xl" class="!text-5xl !font-black mt-10 flex flex-col">
                <span>{{ __('Bright Smiles,') }}</span>
                <span>{{ __('Expert Care.') }}</span>
            </flux:heading>

            <flux:subheading class="mt-6">
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
                    <flux:heading class="!text-4xl !font-black -tracking-tighter">Smile</flux:heading>
                    <flux:heading class="!text-4xl !font-black -tracking-tighter">of Your</flux:heading>
                    <flux:heading class="!text-4xl !font-black -tracking-tighter">Dreams</flux:heading>

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
                        <flux:heading>Our Services</flux:heading>

                        <flux:button variant="ghost" icon-trailing="arrow-long-right" size="xs">
                            View All
                        </flux:button>
                    </div>

                    <div class="grid grid-cols-2 gap-2 h-full">
                        <div class="group flex flex-col bg-radial-[at_50%_100%] from-emerald-100 via-emerald-200 to-emerald-300 to-90% rounded-xl p-2">
                            <div class="flex justify-start">
                                <flux:text size="sm" variant="strong" class="text-[10px]">Aligners</flux:text>
                            </div>
                            <div class="flex-1 flex items-center justify-center">
                                <img src="{{ asset('images/aligners.png') }}"
                                     class="group-hover:scale-105 transition-all duration-150 w-24 h-24 object-contain">
                            </div>
                        </div>
                        <div class="group flex flex-col bg-radial-[at_50%_100%] from-blue-100 via-blue-200 to-blue-300 to-90% rounded-md p-2">
                            <div class="flex justify-start">
                                <flux:text variant="strong" class="text-[10px]">Teeth Whitening</flux:text>
                            </div>
                            <div class="flex-1 flex items-center justify-center">
                                <img src="{{ asset('images/whitening.png') }}"
                                     class="group-hover:scale-105 transition-all duration-150 w-24 h-24 object-contain">
                            </div>
                        </div>
                        <div class="group flex flex-col bg-radial-[at_50%_100%] from-pink-100 via-pink-200 to-pink-300 to-90% rounded-md p-2">
                            <div class="flex justify-start">
                                <flux:text size="sm" variant="strong" class="text-[10px]">Dental Veneers</flux:text>
                            </div>
                            <div class="flex-1 flex items-center justify-center">
                                <img src="{{ asset('images/veneers.png') }}"
                                     class="group-hover:scale-105 transition-all duration-150 w-24 h-24 object-contain">
                            </div>
                        </div>
                        <div class="group flex flex-col bg-radial-[at_50%_100%] from-orange-100 via-orange-200 to-orange-300 to-90% rounded-md p-2">
                            <div class="flex justify-start">
                                <flux:text size="sm" variant="strong" class="text-[10px]">Dental Implants
                                </flux:text>
                            </div>
                            <div class="flex-1 flex items-center justify-center">
                                <img src="{{ asset('images/implants.png') }}"
                                     class="group-hover:scale-105 transition-all duration-150 w-24 h-24 object-contain">
                            </div>
                        </div>
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
