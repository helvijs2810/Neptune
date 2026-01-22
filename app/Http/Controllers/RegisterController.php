<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Validation\Rules\Password;

class RegisterController extends Controller
{
    public function create(){
        return view("authorization.register");
    }

    public function store(){
        $attributes = request()->validate([
            'first_name' => ['required', 'alpha:ascii'],
            'last_name' => ['required', 'alpha:ascii'],
            'account_type' => ['required', 'in:student,teacher'],
            'email' => ['required', 'email', 'max:254', 'confirmed'],
            'password' => ['required', Password::min(7), 'confirmed'],
        ]);

        $user = User::create($attributes);

        Auth::login($user);

        return redirect('/dashboard');
    }
}
