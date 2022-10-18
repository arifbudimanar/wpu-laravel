<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LoginController extends Controller
{
    public function index()
    {
        return view('login.index', [
            'title' => 'Login',
            'active' => 'login'
        ]);
    }

    public function authenticate(Request $request)
    {
        // Validate
        $credentials = $request->validate([
            'email' => 'required|email:rfc',
            //kalau validation email:dns, maka harus gunakan akun beneran,
            //kalau validation email ingin menggunakan akun dummy, maka gunakan email:rfc
            'password' => 'required'
        ]);

        // Sign in
        // if (auth()->attempt($credentials)) {
        //     $request->session()->regenerate();

        //     return redirect()->intended('dashboard');
        // }

        // Sign In
        if (!auth()->attempt($request->only('email', 'password'))) {
            return back()->with('error', 'Login Failed');
        }

        // Redirect
        return redirect()->route('dashboard')->with('success', 'You are logged in');
    }

    public function logout(Request $request)
    {
        auth()->logout();

        $request->session()->invalidate();

        $request->session()->regenerateToken();

        return redirect('/');
    }
}
