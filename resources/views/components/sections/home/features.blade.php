<section class="isolate relative mt-16 lg:mt-32">
    <x-grid-pattern/>

    {{-- Mobile layout --}}
    <div class="pt-16 lg:hidden flex flex-col gap-3">
        <div class="grid grid-cols-2 gap-3">
            <x-stats-card value="10+" :label="__('Years Experience')"/>
            <x-stats-card value="10,000+" :label="__('Happy Patients')"/>
        </div>

        <x-card class="flex flex-col bg-zinc-50/30 dark:bg-zinc-800/50 border border-zinc-200 dark:border-zinc-700">
            <flux:heading size="2xl" class="dark:text-white">
                {{ __("Don't you think it is great luck to have healthy and shiny teeth your entire life?") }}
            </flux:heading>

            <flux:spacer/>

            <div class="flex flex-col sm:flex-row items-start gap-4 flex-1 mt-6">
                <div class="space-y-2">
                    <flux:heading :accent="true">
                        {{ __('SmilePoint offers you the best quality of any treatment for your smile!') }}
                    </flux:heading>

                    <flux:text class="dark:text-zinc-400">
                        {{ __('If you are a person who knows how to take care of themselves and their well-being. Then you probably
                        know the advantages of having healthy and appealing smile. If you value your time and you don`t want
                        to waste it in waiting around. If you rely on the individual approach, correctness, high quality of
                        service and care, SmilePoint is your choice.') }}
                    </flux:text>
                </div>

                <div class="mx-auto sm:mx-0">
                    <img src="{{ asset('images/hands-clean.png') }}" alt="" class="max-w-32 sm:max-w-48">
                </div>
            </div>
        </x-card>

        <x-feature-card
                icon="hand-heart"
                :title="__('Individual Approach')"
                :description="__('Personalized treatment plans.')"
        />

        <x-cta-card
                :title="__('Invisalign Platinum Provider')"
                :description="__('Professional 3D scanning and personalized aligners. Treatment takes 6-12 months with SmartTrack® material for precise tooth movement. Completely transparent and removable for eating.')"
                :button-text="__('Invisalign Smile View')"
                button-icon="arrow-top-right-on-square"
                image="images/invisalign.png"
                image-position="bottom"
        />

        <x-cta-card
                :title="__('Smile Makeovers')"
                :description="__('Real results, real smiles. Explore our gallery of smile transformations and see the difference expert care makes.')"
                :button-text="__('View Gallery')"
        />

        <x-cta-card
                :title="__('Comprehensive Dental Services')"
                :description="__('Full range of treatments: aligners, teeth whitening, endodontic treatment, laser periodontal care, veneers, bonding, zirconia crowns, implants, and bruxism treatment.')"
                :button-text="__('View Services')"
        />
    </div>

    {{-- Desktop layout --}}
    <div class="pt-32 hidden lg:grid grid-cols-10 grid-rows-10 gap-3">
        <!-- Numbers -->
        <x-stats-card
                grid="col-span-2 row-span-3 col-start-1 row-start-1"
                value="10+"
                :label="__('Years Experience')"
        />

        <!-- Text/Image -->
        <x-card grid="col-span-5 row-span-6 col-start-3 row-start-1"
                class="flex flex-col bg-zinc-50/30 dark:bg-zinc-800/50 border border-zinc-200 dark:border-zinc-700">
            <flux:heading size="2xl" class="dark:text-white">
                {{ __("Don't you think it is great luck to have healthy and shiny teeth your entire life?") }}
            </flux:heading>

            <flux:spacer/>

            <div class="flex items-start gap-4 flex-1 mt-6">
                <div class="space-y-2">
                    <flux:heading :accent="true">
                        {{ __('SmilePoint offers you the best quality of any treatment for your smile!') }}
                    </flux:heading>

                    <flux:text class="dark:text-zinc-400">
                        {{ __('If you are a person who knows how to take care of themselves and their well-being. Then you probably
                        know the advantages of having healthy and appealing smile. If you value your time and you don`t want
                        to waste it in waiting around. If you rely on the individual approach, correctness, high quality of
                        service and care, SmilePoint is your choice.') }}
                    </flux:text>
                </div>

                <div>
                    <img src="{{ asset('images/hands-clean.png') }}" alt="" class="max-w-48">
                </div>
            </div>
        </x-card>

        <!-- Individual Approach -->
        <x-feature-card
                grid="col-span-3 row-span-2 col-start-8 row-start-1"
                icon="hand-heart"
                :title="__('Individual Approach')"
                :description="__('Personalized treatment plans.')"
        />

        <!-- Numbers -->
        <x-stats-card
                grid="col-span-2 row-span-3 col-start-1 row-start-4"
                value="10,000+"
                :label="__('Happy Patients')"
        />

        <!-- Invisalign -->
        <x-cta-card
                grid="col-span-3 row-span-8 col-start-8 row-start-3"
                :title="__('Invisalign Platinum Provider')"
                :description="__('Professional 3D scanning and personalized aligners. Treatment takes 6-12 months with SmartTrack® material for precise tooth movement. Completely transparent and removable for eating.')"
                :button-text="__('Invisalign Smile View')"
                button-icon="arrow-top-right-on-square"
                image="images/invisalign.png"
                image-position="bottom"
        />

        <!-- Smile Makeovers -->
        <x-cta-card
                grid="col-span-4 row-span-4 col-start-1 row-start-7"
                :title="__('Smile Makeovers')"
                :description="__('Real results, real smiles. Explore our gallery of smile transformations and see the difference expert care makes.')"
                :button-text="__('View Gallery')"
                image="images/smile-makeovers.png"
                image-position="right"
        />

        <!-- Services -->
        <x-cta-card
                grid="col-span-3 row-span-4 col-start-5 row-start-7"
                :title="__('Comprehensive Dental Services')"
                :description="__('Full range of treatments: aligners, teeth whitening, endodontic treatment, laser periodontal care, veneers, bonding, zirconia crowns, implants, and bruxism treatment.')"
                :button-text="__('View Services')"
        />
    </div>
</section>
