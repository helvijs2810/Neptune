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

        return view('user.edit', [
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

        $user = User::where('id', Auth::user()->id);

        if(request('profile_picture')){
            $path = Storage::putFileAs('user_images', $request->file('profile_picture') , 'cool.png');
            $user -> update(['profile_picture' => $path]);
        }

        $user -> update([
            'first_name' => request('first_name'),
            'last_name' => request('last_name')
        ]);

        return redirect('/dashboard');
    }

}
