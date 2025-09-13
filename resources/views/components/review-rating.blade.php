@props([
    'rating' => '4.9',
    'reviewCount' => 107,
    'provider' => 'Google',
    'viewAllUrl' => '#',
])

<div {{ $attributes->class('flex flex-col items-center gap-2') }}>
    <div class="flex gap-3 items-center">
        <div>
            <img src="{{ asset('images/'.strtolower($provider).'.svg') }}" class="w-5 h-5" alt="{{ $provider }} Logo">
        </div>
        <div class="flex items-center">
            <flux:icon.star variant="solid" class="text-amber-400 w-4"/>
            <flux:icon.star variant="solid" class="text-amber-400 w-4"/>
            <flux:icon.star variant="solid" class="text-amber-400 w-4"/>
            <flux:icon.star variant="solid" class="text-amber-400 w-4"/>
            <flux:icon.star variant="solid" class="text-amber-400 w-4"/>
        </div>
    </div>
    <flux:text size="sm">
        {{ $rating }} rating ({{ $reviewCount }} reviews)
    </flux:text>

    <flux:link href="{{ $viewAllUrl }}" size="sm" variant="ghost" :accent="false">
        <div class="flex items-center gap-2 text-xs">
            <span>
                View All {{ $provider }} Reviews
            </span>
            <flux:icon.arrow-top-right-on-square variant="micro"/>
        </div>
    </flux:link>
</div>