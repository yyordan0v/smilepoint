<section class="isolate relative flex flex-col lg:flex-row items-center gap-8 lg:gap-12 mt-32 lg:mt-64">
    <div class="flex flex-col space-y-6">
        <flux:heading level="2" size="base" :accent="true" class="font-semibold">
            {{ __('SmilePoint Dental Clinic is at your Service') }}
        </flux:heading>

        <div class="flex space-x-6">
            <flux:separator vertical class="!w-1"/>

            <div class="py-2 space-y-4">
                <flux:heading level="2" size="2xl" class="max-w-xs dark:text-white">
                    {{ __('What You need to do now is ...') }}
                </flux:heading>

                <flux:text class="max-w-2xl dark:text-zinc-400">
                    {{ __('To make a consultation with a specialist, with whom you can share your problems, doubts and wishes. Get a professional opinion about the condition of your teeth and smile and know the possible solutions, advantages and disadvantages of each one of them. And last but not least find answers to all your questions.') }}
                </flux:text>

                <flux:text class="dark:text-zinc-400">
                    {{ __('The team of SmilePoint Dental Clinic, will take care of your health and beauty of your smile.') }}
                </flux:text>
            </div>
        </div>

        <flux:spacer/>

        <flux:button variant="filled" icon-trailing="arrow-long-right" class="w-fit">
            {{ __('Schedule Consultation') }}
        </flux:button>
    </div>

    <div class="relative w-full lg:w-1/2">
        <x-card class="!p-0 ">
            <img src="{{ asset('images/consultation.webp') }}"
                 loading="lazy" decoding="async"
                 class="rounded-xl">
        </x-card>

        <div class="pointer-events-none absolute -right-16 -top-16 -z-10 hidden select-none lg:block">
            <x-decorative.consultation-shape-1/>
        </div>
        <div class="pointer-events-none absolute -bottom-16 -left-16 -z-10 hidden select-none lg:block">
            <x-decorative.consultation-shape-2/>
        </div>
    </div>
</section>
