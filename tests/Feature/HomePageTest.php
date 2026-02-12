<?php

declare(strict_types=1);

use Livewire\Livewire;

it('renders home component successfully', function (): void {
    Livewire::test('pages::home')
        ->assertStatus(200);
});
