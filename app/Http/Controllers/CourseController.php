<?php
namespace App\Http\Controllers;
use App\Models\Course;
use App\Models\CourseContent;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class CourseController extends Controller
{

    public function managecourse()
    {
        $courses = Course::with('contents')->get();
        return view('admin.managecourses.managecourse', compact('courses'));
    }

    public function createcourse()
    {
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

    public function destroy($id)
    {
        $course = Course::findOrFail($id);
        $course->delete();

        return redirect()->route('admin.managecourse')->with('success', 'Course deleted successfully.');
    }

    public function edit($id)
    {
        $course = Course::with('contents')->findOrFail($id);
        $contents = $course->contents; // Extract contents
        return view('admin.managecourses.editcourse', compact('course', 'contents'));
    
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'course_name' => 'required|string|max:255',
            'course_description' => 'required',
            'course_pricing' => 'required|numeric',
        ]);

        $course = Course::findOrFail($id);
        $course->update($request->only('course_name', 'course_description', 'course_pricing'));

        return redirect()->route('admin.managecourse')->with('success', 'Course updated successfully.');
    }

    public function storeContent(Request $request, $courseId)
    {
        $request->validate([
            'course_content' => 'required|string|max:255',
            'content_type' => 'required|in:video,pdf',
            'video_link_content' => 'nullable|required_if:content_type,video|url',
            'pdf_content' => 'nullable|required_if:content_type,pdf|mimes:pdf|max:2048',
        ]);

        $data = [
            'course_id' => $courseId,
            'course_content' => $request->course_content,
            'video_link_content' => $request->video_link_content,
        ];

        if ($request->content_type === 'pdf') {
            $data['pdf_content'] = file_get_contents($request->file('pdf_content'));
        }

        CourseContent::create($data);
        return redirect()->route('admin.managecourse')->with('success', 'Content added successfully.');
    }

}