<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class SessionsController extends Controller
{
    public function index()
    {
        if (auth()->check()) {
            return redirect()->route('home.index');
        } else {
            return view('auth.login');
        }
    }

    public function store()
    {
        if (auth()->check()) {
            return redirect()->route('home.index');
        } else {
            $this->validate(request(), [
                'email' => 'required',
                'password' => 'required'
            ]);

            if (auth()->attempt(request(['email', 'password'])) == false )
            {
                return back()->withErrors([
                    'message' => 'The email or password is incorrect'
                ]);
            }

            return redirect()->route('home.index');
        }
    }

    public function destroy()
    {
        if (auth()->check()) {
            auth()->logout();

            return redirect()->route('home.index');
        } else {
            return redirect()->route('home.index');
        }
    }
}
