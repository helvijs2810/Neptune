<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class S3TestController extends Controller
{
    public function index(){

        $test = Storage::disk('s3')->put('pokemon.txt', 'charizard');

        dd($test);
    }
}
