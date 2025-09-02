<?php

declare(strict_types=1);

use App\Actions\SwitchLocale;
use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\Config;
use Illuminate\Support\Facades\Cookie;
use Illuminate\Support\Facades\Session;

beforeEach(function (): void {
    // Set up available locales for testing
    Config::set('locales.available', ['en', 'fr', 'es', 'de']);
    App::setLocale('en'); // Reset to default
});

it('switches locale successfully with valid locale', function (): void {
    $action = new SwitchLocale();

    $result = $action->handle('fr', 'https://example.com/test');

    expect($result)->toBe([
        'success' => true,
        'locale' => 'fr',
        'referrer' => 'https://example.com/test',
    ]);

    // Verify session was set
    expect(Session::get('locale'))->toBe('fr');

    // Verify app locale was set
    expect(App::getLocale())->toBe('fr');
});

it('switches locale successfully without referrer', function (): void {
    $action = new SwitchLocale();

    $result = $action->handle('es');

    expect($result)->toBe([
        'success' => true,
        'locale' => 'es',
        'referrer' => null,
    ]);

    expect(Session::get('locale'))->toBe('es');
    expect(App::getLocale())->toBe('es');
});

it('rejects empty string locale', function (): void {
    $action = new SwitchLocale();

    $result = $action->handle('', 'https://example.com/test');

    expect($result)->toBe([
        'success' => false,
        'locale' => 'en', // Current app locale
        'message' => 'Invalid locale',
        'fallback_used' => true,
    ]);

    // Verify session was not set
    expect(Session::get('locale'))->toBeNull();

    // Verify app locale was not changed
    expect(App::getLocale())->toBe('en');
});

it('rejects zero string locale', function (): void {
    $action = new SwitchLocale();

    $result = $action->handle('0', 'https://example.com/test');

    expect($result)->toBe([
        'success' => false,
        'locale' => 'en',
        'message' => 'Invalid locale',
        'fallback_used' => true,
    ]);

    expect(Session::get('locale'))->toBeNull();
    expect(App::getLocale())->toBe('en');
});

it('rejects invalid locale not in available list', function (): void {
    $action = new SwitchLocale();

    $result = $action->handle('invalid', 'https://example.com/test');

    expect($result)->toBe([
        'success' => false,
        'locale' => 'en',
        'message' => 'Invalid locale',
        'fallback_used' => true,
    ]);

    expect(Session::get('locale'))->toBeNull();
    expect(App::getLocale())->toBe('en');
});

it('works with default config when no locales config exists', function (): void {
    Config::set('locales.available', null);

    $action = new SwitchLocale();

    // Should work with 'en' as it's the default
    $result = $action->handle('en');

    expect($result)->toBe([
        'success' => true,
        'locale' => 'en',
        'referrer' => null,
    ]);

    // Should reject other locales
    $result = $action->handle('fr');

    expect($result['success'])->toBeFalse();
});

it('queues cookie with correct parameters', function (): void {
    $action = new SwitchLocale();

    $action->handle('fr');

    // Check if cookie was queued (Laravel queues cookies for the response)
    $queuedCookies = Cookie::getQueuedCookies();

    // Check that there's at least one queued cookie
    expect(count($queuedCookies))->toBeGreaterThan(0);

    // Find the locale cookie in the queued cookies
    $localeCookie = null;
    foreach ($queuedCookies as $cookie) {
        if ($cookie->getName() === 'locale') {
            $localeCookie = $cookie;
            break;
        }
    }

    expect($localeCookie)->not->toBeNull();
    expect($localeCookie->getValue())->toBe('fr');
    expect($localeCookie->getExpiresTime())->toBeGreaterThan(time() + (60 * 24 * 29 * 60)); // ~29 days
});
