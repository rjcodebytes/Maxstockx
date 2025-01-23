@extends('users.layouts.app')

<style>
    .edit-btn {
        margin-top: 20px;
        padding: 10px 20px;
        background-color: #4CAF50;
        color: white;
        border: none;
        border-radius: 5px;
        cursor: pointer;
        transition: background-color 0.3s ease;
    }

    .edit-btn:hover {
        background-color: #45a049;
    }

    .save-btn {
        padding: 10px 20px;
        background-color: #007BFF;
        color: white;
        border: none;
        border-radius: 5px;
        cursor: pointer;
        transition: background-color 0.3s ease;
    }

    .save-btn:hover {
        background-color: #0056b3;
    }

    .input-field {
        width: 100%;
        padding: 10px;
        margin: 10px 0;
        border: 1px solid #ccc;
        border-radius: 5px;
    }

    .otp-field {
        width: 100%;
        padding: 10px;
        margin: 10px 0;
        border: 1px solid #ccc;
        border-radius: 5px;
    }
</style>

@section('content')
@include('_message')
<h1 class="text-white">Profile</h1>

<!-- Profile Display Section -->
<div id="profile-section">
    <p class="text-white"><strong>Name:</strong> <span id="name-text">{{ $user->name }}</span></p>
    <p class="text-white"><strong>Email:</strong> <span id="email-text">{{ $user->email }}</span></p>
    <p class="text-white"><strong>Mobile Number:</strong> <span id="mobile-text">{{ $user->mobile_number }}</span></p>
    <p class="text-white"><strong>Email Verification Status:</strong>
        @if ($user->email_verified_at)
            <span style="color: green;">Verified</span>
        @else
            <span style="color: red;">Not Verified</span>
        @endif
    </p>

    <button id="edit-profile-btn" class="edit-btn">Update Profile</button>
</div>

<!-- Profile Edit Section (Hidden by Default) -->
<div id="edit-section" style="display: none;">
    <form action="{{ route('user.send.link') }}" method="POST">
        @csrf
        @method('PUT')

        <label for="name" class="text-white">Name:</label>
        <input type="text" name="name" id="name-input" class="input-field" value="{{ $user->name }}">

        <label for="email" class="text-white">Email:</label>
        <input type="email" name="email" id="email-input" class="input-field" value="{{ $user->email }}">

        <label for="mobile_number" class="text-white">Mobile Number:</label>
        <input type="text" name="mobile_number" id="mobile-input" class="input-field" value="{{ $user->mobile_number }}"
            placeholder="+91XXXXXXXXXX">

        <button type="submit" class="save-btn">Send Verification Link</button>
    </form>
</div>

<!-- OTP Verification Section (Hidden by Default) -->
<div id="otp-section" style="{{ session('showOtpSection') ? 'display: block;' : 'display: none;' }}">
    <h2 class="text-white">Verify Your New Email</h2>
    <form action="{{ route('user.verify.new.email') }}" method="POST">
        @csrf
        <label for="otp" class="text-white">Enter OTP:</label>
        <input type="text" name="otp" id="otp-input" class="otp-field" placeholder="Enter OTP">
        <button type="submit" class="save-btn">Verify Email</button>
    </form>
</div>


<script>
    // Toggle edit section
    document.getElementById('edit-profile-btn').addEventListener('click', function () {
        document.getElementById('profile-section').style.display = 'none';
        document.getElementById('edit-section').style.display = 'block';
    });
</script>
@endsection