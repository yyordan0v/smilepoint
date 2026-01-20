@props(['grid' => ''])

<div @class(['bg-zinc-200/20 dark:bg-zinc-800/30 border border-zinc-200 dark:border-zinc-700 rounded-3xl p-3', $grid])>
    <div {{ $attributes->class('w-full h-full rounded-xl p-6') }}>
        {{ $slot }}
    </div>
</div>