<?php

use App\Models\User;
use Livewire\Livewire;

use function Pest\Laravel\assertGuest;

test('profile page is displayed', function () {
    $user = User::factory()->create();

    test()->actingAs($user)
        ->get('/settings/profile')
        ->assertOk();
});

test('profile information can be updated', function () {
    $user = User::factory()->create();

    Livewire::actingAs($user)
        ->test(\App\Livewire\SettingsProfile::class)
        ->set('name', 'Test User')
        ->set('email', 'test@example.com')
        ->call('updateProfile')
        ->assertHasNoErrors()
        ->assertDispatched('profile-updated');

    $user->refresh();

    expect($user->name)->toBe('Test User');
    expect($user->email)->toBe('test@example.com');
    expect($user->email_verified_at)->toBeNull();
});

test('email verification status is unchanged when email address is unchanged', function () {
    $user = User::factory()->create();

    Livewire::actingAs($user)
        ->test(\App\Livewire\SettingsProfile::class)
        ->set('name', 'Test User')
        ->set('email', $user->email)
        ->call('updateProfile')
        ->assertHasNoErrors()
        ->assertDispatched('profile-updated');

    expect($user->refresh()->email_verified_at)->not->toBeNull();
});

test('user can delete their account', function () {
    $user = User::factory()->create();

    Livewire::actingAs($user)
        ->test(\App\Livewire\SettingsProfile::class)
        ->call('deleteAccount')
        ->assertRedirect('/');

    assertGuest();
    expect($user->fresh())->toBeNull();
});
