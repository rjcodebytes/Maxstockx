@extends('users.layouts.app')

<style>
    .video-container {
        position: relative;
        margin-top: 10px;
        border: 1px solid #ccc;
        padding: 10px;
        background-color: #000;
    }

    .video-iframe {
        width: 100%;
        height: 400px;
    }

    /* Transparent overlay to block right-click */
    .video-overlay {
        position: absolute;
        top: 0;
        left: 0;
        right: 0;
        bottom: 80px;
        /* Leave space for bottom controls */
        background: rgba(0, 0, 0, 0.5);
        /* Fully transparent */
        pointer-events: all;
        /* Block interactions (right-click) */
    }

    /* Hide the overlay when the video is played or hovered over */


    .btn-primary {
        background-color: #007bff;
        color: #fff;
        border: none;
        padding: 8px 12px;
        cursor: pointer;
    }

    .btn-primary:hover {
        background-color: #0056b3;
    }

    .container {
        height: 500px;
    }
</style>

@section('content')

@if (session('success'))
    <div class="alert alert-success">
        {{ session('success') }}
    </div>
@endif

@if (session('error'))
    <div class="alert alert-danger">
        {{ session('error') }}
    </div>
@endif

<div class="container overflow-y-scroll">
    <h1 class="text-white">{{ $course->course_name }}</h1>
    <img src="data:image/jpeg;base64,{{ base64_encode($course->course_thumbnail) }}" class="card-img-top" alt="Course"
        style="width: 300px; height: 200px; ">
    <p class="text-white mt-2">{{ $course->course_description }}</p>
    <p class="text-white">Pricing : {{ $course->course_pricing }}</p>

    <h3 class="text-white">Course Contents:</h3>

    @if($course->contents->where('video_link_content', '!=', null)->count() > 0)
        <h4 class="text-white">Video Content</h4>
        <ul>
            @foreach($course->contents as $content)
                @if(!empty($content->video_link_content))
                    <li class="text-white">
                        {{ $content->course_content }}:
                        <button class="btn btn-primary" onclick="toggleVideo('{{ $content->id }}')">Play Video</button>

                        <!-- Video container with right-click prevention condition -->
                        <div id="video-container-{{ $content->id }}" class="video-container" style="display: none;">

                            <!-- YouTube iframe -->
                            <iframe id="video-player-{{ $content->id }}"
                                src="{{ str_replace('youtu.be/', 'www.youtube.com/embed/', $content->video_link_content) }}?enablejsapi=1&modestbranding=1&rel=0"
                                frameborder="0" allow="autoplay; encrypted-media" allowfullscreen class="video-iframe"></iframe>

                            <!-- Transparent overlay to block right-click -->
                            <div class="video-overlay"></div>
                        </div>
                    </li>
                @endif
            @endforeach
        </ul>
    @endif

    @if($course->contents->where('pdf_content', '!=', null)->count() > 0)
        <h4 class="text-white">PDF Content</h4>
        <ul>
            @foreach($course->contents as $content)
                @if(!empty($content->pdf_content))
                    <li class="text-white">
                        {{ $content->course_content }}: <a href="{{ route('pdf.view', $content->id) }}" target="_blank">View PDF</a>
                    </li>
                @endif
            @endforeach
        </ul>
    @endif
    {{-- Check if the user is already enrolled --}}
    @if ($isEnrolled)
        <a href="{{ route('course.access', $course->course_id) }}" class="btn btn-primary">Already Enrolled - Go to
            Course</a>
    @else
        <a href="{{ route('course.enroll', $course->course_id) }}"class="btn btn-success">Enroll Now</a>
    @endif
</div>
@endsection

<script src="https://www.youtube.com/iframe_api"></script>
<script>

    let players = {};

    // Initialize YouTube API Player
    function onYouTubeIframeAPIReady() {
        @foreach($course->contents as $content)
            players['{{ $content->id }}'] = new YT.Player('video-player-{{ $content->id }}', {
                events: {
                    onReady: function (event) {
                        console.log('Player {{ $content->id }} is ready');
                    }
                }
            });
        @endforeach
    }

    // Toggle Video Section
    function toggleVideo(id) {
        const container = document.getElementById(`video-container-${id}`);
        if (container.style.display === "none") {
            container.style.display = "block";
        } else {
            container.style.display = "none";
            players[id].pauseVideo(); // Pause video when closing the dropdown
        }
    }
</script>