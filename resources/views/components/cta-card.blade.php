@props([
    'title',
    'description',
    'buttonText',
    'buttonHref' => '#',
    'buttonIcon' => 'arrow-long-right',
    'image' => null,
    'imagePosition' => 'right',
    'grid' => '',
])

<x-card
    :grid="$grid"
    @class([
        'bg-zinc-50/30 border border-zinc-200 dark:bg-zinc-800/50 dark:border-zinc-700 space-y-4',
        'relative !p-0 w-full' => $image && $imagePosition === 'right',
    ])
>
    @if($image && $imagePosition === 'right')
        <div class="flex flex-col h-full p-6 max-w-1/2">
            <flux:heading level="3" size="lg" class="max-lg:text-center dark:text-white">
                {{ $title }}
            </flux:heading>

            <flux:subheading class="max-lg:text-center dark:text-zinc-400">
                {{ $description }}
            </flux:subheading>

            <flux:spacer/>

            <flux:button variant="filled" :icon-trailing="$buttonIcon" class="w-fit" :href="$buttonHref">
                {{ $buttonText }}
            </flux:button>
        </div>

        <img src="{{ asset($image) }}"
             class="pointer-events-none absolute top-0 right-0 rounded-tr-xl rounded-br-xl h-full object-cover max-lg:hidden"
             alt="">
    @else
        <div class="flex flex-col h-full">
            <flux:heading level="3" size="lg" class="max-lg:text-center dark:text-white">
                {{ $title }}
            </flux:heading>

            <flux:subheading class="max-lg:text-center dark:text-zinc-400">
                {{ $description }}
            </flux:subheading>

            @if($image && $imagePosition === 'bottom')
                <div class="mt-6">
                    <img src="{{ asset($image) }}" alt="">
                </div>
            @endif

            <flux:spacer/>

            <flux:button variant="filled" :icon-trailing="$buttonIcon" class="w-fit" :href="$buttonHref">
                {{ $buttonText }}
            </flux:button>
        </div>
    @endif
</x-card>
