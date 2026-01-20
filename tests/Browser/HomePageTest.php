<?php

declare(strict_types=1);

it('loads the homepage correctly', function (): void {
    $page = visit('/');

    $page->assertSee('Bright Smiles')
        ->assertSee('Expert Care')
        ->assertNoJavascriptErrors();
});

it('displays key sections on the homepage', function (): void {
    $page = visit('/');

    $page->assertSee('Years Experience')
        ->assertSee('Happy Patients')
        ->assertSee('Individual Approach')
        ->assertSee('Invisalign Platinum Provider')
        ->assertSee('Smile Makeovers')
        ->assertSee('Comprehensive Dental Services');
});

it('displays the contact section with form fields', function (): void {
    $page = visit('/');

    $page->assertSee('Get in Touch')
        ->assertSee('Have a question?')
        ->assertSee('Name')
        ->assertSee('Email')
        ->assertSee('Subject')
        ->assertSee('Message')
        ->assertSee('Send Message');
});

it('displays contact information', function (): void {
    $page = visit('/');

    $page->assertSee('Address')
        ->assertSee('Email')
        ->assertSee('Phone')
        ->assertSee('Parking')
        ->assertSee('Chat on Viber');
});

it('renders correctly in dark mode', function (): void {
    $page = visit('/')->inDarkMode();

    $page->assertSee('Bright Smiles')
        ->assertSee('Expert Care')
        ->assertNoJavascriptErrors();
});

it('renders correctly on mobile viewport', function (): void {
    $page = visit('/')
        ->on()->mobile();

    $page->assertSee('Bright Smiles')
        ->assertSee('Expert Care')
        ->assertNoJavascriptErrors();
});

it('renders correctly on tablet viewport', function (): void {
    $page = visit('/')
        ->on()->iPadMini();

    $page->assertSee('Bright Smiles')
        ->assertNoJavascriptErrors();
});

it('navigation links are visible', function (): void {
    $page = visit('/');

    $page->assertSee('Home')
        ->assertSee('Philosophy')
        ->assertSee('Team')
        ->assertSee('Services')
        ->assertSee('Smile Makeovers');
});

it('has no javascript errors on page load', function (): void {
    $page = visit('/');

    $page->assertNoJavascriptErrors()
        ->assertNoConsoleLogs();
});
