@props([
    'reviews' => [],
])

<section class="relative isolate flex flex-col lg:flex-row gap-6 lg:gap-12">
    <div class="max-w-2xl flex-shrink-0 lg:mt-24">
        <flux:heading level="1" size="3xl" class="mt-10 flex flex-col dark:text-white">
            <span>{{ __('Bright Smiles,') }}</span>
            <span>{{ __('Expert Care.') }}</span>
        </flux:heading>

        <flux:subheading size="lg" class="mt-6 dark:text-zinc-400">
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

        <div class="grid grid-cols-1 md:grid-cols-2 gap-3 w-full mt-12 lg:mt-24">
            <x-card class="flex flex-col bg-zinc-50 dark:bg-zinc-800/50 border border-zinc-200 dark:border-zinc-700">
                <flux:heading class="italic dark:text-white">Your</flux:heading>
                <flux:heading size="2xl" class="-tracking-tighter dark:text-white">Dental</flux:heading>
                <flux:heading size="2xl" class="-tracking-tighter dark:text-white">Care</flux:heading>
                <flux:heading size="2xl" class="-tracking-tighter dark:text-white">Team</flux:heading>

                <flux:spacer/>

                <div class="w-36 self-end mt-16">
                    <img src="{{ asset('images/smile.svg') }}" alt="" class="dark:invert">
                </div>

                <div class="flex items-center justify-between mt-8">
                    <flux:avatar.group class="**:!ring-zinc-50 dark:**:!ring-zinc-800">
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

            <x-card class="bg-zinc-50/30 dark:bg-zinc-800/50 border border-zinc-200 dark:border-zinc-700">
                <x-review-carousel :reviews="$reviews">
                    <x-review-rating
                            rating="4.9"
                            :review-count="107"
                            provider="Google"
                            view-all-url="#"/>
                </x-review-carousel>
            </x-card>
        </div>
    </div>

    <div class="hidden lg:block -ml-48 -z-1 -mt-8">
        <img src="{{ asset('images/woman2.png') }}" alt="">
    </div>

    <x-blobs/>
</section>
