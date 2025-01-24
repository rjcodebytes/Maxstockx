@extends('users.layouts.app')

@section('content')
<div class="container">
    <h1 class="text-white">Enrolled Courses</h1>

    @if ($enrolledCourses->isEmpty())
        <p class="text-white">You are not enrolled in any courses.</p>
        <a href="{{route('course.explore')}}" class="btn btn-primary">View Courses</a>
    @else
        @foreach ($enrolledCourses as $enrollment)
            <img src="data:image/jpeg;base64,{{ base64_encode($enrollment->course->course_thumbnail) }}" class="card-img-top"
                alt="Course" style="width: 300px; height: 200px; ">
            <h3 class="text-white">{{ $enrollment->course->course_name }}</h3>
            <p class="text-white">{{ $enrollment->course->course_description }}</p>
            <a href="{{ route('course.access', $enrollment->course->course_id) }}" class="btn btn-primary">Go to
                Course</a>
        @endforeach
    @endif
</div>
@endsection