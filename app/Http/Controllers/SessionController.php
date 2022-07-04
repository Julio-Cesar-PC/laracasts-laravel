<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SessionController extends Controller
{

    public function login()
    {
        return view('session.login');
    }

    public function submitLogin()
    {
        $attribute = request()->validate([
            'email' => 'required|email|max:255',
            'password' => 'required|max:255|min:8'
        ]);

        // log in user
        if (auth()->attempt($attribute)) {
            return redirect('/')->with('message', 'Welcome back ' . auth()->user()->name);
        }

        return back()->withErrors(['message' => 'Invalid email or password']);
    }



    public function logout()
    {
        auth()->logout();

        return redirect('/')->with('message', 'Bye bye! :D');
    }
}
