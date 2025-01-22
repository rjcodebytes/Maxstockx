@extends('admin.layouts.app')

<style>
    .course-bx {
        max-height: 80vh;
        overflow-y: scroll;
    }
</style>


@section('content')
@include('_message')
<div class="container course-bx">
    <h2 class="text-white">Add Content for: {{ $course->course_name }}</h2>

    @if($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <form action="{{ route('admin.storeContent', $course->course_id) }}" method="POST" enctype="multipart/form-data">
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
            <label for="pdf_content" class="form-label text-white">Upload PDF</label>
            <input type="file" class="form-control" id="pdf_content" name="pdf_content" accept="application/pdf">
        </div>

        <button type="submit" class="btn btn-primary ">Add Content</button>
        <a {{--href="{{ route('courses.index') }}" --}} class="btn btn-secondary">Cancel</a>
    </form>

    <!-- Existing Content List -->
    @if ($contents->isNotEmpty())
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
                @foreach($contents as $content)
                    <tr>
                        <td>{{ $content->course_content }}</td>
                        <td>{{ $content->video_link_content ? 'Video' : 'PDF' }}</td>
                        <td>

                            <form action="{{ route('admin.deletecontent', $content->id) }}" method="POST"
                                style="display: inline;">
                                @csrf
                                <button type="submit" class="btn btn-sm btn-danger"
                                    onclick="return confirm('Are you sure?')">Delete</button>
                            </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    @else
        <h3 class="text-white">No Content Found</h3>
    @endif
</div>

<script>
    document.querySelectorAll('input[name="content_type"]').forEach(radio => {
        radio.addEventListener('change', () => {
            document.querySelector('.video-content').classList.toggle('d-none', radio.value !== 'video');
            document.querySelector('.pdf-content').classList.toggle('d-none', radio.value !== 'pdf');
        });
    });
</script>
@endsection