<?php

use App\Models\User;

use Illuminate\Support\Facades\Hash;

it('logs in with valid credentials', function () {
  
    $user = User::create([
        'name' => 'demo',
        'email' => 'demo@demo.com',
        'password' => Hash::make('demo@demo.com'),
    ]);

   
  
   
    $response = $this->post('/login', [
        'email' => 'demo@demo.com',
        'password' => 'demo@demo.com',
         
    ]);

    
    $response->assertRedirect('blog');

    
    $this->assertAuthenticatedAs($user); 
});
