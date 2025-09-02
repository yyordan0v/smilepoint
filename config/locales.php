<?php

declare(strict_types=1);

return [
    /*
    |--------------------------------------------------------------------------
    | Available Languages and Default Language Configuration
    |--------------------------------------------------------------------------
    |
    | Define the languages supported by your application in this file.
    | You can specify which language should be used as the default.
    | This setting affects the localization behavior of your app.
    |
    */

    'available' => array_filter([
        'bg',
        'en',
    ]),

    'default' => env('APP_LOCALE', 'bg'),

    /*
    |--------------------------------------------------------------------------
    | Language Names in Native Languages
    |--------------------------------------------------------------------------
    |
    | Define how each language name should be displayed in its native form
    | This allows showing language names in their own language
    |
    */

    'native_names' => [
        'bg' => 'Български',
        'en' => 'English',
    ],

    /*
    |--------------------------------------------------------------------------
    | Language Flag Images
    |--------------------------------------------------------------------------
    |
    | Paths to flag images for each supported language.
    | Make sure all paths are relative to the public directory.
    |
    */

    'flags' => [
        'bg' => '/images/flags/1x1/bg.svg',
        'en' => '/images/flags/1x1/gb.svg',
    ],

    /*
    |--------------------------------------------------------------------------
    | Fallback Settings
    |--------------------------------------------------------------------------
    |
    | Configure fallback behavior for locales and assets.
    |
    */

    'fallback' => [
        'locale' => 'en',
        'flag' => '/images/flags/1x1/placeholder.svg',
    ],
];
