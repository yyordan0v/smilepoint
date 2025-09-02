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
    <link href="https://fonts.bunny.net/css?family=inter:400,500,600&display=swap" rel="stylesheet" />

    <!-- Scripts -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])

    @fluxAppearance
</head>
<body
    class="flex flex-col min-h-screen relative antialiased bg-gradient-to-br from-zinc-50 via-teal-50 to-lime-50 selection:bg-lime-500 selection:text-lime-900">

<x-layouts.header/>

<div style="background-image:url('/images/noise.png')" class="pointer-events-none [z-index:-1] absolute inset-0 bg-[size:180px] bg-repeat opacity-[0.035] dark:opacity-[0.012]"></div>

<main class="flex-1">
    {{ $slot }}
</main>

@persist('toast')
<flux:toast/>
@endpersist

@fluxScripts
</body>
</html>
