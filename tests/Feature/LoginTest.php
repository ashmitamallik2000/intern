<?php

use App\Models\User;

use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Session;
use Illuminate\Foundation\Testing\RefreshDatabase;

uses(RefreshDatabase::class);
it('logs in with valid credentials', function () {
  
    $user = User::create([
        'name' => 'demo',
        'email' => 'demo@demo.com',
        'password' => Hash::make('demo@demo.com'),
    ]);

   
    $token = Session::token();

   
    $response = $this->post('/login', [
        'email' => 'demo@demo.com',
        'password' => 'demo@demo.com',
        '_token' => $token, 
    ]);

    
    $response->assertRedirect('blog');

    
    $this->assertAuthenticatedAs($user); 
});
