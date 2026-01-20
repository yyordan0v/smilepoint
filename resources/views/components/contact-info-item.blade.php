@props([
    'icon' => null,
    'label',
    'value',
    'customIcon' => null,
])

<div class="flex items-center gap-3">
    <div class="w-10 h-10 bg-white/10 rounded-lg flex items-center justify-center flex-shrink-0">
        @if($customIcon)
            <span class="text-lime-600 font-black text-xl">{{ $customIcon }}</span>
        @else
            <flux:icon :name="$icon" class="w-5 h-5 text-lime-600"/>
        @endif
    </div>
    <div>
        <flux:text size="sm" color="lime" variant="strong">
            {{ $label }}
        </flux:text>
        <flux:text size="sm" class="!text-white/70">
            {{ $value }}
        </flux:text>
    </div>
</div>
