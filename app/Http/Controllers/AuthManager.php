<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AuthManager extends Controller
{
    function login() {
        return view('signin');

    }
    function register() {
        return view('signup');

    }

    function loginPost(Request $request) {
        $request -> validate([
            'email'=> 'require',
            'password'=> 'require'
        ]);

        $credentials = $request -> only('email','password');
        if (Auth::attempt($credentials)) {
            return redirect()->intended(route('home'));
        }
        return redirect(route('login'))->with('error', 'Login details are not valid');
    }
}
