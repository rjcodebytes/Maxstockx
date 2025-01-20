@extends('admin.layouts.app')

@section('content')
<div class="container">
    <h2 class="text-white">Add New Course</h2>

    @if($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <form action="{{ route('admin.storecourse') }}" method="POST">
        @csrf
        <div class="mb-3">
            <label for="course_name" class="form-label text-white">Course Name</label>
            <input type="text" class="form-control" id="course_name" name="course_name" required>
        </div>

        <div class="mb-3">
            <label for="course_description" class="form-label text-white">Course Description</label>
            <textarea class="form-control" id="course_description" name="course_description" rows="4" required></textarea>
        </div>

        <div class="mb-3">
            <label for="course_pricing" class="form-label text-white">Course Pricing</label>
            <input type="number" class="form-control" id="course_pricing" name="course_pricing" step="0.01" required>
        </div>

        <button type="submit" class="btn btn-primary">Create Course</button>
        <a href="{{ route('admin.managecourse') }}" class="btn btn-secondary">Cancel</a>
    </form>
</div>

@endsection