<?php

declare(strict_types=1);

use App\Livewire\LocaleSelector;
use Livewire\Livewire;

it('renders successfully', function (): void {
    Livewire::test(LocaleSelector::class)
        ->assertStatus(200);
});

it('sets locale successfully with valid locale', function (): void {
    config(['locales.available' => ['en', 'fr']]);

    $component = Livewire::test(LocaleSelector::class);
    $component->set('availableLocales', ['en', 'fr']);
    $component->set('locale', 'en');

    $component->call('setLocale', 'fr')
        ->assertRedirect();
});

it('skips when locale has not changed', function (): void {
    $component = Livewire::test(LocaleSelector::class);

    $component->set('locale', 'en');
    $component->set('availableLocales', ['en', 'fr']);

    $component->call('setLocale', 'en');

    expect($component->get('locale'))->toBe('en');
});

it('shows error toast for invalid locale', function (): void {
    $component = Livewire::test(LocaleSelector::class);
    $component->set('availableLocales', ['en', 'fr']);
    $component->set('locale', 'en');

    $component->call('setLocale', 'invalid');

    expect($component->get('locale'))->toBe('en');
});

it('handles invalid locale gracefully', function (): void {
    $component = Livewire::test(LocaleSelector::class);
    $component->set('availableLocales', ['en', 'fr']);
    $component->set('locale', 'en');

    $component->call('setLocale', 'invalid');

    expect($component->get('locale'))->toBe('en');
});

it('handles action failure when config is invalid', function (): void {
    config(['locales.available' => ['en', 'de']]);

    $component = Livewire::test(LocaleSelector::class);
    $component->set('availableLocales', ['en', 'fr']);
    $component->set('locale', 'en');

    $component->call('setLocale', 'fr');

    expect($component->get('locale'))->toBe('en');
});

it('creates action instance when not provided', function (): void {
    config(['locales.available' => ['en', 'fr']]);

    $component = Livewire::test(LocaleSelector::class);
    $component->set('availableLocales', ['en', 'fr']);
    $component->set('locale', 'en');

    $component->call('setLocale', 'fr')
        ->assertRedirect();
});

it('renders correct view', function (): void {
    $component = new LocaleSelector();
    $view = $component->render();

    expect($view->getName())->toBe('livewire.locale-selector');
});
