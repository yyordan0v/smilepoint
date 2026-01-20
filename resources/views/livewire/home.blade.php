<flux:main container>
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

        <div class="hidden lg:block -ml-48 -z-1 -mt-8">
            <img src="{{ asset('images/woman2.png') }}" alt="">
        </div>

        <x-blobs/>
    </section>

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

            <div class="pointer-events-none absolute -right-16 -top-16 -z-10 hidden select-none lg:block text-blue-300 dark:text-blue-500/50">
                <svg xmlns="http://www.w3.org/2000/svg" width="168" height="115" viewBox="0 0 198 145"
                     fill="none" data-inject-url="https://spydea-astro.vercel.app/images/shapes/feature-s-1.svg"
                     class="inject-svg text-quinary">
                    <path d="M2.75812 112.601C3.83675 117.444 5.29609 122.267 7.87632 126.623C9.90667 130.071 12.9098 133.285 17.2032 134.491C22.2367 135.908 27.6721 134.047 31.479 130.959C36.9356 126.539 40.2561 120.152 42.9209 114.145C45.3742 108.646 47.5738 102.957 49.2657 97.2467C50.1752 94.1589 50.9789 91.0288 52.269 88.0467C52.7343 86.9469 53.2418 85.678 54.1513 84.7897C54.7646 84.1975 56.3932 83.2246 57.5775 83.3304C60.0097 83.563 60.6442 87.6448 60.9403 89.2945C61.2575 91.0288 61.4901 92.763 61.5113 94.5184C61.6593 103.295 60.8134 112.072 61.1518 120.849C61.3421 125.524 61.7439 130.261 62.9706 134.808C63.8377 138.002 65.2336 141.682 68.3214 143.67C71.7476 145.89 75.8718 145.023 79.3826 143.31C86.4677 139.842 91.3321 133.349 95.0544 127.131C99.3265 119.982 102.351 112.347 105.819 104.882C107.702 100.821 109.732 96.6122 110.62 92.2766C111.276 89.1042 111.509 85.8683 112.46 82.717C112.841 81.4269 113.349 80.0099 114.3 78.9524C114.681 78.5506 115.104 78.2333 115.612 77.9584C115.887 77.8103 115.823 77.8315 116.056 77.7469C116.14 77.7046 116.584 77.5777 116.606 77.5777C116.69 77.5566 116.796 77.5566 116.902 77.5566C116.965 77.5777 117.177 77.5989 117.24 77.62C117.113 77.5777 117.219 77.5989 117.367 77.6835C117.43 77.7469 117.6 77.8738 117.642 77.9161C117.642 77.9161 117.642 77.9161 117.663 77.9372C117.726 78.0007 117.79 78.0641 117.832 78.1487C117.938 78.2756 118.023 78.4237 118.128 78.5506C118.128 78.5717 118.276 78.8255 118.298 78.889C118.403 79.1216 118.509 79.3754 118.594 79.6292C119.334 81.6596 119.482 83.9014 119.588 86.0586C119.715 88.6177 119.672 91.198 119.609 93.757C119.545 95.7239 119.44 97.6908 119.44 99.6577C119.461 102.217 119.799 104.797 120.222 107.314C121.237 113.574 123.141 120.363 128.217 124.952C132.912 129.182 140.314 129.944 146.659 128.675C152.708 127.469 157.91 124.085 162.013 119.982C171.065 110.973 176.057 98.7906 179.441 87.2642C182.296 77.4931 183.755 67.4048 184.284 57.38C184.601 51.3524 184.538 45.2825 183.649 39.2972C182.846 33.8829 181.429 28.3841 178.299 23.6678C176.755 21.3202 174.724 19.3321 172.292 17.8305C170.156 14.3408 166.666 11.8875 162.246 10.7666C156.726 9.37074 150.656 10.0052 145.094 11.0204C138.728 12.2048 132.531 14.0448 126.419 16.0751C121.407 17.7459 116.479 19.6282 111.424 21.1933C102.182 24.0485 92.3472 25.2328 82.703 25.973C71.8745 26.819 61.0248 27.0094 50.1963 27.6439C45.4165 27.9188 40.5945 28.1515 35.9204 29.1455C32.177 29.9492 28.5816 31.2393 25.2612 32.9947C11.8524 40.0586 5.29602 53.8269 2.39855 66.8972C0.220159 76.6894 -0.075881 86.6085 0.600902 96.5065C0.939294 101.963 1.5949 107.335 2.75812 112.601Z"
                          fill="currentColor"></path>
                    <path d="M12.5294 104.733C14.2848 112.537 17.2034 121.737 24.4154 126.179C31.7331 130.684 40.637 127.554 46.2839 121.864C52.1212 115.964 55.4417 107.948 58.4872 100.355C60.2214 95.9986 61.6808 91.5783 62.992 87.0735C63.6477 84.8317 64.3033 82.5898 65.2127 80.4537C65.8472 78.9521 66.4605 77.5351 68.0679 76.9006C69.1465 76.4776 69.5272 77.1121 69.929 78.1696C70.4366 79.4597 70.6481 80.8979 70.8596 82.2514C71.6421 86.9043 71.2403 91.7898 71.0922 96.4638C70.775 105.939 70.2463 115.668 72.2766 125.016C73.0803 128.632 74.2646 132.46 76.8872 135.21C79.8269 138.276 84.0357 138.974 88.033 137.896C95.6679 135.823 101.526 129.415 105.798 123.091C110.726 115.773 114.089 107.588 117.727 99.594C119.63 95.3641 121.787 91.1976 123.099 86.7351C124.368 82.3783 124.22 77.5774 126.017 73.3898C126.313 72.713 126.715 71.9728 127.308 71.5075C127.392 71.444 128.28 70.9788 127.921 71.1057C127.963 71.0845 128.302 71.0211 128.302 70.9788C128.323 70.9788 128.365 70.9576 128.386 70.9576C127.963 70.9153 127.9 70.9153 128.175 70.9576C129.993 71.3383 131.199 68.885 129.486 67.8698C129.465 67.8698 129.465 67.8486 129.444 67.8486C128.873 68.8215 128.301 69.7944 127.73 70.7673C128.365 71.0845 128.703 72.8188 128.851 73.6013C129.211 75.2932 129.253 77.0275 129.317 78.7406C129.444 82.4206 129.211 86.0795 129.147 89.7595C129.063 93.376 129.528 96.9714 130.163 100.525C130.67 103.422 131.389 106.298 132.51 109.048C134.837 114.758 138.834 119.517 144.819 121.484C150.572 123.387 157.297 122.901 162.881 120.722C174.936 115.985 182.846 104.183 187.774 92.7204C193.294 79.7981 196.234 65.9029 197.206 51.9019C197.735 44.415 197.735 36.907 196.509 29.4835C195.43 22.8849 193.209 15.9056 188.345 11.0835C187.203 9.94146 185.913 8.94742 184.538 8.10145C184.749 8.31294 184.94 8.50329 185.151 8.71478C181.069 2.20075 173.582 -0.0622425 166.244 0.00120649C157.89 0.0646556 149.514 2.34879 141.583 4.82328C133.504 7.36121 125.637 10.6605 117.388 12.6697C109.14 14.6789 100.68 15.5672 92.2205 16.1594C83.4012 16.7939 74.5819 17.0265 65.7414 17.4707C57.3239 17.8937 48.6315 18.0417 40.637 21.0872C33.9961 23.6252 28.1377 27.7493 23.6118 33.2482C19.4665 38.3029 16.4632 44.1401 14.3271 50.2946C9.06091 65.5434 8.97629 82.5264 11.3239 98.3462C11.6834 100.482 12.0641 102.618 12.5294 104.733C12.9947 106.869 16.2517 105.96 15.7864 103.824C14.1368 96.3158 13.46 88.5963 13.3543 80.919C13.2485 73.3052 13.8407 65.6491 15.5961 58.2257C18.1975 47.1433 23.4214 36.0187 32.8117 29.124C38.5432 24.9153 45.3322 22.5888 52.375 21.764C60.1791 20.8546 68.1313 20.7277 75.9777 20.4104C91.3111 19.7548 107.11 19.2895 121.957 14.9539C129.338 12.7966 136.486 9.89916 143.846 7.65731C150.953 5.50007 158.397 3.51201 165.884 3.38511C169.268 3.32167 172.821 3.66007 175.951 5.03478C177.305 5.62697 178.595 6.4095 179.695 7.38237C180.794 8.35525 181.471 9.49731 182.402 10.5759C182.931 11.2104 183.798 11.5911 184.453 12.0987C185.13 12.6274 185.765 13.2196 186.357 13.8541C187.499 15.0596 188.429 16.4132 189.254 17.8513C190.988 20.8969 192.046 24.2596 192.765 27.6858C194.372 35.2362 194.415 43.0403 193.928 50.7176C193.463 58.3737 192.405 65.9875 190.608 73.4532C187.52 86.2275 182.592 99.5094 173.477 109.259C169.035 114.018 163.515 117.74 157.001 118.903C151.333 119.919 144.65 119.221 140.336 115.033C135.894 110.74 134.223 104.501 133.272 98.5999C132.658 94.793 132.51 91.0919 132.658 87.2427C132.806 83.4569 132.912 79.65 132.595 75.8643C132.447 74.0666 132.193 72.2266 131.516 70.5346C131.093 69.4983 130.522 68.3985 129.486 67.8909C127.561 66.9181 125.89 69.6886 127.773 70.8096C127.794 70.8096 127.794 70.8307 127.815 70.8307C128.259 69.7944 128.682 68.7792 129.126 67.7429C125.341 66.9815 123.078 71.2326 122.232 74.2358C120.941 78.6983 120.815 83.3512 119.271 87.7503C117.769 92.0436 115.654 96.1043 113.793 100.228C111.953 104.353 110.134 108.477 108.104 112.495C104.614 119.348 100.363 126.517 94.0606 131.149C91.1419 133.285 87.3773 135.421 83.6338 135.04C79.9115 134.66 77.7755 131.339 76.6757 128.082C75.2799 124.022 74.73 119.686 74.4762 115.435C74.1801 110.676 74.2435 105.896 74.3915 101.117C74.5396 96.3158 74.7722 91.5149 74.7088 86.6928C74.6665 83.3512 74.3069 79.4597 72.8688 76.3507C72.2554 75.0183 71.198 73.8339 69.7175 73.4744C67.9833 73.0726 66.0587 73.982 64.7474 75.0606C63.3304 76.245 62.6536 78.0427 61.9557 79.7135C61.0885 81.8284 60.4329 84.028 59.7773 86.2064C57.3451 94.6238 54.3207 103.02 50.1543 110.761C46.6435 117.275 41.1235 124.508 33.0655 124.973C24.4577 125.481 19.8472 117.254 17.5207 110.148C16.8439 108.075 16.3152 105.981 15.8287 103.866C15.3211 101.709 12.0641 102.597 12.5294 104.733Z"
                          fill="#7D7D7D"></path>
                </svg>
            </div>
            <div class="pointer-events-none absolute -bottom-16 -left-16 -z-10 hidden select-none lg:block text-emerald-400 dark:text-emerald-600/50">
                <svg xmlns="http://www.w3.org/2000/svg" width="225" height="113" viewBox="0 0 265 123"
                     fill="none" data-inject-url="https://spydea-astro.vercel.app/images/shapes/feature-s-2.svg"
                     class="inject-svg text-secondary">
                    <path d="M102.64 122.845C112.135 123.137 121.713 122.115 130.79 119.298C136.403 117.566 141.703 115.082 146.524 111.723C151.636 108.155 156.018 103.793 160.421 99.4112C164.302 95.5508 168.309 91.6904 173.359 89.395C179.431 86.6614 186.38 86.7657 192.849 87.663C200.11 88.6647 207.143 90.9809 213.945 93.631C219.517 95.8012 224.483 99.2234 230.055 101.394C230.91 101.727 231.766 102.02 232.663 102.249C232.705 102.291 232.767 102.312 232.809 102.353C237.755 105.066 243.431 105.88 248.814 103.96C253.906 102.145 258.121 98.347 260.875 93.7353C263.797 88.8524 265.091 83.1349 264.527 77.4799C263.985 72.1379 261.981 67.0254 259.352 62.372C253.53 52.0636 244.87 43.5081 236.169 35.5995C227.822 28.0247 219.329 20.3873 210.21 13.7307C200.465 6.63585 188.905 0.0418559 176.51 0.000121994C170.312 -0.0207449 164.553 1.83641 159.169 4.79954C153.723 7.80441 148.735 11.6022 143.101 14.2732C136.799 17.2781 129.475 18.7388 122.547 19.1561C115.411 19.5944 108.65 18.4049 101.91 16.1096C90.2866 12.1448 79.5817 5.6551 67.5623 2.79631C56.5235 0.167043 44.7336 1.06431 33.7992 3.75617C24.3881 6.05156 14.831 10.2041 8.29957 17.5911C5.06516 21.2429 2.66547 25.5624 1.35084 30.2784C0.0153275 35.1404 -0.193383 40.2528 0.14051 45.261C0.745642 54.2756 3.39579 63.0398 7.71528 70.9693C16.6256 87.2874 31.7751 99.6198 48.0932 108.092C64.8495 116.856 83.7135 122.24 102.64 122.845Z"
                          fill="currentColor"></path>
                    <path d="M36.4704 101.686C37.0964 98.4095 37.6807 95.1333 38.1398 91.8363C39.3292 83.5729 40.0387 75.226 40.5186 66.8792C40.7482 62.8309 40.9568 58.7827 41.1238 54.7345C42.7305 65.5854 44.3164 76.4363 45.9441 87.2872C46.278 89.4365 46.6119 91.6067 46.9457 93.756C46.0693 97.9712 45.1303 102.186 44.1286 106.381C45.0259 106.882 45.9441 107.382 46.8622 107.883C47.363 105.817 47.843 103.731 48.3021 101.644C48.782 104.231 49.2828 106.819 49.8253 109.406C50.9522 109.97 52.0999 110.512 53.2476 111.055C51.9956 105.379 50.9313 99.6406 49.9923 93.9021C49.9923 93.8813 49.9923 93.8395 49.9714 93.8186C50.4096 91.7111 50.8479 89.6035 51.2444 87.4959C55.0839 68.0686 58.047 48.4952 60.9893 28.9218C62.3039 20.1367 63.5768 11.3517 64.7871 2.54576C63.8064 2.35796 62.8256 2.191 61.824 2.0658C60.9058 8.74329 59.9459 15.4208 58.9652 22.0774C56.0229 42.0264 53.0598 61.9963 49.2828 81.7992C49.0533 82.9678 48.8237 84.1363 48.5942 85.3257C46.1527 69.571 44.0452 53.7746 41.6246 38.0199C41.8124 30.8416 41.9584 23.6633 42.0628 16.5059C42.1254 11.7899 42.1463 7.07394 42.1254 2.35797C41.1238 2.50403 40.1222 2.67095 39.1206 2.85875C39.1414 5.63408 39.1414 8.43029 39.1206 11.2056C39.0997 14.3983 39.0579 17.591 39.0162 20.7836C38.1606 14.9826 37.326 9.18149 36.5539 3.35955C35.5731 3.56822 34.5924 3.79777 33.6116 4.02731C34.7384 12.6246 36.0113 21.201 37.3259 29.7774C37.7642 32.5944 38.1815 35.4324 38.5989 38.2494C38.3693 45.8451 38.0772 53.4616 37.7433 61.0364C37.159 74.0992 35.907 86.9951 33.6533 99.8075C34.6341 100.434 35.5522 101.06 36.4704 101.686Z"
                          fill="white"></path>
                    <path d="M229.22 64.2917C228.344 61.6416 227.468 58.9705 226.57 56.3204C226.069 46.3042 225.59 36.288 225.214 26.2717C223.524 24.811 221.833 23.3504 220.101 21.9314C218.724 23.559 217.41 25.2492 216.158 26.9603C214.718 23.079 213.278 19.2187 211.817 15.3374C211.212 14.8783 210.607 14.4192 209.981 13.981C209.167 13.3759 208.332 12.7916 207.498 12.2073C209.751 18.071 211.942 23.9555 214.092 29.8609C212.61 31.9893 211.212 34.1804 209.856 36.3923C207.414 31.9685 204.806 27.6281 202.051 23.3921C201.759 18.3213 201.488 13.2298 201.238 8.15907C199.798 7.30352 198.337 6.51058 196.855 5.75936C197.127 9.47371 197.419 13.2089 197.711 16.9232C195.875 14.2731 193.976 11.6648 192.056 9.07723C191.138 7.84606 190.199 6.61486 189.26 5.3837C189.176 4.40294 189.114 3.42218 189.03 2.44142C186.651 1.64847 184.21 1.04337 181.748 0.667764C182.353 1.43985 182.979 2.21191 183.584 2.98399C183.271 7.69997 182.958 12.4368 182.666 17.1528C182.186 24.6232 181.727 32.0728 181.33 39.5433C181.142 43.1324 180.976 46.7215 180.767 50.3107C177.428 34.9733 174.215 19.5943 171.314 4.17343C171.147 3.00487 170.98 1.85715 170.792 0.688591C169.749 0.876397 168.727 1.10596 167.725 1.37724C167.913 2.35799 168.08 3.33874 168.267 4.29863C168.664 6.96963 169.04 9.64061 169.415 12.3116C171.231 25.604 172.733 38.959 173.171 52.3557C171.857 45.5321 170.125 38.792 168.163 32.1354C165.596 23.3921 162.842 14.6696 159.795 6.09317C159.649 5.65496 159.482 5.23763 159.315 4.79942C159.19 4.86202 159.065 4.92464 158.94 5.0081C158.189 5.42544 157.437 5.86365 156.686 6.30186C158.961 12.2073 160.714 18.3422 162.633 24.3519C165.555 33.5752 168.247 42.882 170.104 52.3974C172.003 62.0589 172.733 71.6995 172.65 81.528C172.65 81.9036 172.65 82.3 172.65 82.6756C172.503 85.138 172.357 87.6211 172.17 90.0834C172.503 89.9165 172.816 89.7705 173.15 89.6035C173.943 89.2488 174.736 88.9358 175.55 88.6854C175.55 88.6436 175.55 88.6019 175.55 88.5602C175.592 86.6613 175.634 84.7623 175.654 82.8634C176.051 76.0399 176.301 69.1955 176.322 62.351C176.343 54.9641 176.03 47.5771 175.487 40.2319C176.051 42.9237 176.635 45.6156 177.219 48.2865C178.138 52.5226 179.014 56.7795 179.911 61.0364C179.911 61.099 179.89 61.1825 179.89 61.2451C178.951 70.3849 177.574 79.483 176.051 88.5393C177.094 88.2263 178.138 87.9759 179.223 87.7881C180.203 81.8618 181.122 75.9564 181.894 70.0093C182.415 72.2838 182.979 74.5792 183.563 76.8329C184.419 80.1299 185.462 83.3851 186.589 86.5987C186.484 86.8491 186.38 87.0786 186.255 87.329C187.549 87.3708 188.842 87.4542 190.115 87.5794C190.011 87.3082 189.907 87.016 189.802 86.7448C190.199 85.8892 190.574 85.0545 190.95 84.2198C193.725 78.064 196.209 71.8038 198.796 65.5854C199.026 66.2532 199.255 66.9001 199.485 67.5678C199.255 73.8071 198.9 80.0464 198.608 86.2857C198.567 87.183 198.525 88.1011 198.483 88.9984C199.485 89.2279 200.486 89.4784 201.467 89.7496C201.676 84.8667 201.905 79.9838 202.114 75.1217C203.554 79.1908 205.015 83.2599 206.433 87.3081C206.955 88.7897 207.477 90.2922 207.999 91.7737C209.271 92.212 210.523 92.671 211.775 93.1509C210.92 89.6244 210.127 86.077 209.397 82.5087C207.372 72.6177 205.745 62.6641 204.514 52.6478C206.141 49.2674 207.852 45.9077 209.689 42.6316C214.384 51.8131 218.286 61.3703 221.02 71.4074C223.065 78.9404 224.463 86.5987 225.339 94.3404C225.402 96.1349 225.464 97.9295 225.527 99.7449C226.675 100.308 227.822 100.851 228.991 101.331C228.803 98.8894 228.594 96.4271 228.323 93.9857C228.094 87.809 227.801 81.6323 227.509 75.4764C227.384 72.8472 227.259 70.1971 227.113 67.5678C227.822 69.7589 228.532 71.9499 229.241 74.1619C229.283 83.3017 229.304 92.4414 229.554 101.56C229.638 101.602 229.721 101.623 229.784 101.665C230.639 101.999 231.495 102.291 232.392 102.52C232.434 102.562 232.497 102.583 232.538 102.625C232.893 102.812 233.248 103 233.602 103.167C234.562 100.976 235.397 98.7433 236.169 96.4897C236.524 97.6791 236.899 98.8686 237.254 100.037C237.755 101.686 238.298 103.313 238.861 104.92C239.925 105.129 241.01 105.233 242.095 105.254C240.51 100.705 239.132 96.0932 237.755 91.4816C238.673 88.3932 239.508 85.284 240.343 82.2374C241.782 76.8955 243.285 71.5952 245.059 66.3367C246.749 61.3077 248.564 56.3204 250.108 51.2497C249.712 61.2242 249.295 71.1987 248.877 81.1732C248.543 88.8523 248.314 96.3853 248.919 104.044C249.941 103.668 250.922 103.188 251.84 102.666C251.465 96.5523 251.486 90.4591 251.757 84.2824C252.112 75.9564 252.466 67.6304 252.8 59.3044C252.884 57.4055 252.946 55.5066 253.03 53.6077C251.423 51.5627 249.733 49.5595 247.959 47.6397C246.457 53.0234 244.599 58.3446 242.784 63.6657C240.259 71.0735 238.339 78.6691 236.169 86.1813C235.96 85.4927 235.752 84.7832 235.522 84.0946C234.437 80.6306 233.352 77.1459 232.225 73.7028C232.163 64.0413 232.121 54.3798 232.622 44.7392C232.81 41.0457 233.102 37.3731 233.477 33.7004C232.559 32.8658 231.641 32.0519 230.723 31.2172C229.471 42.1516 229.22 53.253 229.22 64.2917ZM222.105 24.185C222.251 28.2958 222.418 32.4276 222.606 36.5384C222.752 39.7311 222.898 42.9446 223.044 46.1372C221.187 40.8579 219.309 35.5993 217.389 30.3617C218.891 28.2541 220.456 26.1883 222.105 24.185ZM198.149 23.0374C198.504 27.6281 198.838 32.198 199.088 36.7888C199.443 43.1741 199.672 49.5803 199.693 55.9865C199.526 56.3413 199.38 56.6961 199.213 57.0717C197.92 53.086 196.689 49.1004 195.603 45.0731C193.517 37.2896 191.931 29.3601 190.804 21.3679C190.324 17.904 189.969 14.4609 189.656 10.997C192.599 14.9409 195.436 18.9474 198.149 23.0374ZM190.574 77.7092C189.865 79.3577 189.114 80.9854 188.383 82.6339C188.321 82.4461 188.258 82.2374 188.196 82.0496C185.942 75.0383 184.481 67.7765 182.937 60.5564C184.106 48.2448 184.46 35.8498 185.232 23.4964C185.566 17.9875 185.942 12.4785 186.297 6.96962C186.443 8.95201 186.61 10.9553 186.797 12.9377C187.611 21.1385 188.863 29.2974 190.637 37.3313C192.432 45.4486 194.79 53.4616 197.398 61.3911C195.103 66.8166 192.932 72.3047 190.574 77.7092ZM203.449 69.592C203.116 68.5903 202.761 67.5887 202.427 66.5662C202.49 64.6255 202.531 62.6849 202.573 60.7442C203.116 64.5421 203.7 68.3608 204.347 72.1377C204.034 71.3031 203.742 70.4475 203.449 69.592ZM203.888 47.1806C203.449 43.1741 203.095 39.1468 202.782 35.0986C202.657 33.304 202.531 31.5094 202.406 29.7148C204.368 32.9283 206.246 36.1627 208.019 39.4806C206.58 42.0055 205.202 44.5722 203.888 47.1806ZM224.337 72.2212C221.625 61.8502 217.723 51.7923 212.881 42.2143C212.422 41.317 211.963 40.3988 211.483 39.5015C212.714 37.4357 213.987 35.3907 215.323 33.3666C216.721 37.2061 218.077 41.0665 219.455 44.9061C220.853 48.8917 222.23 52.8774 223.586 56.8839C223.837 61.9963 224.108 67.1087 224.337 72.2212ZM234.646 91.3773C234.354 92.3163 234.062 93.2553 233.749 94.1943C233.352 95.3837 232.956 96.5732 232.517 97.7417C232.434 93.1301 232.371 88.5185 232.33 83.886C233.123 86.39 233.874 88.8732 234.646 91.3773Z"
                          fill="white"></path>
                    <path d="M154.224 7.84596C153.347 8.40937 152.45 8.95189 151.573 9.5153C152.846 13.8557 154.119 18.2169 155.371 22.5782C160.672 41.3169 165.075 60.2224 167.683 79.5246C168.225 83.6145 168.747 87.7254 169.144 91.8779C170.041 91.2728 170.959 90.7302 171.919 90.2294C170.291 72.4089 166.932 54.7344 162.508 37.3938C159.962 27.5028 157.124 17.6744 154.224 7.84596Z"
                          fill="white"></path>
                    <path d="M101.346 49.622C101.784 38.4581 101.429 27.2942 100.887 16.1303C99.8644 15.7755 98.8419 15.3999 97.8194 15.0034C98.2785 24.4354 98.6333 33.8465 98.4872 43.2576C98.2577 59.7635 96.2336 76.2276 94.0843 92.5875C92.7905 102.416 91.3506 112.223 89.9317 122.01C90.9333 122.156 91.9141 122.281 92.9157 122.386C94.0425 114.581 95.1694 106.798 96.2336 98.9937C98.5081 82.6338 100.699 66.1488 101.346 49.622Z"
                          fill="white"></path>
                    <path d="M113.596 75.7477C114.347 86.3482 114.91 96.9279 115.244 107.549C115.035 111.973 114.868 116.397 114.764 120.821C114.743 121.447 114.743 122.052 114.722 122.678C116.016 122.553 117.31 122.386 118.604 122.198C118.437 117.148 118.416 112.098 118.27 107.048C118.687 98.326 119.209 89.6244 119.584 80.9645C120.231 66.441 120.252 51.9801 119.605 37.4566C119.334 31.4677 119.042 25.4997 118.729 19.5108C117.706 19.4899 116.705 19.4482 115.703 19.3856C115.933 23.7468 116.162 28.0872 116.371 32.4276C117.059 46.9928 117.352 61.4955 116.767 76.0608C116.746 76.5825 116.726 77.0832 116.705 77.6049C115.724 63.8117 114.388 50.0394 113.387 36.2462C112.97 30.4869 112.594 24.7276 112.197 18.9682C111.175 18.8222 110.152 18.6343 109.151 18.4257C109.443 22.6408 109.714 26.856 110.006 31.0712C111.05 45.9912 112.531 60.8694 113.596 75.7477Z"
                          fill="white"></path>
                    <path d="M131.416 51.7924C129.663 40.8789 128.682 29.8819 127.618 18.9058C126.617 19.0518 125.615 19.1562 124.613 19.2605C125.469 27.9413 126.241 36.622 127.41 45.261C128.557 53.6913 130.018 62.0799 132.084 70.3433C133.962 77.8137 136.424 85.0964 139.179 92.2747C141.641 98.7226 144.312 105.087 146.983 111.472C147.818 110.867 148.652 110.241 149.445 109.594C147.818 105.692 146.169 101.769 144.583 97.8462C141.766 90.8974 139.095 83.8861 136.946 76.7078C134.525 68.5279 132.772 60.181 131.416 51.7924Z"
                          fill="white"></path>
                </svg>
            </div>
        </div>
    </section>

    <section class="isolate relative mt-32 lg:mt-64">
        <x-grid-pattern/>

        <div class="flex flex-col lg:flex-row gap-8 lg:gap-12 pt-18 mb-32">
            <div class="w-full lg:flex-1">

                <x-card class="relative space-y-6 bg-zinc-950">
                    <div>
                        <flux:heading level="3" size="lg" class="tracking-tight !text-white">
                            {{ __('Get in Touch') }}
                        </flux:heading>
                        <flux:subheading class="!text-white/70">
                            {{ __('Have questions about your dental health? Reach out to our team by phone, email, or visit us at our clinic.') }}
                        </flux:subheading>
                    </div>

                    <!-- Contact Information Section -->
                    <div class="flex flex-col gap-6">
                        <x-contact-info-item
                                icon="map-pin"
                                :label="__('Address')"
                                :value="__('91 Aleksandar Malinov blvd., parter Mladost 4, Sofia 1715')"
                        />

                        <x-contact-info-item
                                icon="envelope"
                                :label="__('Email')"
                                value="office@smilepoint.bg"
                        />

                        <x-contact-info-item
                                icon="phone"
                                :label="__('Phone')"
                                value="089 367 47 08"
                        />

                        <x-contact-info-item
                                custom-icon="P"
                                :label="__('Parking')"
                                :value="__('Convenient Free Parking')"
                        />
                    </div>

                    <flux:separator subtle class="!bg-white/10"/>

                    <div class="relative mt-8">
                        <div class="flex flex-col gap-4">
                            <div>
                                <flux:heading level="3" size="lg" class="!text-white">
                                    {{ __('Prefer Viber?') }}
                                </flux:heading>

                                <flux:subheading class="!text-white/70">
                                    {{ __('Connect with us instantly on Viber for quick answers, appointment booking, and personalized dental care consultations.') }}
                                </flux:subheading>
                            </div>

                            <flux:button class="w-fit">
                                <img src="{{ asset('images/social-icons/viber.png') }}" alt="Chat on Viber"
                                     class="pointer-events-none size-5">

                                <span>{{ __('Write Us') }}</span>
                            </flux:button>
                        </div>
                    </div>
                </x-card>

            </div>

            <div class="space-y-6 w-full lg:flex-2 lg:pt-6">
                <div>
                    <flux:heading level="3" size="lg" class="tracking-tight dark:text-white">
                        {{ __('Have a question?') }}
                    </flux:heading>
                    <flux:subheading class="dark:text-zinc-400">
                        {{ __('Fill in the form and we will contact you!') }}
                    </flux:subheading>
                </div>

                <form class="space-y-6">
                    <div class="flex flex-col md:flex-row items-center gap-6 w-full">
                        <flux:field class="w-full">
                            <flux:label>{{ __('Name') }}</flux:label>
                            <flux:input
                                    type="text"
                                    name="name"
                                    placeholder="{{ __('Your name') }}"
                                    required
                            />
                        </flux:field>

                        <flux:field class="w-full">
                            <flux:label>{{ __('Email Address') }}</flux:label>
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
                                rows="8"
                        />
                    </flux:field>

                    <flux:button variant="primary" type="submit" color="zinc" icon-trailing="paper-airplane">
                        {{ __('Send Message') }}
                    </flux:button>
                </form>
            </div>
        </div>

    </section>

    <div class="hidden">
        <x-card class="relative rounded-2xl overflow-hidden border border-zinc-200 !p-0">
            <div id="smilepoint-map" class="w-full h-96"></div>
        </x-card>
    </div>
</flux:main>
