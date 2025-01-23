@extends('users.layouts.app')
<style>

</style>
@section('content')
@if(session('success'))
    <div class="alert alert-success w-50">
        <h2 class="">{{ session('success') }}</h2>
    </div>
   
@endif

<h1 class=" text-white"> hello</h1>
@endsection