<?php

use App\Http\Controllers\CourseController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\ModuleController;
use App\Http\Controllers\SessionController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\UserSettingsController;
use Illuminate\Support\Facades\Route;

Route::view('/', 'welcome');
Route::view('/course', 'course')->middleware('auth');
Route::view('/contact', 'contact');
Route::view('/about', 'about');

/* AWS S3 testing controller + test path
use App\Http\Controllers\S3TestController;
Route::get('/test', [S3TestController::class, 'index']);
*/

Route::get('/dashboard', [DashboardController::class, 'index'])->middleware('auth');

Route::get('/settings', [UserSettingsController::class, 'index'])->middleware('auth');
Route::patch('/settings', [UserSettingsController::class, 'update']);

Route::get('/courses', [CourseController::class, 'index']);
Route::get('/courses/{course}', [CourseController::class, 'show']);
Route::post('/courses/{course}', [CourseController::class, 'create']);

Route::get('/enrolled', [UserController::class, 'index']);

Route::get('/modules', [ModuleController::class, 'index'])->middleware('auth');

Route::get('/register', [RegisterController::class, 'create']);
Route::post('/register', [RegisterController::class, 'store']);

Route::get('/login', [SessionController::class, 'create'])->name('login');
Route::post('/login', [SessionController::class, 'store']);
Route::get('/logout', [SessionController::class, 'destroy']);
