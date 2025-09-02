<?php

declare(strict_types=1);

use App\Livewire\LocaleSelector;
use Livewire\Livewire;

it('renders successfully', function () {
    Livewire::test(LocaleSelector::class)
        ->assertStatus(200);
});
