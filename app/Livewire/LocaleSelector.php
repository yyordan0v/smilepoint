<?php

declare(strict_types=1);

namespace App\Livewire;

use App\Actions\SwitchLocale;
use Flux\Flux;
use Livewire\Component;

final class LocaleSelector extends Component
{
    public string $locale;

    public array $availableLocales = [];

    public string $triggerType = 'navbar'; // Options: 'navlist', 'navbar', 'navmenu'

    public array $localeNames = [];

    public array $localeFlags = [];

    public function mount(string $triggerType = 'navbar'): void
    {
        $this->locale = app()->getLocale();
        $this->availableLocales = config('locales.available', []);
        $this->triggerType = $triggerType;
        $this->localeNames = config('locales.native_names', []);
        $this->localeFlags = config('locales.flags', []);
    }

    public function setLocale(string $newLocale, ?SwitchLocale $action = null): void
    {
        $action ??= app(SwitchLocale::class);

        // Skip if locale hasn't changed
        if ($this->locale === $newLocale) {
            return;
        }

        // Validate locale against available options
        if (! in_array($newLocale, $this->availableLocales, true)) {
            Flux::toast(
                text: __('Invalid language selected.'),
                heading: __('Error'),
                variant: 'danger'
            );

            return;
        }

        $result = $action->handle(
            locale: $newLocale,
            referrer: request()->header('Referer')
        );

        if (! $result['success']) {
            return;
        }

        $this->locale = $result['locale'];

        Flux::toast(
            text: __('Language has been changed successfully.'),
            heading: __('Language Changed'),
            variant: 'success'
        );

        $this->redirect($result['referrer'] ?? route('home'), navigate: true);
    }

    public function render(): \Illuminate\Contracts\View\View|\Illuminate\Contracts\View\Factory
    {
        return view('livewire.locale-selector');
    }
}
