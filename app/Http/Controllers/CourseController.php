<?php
namespace App\Http\Controllers;
use App\Models\Course;
use App\Models\CourseContent;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class CourseController extends Controller{

    public function managecourse(){
        $courses = Course::with('contents')->get();
        return view('admin.managecourses.managecourse', compact('courses'));
    }

    public function createcourse(){
        return view('admin.managecourses.createcourse');
    }

    public function store(Request $request)
    {
        $request->validate([
            'course_name' => 'required|string|max:255',
            'course_description' => 'required',
            'course_pricing' => 'required|numeric',
        ]);

        Course::create($request->only('course_name', 'course_description', 'course_pricing'));
        return redirect()->route('admin.managecourse')->with('success', 'Course created successfully.');
    }
    
}