<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;

class DashboardController extends Controller
{
    public function index(Request $request){
        $user = $request->user();

       // dd($user->profile_picture);
        $url = Storage::temporaryUrl($user->profile_picture, now()->addMinutes(30));

        return view('user.index', [
            'user' => $user,
            'url' => $url
        ]);
    }
}
