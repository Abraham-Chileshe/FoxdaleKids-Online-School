<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CourseController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\TrialLessonController;

Route::get('/', [HomeController::class, 'index']);


Route::get('/courses', [CourseController::class, 'index']);
Route::post('/trial-lesson', [TrialLessonController::class, 'store'])->name('trial-lesson.store');