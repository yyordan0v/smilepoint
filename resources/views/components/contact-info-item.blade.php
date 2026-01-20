@props([
    'icon' => null,
    'label',
    'value',
    'customIcon' => null,
    'inverted' => false,
    'href' => null,
])

@php
    $tag = $href ? 'a' : 'div';
@endphp

<{{ $tag }}
    @if($href) href="{{ $href }}" @endif
@class([
    'group flex items-center gap-4 py-3 px-4 -mx-4 rounded-2xl transition-all duration-300',
    'hover:bg-white/5' => $inverted,
])
>
<div @class([
        'relative w-11 h-11 rounded-xl flex items-center justify-center flex-shrink-0 transition-all duration-300',
        'bg-white/10' => $inverted,
        'bg-zinc-900/5 group-hover:bg-zinc-900' => !$inverted,
    ])>
    @if($customIcon)
        <span class="text-accent-content font-bold text-base">{{ $customIcon }}</span>
    @else
        <flux:icon :name="$icon" class="w-5 h-5 text-accent-content"/>
    @endif
</div>

<div class="flex flex-col gap-0.5 flex-1 min-w-0">
    <flux:text size="sm" variant="strong" class="text-accent-content!">
        {{ $label }}
    </flux:text>
    <flux:text size="sm" @class([
            '!text-white/70 group-hover:!text-white' => $inverted,
            '!text-zinc-700 group-hover:!text-zinc-900' => !$inverted,
        ])>
        {{ $value }}
    </flux:text>
</div>

@if($href)
    <flux:icon.arrow-up-right @class([
            'w-4 h-4 flex-shrink-0 opacity-0 -translate-x-2 group-hover:opacity-60 group-hover:translate-x-0 transition-all duration-300',
            'text-white/50' => $inverted,
            'text-zinc-400' => !$inverted,
        ])/>
@endif
</{{ $tag }}>
