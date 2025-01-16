@extends('dashboards.layouts.app')
<style>

</style>
@section('course')

<h1 class="text-white">Courses Enrolled</h1>
<div class="d-flex">
    <div class="col-md-4 mx-1 cc card course-card" style="transition:.6s;scale:.8">
        <img src="{{ asset('assets/img/course.png') }}" class="card-img-top" alt="Course">
        <div class="card-body">
            <h5 class="card-title">Course Title 1</h5>
            <p class="card-text">Some quick example text to build on the card title and content.</p>
            <a href="#" class="btn btn-primary">Learn More</a>
        </div>
    </div>

    <div class="col-md-4 mx-1 cc card course-card" style="transition:.6s;scale:.8">
        <img src="{{ asset('assets/img/course.png') }}" class="card-img-top" alt="Course">
        <div class="card-body">
            <h5 class="card-title">Course Title 1</h5>
            <p class="card-text">Some quick example text to build on the card title and content.</p>
            <a href="#" class="btn btn-primary">Learn More</a>
        </div>
    </div>
</div>
@endsection