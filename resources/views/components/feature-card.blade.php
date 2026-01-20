@props([
    'icon',
    'title',
    'description',
    'grid' => '',
])

<x-card :grid="$grid"
        class="flex items-center gap-4 bg-zinc-50/30 border border-zinc-200 dark:bg-zinc-800/50 dark:border-zinc-700">
    <div class="w-12 h-12 bg-accent-muted rounded-xl flex items-center justify-center shrink-0">
        <flux:icon :name="$icon" class="w-6 h-6 text-accent-content"/>
    </div>

    <div>
        <flux:heading level="3" size="lg">
            {{ $title }}
        </flux:heading>
        <flux:text size="sm">
            {{ $description }}
        </flux:text>
    </div>
</x-card>
