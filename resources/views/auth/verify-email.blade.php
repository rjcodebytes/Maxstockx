@extends('layouts.app')

@section('content')
<div class="container">
    <!-- Display the session message -->
    @if (session('success'))
        <div class="alert alert-success">
            {{ session('success') }}
        </div>
    @elseif (session('error'))
        <div class="alert alert-danger">
            {{ session('error') }}
        </div>
    @endif
    <h2 class="text-white">Email Verification Required</h2>
    <p class="text-white">Please check your email and click on the verification link to verify your account.</p>
    <form method="POST" action="{{ route('verification.send') }}">
        @csrf
        <button type="submit" class="btn btn-primary">Resend Verification Email</button>
    </form>
</div>
@endsection