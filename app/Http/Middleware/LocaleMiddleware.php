<?php

declare(strict_types=1);

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

final class LocaleMiddleware
{
    public function handle(Request $request, Closure $next): Response
    {
        // Get locale from session, cookie, or config default as fallback
        $locale = session('locale', $request->cookie('locale', config('locales.default')));

        // Validate against available locales
        $availableLocales = config('locales.available', ['en']);
        if (! in_array($locale, $availableLocales, true)) {
            $locale = config('locales.fallback.locale');
        }

        app()->setLocale($locale);

        return $next($request);
    }
}
