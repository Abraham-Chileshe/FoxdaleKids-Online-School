<?php

namespace App\Http\Controllers;

use App\Models\Course; // Import the Course model
use Illuminate\Http\Request;

class CourseController extends Controller
{
    public function index()
    {
        // Fetch all courses from the database
        $courses = Course::all();

        // Pass the courses data to the view
        return view('index', compact('courses'));
    }
}