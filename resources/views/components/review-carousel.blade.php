@props([
    'reviews' => [],
])

<div {{ $attributes->class('group relative flex flex-col items-center gap-12 w-full h-full') }}
     x-data="reviewCarousel(@js($reviews))"
     x-init="startAutoPlay()"
     @mouseenter="stopAutoPlay()"
     @mouseleave="startAutoPlay()"
     @touchstart="handleTouchStart($event)"
     @touchmove="handleTouchMove($event)"
     @touchend="handleTouchEnd($event)">

    <div class="absolute w-20 h-20 opacity-10 top-20 left-0">
        <img src="{{ asset('images/quotes.png') }}" alt="Quotes Image">
    </div>

    {{ $slot }}

    <!-- Review Carousel -->
    <div class="flex flex-col items-center gap-4 text-center h-full">
        <div class="flex flex-col h-full relative touch-pan-x select-none">
            <!-- Forward direction animation -->
            <template x-if="direction >= 0">
                <template x-for="(review, index) in reviews" :key="'forward-' + index">
                    <div class="absolute inset-0 flex flex-col"
                         x-show="currentReview === index"
                         x-transition:enter="transition ease-in-out duration-300"
                         x-transition:enter-start="opacity-0 translate-x-4"
                         x-transition:enter-end="opacity-100 translate-x-0"
                         x-transition:leave="transition ease-in-out duration-300"
                         x-transition:leave-start="opacity-100 translate-x-0"
                         x-transition:leave-end="opacity-0 -translate-x-4">
                        <flux:heading size="lg" x-text="review.text">
                        </flux:heading>

                        <flux:spacer/>

                        <flux:subheading x-text="review.author">
                        </flux:subheading>
                    </div>
                </template>
            </template>

            <!-- Backward direction animation -->
            <template x-if="direction < 0">
                <template x-for="(review, index) in reviews" :key="'backward-' + index">
                    <div class="absolute inset-0 flex flex-col"
                         x-show="currentReview === index"
                         x-transition:enter="transition ease-in-out duration-300"
                         x-transition:enter-start="opacity-0 -translate-x-4"
                         x-transition:enter-end="opacity-100 translate-x-0"
                         x-transition:leave="transition ease-in-out duration-300"
                         x-transition:leave-start="opacity-100 translate-x-0"
                         x-transition:leave-end="opacity-0 translate-x-4">
                        <flux:heading size="lg" x-text="review.text">
                        </flux:heading>

                        <flux:spacer/>

                        <flux:subheading x-text="review.author">
                        </flux:subheading>
                    </div>
                </template>
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

        <!-- Navigation -->
        <div class="flex items-center justify-between w-full">
            <flux:button icon="chevron-left" square size="sm" variant="ghost"
                         @click="prevReview()"
                         aria-label="Previous review"
                         class="transition-all duration-200 active:scale-95 cursor-pointer"/>

            <div class="flex items-center gap-2">
                <template x-for="(review, index) in reviews" :key="index">
                    <button
                            @click="goToReview(index)"
                            :class="currentReview === index ? 'bg-zinc-600' : 'bg-zinc-800/10'"
                            class="rounded-full w-2 h-2 transition-colors duration-300 hover:bg-zinc-600/80 cursor-pointer">
                    </button>
                </template>
            </div>

            <flux:button icon="chevron-right" square size="sm" variant="ghost"
                         @click="nextReview()"
                         aria-label="Next review"
                         class="transition-all duration-200 active:scale-95 cursor-pointer"/>
        </div>
    </div>
</div>

<script>
    document.addEventListener('alpine:init', () => {
        Alpine.data('reviewCarousel', (reviews) => ({
            currentReview: 0,
            previousReview: 0,
            direction: 1,
            isTransitioning: false,
            touchStartX: 0,
            touchEndX: 0,
            minSwipeDistance: 50,
            reviews: reviews,
            autoPlay: null,

            startAutoPlay() {
                this.autoPlay = setInterval(() => {
                    this.nextReview()
                }, 2000)
            },

            stopAutoPlay() {
                if (this.autoPlay) {
                    clearInterval(this.autoPlay)
                    this.autoPlay = null
                }
            },

            nextReview() {
                if (this.isTransitioning) return
                this.setTransitioning(true)
                this.previousReview = this.currentReview
                this.direction = 1
                this.currentReview = (this.currentReview + 1) % this.reviews.length
                setTimeout(() => this.setTransitioning(false), 550)
            },

            prevReview() {
                if (this.isTransitioning) return
                this.setTransitioning(true)
                this.previousReview = this.currentReview
                this.direction = -1
                this.currentReview = this.currentReview === 0 ? this.reviews.length - 1 : this.currentReview - 1
                setTimeout(() => this.setTransitioning(false), 550)
            },

            goToReview(index) {
                if (this.isTransitioning || index === this.currentReview) return
                this.setTransitioning(true)
                this.previousReview = this.currentReview
                this.direction = index > this.currentReview ? 1 : -1
                this.currentReview = index
                setTimeout(() => this.setTransitioning(false), 550)
            },

            handleTouchStart(e) {
                this.touchStartX = e.touches[0].clientX
                this.stopAutoPlay()
            },

            handleTouchMove(e) {
                e.preventDefault()
            },

            handleTouchEnd(e) {
                this.touchEndX = e.changedTouches[0].clientX
                this.handleSwipe()
                this.startAutoPlay()
            },

            handleSwipe() {
                const swipeDistance = this.touchStartX - this.touchEndX
                const absDistance = Math.abs(swipeDistance)

                if (absDistance < this.minSwipeDistance) return

                if (swipeDistance > 0) {
                    this.nextReview()
                } else {
                    this.prevReview()
                }
            },

            setTransitioning(value) {
                this.isTransitioning = value
            }
        }))
    })
</script>