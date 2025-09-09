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

                <x-card class="relative flex flex-col items-center gap-12 bg-zinc-50/30 border border-zinc-200"
                        x-data="{
                        currentReview: 0,
                        reviews: [
                            {
                                text: '“I am impressed by the professionalism of the team at the Smile Point clinic. The attitude towards patients is also very good. I highly recommend it!”',
                                author: 'Kalina Sirakova'
                            },
                            {
                                text: '“Excellent service! The staff was incredibly gentle and thorough. My dental cleaning was the best I have ever had. Will definitely be coming back!”',
                                author: 'Maria Rodriguez'
                            },
                            {
                                text: '“From the moment I walked in, I felt welcome and comfortable. The team explained everything clearly and the treatment was painless. Highly recommend!”',
                                author: 'David Thompson'
                            }
                        ],
                        autoPlay: null,
                        startAutoPlay() {
                            this.autoPlay = setInterval(() => {
                                this.nextReview()
                            }, 5000)
                        },
                        stopAutoPlay() {
                            if (this.autoPlay) {
                                clearInterval(this.autoPlay)
                                this.autoPlay = null
                            }
                        },
                        nextReview() {
                            this.currentReview = (this.currentReview + 1) % this.reviews.length
                        },
                        goToReview(index) {
                            this.currentReview = index
                        }
                    }"
                        x-init="startAutoPlay()"
                        @mouseenter="stopAutoPlay()"
                        @mouseleave="startAutoPlay()">
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

                    <!-- Review Carousel -->
                    <div class="flex flex-col items-center gap-4 text-center h-full">
                        <div class="flex flex-col h-full relative">
                            <template x-for="(review, index) in reviews" :key="index">
                                <div class="absolute inset-0 flex flex-col"
                                     x-show="currentReview === index"
                                     x-transition:enter="transition ease-in-out duration-500"
                                     x-transition:enter-start="opacity-0 translate-x-8"
                                     x-transition:enter-end="opacity-100 translate-x-0"
                                     x-transition:leave="transition ease-in-out duration-500"
                                     x-transition:leave-start="opacity-100 translate-x-0"
                                     x-transition:leave-end="opacity-0 -translate-x-8">
                                    <flux:heading size="lg" x-text="review.text">
                                    </flux:heading>

                                    <flux:spacer/>

                                    <flux:subheading x-text="review.author">
                                    </flux:subheading>
                                </div>
                            </template>

                            <!-- Spacer to maintain card height -->
                            <div class="invisible">
                                <flux:heading size="lg">
                                    I am impressed by the professionalism of the team at the Smile Point clinic. The
                                    attitude towards patients is also very good. I highly recommend it!
                                </flux:heading>
                                <flux:spacer/>
                                <flux:subheading>
                                    Kalina Sirakova
                                </flux:subheading>
                            </div>
                        </div>

                        <!-- Navigation Dots -->
                        <div class="flex items-center gap-2">
                            <template x-for="(review, index) in reviews" :key="index">
                                <button
                                        @click="goToReview(index)"
                                        :class="currentReview === index ? 'bg-zinc-600' : 'bg-zinc-300'"
                                        class="rounded-full w-2 h-2 transition-colors duration-300 hover:bg-zinc-500">
                                </button>
                            </template>
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
