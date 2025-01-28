@extends('users.layouts.app')
<style>

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

<h1 class=" text-white">Welcome, Future Trader</h1>
@endsection