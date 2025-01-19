<?php

namespace App\Http\Controllers\Admin\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    public function loginPage()
    {
        return view('login');
    }

    public function login(Request $request)
    {
        if (auth()->attempt(['email' => $request->input('email'), 'password' => $request->input('password')])) {
            return redirect('blog');
        } else {

            return back()->with(['error' => 'The provided credentials do not match our records.']);
        }
    }
    public function logout()
    {

        return redirect('login')->with('message', 'You have been logged out.');
    }
}
