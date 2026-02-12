@props([
    'spacing' => 'default',
])

@php
    $classes = Flux::classes()
        ->add('isolate relative')
        ->add(match ($spacing) {
            'none' => '',
            'sm' => 'mt-16 lg:mt-32',
            'default' => 'mt-32 lg:mt-64',
        })
        ;
@endphp

<section {{ $attributes->class($classes) }}>
    {{ $slot }}
</section>
