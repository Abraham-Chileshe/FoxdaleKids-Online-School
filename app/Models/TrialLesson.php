<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TrialLesson extends Model
{
    use HasFactory;

    // Define the table name if it's not the plural of the model name
    protected $table = 'trial_lessons';

    // Allow mass assignment for these fields
    protected $fillable = [
        'child_full_name',
        'guardian_name',
        'email',
        'phone',
        'child_age',
        'course_id',
        'country',
        'prior_experience',
    ];

    // Define any relationships if needed
    public function course()
    {
        return $this->belongsTo(Course::class);  // Assuming you have a Course model
    }
}
