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
            'course_thumbnail' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048', // Validate image
            'whatsapp_link' => 'nullable|url|max:255' // Validate URL
        ]);

        // Store the uploaded image as binary data
        $thumbnail = $request->file('course_thumbnail')->getContent();

        // Create the course
        Course::create([
            'course_name' => $request->course_name,
            'course_description' => $request->course_description,
            'course_pricing' => $request->course_pricing,
            'course_thumbnail' => $thumbnail,
            'whatsapp_link' => $request->whatsapp_link,
        ]);

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
            'course_thumbnail' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048', // Validate the image (optional)
            'whatsapp_link' => 'nullable|url|max:255' // Validate WhatsApp link
        ]);

        $course = Course::findOrFail($id);

        // Update course data
        $data = $request->only('course_name', 'course_description', 'course_pricing','whatsapp_link');

        // If a new thumbnail is uploaded, store it as binary
        if ($request->hasFile('course_thumbnail')) {
            $data['course_thumbnail'] = $request->file('course_thumbnail')->getContent();
        }

        $course->update($data);

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

    public function addContent($courseId){
        $course = Course::with('contents')->findOrFail($courseId);
        $contents = $course->contents; // Extract contents
        return view('admin.managecourses.addcontent', compact('course','contents'));
    }

    public function destroyContent($id)
    {
        $content = CourseContent::findOrFail($id);
        $content->delete();

        return back()->with('success', 'Content deleted successfully.');
    }

}