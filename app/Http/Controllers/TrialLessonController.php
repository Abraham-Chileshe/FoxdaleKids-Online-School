<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\TrialLesson;
use Illuminate\Support\Facades\Session;

class TrialLessonController extends Controller
{
    public function store(Request $request)
    {
        // Validate the request
        $request->validate([
            'child_full_name' => 'required|string|max:255',
            'guardian_name' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'phone' => 'required|string|max:20',
            'child_age' => 'required|string|max:10',
            'course_id' => 'required|exists:courses,id',
            'country' => 'required|string|max:255', // Add this validation
            'prior_experience' => 'required|boolean',
        ]);

        // Store the data in the database
        TrialLesson::create([
            'child_full_name' => $request->child_full_name,
            'guardian_name' => $request->guardian_name,
            'email' => $request->email,
            'phone' => $request->phone,
            'child_age' => $request->child_age,
            'course_id' => $request->course_id,
            'country' => $request->country, // Save the country
            'prior_experience' => $request->prior_experience,
        ]);

        // Flash a success message
        Session::flash('success', 'Your free trial lesson registration was successful!');

        // Redirect back or to a specific route
        return redirect()->back();
    }
}