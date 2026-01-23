<?php

use App\Http\Controllers\CourseController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\SessionController;
use App\Http\Controllers\UserSettingsController;
use Illuminate\Support\Facades\Route;

Route::view('/', 'welcome');
Route::view('/course', 'course')->middleware('auth');
Route::view('/contact', 'contact');
Route::view('/about', 'about');

Route::view('/secret', 'secret');

/* AWS S3 testing controller + test path
use App\Http\Controllers\S3TestController;
Route::get('/test', [S3TestController::class, 'index']);
*/

Route::get('/dashboard', [DashboardController::class, 'index']);

Route::get('/settings', [UserSettingsController::class, 'index']);
Route::patch('/settings', [UserSettingsController::class, 'update']);

Route::get('/courses', [CourseController::class, 'index']);
Route::get('/courses/{course}', [CourseController::class, 'show']);

Route::get('/register', [RegisterController::class, 'create']);
Route::post('/register', [RegisterController::class, 'store']);

Route::get('/login', [SessionController::class, 'create']);
Route::post('/login', [SessionController::class, 'store']);
Route::get('/logout', [SessionController::class, 'destroy']);
