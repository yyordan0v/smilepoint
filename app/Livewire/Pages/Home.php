<?php

declare(strict_types=1);

namespace App\Livewire\Pages;

use Livewire\Component;

final class Home extends Component
{
    public function render(): \Illuminate\Contracts\View\View|\Illuminate\Contracts\View\Factory
    {
        return view('livewire.home');
    }
}
