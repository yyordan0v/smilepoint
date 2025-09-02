<?php

declare(strict_types=1);

namespace App\Actions;

use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\Cookie;
use Illuminate\Support\Facades\Session;

final class SwitchLocale
{
    public function handle(string $locale, ?string $referrer = null): array
    {
        $availableLocales = config('locales.available', ['en']) ?? ['en'];

        if ($locale === '' || $locale === '0' || ! is_array($availableLocales) || ! in_array($locale, $availableLocales, true)) {
            return [
                'success' => false,
                'locale' => App::getLocale(),
                'message' => 'Invalid locale',
                'fallback_used' => true,
            ];
        }

        Session::put('locale', $locale);
        Cookie::queue('locale', $locale, 60 * 24 * 30); // 30 days

        App::setLocale($locale);

        return [
            'success' => true,
            'locale' => $locale,
            'referrer' => $referrer,
        ];
    }
}
