<div>
    <flux:dropdown>
        {{-- Trigger dropdown --}}
        @switch($triggerType)
            @case('navbar')
                <flux:navbar.item
                    icon="language"
                    icon-trailing="chevron-down"
                    class="max-lg:hidden">
                </flux:navbar.item>
                @break

            @case('navlist')
                <flux:navlist.item icon="language" icon-trailing="chevron-down">
                    {{ $localeNames[$locale] ?? $locale }}
                </flux:navlist.item>
                @break

            @case('navmenu')
                <flux:navmenu.item icon="language">
                    {{ $localeNames[$locale] ?? $locale }}
                </flux:navmenu.item>
                @break
        @endswitch

        {{-- Dropdown menu --}}
        <flux:menu>
            <flux:menu.radio.group>
                @foreach($availableLocales as $availableLocale)
                    <flux:menu.radio
                        wire:key="{{ $availableLocale }}"
                        wire:click="setLocale('{{ $availableLocale }}')"
                        :checked="$locale === $availableLocale"
                        class="cursor-pointer"
                    >
                        <div class="flex items-center justify-between w-full">
                            <span class="flex items-center gap-2">
                                <img
                                    src="{{ asset($localeFlags[$availableLocale] ?? config('locales.fallback.flag')) }}"
                                    alt="{{ $localeNames[$availableLocale] ?? $availableLocale }} flag"
                                    class="w-4 h-4 rounded-full border border-zinc-200">
                                <span>{{ $localeNames[$availableLocale] ?? $availableLocale }}</span>
                            </span>
                        </div>
                    </flux:menu.radio>
                @endforeach
            </flux:menu.radio.group>
        </flux:menu>
    </flux:dropdown>
</div>
