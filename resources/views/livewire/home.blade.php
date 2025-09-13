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

                <x-card class="bg-zinc-50/30 border border-zinc-200">
                    <x-review-carousel :reviews="[
                        [
                            'text' => 'I am impressed by the professionalism of the team at the Smile Point clinic. The attitude towards patients is also very good. I highly recommend it!',
                            'author' => 'Kalina Sirakova'
                        ],
                        [
                            'text' => 'Excellent service! The staff was incredibly gentle and thorough. My dental cleaning was the best I have ever had. Will definitely be coming back!',
                            'author' => 'Maria Rodriguez'
                        ],
                        [
                            'text' => 'From the moment I walked in, I felt welcome and comfortable. The team explained everything clearly and the treatment was painless. Highly recommend!',
                            'author' => 'David Thompson'
                        ]
                    ]">
                        <x-review-rating
                                rating="4.9"
                                :review-count="107"
                                provider="Google"
                                view-all-url="#"/>
                    </x-review-carousel>
                </x-card>
            </div>
        </div>

        <div class="-ml-48 -z-1 -mt-8">
            <img src="{{ asset('images/woman2.png') }}" alt="">
        </div>

        <x-blobs/>
    </section>

    <!-- Dental Benefits Bento Grid -->
    <section class="mx-auto max-w-2xl px-6 lg:max-w-7xl lg:px-8">
        <div class="text-center">
            <flux:heading level="2" size="base" class="font-semibold text-lime-600">
                {{ __('SmilePoint Dental Clinic') }}
            </flux:heading>
            <flux:heading level="2" size="2xl"
                          class="mx-auto mt-2 max-w-lg text-center tracking-tight text-balance sm:text-3xl">
                {{ __('Healthy and sparkling teeth for life') }}
            </flux:heading>
        </div>

        <div class="mt-10 grid gap-4 sm:mt-16 lg:grid-cols-3 lg:grid-rows-2">
            <!-- Invisalign Gold Provider - Large Left Card -->
            <div class="relative lg:row-span-2">
                <div class="absolute inset-px rounded-lg bg-gradient-to-br from-blue-50 to-indigo-50 lg:rounded-l-4xl"></div>
                <div class="relative flex h-full flex-col overflow-hidden rounded-[calc(theme(borderRadius.lg)+1px)] lg:rounded-l-[calc(2rem+1px)] border border-blue-100">
                    <div class="px-8 pt-8 pb-3 sm:px-10 sm:pt-10 sm:pb-0">
                        <div class="flex items-center gap-3 mb-4">
                            <div class="w-12 h-12 bg-blue-100 rounded-xl flex items-center justify-center">
                                <flux:icon.sparkles class="w-6 h-6 text-blue-600"/>
                            </div>
                        </div>

                        <flux:heading level="3" size="lg" class="mb-3 tracking-tight max-lg:text-center">
                            {{ __('Invisalign Gold Provider') }}
                        </flux:heading>

                        <flux:text class="max-w-lg text-sm/6 text-gray-600 max-lg:text-center">
                            {{ __('Professional 3D scanning and personalized aligners. Treatment takes 6-12 months with SmartTrack® material for precise tooth movement. Completely transparent and removable for eating.') }}
                        </flux:text>
                    </div>

                    <div class="relative min-h-32 w-full grow max-lg:mx-auto max-lg:max-w-sm">
                        <div class="absolute inset-x-10 top-10 bottom-0 overflow-hidden rounded-t-xl bg-gradient-to-b from-blue-100/50 to-indigo-100/50 border border-blue-200">
                            <div class="p-6 space-y-4">
                                <div class="flex items-center gap-3">
                                    <div class="w-8 h-8 rounded-full bg-blue-600"></div>
                                    <div class="space-y-1">
                                        <div class="h-2 bg-blue-200 rounded w-20"></div>
                                        <div class="h-2 bg-blue-100 rounded w-16"></div>
                                    </div>
                                </div>
                                <div class="space-y-2">
                                    <div class="h-3 bg-blue-200 rounded"></div>
                                    <div class="h-3 bg-blue-100 rounded w-4/5"></div>
                                    <div class="h-3 bg-blue-50 rounded w-3/5"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="pointer-events-none absolute inset-px rounded-lg shadow-sm ring-1 ring-black/5 lg:rounded-l-4xl"></div>
            </div>

            <!-- Advanced Technology - Top Right -->
            <div class="relative max-lg:row-start-1">
                <div class="absolute inset-px rounded-lg bg-gradient-to-br from-purple-50 to-pink-50 max-lg:rounded-t-4xl"></div>
                <div class="relative flex h-full flex-col overflow-hidden rounded-[calc(theme(borderRadius.lg)+1px)] max-lg:rounded-t-[calc(2rem+1px)] border border-purple-100">
                    <div class="px-8 pt-8 sm:px-10 sm:pt-10">
                        <div class="w-12 h-12 bg-purple-100 rounded-xl flex items-center justify-center mb-4">
                            <flux:icon.computer-desktop class="w-6 h-6 text-purple-600"/>
                        </div>

                        <flux:heading level="3" size="lg" class="tracking-tight max-lg:text-center">
                            {{ __('Modern Dental Technology') }}
                        </flux:heading>

                        <flux:text class="mt-2 max-w-lg text-sm/6 text-gray-600 max-lg:text-center">
                            {{ __('Digital 3D scanning, laser periodontal treatment, and modern equipment for precise, comfortable dental care with predictable results.') }}
                        </flux:text>
                    </div>

                    <div class="flex flex-1 items-center justify-center px-8 max-lg:pt-10 max-lg:pb-12 sm:px-10 lg:pb-2">
                        <div class="w-full max-lg:max-w-xs">
                            <div class="bg-gradient-to-r from-purple-200 to-pink-200 rounded-lg p-4">
                                <div class="grid grid-cols-3 gap-2">
                                    <div class="h-8 bg-purple-300 rounded"></div>
                                    <div class="h-8 bg-pink-300 rounded"></div>
                                    <div class="h-8 bg-purple-400 rounded"></div>
                                </div>
                                <div class="mt-3 h-2 bg-purple-400 rounded w-full"></div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="pointer-events-none absolute inset-px rounded-lg shadow-sm ring-1 ring-black/5 max-lg:rounded-t-4xl"></div>
            </div>

            <!-- Gentle Care - Middle Right -->
            <div class="relative max-lg:row-start-3 lg:col-start-2 lg:row-start-2">
                <div class="absolute inset-px rounded-lg bg-gradient-to-br from-rose-50 to-pink-50"></div>
                <div class="relative flex h-full flex-col overflow-hidden rounded-[calc(theme(borderRadius.lg)+1px)] border border-rose-100">
                    <div class="px-8 pt-8 sm:px-10 sm:pt-10">
                        <div class="w-12 h-12 bg-rose-100 rounded-xl flex items-center justify-center mb-4">
                            <flux:icon.user-group class="w-6 h-6 text-rose-600"/>
                        </div>

                        <flux:heading level="3" size="lg" class="tracking-tight max-lg:text-center">
                            {{ __('Individual Approach') }}
                        </flux:heading>

                        <flux:text class="mt-2 max-w-lg text-sm/6 text-gray-600 max-lg:text-center">
                            {{ __('Personalized treatment plans with individual approach, high level of service and care for patients who value quality dental care.') }}
                        </flux:text>
                    </div>

                    <div class="flex flex-1 items-center max-lg:py-6 lg:pb-2">
                        <div class="px-8 sm:px-10">
                            <div class="space-y-3">
                                <div class="flex items-center gap-2">
                                    <div class="w-2 h-2 bg-rose-400 rounded-full"></div>
                                    <div class="h-2 bg-rose-200 rounded flex-1"></div>
                                </div>
                                <div class="flex items-center gap-2">
                                    <div class="w-2 h-2 bg-pink-400 rounded-full"></div>
                                    <div class="h-2 bg-pink-200 rounded flex-1"></div>
                                </div>
                                <div class="flex items-center gap-2">
                                    <div class="w-2 h-2 bg-rose-500 rounded-full"></div>
                                    <div class="h-2 bg-rose-300 rounded flex-1"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="pointer-events-none absolute inset-px rounded-lg shadow-sm ring-1 ring-black/5"></div>
            </div>

            <!-- Complete Dental Solutions - Large Right Card -->
            <div class="relative lg:row-span-2">
                <div class="absolute inset-px rounded-lg bg-gradient-to-br from-orange-50 to-amber-50 max-lg:rounded-b-4xl lg:rounded-r-4xl"></div>
                <div class="relative flex h-full flex-col overflow-hidden rounded-[calc(theme(borderRadius.lg)+1px)] max-lg:rounded-b-[calc(2rem+1px)] lg:rounded-r-[calc(2rem+1px)] border border-orange-100">
                    <div class="px-8 pt-8 pb-3 sm:px-10 sm:pt-10 sm:pb-0">
                        <div class="w-12 h-12 bg-orange-100 rounded-xl flex items-center justify-center mb-4">
                            <flux:icon.squares-plus class="w-6 h-6 text-orange-600"/>
                        </div>

                        <flux:heading level="3" size="lg" class="tracking-tight max-lg:text-center">
                            {{ __('Comprehensive Dental Services') }}
                        </flux:heading>

                        <flux:text class="mt-2 max-w-lg text-sm/6 text-gray-600 max-lg:text-center">
                            {{ __('Full range of treatments: aligners, teeth whitening, endodontic treatment, laser periodontal care, veneers, bonding, zirconia crowns, implants, and bruxism treatment.') }}
                        </flux:text>
                    </div>

                    <div class="relative min-h-32 w-full grow">
                        <div class="rounded-2xl bg-gradient-to-br from-orange-50/80 to-amber-50/80 backdrop-blur-sm p-8">
                            <!-- Stats and Value Proposition -->
                            <div class="flex flex-col h-full">
                                <!-- Top Section - Value Stats -->
                                <div class="grid grid-cols-2 gap-8">
                                    <div class="text-center">
                                        <flux:heading level="3" size="xl" class="text-orange-600 font-bold">
                                            10+
                                        </flux:heading>
                                        <flux:text size="sm">{{ __('Years Experience') }}</flux:text>
                                    </div>
                                    <div class="text-center">
                                        <flux:heading level="3" size="xl" class="text-orange-600 font-bold">
                                            1000+
                                        </flux:heading>
                                        <flux:text size="sm">{{ __('Happy Patients') }}</flux:text>
                                    </div>
                                </div>

                                <flux:spacer/>

                                <!-- Contact Information Section -->
                                <div class="flex flex-col gap-6 mt-8">
                                    <!-- Address -->
                                    <div class="flex items-center gap-3">
                                        <div class="w-10 h-10 bg-orange-100 rounded-lg flex items-center justify-center flex-shrink-0">
                                            <flux:icon.map-pin class="w-5 h-5 text-orange-600"/>
                                        </div>
                                        <div>
                                            <flux:text size="sm"
                                                       variant="strong">
                                                {{ __('Address') }}
                                            </flux:text>
                                            <flux:text size="sm">
                                                {{ __('91 Aleksandar Malinov blvd., parter Mladost 4, Sofia 1715') }}
                                            </flux:text>
                                        </div>
                                    </div>

                                    <!-- Email -->
                                    <div class="flex items-center gap-3">
                                        <div class="w-10 h-10 bg-orange-100 rounded-lg flex items-center justify-center flex-shrink-0">
                                            <flux:icon.envelope class="w-5 h-5 text-orange-600"/>
                                        </div>
                                        <div>
                                            <flux:text size="sm"
                                                       variant="strong">{{ __('Email') }}</flux:text>
                                            <flux:text size="sm">office@smilepoint.bg
                                            </flux:text>
                                        </div>
                                    </div>

                                    <!-- Phone -->
                                    <div class="flex items-center gap-3">
                                        <div class="w-10 h-10 bg-orange-100 rounded-lg flex items-center justify-center flex-shrink-0">
                                            <flux:icon.phone class="w-5 h-5 text-orange-600"/>
                                        </div>
                                        <div>
                                            <flux:text size="sm"
                                                       variant="strong">{{ __('Phone') }}</flux:text>
                                            <flux:text size="sm">089 367 47 08</flux:text>
                                        </div>
                                    </div>

                                    <!-- Parking -->
                                    <div class="flex items-center gap-3">
                                        <div class="w-10 h-10 bg-orange-100 rounded-lg flex items-center justify-center flex-shrink-0">
                                            <flux:icon.truck class="w-5 h-5 text-orange-600"/>
                                        </div>
                                        <div>
                                            <flux:text size="sm"
                                                       variant="strong">{{ __('Parking') }}</flux:text>
                                            <flux:text size="sm"
                                            >{{ __('Convenient Free Parking') }}</flux:text>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="pointer-events-none absolute inset-px rounded-lg shadow-sm ring-1 ring-black/5 max-lg:rounded-b-4xl lg:rounded-r-4xl"></div>
            </div>
        </div>
    </section>
</flux:main>
