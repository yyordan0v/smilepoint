<section class="isolate relative mt-32 lg:mt-64">
    <x-grid-pattern/>

    <div class="flex flex-col lg:flex-row lg:items-stretch gap-8 lg:gap-16 pt-18 mb-32">
        {{-- Contact Info Card --}}
        <div class="w-full lg:flex-1 lg:max-w-md">
            <div class="relative h-full">
                <x-card class="relative h-full bg-zinc-950 overflow-hidden">
                    <div class="relative space-y-8">
                        {{-- Header --}}
                        <div class="space-y-2">
                            <flux:text size="sm" class="font-medium text-accent-content!">
                                {{ __('Smile Point Dental Clinic') }}
                            </flux:text>
                            <flux:heading level="3" size="xl"
                                          class="tracking-tight !text-white">
                                {{ __('Get in Touch') }}
                            </flux:heading>
                            <flux:text class="!text-white/60">
                                {{ __('Have questions about your dental health? Reach out to our team.') }}
                            </flux:text>
                        </div>

                        {{-- Contact Information --}}
                        <div class="flex flex-col gap-2">
                            <x-contact-info-item
                                    icon="map-pin"
                                    :label="__('Address')"
                                    :value="__('91 Aleksandar Malinov blvd., Mladost 4, Sofia')"
                                    href="https://maps.google.com"
                                    inverted
                            />

                            <x-contact-info-item
                                    icon="envelope"
                                    :label="__('Email')"
                                    value="office@smilepoint.bg"
                                    href="mailto:office@smilepoint.bg"
                                    inverted
                            />

                            <x-contact-info-item
                                    icon="phone"
                                    :label="__('Phone')"
                                    value="089 367 47 08"
                                    href="tel:+35989367408"
                                    inverted
                            />

                            <x-contact-info-item
                                    custom-icon="P"
                                    :label="__('Parking')"
                                    :value="__('Free Parking Available')"
                                    inverted
                            />
                        </div>

                        {{-- Viber CTA --}}
                        <div class="relative mt-2">
                            <div class="absolute inset-0 bg-gradient-to-r from-[#7360f2]/20 to-[#7360f2]/5 rounded-2xl"></div>
                            <div class="relative p-4 rounded-2xl border border-white/10">
                                <div class="flex items-center gap-4">
                                    <div class="w-11 h-11 bg-[#7360f2] rounded-xl flex items-center justify-center flex-shrink-0">
                                        <img src="{{ asset('images/social-icons/viber.svg') }}" alt="Viber"
                                             class="pointer-events-none size-5">
                                    </div>
                                    <div class="flex-1">
                                        <flux:text class="!text-white" variant="strong">
                                            {{ __('Chat on Viber') }}
                                        </flux:text>
                                        <flux:text size="sm" class="!text-white/60">
                                            {{ __('Quick answers & booking') }}
                                        </flux:text>
                                    </div>
                                    <flux:button size="sm"
                                                 class="flex-shrink-0 !bg-[#7360f2] hover:!bg-[#5a4bc7] !text-white !border-0">
                                        {{ __('Open') }}
                                        <flux:icon.arrow-up-right variant="micro" class="ml-1"/>
                                    </flux:button>
                                </div>
                            </div>
                        </div>
                    </div>
                </x-card>
            </div>
        </div>

        {{-- Contact Form --}}
        <div class="w-full lg:flex-1 flex flex-col">
            <div class="lg:pt-9 flex flex-col flex-1">
                {{-- Form Header --}}
                <div class="mb-8">
                    <flux:text size="sm" class="font-medium text-zinc-500 dark:text-zinc-400">
                        {{ __('Send Us a Message') }}
                    </flux:text>
                    <flux:heading level="3" size="xl" class="tracking-tight dark:text-white mt-2">
                        {{ __('Have a question?') }}
                    </flux:heading>
                    <flux:text class="text-zinc-500 dark:text-zinc-400 mt-2">
                        {{ __('Fill in the form below and we\'ll get back to you within 24 hours.') }}
                    </flux:text>
                </div>

                <form class="space-y-5 flex flex-col flex-1">
                    <div class="grid grid-cols-1 md:grid-cols-2 gap-5">
                        <flux:field>
                            <flux:label>{{ __('Name') }}</flux:label>
                            <flux:input
                                    type="text"
                                    name="name"
                                    placeholder="{{ __('Your name') }}"
                                    required
                            />
                        </flux:field>

                        <flux:field>
                            <flux:label>{{ __('Email') }}</flux:label>
                            <flux:input
                                    type="email"
                                    name="email"
                                    placeholder="{{ __('your@email.com') }}"
                                    required
                            />
                        </flux:field>
                    </div>

                    <flux:field>
                        <flux:label>{{ __('Subject') }}</flux:label>
                        <flux:input
                                type="text"
                                name="subject"
                                placeholder="{{ __('What can we help you with?') }}"
                                required
                        />
                    </flux:field>

                    <flux:field>
                        <flux:label>{{ __('Message') }}</flux:label>
                        <flux:textarea
                                name="message"
                                placeholder="{{ __('Tell us about your dental needs or questions...') }}"
                                resize="none"
                                rows="6"
                        />
                    </flux:field>

                    <div class="flex items-center justify-between pt-2">
                        <flux:text size="sm" class="text-zinc-400 dark:text-zinc-500">
                            {{ __('We respect your privacy') }}
                        </flux:text>

                        <flux:button variant="primary" icon-trailing="paper-airplane" type="submit" color="zinc">
                            {{ __('Send Message') }}
                        </flux:button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</section>

<div class="hidden">
    <x-card class="relative rounded-2xl overflow-hidden border border-zinc-200 !p-0">
        <div id="smilepoint-map" class="w-full h-96"></div>
    </x-card>
</div>
