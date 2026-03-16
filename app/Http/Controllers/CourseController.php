<?php

namespace App\Http\Controllers;

use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use App\Models\Course;

class CourseController extends Controller
{
    public function store(Request $request)
    {
        //dd($request);

        $validated = $request->validate([
            'title' => 'required',
            'description' => 'required',
            'instructor_id' => 'required|integer',
            'category_id' => 'required|integer',
            'active' => 'required|boolean'  
    ]);


        Course::create($validated);

        return redirect('/courseadd')->with('succes', 'posted succesfully');
    }
}
