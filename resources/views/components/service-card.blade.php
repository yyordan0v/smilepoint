@props([
    'title',
    'image',
    'color' => 'emerald'
])

@php
    $colorClasses = [
        'slate' => 'from-slate-50 to-slate-100',
        'gray' => 'from-gray-50 to-gray-100',
        'zinc' => 'from-zinc-50 via-zinc-100 to-zinc-200',
        'neutral' => 'from-neutral-50 to-neutral-100',
        'stone' => 'from-stone-50 to-stone-100',
        'red' => 'from-red-50 to-red-100',
        'orange' => 'from-orange-50 to-orange-100',
        'amber' => 'from-amber-50 to-amber-100',
        'yellow' => 'from-yellow-50 to-yellow-100',
        'lime' => 'from-lime-50 to-lime-100',
        'green' => 'from-green-50 to-green-100',
        'emerald' => 'from-emerald-50 to-emerald-100',
        'teal' => 'from-teal-50 to-teal-100',
        'cyan' => 'from-cyan-50 to-cyan-100',
        'sky' => 'from-sky-50 to-sky-100',
        'blue' => 'from-blue-50 to-blue-100',
        'indigo' => 'from-indigo-50 to-indigo-100',
        'violet' => 'from-violet-50 to-violet-100',
        'purple' => 'from-purple-50 to-purple-100',
        'fuchsia' => 'from-fuchsia-50 to-fuchsia-100',
        'pink' => 'from-pink-50 to-pink-100',
        'rose' => 'from-rose-50 to-rose-100',
    ];

    $gradientClasses = $colorClasses[$color] ?? $colorClasses['emerald'];
@endphp

<div {{ $attributes->class(['group flex flex-col bg-radial-[at_50%_100%] to-90% rounded-md p-2', $gradientClasses]) }}>
    <flux:text size="sm" variant="strong" class="text-[10px]">{{ $title }}</flux:text>

    <div class="flex-1 flex items-center justify-center">
        <img src="{{ asset($image) }}"
             alt="{{ $title }}"
             class="group-hover:scale-105 transition-all duration-150 w-24 h-24 object-contain">
    </div>
</div>