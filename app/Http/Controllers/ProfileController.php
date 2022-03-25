<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class ProfileController extends Controller
{
    public function index()
    {
        if (auth()->check()) {
            $user = User::find(auth()->user()->id);

            return view('profile.index', compact('user'));
        } else {
            return redirect()->route('home.index');
        }
    }
}
