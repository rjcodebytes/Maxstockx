@extends('admin.layouts.app')

@section('content')
@include('_message')
<div class="container">
    <h2 class="text-white">Manage Courses</h2>
    <a href="{{url('/admin/createcourses')}}" class="btn btn-primary mb-3">Add New Course</a>

    @if($courses->isNotEmpty())
        <table class="table table-bordered">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Course Name</th>
                    <th>Description</th>
                    <th>Pricing</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>
                @foreach($courses as $course)
                    <tr>
                        <td>{{ $course->course_id }}</td>
                        <td>{{ $course->course_name }}</td>
                        <td>{{ $course->course_description }}</td>
                        <td>₹ {{ number_format($course->course_pricing, 2) }}</td>
                        <td>
                            <a href="{{ route('admin.addcontent', $course->course_id) }}" class="btn btn-sm btn-success">Add Content</a>
                            <a href="{{route('admin.editcourse', $course->course_id)}}" class="btn btn-sm btn-warning">Edit Course</a>
                            <form action="{{ route('admin.deletecourse', $course->course_id) }}" method="POST" style="display: inline;">
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
        <h3 class="text-white">No Courses Found</h3>
    @endif

</div>

@endsection