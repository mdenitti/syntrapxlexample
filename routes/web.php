<?php

use App\Http\Controllers\CourseController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/about', function () {
    return view('about');
});

Route::get('/courseadd', function () {
    return view('addCourse');
});

Route::post('/courses', [CourseController::class, 'store']);
