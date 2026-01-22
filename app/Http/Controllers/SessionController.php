<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Validation\Rules\Password;
use Illuminate\Validation\ValidationException;

class SessionController extends Controller
{
    public function create(){
        return view('authorization.login');
    }

    public function store(){
        $attributes = request()->validate([
            'email' => ['required', 'email', 'max:254', 'exists:users,email'],
            'password' => ['required', Password::min(7)],
        ]);

        if(!Auth::attempt($attributes)){
            throw ValidationException::withMessages([
                'bad_details' => 'Incorrect password',
            ]);
        }

        request()->session()->regenerate();

        return redirect('/dashboard');
    }

    public function destroy(){
        Auth::logout();

        return redirect('/');
    }
}
