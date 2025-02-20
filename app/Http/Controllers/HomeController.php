<?php

namespace App\Http\Controllers;
use App\Models\Course;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        // Fetch all courses from the database
        $courses = Course::all();

        // Pass the courses data to the view
        return view('index', compact('courses'));
    }
}
