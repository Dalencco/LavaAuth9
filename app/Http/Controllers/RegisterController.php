<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class RegisterController extends Controller
{
    public function index()
    {
        if (auth()->check()) {
            return redirect()->route('home.index');
        } else {
            return view('auth.register');
        }
    }

    public function store()
    {
        if (auth()->check()) {
            return redirect()->route('home.index');
        } else {
            $this->validate(request(), [
                'name' => 'required',
                'email' => 'required',
                'password' => 'required'
            ]);

            $user = User::create(request(['name', 'email', 'password']));

            auth()->login($user);
            return redirect()->route('home.index');
        }
    }
}
