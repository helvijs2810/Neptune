<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;

class UserSettingsController extends Controller
{
    public function index(){
        $user = Auth::user();

        return view('user.settings', [
            'user' => $user
        ]);
    }

    public function show(){

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
