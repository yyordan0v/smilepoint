<?php

declare(strict_types=1);

use App\Http\Middleware\LocaleMiddleware;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\Config;
use Illuminate\Support\Facades\Session;

beforeEach(function (): void {
    // Set up locale configuration for testing
    Config::set('locales.available', ['en', 'fr', 'es', 'de']);
    Config::set('locales.default', 'en');
    Config::set('locales.fallback.locale', 'en');

    App::setLocale('en'); // Reset to default
});

it('sets locale from session when present and valid', function (): void {
    Session::put('locale', 'fr');

    $middleware = new LocaleMiddleware();
    $request = Request::create('/');

    $response = $middleware->handle($request, function ($request) {
        return response('OK');
    });

    expect(App::getLocale())->toBe('fr');
    expect($response->getContent())->toBe('OK');
});

it('sets locale from cookie when session is empty', function (): void {
    $request = Request::create('/');
    $request->cookies->set('locale', 'es');

    $middleware = new LocaleMiddleware();

    $response = $middleware->handle($request, function ($request) {
        return response('OK');
    });

    expect(App::getLocale())->toBe('es');
    expect($response->getContent())->toBe('OK');
});

it('uses config default when no session or cookie', function (): void {
    Config::set('locales.default', 'de');

    $request = Request::create('/');
    $middleware = new LocaleMiddleware();

    $response = $middleware->handle($request, function ($request) {
        return response('OK');
    });

    expect(App::getLocale())->toBe('de');
});

it('falls back to config fallback when locale is invalid', function (): void {
    Session::put('locale', 'invalid');
    Config::set('locales.fallback.locale', 'en');

    $request = Request::create('/');
    $middleware = new LocaleMiddleware();

    $response = $middleware->handle($request, function ($request) {
        return response('OK');
    });

    expect(App::getLocale())->toBe('en');
});

it('falls back to config fallback when cookie locale is invalid', function (): void {
    $request = Request::create('/');
    $request->cookies->set('locale', 'invalid');
    Config::set('locales.fallback.locale', 'fr');

    $middleware = new LocaleMiddleware();

    $response = $middleware->handle($request, function ($request) {
        return response('OK');
    });

    expect(App::getLocale())->toBe('fr');
});

it('prioritizes session over cookie', function (): void {
    Session::put('locale', 'fr');
    $request = Request::create('/');
    $request->cookies->set('locale', 'es');

    $middleware = new LocaleMiddleware();

    $response = $middleware->handle($request, function ($request) {
        return response('OK');
    });

    expect(App::getLocale())->toBe('fr'); // Session should win
});

it('works with default available locales when config is missing', function (): void {
    Config::set('locales.available', null);
    Session::put('locale', 'en'); // Should be valid as it's the default

    $request = Request::create('/');
    $middleware = new LocaleMiddleware();

    $response = $middleware->handle($request, function ($request) {
        return response('OK');
    });

    expect(App::getLocale())->toBe('en');
});

it('handles null locale gracefully', function (): void {
    Config::set('locales.default', null);
    Config::set('locales.fallback.locale', 'en');

    $request = Request::create('/');
    $middleware = new LocaleMiddleware();

    $response = $middleware->handle($request, function ($request) {
        return response('OK');
    });

    expect(App::getLocale())->toBe('en');
});
