<footer class="relative isolate bg-lime-400">
    <x-noise-texture/>

    <flux:main container class="!py-12">
        <div class="grid grid-cols-1 md:grid-cols-4 lg:grid-cols-6 gap-6 md:gap-8 mx-auto w-full max-w-(--breakpoint-sm)]">
            <div class="col-span-1 flex flex-col gap-4 sm:col-span-2">
                <a aria-label="Go back to smilepoint.bg homepage"
                   class="fv-style-contrast opacity-100 hover:opacity-80"
                   href="/">
                    <img alt="Smile Point"
                         loading="lazy" width="36"
                         height="36" decoding="async"
                         data-nimg="1"
                         style="color:transparent"
                         src="{{ asset('images/brand/mark.webp') }}">
                </a>
                <div class="flex flex-col gap-1 text-xs">
                    <p class="leading-5">
                        Smile Point © 2025
                    </p>

                    <flux:separator subtle class="my-2 !w-1/5"/>

                    <div class="space-y-2">
                        <flux:heading size="lg">
                            Working Hours
                        </flux:heading>

                        <ul>
                            <li>
                                <flux:text variant="strong" size="sm">
                                    Monday – Friday – 8:00 – 20:00
                                </flux:text>
                            </li>
                            <li>
                                <flux:text variant="strong" size="sm">
                                    Saturday – 9:00 – 18:00
                                </flux:text>
                            </li>
                            <li>
                                <flux:text variant="strong" size="sm">
                                    Sunday – Day Off
                                </flux:text>
                            </li>
                        </ul>

                        <flux:text variant="strong" size="sm">
                            The clinic works only with pre-booked appointment.
                        </flux:text>
                    </div>

                </div>
            </div>

            <div class="flex flex-col gap-4">
                <flux:heading size="lg">Product</flux:heading>
                <ul class="flex flex-col gap-3 text-sm">
                    <li>
                        <flux:link>Link 1</flux:link>
                    </li>
                    <li>
                        <flux:link>Link 1</flux:link>
                    </li>
                    <li>
                        <flux:link>Link 1</flux:link>
                    </li>
                    <li>
                        <flux:link>Link 1</flux:link>
                    </li>
                </ul>
            </div>


            <div class="flex flex-col gap-4">
                <flux:heading size="lg">Product</flux:heading>
                <ul class="flex flex-col gap-3 text-sm">
                    <li>
                        <flux:link>Link 1</flux:link>
                    </li>
                    <li>
                        <flux:link>Link 1</flux:link>
                    </li>
                    <li>
                        <flux:link>Link 1</flux:link>
                    </li>
                    <li>
                        <flux:link>Link 1</flux:link>
                    </li>
                </ul>
            </div>
        </div>
    </flux:main>
</footer>
