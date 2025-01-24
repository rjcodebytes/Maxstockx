<?php
namespace App\Http\Controllers;
use App\Models\Course;
use App\Models\EnrolledCourse;
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

        $isEnrolled = EnrolledCourse::where('course_id', $id)
            ->where('user_id', auth()->user()->user_id)
            ->exists();

        return view('users.courses.course_details', compact('course', 'isEnrolled'));
    }

    public function accessCourse($id)
    {
        $userId = auth()->user()->user_id;

        // Check if the user is enrolled in the course
        $isEnrolled = EnrolledCourse::where('course_id', $id)
            ->where('user_id', $userId)
            ->exists();

        if (!$isEnrolled) {
            // Redirect back with an error message if the user is not enrolled
            return redirect()->route('course.details', ['id' => $id])
                ->with('error', 'You are not enrolled in this course.');
        }

        // Fetch the course details for enrolled users
        $course = Course::with('contents')->findOrFail($id);

        return view('users.courses.coursesaccess', compact('course'));
    }

    public function enrolledCourses()
    {
        $userId = auth()->user()->user_id; // Get the authenticated user's ID

        // Fetch all courses the user is enrolled in
        $enrolledCourses = EnrolledCourse::where('user_id', $userId)
            ->with('course') // Assuming there's a relationship defined in EnrolledCourse
            ->get();

        return view('users.courses.coursesenroll', compact('enrolledCourses'));
    }

}