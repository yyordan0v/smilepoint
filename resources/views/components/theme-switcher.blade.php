<flux:button
        size="sm"
        variant="subtle"
        x-data
        x-on:click="$flux.appearance = $flux.dark ? 'light' : 'dark'"
        aria-label="Toggle dark mode"
        {{ $attributes }}
>
    <flux:icon.sun x-show="$flux.dark" variant="mini"/>
    <flux:icon.moon x-show="! $flux.dark" variant="mini"/>
</flux:button>
