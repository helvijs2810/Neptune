<?php

use App\Http\Controllers\CourseController;
use Illuminate\Support\Facades\Route;

Route::view('/', 'welcome');
Route::view('/course', 'course')->middleware('auth');
Route::view('/contact', 'contact');

Route::get('/courses', [CourseController::class, 'index']);
Route::get('/courses/{course}', [CourseController::class, 'show']);
