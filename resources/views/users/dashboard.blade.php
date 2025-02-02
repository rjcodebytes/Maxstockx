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

@php
    $user = Auth::user();
@endphp

@if (!$user->email_verified_at)
    <div class="alert alert-warning mt-3">
        Your email is <strong>not verified!</strong> 
        Please verify your email. 
        <a href="{{ route('users.Profile') }}" class="btn btn-sm btn-primary">Go to Profile</a>
    </div>
@endif

<h1 class=" text-white">Welcome, Future Trader</h1>
@endsection