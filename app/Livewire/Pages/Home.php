<?php

declare(strict_types=1);

namespace App\Livewire\Pages;

use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\View\View;
use Livewire\Component;

final class Home extends Component
{
    public function render(): View|Factory
    {
        return view('livewire.home');
    }
}
