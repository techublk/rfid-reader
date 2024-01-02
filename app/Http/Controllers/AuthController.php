<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AuthController extends Controller
{
    public function showLoginForm()
    {
        return view('pages.auth.login');
    }

    public function login(Request $request)
    {
        $username = $request->input('username');
        $password = $request->input('password');

        // Hard-coded values for demonstration
        $validUsername = 'Admin';
        $validPassword = 'Admin';

        // Check if the provided username and password match the hard-coded values
        if ($username === $validUsername && $password === $validPassword) {
            $request->session()->put('authenticated', true);
            return redirect()->route('home');
        } else {
            return redirect()->route('login')->with('error', 'Invalid credentials');
        }
    }

    public function logout(Request $request)
{
    $request->session()->forget('authenticated');
    return redirect()->route('login');
}

}

