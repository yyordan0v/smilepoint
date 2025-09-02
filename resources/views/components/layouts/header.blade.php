<flux:header sticky class="flex flex-col w-full !px-0">
    <flux:header container
                 x-data="{ isScrolled: false }"
                 x-init="
                     isScrolled = window.scrollY > 0;
                     window.addEventListener('scroll', () => isScrolled = window.scrollY > 0)
                 "
                 x-bind:class="{
                'backdrop-blur-2xl bg-zinc-50/90 darK:bg-transparent dark:border-white/10': isScrolled
             }"
                 class="w-full bg-transparent border-b border-zinc-200 dark:border-transparent transition-all duration-500">

        <flux:sidebar.toggle class="lg:hidden" icon="bars-2" inset="left"/>

        <flux:brand href="#" logo="{{ asset('images/brand/logotype.webp') }}" class="h-14 max-lg:hidden"/>

        {{-- Desktop Nav --}}
        <flux:navbar class="-mb-px max-lg:hidden">
            <flux:navbar.item current href="#" wire:navigate.hover>
                {{ __('Home') }}
            </flux:navbar.item>

            <flux:navbar.item href="#" wire:navigate.hover>
                {{ __('Philosophy') }}
            </flux:navbar.item>

            <flux:navbar.item href="#" wire:navigate.hover>
                {{ __('Team') }}
            </flux:navbar.item>

            <flux:navbar.item href="#" wire:navigate.hover>
                {{ __('Services') }}
            </flux:navbar.item>

            <flux:navbar.item href="#" wire:navigate.hover>
                {{ __('Smile Makeovers') }}
            </flux:navbar.item>

            <flux:spacer/>
        </flux:navbar>


        <flux:spacer class="lg:hidden"/>

        {{-- Mobile Nav--}}
        <flux:sidebar stashable sticky
                      class="lg:hidden border-r bg-zinc-50 dark:bg-zinc-900 border-zinc-200 dark:border-zinc-700">
            <flux:sidebar.toggle class="lg:hidden" icon="x-mark"/>

            <flux:brand href="#" logo="{{ asset('images/brand/logotype.webp') }}" class="px-2"/>

            <flux:navlist>
                <flux:navlist.item current wire:navigate.hover href="#">
                    {{ __('Home') }}
                </flux:navlist.item>

                <flux:navlist.item wire:navigate.hover href="#">
                    {{ __('Philosophy') }}
                </flux:navlist.item>

                <flux:navlist.item wire:navigate.hover href="#">
                    {{ __('Team') }}
                </flux:navlist.item>

                <flux:navlist.item wire:navigate.hover href="#">
                    {{ __('Services') }}
                </flux:navlist.item>

                <flux:navlist.item wire:navigate.hover href="#">
                    {{ __('Smile Makeovers') }}
                </flux:navlist.item>

            </flux:navlist>

            <flux:spacer/>

            <flux:navlist>
                <livewire:locale-selector triggerType="navlist"/>
            </flux:navlist>
        </flux:sidebar>

        <flux:spacer />

        <livewire:locale-selector triggerType="navbar" class="max-lg:hidden"/>

        <flux:button size="sm" class="my-3 ml-4" ref="tel:+6494461709">Contacts</flux:button>



        <flux:dropdown x-data align="end">
            <flux:button variant="subtle" square class="group" aria-label="Preferred color scheme">
                <flux:icon.sun x-show="$flux.appearance === 'light'" variant="mini" class="text-zinc-500 dark:text-white" />
                <flux:icon.moon x-show="$flux.appearance === 'dark'" variant="mini" class="text-zinc-500 dark:text-white" />
                <flux:icon.moon x-show="$flux.appearance === 'system' && $flux.dark" variant="mini" />
                <flux:icon.sun x-show="$flux.appearance === 'system' && ! $flux.dark" variant="mini" />
            </flux:button>

            <flux:menu>
                <flux:menu.item icon="sun" x-on:click="$flux.appearance = 'light'">Light</flux:menu.item>
                <flux:menu.item icon="moon" x-on:click="$flux.appearance = 'dark'">Dark</flux:menu.item>
                <flux:menu.item icon="computer-desktop" x-on:click="$flux.appearance = 'system'">System</flux:menu.item>
            </flux:menu>
        </flux:dropdown>
    </flux:header>
</flux:header>
