<flux:main container class="space-y-24">
    <div class="relative flex gap-12 ">
        <div class="max-w-2xl lg:max-w-xl flex-shrink-0 lg:pt-24">
            <flux:heading level="1" size="xl" class="!text-5xl !font-black mt-10 flex flex-col">
                <span>{{ __('Bright Smiles,') }}</span>
                <span>{{ __('Expert Care.') }}</span>
            </flux:heading>

            <flux:subheading class="mt-6">
                {{ __('The SmilePoint team delivers expert care with a gentle touch — helping you achieve the confident, radiant smile you deserve.') }}
            </flux:subheading>

            <div class="mt-10 flex items-center gap-x-6">
                <flux:button variant="primary" icon="phone" >
                    {{ __('Call Us') }}
                </flux:button>

                <flux:button variant="ghost" icon-trailing="arrow-long-right">
                    {{ __('Write Us') }}
                </flux:button>
            </div>
        </div>

        <div class="-mt-8">
            <img src="{{ asset('images/woman_clean.png') }}" alt="">
        </div>

        <div class="absolute inset-0 -z-20 pointer-events-none">
            <div class="relative h-[62.5rem] w-[62.5rem] flex flex-col justify-center items-center -z-20 opacity-15">
                <div class="rounded-full blur-3xl bg-sky-400 absolute top-[25rem] left-[12.5rem] h-[25rem] w-[25rem] animate-[sky_8s_infinite_ease]"></div>
                <div class="rounded-full blur-3xl bg-red-400 absolute right-0 top-[37.5rem] h-[31.25rem] w-[25rem] animate-[red_8s_infinite_linear]"></div>
                <div class="rounded-full blur-3xl bg-lime-400 absolute top-[10rem] -right-[2.5rem] h-[25rem] w-[31.25rem] animate-[lime_8s_infinite_ease]"></div>
            </div>
        </div>
    </div>

{{--
    <div class="flex items-center gap-6 w-full">
        <div class="relative flex flex-col w-full bg-lime-500 border border-zinc-200 p-6 rounded-xl min-h-[32rem]">
            <flux:heading class="italic">The</flux:heading>
            <flux:heading class="!text-5xl mb-2">Smile</flux:heading>
            <flux:heading class="!text-5xl mb-2">Of Your</flux:heading>
            <flux:heading class="!text-5xl mb-2">Dreams</flux:heading>

            <flux:spacer/>

            <div class="flex justify-between gap-4 mt-24">
                <flux:avatar.group class="**:!ring-lime-500">
                    <flux:avatar circle src="https://unavatar.io/x/calebporzio" />
                    <flux:avatar circle src="https://unavatar.io/github/hugosaintemarie" />
                    <flux:avatar circle src="https://unavatar.io/github/joshhanley" />
                    <flux:avatar circle>3+</flux:avatar>
                </flux:avatar.group>

                <flux:button variant="ghost" icon-trailing="arrow-up-right">Team of Experts</flux:button>
            </div>

            <div class="absolute right-8 bottom-1/5">
                <img src="{{ asset('images/smile.svg') }}" alt="">
            </div>
        </div>
        <div class="w-full bg-gradient-to-b from-transparent from-10% to-zinc-500 relative p-6 rounded-xl min-h-[32rem]">
            <img src="{{ asset('images/woman.png') }}" alt="" class="bottom-0 absolute left-0 right-0">
        </div>
        <div class="w-full bg-red-600 border border-zinc-200 p-6 rounded-xl min-h-[32rem]">
dd
        </div>
    </div>
 --}}
</flux:main>
