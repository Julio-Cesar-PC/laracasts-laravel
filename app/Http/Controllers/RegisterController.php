<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class RegisterController extends Controller
{

    public function create()
    {
        return view('register.create');
    }

    public function  store()
    {
        $attribute = request()->validate([
            'name' => 'required|max:255',
            'username' => 'required|max:255|unique:users,username',
            'email' => 'required|email|max:255|unique:users,email',
            'password' => 'required|max:255|min:8'
        ]);

        User::create($attribute);

        session()->flash('message', 'User created successfully');

        return redirect('/');
    }
}
