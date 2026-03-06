<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;

class UserController extends Controller
{
    public function index(){
        return view('user.index');
    }

    public function edit(){
        $user = Auth::user();

        return view('user.edit', [
            'user' => $user
        ]);
    }

    public function update(Request $request){

        request()->validate([
            'first_name' => ['required', 'alpha:ascii'],
            'last_name' => ['required', 'alpha:ascii'],
            'profile_picture' => ['nullable']
        ]);

        $user = $request->user();

        if(request('profile_picture')){
            $filename = "user_" . $user->id . "." . $request->file('profile_picture')->extension();
            $path = Storage::putFileAs('user_images', $request->file('profile_picture') , $filename);
            $user -> update(['profile_picture' => $path]);
        }

        $user -> update([
            'first_name' => request('first_name'),
            'last_name' => request('last_name')
        ]);

        return redirect('/dashboard');
    }
}
