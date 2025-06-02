<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class loginController extends Controller
{
    public function index()
    {
        return view('auth.login');
    }
    public function authenticate(Request $request)
    {
        // dd("as");

        $credentials = $request->validate([

            'email' => ['required', 'email'],
            'password' => ['required'],

        ]);


        if (Auth::attempt($credentials)) {

            $request->session()->regenerate();



            return redirect()->route('dashboard.admin.dashboard');
        }



        return back()->withErrors([

            'email' => 'The provided credentials do not match our records.',

        ])->onlyInput('email');
    }

    public function logout(Request $request)
    {
        Auth::logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();
        return redirect()->route('login');
    }
}