<?php

use App\Http\Controllers\CourseController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\SessionController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;

Route::view('/', 'welcome');
Route::view('/course', 'course')->middleware('auth');
Route::view('/dashboard', 'dashboard')->middleware('auth');
Route::view('/contact', 'contact');
Route::view('/about', 'about');

/* User */
Route::get('/settings', [UserController::class, 'edit'])->middleware('auth');
Route::patch('/settings', [UserController::class, 'update']);
Route::get('/user/{user}/courses', [UserController::class, 'index']);

/* Session */
Route::get('/login', [SessionController::class, 'create'])->name('login');
Route::post('/login', [SessionController::class, 'store']);
Route::get('/logout', [SessionController::class, 'destroy']);

/* Register */
Route::get('/register', [RegisterController::class, 'create']);
Route::post('/register', [RegisterController::class, 'store']);

/* Course */
Route::get('/courses', [CourseController::class, 'index']);
Route::get('/courses/{course}', [CourseController::class, 'show']);
Route::patch('/courses/{course}', [CourseController::class, 'update']);

