@extends('admin.layouts.app')

<style>
    .course-bx {
        max-height: 80vh;
        overflow-y: scroll;
    }
</style>

@section('content')

<div class="container course-bx">
    <h2 class="text-white">Edit Courses</h2>
    <a href="{{url('/admin/createcourses')}}" class="btn btn-primary mb-3">Add New Course</a>

    @if(session('success'))
        <div class="alert alert-success">{{ session('success') }}</div>
    @endif

    <div class="container">
        <h2 class="text-white">Edit Course: {{ $course->course_name }}</h2>

        @if($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif

        <!-- Edit Course Form -->
        <form action="{{ route('admin.updatecourse', $course->course_id) }}" method="POST">
            @csrf
            <div class="mb-3">
                <label for="course_name" class="form-label text-white">Course Name</label>
                <input type="text" class="form-control" id="course_name" name="course_name"
                    value="{{ $course->course_name }}" required>
            </div>

            <div class="mb-3">
                <label for="course_description" class="form-label text-white">Course Description</label>
                <textarea class="form-control" id="course_description" name="course_description" rows="4"
                    required>{{ $course->course_description }}</textarea>
            </div>

            <div class="mb-3">
                <label for="course_pricing" class="form-label text-white">Course Pricing</label>
                <input type="number" class="form-control" id="course_pricing" name="course_pricing" step="0.01"
                    value="{{ $course->course_pricing }}" required>
            </div>

            <button type="submit" class="btn btn-warning">Update Course</button>
            <a {{--href="{{ route('courses.index') }}" --}}class="btn btn-secondary">Cancel</a>
        </form>

        <hr>

        <!-- Add Course Content Form -->
        <h3 class="text-white">Add Content to: {{ $course->course_name }}</h3>
        <form action="{{ route('admin.storeContent', $course->course_id) }}" method="POST"
            enctype="multipart/form-data">
            @csrf
            <div class="mb-3">
                <label for="course_content" class="form-label text-white">Content Title</label>
                <input type="text" class="form-control" id="course_content" name="course_content" required>
            </div>

            <div class="mb-3">
                <label class="form-label text-white">Content Type</label>
                <div>
                    <input type="radio" id="video" name="content_type" value="video" required>
                    <label for="video" class="text-white">Video</label>
                    <input type="radio" id="pdf" name="content_type" value="pdf">
                    <label for="pdf" class="text-white">PDF</label>
                </div>
            </div>

            <div class="mb-3 video-content d-none">
                <label for="video_link_content" class="form-label text-white">Video Link</label>
                <input type="url" class="form-control" id="video_link_content" name="video_link_content">
            </div>

            <div class="mb-3 pdf-content d-none">
                <label for="pdf_content" class="form-label">Upload PDF</label>
                <input type="file" class="form-control" id="pdf_content" name="pdf_content" accept="application/pdf">
            </div>

            <button type="submit" class="btn btn-primary">Save Content</button>
        </form>

        <!-- Existing Content List -->
        <h3 class="mt-4 text-white">Existing Contents</h3>
        <table class="table table-bordered">
            <thead>
                <tr>
                    <th>Title</th>
                    <th>Type</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>
                @forelse($contents as $content)
                    <tr>
                        <td>{{ $content->course_content }}</td>
                        <td>{{ $content->video_link_content ? 'Video' : 'PDF' }}</td>
                        <td>
                            {{--{{ route('contents.destroy', $content->id) }--}}
                            <form action="#" method="POST"
                                style="display: inline;">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-sm btn-danger"
                                    onclick="return confirm('Are you sure?')">Delete</button>
                            </form>
                        </td>
                    </tr>
                @empty
                    <tr>
                        <td colspan="3" class="text-center">No content added yet.</td>
                    </tr>
                @endforelse
            </tbody>
        </table>

    </div>

    <script>
        // Show/Hide fields based on content type selection
        document.querySelectorAll('input[name="content_type"]').forEach(radio => {
            radio.addEventListener('change', () => {
                document.querySelector('.video-content').classList.toggle('d-none', radio.value !== 'video');
                document.querySelector('.pdf-content').classList.toggle('d-none', radio.value !== 'pdf');
            });
        });
    </script>
</div>

@endsection