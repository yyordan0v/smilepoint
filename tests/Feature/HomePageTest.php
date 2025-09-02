<?php

declare(strict_types=1);

use App\Livewire\Pages\Home;
use Livewire\Livewire;

it('renders home component successfully', function (): void {
    Livewire::test(Home::class)
        ->assertStatus(200)
        ->assertViewIs('livewire.home');
});

it('returns correct view from render method', function (): void {
    $component = new Home();
    $view = $component->render();

    expect($view->getName())->toBe('livewire.home');
});
