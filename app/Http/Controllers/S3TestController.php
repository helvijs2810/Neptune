<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class S3TestController extends Controller
{
    public function index(){

        $test = Storage::get('test.txt');

        dd($test);
    }
}
