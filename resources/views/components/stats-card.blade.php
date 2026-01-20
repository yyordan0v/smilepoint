@props([
    'value',
    'label',
    'grid' => '',
])

<x-card :grid="$grid" class="bg-zinc-50/30 border border-zinc-200 dark:bg-zinc-800/50 dark:border-zinc-700">
    <div class="flex flex-col items-center justify-center h-full">
        <flux:heading size="2xl" :accent="true">
            {{ $value }}
        </flux:heading>
        <flux:subheading class="dark:text-zinc-400">{{ $label }}</flux:subheading>
    </div>
</x-card>
