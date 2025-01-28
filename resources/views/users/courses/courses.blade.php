@extends('users.layouts.app')

@section('content')
<h1 class="text-white  mb-4">Explore Courses</h1>
<div class="scroll-container">
    @foreach($courses as $course)
        <div class="card course-card mx-2">
            @if($course->course_thumbnail)
                <img src="data:image/jpeg;base64,{{ base64_encode($course->course_thumbnail) }}" class="card-img-top"
                    alt="Course">
            @else
                <img src="{{ asset('assets/img/course.png') }}" class="card-img-top" alt="Course">
            @endif
            <div class="card-body ">
                <h6 class="card-title">{{ $course->course_name }}</h6>
                <p class="card-text text-muted small">
                    {{ Str::limit($course->course_description, 40, '...') }}
                </p>
                <p class="card-text small mb-2">Pricing : {{$course->course_pricing}}</p>
                <a href="{{ route('course.details', $course->course_id) }}" class="btn btn-sm btn-primary">Learn
                    More</a>
            </div>
        </div>
    @endforeach
</div>
@endsection

<style>
    .scroll-container {
        display: flex;
        overflow-x: scroll;
        gap: 10px;
        padding: 10px;
    }

    .scroll-container::-webkit-scrollbar {
        height: 8px;
        /* Height of the scrollbar */
    }

    .scroll-container::-webkit-scrollbar-thumb {
        background: #888;
        /* Scrollbar thumb color */
        border-radius: 4px;
    }

    .scroll-container::-webkit-scrollbar-thumb:hover {
        background: #555;
        /* Thumb color on hover */
    }

    .course-card {
        width: 200px;
        /* Fixed width for consistent card size */
        flex-shrink: 0;
        /* Prevent shrinking when scrolling */
        border-radius: 8px;
        overflow: hidden;
        box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
    }

    .card-img-top {
        height: 100px;
        /* Smaller image height */
        object-fit: cover;
    }

    .card-body {
        padding: 10px;
    }

    .card-title {
        font-size: 14px;
        font-weight: 600;
    }

    .card-text {
        font-size: 12px;
    }

    .btn-primary {
        font-size: 12px;
        padding: 5px 10px;
    }

    @media only screen and (max-width: 400px) {
        .scroll-container {
            width: 300px;
        }
    }
</style>