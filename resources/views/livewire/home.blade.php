<flux:main container class="space-y-24">
    <section class="relative isolate flex gap-12 ">
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

        <x-blobs/>
    </section>
</flux:main>
