<?php

use App\Http\Controllers\CourseController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/courseadd', function () {
    return view('addCourse');
});

Route::post('/courses', [CourseController::class, 'store']);
