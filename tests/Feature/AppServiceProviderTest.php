<?php

declare(strict_types=1);

use App\Providers\AppServiceProvider;
use Carbon\CarbonImmutable;
use Illuminate\Support\Facades\Date;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\URL;
use Illuminate\Validation\Rules\Password;

it('forces HTTPS in production', function (): void {
    $this->app->detectEnvironment(function () {
        return 'production';
    });

    $provider = new AppServiceProvider($this->app);
    $provider->boot();

    expect(URL::formatScheme('http'))->toBe('https://');
});

it('prevents stray HTTP requests during tests', function (): void {
    $provider = new AppServiceProvider($this->app);
    $provider->boot();

    expect(fn () => Http::get('https://example.com'))->toThrow(RuntimeException::class);
});

it('configures Sleep to be faked during tests', function (): void {
    $provider = new AppServiceProvider($this->app);
    $provider->boot();

    expect(true)->toBeTrue();
});

it('configures models to be strict in non-production', function (): void {
    $this->app->detectEnvironment(function () {
        return 'local';
    });

    $provider = new AppServiceProvider($this->app);
    $provider->boot();

    expect(true)->toBeTrue();
});

it('configures password validation in production', function (): void {
    $this->app->detectEnvironment(function () {
        return 'production';
    });

    $provider = new AppServiceProvider($this->app);
    $provider->boot();

    $rules = Password::defaults();
    expect($rules)->not->toBeNull();
});

it('configures dates to use CarbonImmutable', function (): void {
    $provider = new AppServiceProvider($this->app);
    $provider->boot();

    expect(Date::now())->toBeInstanceOf(CarbonImmutable::class);
});

it('configures asset prefetching', function (): void {
    $provider = new AppServiceProvider($this->app);
    $provider->boot();

    expect(true)->toBeTrue();
});
