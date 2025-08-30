<?php

use App\Filament\Resources\Users\Pages\CreateUser;
use App\Filament\Resources\Users\Pages\EditUser;
use App\Filament\Resources\Users\Pages\ListUsers;
use App\Models\User;
use Filament\Facades\Filament;
use Illuminate\Foundation\Testing\RefreshDatabase;

use function Pest\Livewire\livewire;


beforeEach(function () {
    Filament::setCurrentPanel('admin');
});

test('can list users', function () {
    $users = User::factory()->count(3)->create();

    $this->actingAs(User::factory()->create());

    livewire(ListUsers::class)
        ->assertCanSeeTableRecords($users)
        ->assertSuccessful();
});

test('can create user', function () {
    $this->actingAs(User::factory()->create());

    livewire(CreateUser::class)
        ->fillForm([
            'name' => 'John Doe',
            'email' => 'john@example.com',
            'password' => 'password123',
        ])
        ->call('create')
        ->assertNotified();

    $this->assertDatabaseHas(User::class, [
        'name' => 'John Doe',
        'email' => 'john@example.com',
    ]);
});

test('can edit user', function () {
    $user = User::factory()->create([
        'name' => 'Original Name',
        'email' => 'original@example.com',
    ]);
    $this->actingAs(User::factory()->create());

    livewire(EditUser::class, ['record' => $user->getRouteKey()])
        ->fillForm([
            'name' => 'Updated Name',
            'email' => 'updated@example.com',
        ])
        ->call('save')
        ->assertNotified();

    expect($user->refresh())
        ->name->toBe('Updated Name')
        ->email->toBe('updated@example.com');
});

test('can mark user as verified from edit page', function () {
    $user = User::factory()->unverified()->create();
    $this->actingAs(User::factory()->create());

    expect($user->hasVerifiedEmail())->toBeFalse();

    livewire(EditUser::class, ['record' => $user->getRouteKey()])
        ->callAction('markAsVerified')
        ->assertNotified();

    expect($user->refresh()->hasVerifiedEmail())->toBeTrue();
});

test('verification action is hidden for verified users', function () {
    $user = User::factory()->create(); // Already verified by default
    $this->actingAs(User::factory()->create());

    livewire(EditUser::class, ['record' => $user->getRouteKey()])
        ->assertActionHidden('markAsVerified');
});

test('can mark user as verified from table', function () {
    $user = User::factory()->unverified()->create();
    $this->actingAs(User::factory()->create());

    expect($user->hasVerifiedEmail())->toBeFalse();

    livewire(ListUsers::class)
        ->callTableAction('markVerified', $user)
        ->assertNotified();

    expect($user->refresh()->hasVerifiedEmail())->toBeTrue();
});
