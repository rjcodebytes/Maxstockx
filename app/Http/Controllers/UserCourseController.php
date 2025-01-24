<?php
namespace App\Http\Controllers;
use App\Models\Course;
use App\Models\CourseContent;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class UserCourseController extends Controller
{
    public function viewcourse()
    {
        $courses = Course::all(); // Fetch all courses from the database
        return view('users.courses.courses', compact('courses'));
    }

    public function viewCourseDetails($id)
    {
        $course = Course::with('contents')->findOrFail($id); // Fetch the course with its content
        return view('users.courses.course_details', compact('course'));
    }

}