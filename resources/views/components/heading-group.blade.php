@props([
    'level' => 2,
    'size' => '2xl',
    'label' => null,
    'description' => null,
    'inverted' => false,
    'labelAccent' => true,
])

@php
    $headingClasses = Flux::classes()
        ->add(match ($inverted) {
            true => '!text-white',
            default => 'dark:text-white',
        })
        ;

    $descriptionClasses = Flux::classes()
        ->add(match ($inverted) {
            true => '!text-white/60',
            default => 'text-zinc-500 dark:text-zinc-400',
        })
        ;

    $labelClasses = Flux::classes()
        ->add('font-medium')
        ->add(match ($labelAccent) {
            true => 'text-accent-content!',
            default => 'text-zinc-500 dark:text-zinc-400',
        })
        ;
@endphp

<div {{ $attributes->class('space-y-2') }}>
    @if($label)
        <flux:text size="sm" :class="$labelClasses">
            {{ $label }}
        </flux:text>
    @endif

    <flux:heading :$level :$size :class="$headingClasses">
        {{ $slot }}
    </flux:heading>

    @if($description)
        <flux:text :class="$descriptionClasses">
            {{ $description }}
        </flux:text>
    @endif
</div>
