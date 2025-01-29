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

    <p class="text-white">
        <strong>Email Verification Status:</strong>
        <span id="emailStatus" style="font-weight: bold;">
            <span style="color: gray;">Checking...</span>
        </span>
    </p>

    @if (!Auth::user()->email_verified_at)
        <button class="btn btn-primary" id="sendOtpBtn">
            <span id="sendOtpText">Send OTP</span>
            <span id="loadingSpinner" class="spinner-border spinner-border-sm text-success"
                style="display: none; border-width: 2px;"></span>
        </button>
        <p id="otpMessage" style="color: green; display: none;"></p>

        <div id="otpSection" style="display: none;">
            <input type="text" id="otpInput" class="form-control mt-2" placeholder="Enter OTP">
            <button class="btn btn-success mt-2" id="verifyOtpBtn">Verify OTP</button>
            <p id="verifyMessage" style="color: red; display: none;"></p>
        </div>
    @endif

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

<script>
    function checkEmailStatus() {
        fetch("{{ route('check.email.status') }}")
            .then(response => response.json())
            .then(data => {
                let statusElement = document.getElementById('emailStatus');
                if (data.verified) {
                    statusElement.innerHTML = `<span style="color: green;">Verified</span>`;
                } else {
                    statusElement.innerHTML = `<span style="color: red;">Not Verified</span>`;
                }
            })
            .catch(error => console.error("Error fetching email status:", error));
    }

    setInterval(checkEmailStatus, 5000);
    checkEmailStatus();

    document.getElementById('sendOtpBtn').addEventListener('click', function () {
        let button = this;
        let spinner = document.getElementById('loadingSpinner');

        button.disabled = true;
        spinner.style.display = "inline-block";

        fetch("{{ route('send.otp') }}", {
            method: "POST",
            headers: {
                "X-CSRF-TOKEN": "{{ csrf_token() }}",
                "Content-Type": "application/json",
            },
            body: JSON.stringify({})
        })
            .then(response => response.json())
            .then(data => {
                spinner.style.display = "none";
                document.getElementById('otpMessage').innerText = data.message;
                document.getElementById('otpMessage').style.display = "block";

                activateOtpInput(60); // ⏳ 1 Minute (60 Seconds)
                disableOtpButton(60); // ⏳ Disable button for 1 Minute
            })
            .catch(error => {
                button.disabled = false;
                spinner.style.display = "none";
                console.error("Error:", error);
            });
    });

    function disableOtpButton(seconds) {
        let button = document.getElementById('sendOtpBtn');
        let sendOtpText = document.getElementById('sendOtpText');

        let targetTime = Date.now() + seconds * 1000;
        localStorage.setItem('otpDisableUntil', targetTime);

        function updateCountdown() {
            let remaining = Math.max(0, Math.floor((targetTime - Date.now()) / 1000));
            if (remaining > 0) {
                button.disabled = true;
                sendOtpText.innerText = `Wait ${remaining}s`;
                setTimeout(updateCountdown, 1000);
            } else {
                button.disabled = false;
                sendOtpText.innerText = "Send OTP";
                localStorage.removeItem('otpDisableUntil');
            }
        }

        updateCountdown();
    }

    function activateOtpInput(seconds) {
        let targetTime = Date.now() + seconds * 1000;
        localStorage.setItem('otpActiveUntil', targetTime);

        let otpSection = document.getElementById('otpSection');
        let otpInput = document.getElementById('otpInput');
        let verifyOtpBtn = document.getElementById('verifyOtpBtn');

        otpSection.style.display = "block";
        otpInput.disabled = false;
        verifyOtpBtn.disabled = false;

        function checkOtpExpiration() {
            let remaining = Math.max(0, Math.floor((targetTime - Date.now()) / 1000));
            if (remaining > 0) {
                setTimeout(checkOtpExpiration, 1000);
            } else {
                otpInput.disabled = true;
                verifyOtpBtn.disabled = true;
                localStorage.removeItem('otpActiveUntil');
            }
        }

        checkOtpExpiration();
    }

    function checkOtpButtonStatus() {
        let storedTime = localStorage.getItem('otpDisableUntil');
        if (storedTime) {
            let remaining = Math.floor((storedTime - Date.now()) / 1000);
            if (remaining > 0) {
                disableOtpButton(remaining);
            }
        }
    }

    function checkOtpInputStatus() {
        let storedTime = localStorage.getItem('otpActiveUntil');
        if (storedTime) {
            let remaining = Math.floor((storedTime - Date.now()) / 1000);
            if (remaining > 0) {
                activateOtpInput(remaining);
            }
        }
    }

    checkOtpButtonStatus();
    checkOtpInputStatus();

    document.getElementById('verifyOtpBtn').addEventListener('click', function () {
        let otp = document.getElementById('otpInput').value;
        let verifyMessage = document.getElementById('verifyMessage');

        fetch("{{ route('verify.otp') }}", {
            method: "POST",
            headers: {
                "X-CSRF-TOKEN": "{{ csrf_token() }}",
                "Content-Type": "application/json",
            },
            body: JSON.stringify({ otp: otp })
        })
            .then(response => response.json())
            .then(data => {
                if (data.message.includes("successfully")) {
                    verifyMessage.style.color = "green";
                    verifyMessage.innerText = data.message;
                    verifyMessage.style.display = "block";
                    setTimeout(() => {
                        window.location.href = "/users/dashboard";
                    }, 1500);
                } else {
                    verifyMessage.style.color = "red";
                    verifyMessage.innerText = data.message;
                    verifyMessage.style.display = "block";
                }
            })
            .catch(error => console.error("Error:", error));
    });
</script>

@endsection