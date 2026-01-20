<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <meta property="og:title" content="{{ config('app.name') }}"/>
    <meta property="og:description"
          content="Smile Point - Dental Clinic, Business Park, Sofia."/>
    <meta property="og:url" content="{{ url()->current() }}"/>
    <meta property="og:type" content="website"/>

    <title>{{ config('app.name', 'Home') }}</title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=inter:400,500,600&display=swap" rel="stylesheet"/>

    <!-- Leaflet CSS -->
    <link rel="stylesheet" href="https://unpkg.com/leaflet@1.9.4/dist/leaflet.css"/>

    <!-- Scripts -->
    @vite(['resources/css/app.css', 'resources/js/app.js', 'resources/js/map.js'])

    <!-- Leaflet JS -->
    <script src="https://unpkg.com/leaflet@1.9.4/dist/leaflet.js"></script>

    @fluxAppearance
</head>
<body
        class="flex flex-col min-h-screen relative antialiased bg-gradient-to-br from-zinc-50 via-teal-50 to-lime-50 dark:from-zinc-950 dark:via-teal-950/40 dark:to-lime-950/40 selection:bg-lime-500 selection:text-lime-950 dark:selection:text-lime-50">

<x-layouts.header/>

<x-noise-texture/>

<main class="flex-1">
    {{ $slot }}
</main>

<x-layouts.footer/>

@persist('toast')
<flux:toast.group>
    <flux:toast/>
</flux:toast.group>
@endpersist

@fluxScripts
</body>
</html>
