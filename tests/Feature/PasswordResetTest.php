<?php

use App\Models\User;
use Illuminate\Support\Facades\Hash;

it("test_password_can_be_updated", function() {
    $user = User::factory()->create();

    $response = $this
        ->actingAs($user)
        ->from('/profile')
        ->put('/password', [
            'current_password' => 'password',
            'password' => 'new-password',
            'password_confirmation' => 'new-password',
        ]);

    $response
        ->assertSessionHasNoErrors()
        ->assertRedirect('/profile');

    $this->assertTrue(Hash::check('new-password', $user->refresh()->password));
});

it("test_correct_password_must_be_provided_to_update_password", function() {
    $user = User::factory()->create();

    $response = $this
        ->actingAs($user)
        ->from('/profile')
        ->put('/password', [
            'current_password' => 'wrong-password',
            'password' => 'new-password',
            'password_confirmation' => 'new-password',
        ]);

    $response
        ->assertSessionHasErrors(['current_password'])
        ->assertRedirect('/profile');
});

it("test_for_password_to_be_8_characters", function(string $password) {
    $user = User::factory()->create([
        'password' => Hash::check('password'), // Ensure the correct password setup
    ]);

    $response = $this
        ->actingAs($user)
        ->from('/profile')
        ->put('/password', [
            'current_password' => 'password',
            'password' => $password,
            'password_confirmation' => $password,
        ]);

    $response
        ->assertSessionHasErrors(['password']); // Check for validation errors
})->with([
    '1', '12', '123', '1234', '12345', '123456', '1234567',
]);
