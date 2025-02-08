@extends('users.layouts.app')
<style>
    .card {
        background: linear-gradient(#114300 0%,
                #0D3600 50%,
                #000000 75%,
                #1F1F1F 100%) !important;

        border-bottom: 2px solid #17fd4c !important;
        box-shadow: 0px 27px 50px -35px #8FE273 !important;
    }

    .course-card {
        width: 180px;
        flex-shrink: 0;
        border-radius: 8px;
        overflow: hidden;
    }

    .card-img-top {
        display: none;
        border-bottom-left-radius: var(--bs-card-inner-border-radius);
        border-bottom-right-radius: var(--bs-card-inner-border-radius);
        height: 100px;
        object-fit: cover;
    }

    .image-loader {
        width: 100%;
        height: 100px;
        background: linear-gradient(100deg, #154f28 40%, #17fd4c 50%, #154f28 60%);
        background-size: 200% 100%;
        animation: shimmer 1.5s infinite linear;
        border-radius: 10px;
    }

    @keyframes shimmer {
        0% {
            background-position: -200% 0;
        }

        100% {
            background-position: 200% 0;
        }
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

    @media only screen and (max-width: 767px) {
        .scroll-container {
            width: 200px;
        }

        .crd-btn {
            width: 100px !important;
        }
    }
</style>
@section('content')
<div class="container">
    <h1 class="text-white">Enrolled Courses</h1>

    @if ($enrolledCourses->isEmpty())
        <p class="text-white">You are not enrolled in any courses.</p>
        <a href="{{route('course.explore')}}" class="btn btn-primary">View Courses</a>
    @else
        @foreach ($enrolledCourses as $enrollment)
            {{--<img src="data:image/jpeg;base64,{{ base64_encode($enrollment->course->course_thumbnail) }}"
                class="card-img-top" alt="Course" style="width: 300px; height: 200px; ">
            <h3 class="text-white">{{ $enrollment->course->course_name }}</h3>
            <p class="text-white">{{ $enrollment->course->course_description }}</p>
            <a href="{{ route('course.access', $enrollment->course->course_id) }}" class="btn btn-primary">Go to
                Course</a>--}}

            <div class="card course-card mx-2 px-2 py-2 position-relative">
                <div class="image-loader shimmer"></div> <!-- Glass shine loader -->
                <img src="data:image/jpeg;base64,{{ base64_encode($enrollment->course->course_thumbnail) }}"
                    class="card-img-top loaded-image" alt="Course" onload="setTimeout(() => removeLoader(this), 2000)">
                <div class="card-body px-1">
                    <h6 class="card-title text-white">{{ $enrollment->course->course_name }}</h6>
                    <p class="card-text text-gray small">
                        {{ Str::limit($enrollment->course->course_description, 40, '...') }}
                    </p>
                    <p class="card-text small">Pricing : {{ $enrollment->course->course_pricing }}</p>
                    <a href="{{ route('course.access', $enrollment->course->course_id) }}" class="crd-btn btn-sm btn-primary">Go to
                        Course</a>
                </div>
            </div>
        @endforeach
    @endif
</div>
@endsection

<script>
    function removeLoader(img) {
        img.style.display = "block";
        img.previousElementSibling.style.display = "none"; // Hide the loader
    }
</script>