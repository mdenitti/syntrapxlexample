<?php

namespace App\Http\Controllers;

use App\Models\Course;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;

class CourseController extends Controller
{
    public function store(Request $request): RedirectResponse
    {
        Course::create([
            'title' => $request->title,
            'description' => $request->description,
            'instructor_id' => $request->instructor_id,
            'category_id' => $request->category_id,
            'active' => $request->has('active') ? 1 : 0,
        ]);

        return redirect('/courseadd')->with('succes', 'posted succesfully');
    }
}
