<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;

class DashboardController extends Controller
{
    public function index(Request $request){
        $user = $request->user();
        $time = Carbon::now();

       // dd($user->profile_picture);
       if($user->profile_picture){
            $url = Storage::temporaryUrl($user->profile_picture, now()->addMinutes(30));
       } else {
            $url = 'https://placehold.co/100';
       }

        return view('user.dashboard', [
            'user' => $user,
            'url' => $url,
            'time' => $time->toFormattedDayDateString()
        ]);
    }
}
