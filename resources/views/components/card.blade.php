@props(['grid' => ''])

<div @class(['bg-zinc-200/20 border border-zinc-200 rounded-3xl p-3', $grid])>
    <div {{ $attributes->class('w-full h-full rounded-xl p-6') }}>
        {{ $slot }}
    </div>
</div>