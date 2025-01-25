<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>MaxStockx-Sign</title>
    <link href="{{ asset('assets/css/bootstrap.min.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/css/custom/cstyle.css') }}" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link rel="icon" type="image/png" href="{{ asset('assets/img/flogo.png') }}" sizes="16x16">
    <link
        href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap"
        rel="stylesheet">

    <style>
        body {
            height: 100%;
        }

        .cstm-btn-submit {
            left: 85px;
        }
    </style>
</head>

<body>

    @include('layouts.header')


    <div class="d-flex justify-content-center align-items-center vh-100">
        <div class="card p-4 shadow-lg" style="max-width: 400px; width: 100%; border-radius: 12px;">
            <!-- Display Errors -->
            @if ($errors->any())
                <div class="alert alert-danger">
                    <ul class="mb-0">
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif

            @if (session('error'))
                <div class="alert alert-danger text-center">
                    {{ session('error') }}
                </div>
                <script>
                    setTimeout(function () {
                        window.location.href = "{{ route('login') }}"; // Replace 'login' with your login route name
                    }, 1200); // 600 milliseconds = 0.6 seconds
                </script>
            @endif

            @if (session('success'))
                <div class="alert alert-success text-center">
                    {{ session('success') }}
                </div>
                <script>
                    setTimeout(function () {
                        window.location.href = "{{ route('login') }}"; // Replace 'login' with your login route name
                    }, 1200); // 600 milliseconds = 0.6 seconds
                </script>
            @endif


            <!-- Signup Form -->
            <h3 class="text-center mb-4">Signup</h3>
            <form action="{{ route('register.store') }}" method="POST">
                @csrf
                <div class="form-group mb-3">
                    <label for="name" class="form-label">Name</label>
                    <input style="transition: 0.3s" type="text" id="name" name="name" class="form-control" required
                        placeholder="Enter your name">
                </div>

                <div class="form-group mb-3">
                    <label for="username" class="form-label">Username</label>
                    <input style="transition: 0.3s" type="text" id="username" name="username" class="form-control"
                        required placeholder="Enter a username" onblur="checkFieldUniqueness('username', this.value)">
                    <div id="username-error" class="mt-2" style="color: red; display: none;">This username is already
                        taken.</div>
                </div>

                <div class="form-group mb-3">
                    <label for="email" class="form-label">Email address</label>
                    <input style="transition: 0.3s" type="email" id="email" name="email" class="form-control" required
                        placeholder="Enter your email" onblur="checkFieldUniqueness('email', this.value)">
                    <div id="email-error" class="mt-2" style="color: red; display: none;">This email is already
                        registered.</div>
                </div>

                <div class="form-group mb-3">
                    <label for="mobile_number" class="form-label">Mobile Number</label>
                    <input type="text" id="mobile_number" name="mobile_number" class="form-control" required
                        placeholder="Enter your mobile number (without +91)"
                        onblur="checkFieldUniqueness('mobile_number', this.value);">
                    <div id="mobile_number-error" class="text-danger mt-1" style="display: none;"></div>
                </div>

                <div class="form-group mb-3">
                    <label for="password" class="form-label">Password</label>
                    <input style="transition: 0.3s" type="password" id="password" name="password" class="form-control"
                        required placeholder="Enter a password" onkeyup="validatePassword(); checkPasswordMatch();">
                    <div id="password-requirements" class="mt-2" style="transition: 0.3s"></div>
                </div>
                <div class="form-group mb-3">
                    <label for="password_confirmation" class="form-label">Confirm Password</label>
                    <input style="transition: 0.3s" type="password" id="password_confirmation"
                        name="password_confirmation" class="form-control" required placeholder="Confirm your password"
                        onkeyup="checkPasswordMatch();">
                    <div id="password-match-message" class="mt-2" style="transition: 0.3s"></div>
                </div>

                <div class="form-group d-flex align-items-center mb-3">
                    <input class="form-check-input me-2" type="checkbox" value="" required style="transition: 0.3s" />
                    <label class="form-check-label mb-0" for="form2Example3" style="font-size:15px">
                        I agree to all statements in <a href="#!">Terms of service</a>
                    </label>
                </div>
                
                <button type="submit" id="submit-btn" class="btn cstm-btn cstm-btn-submit w-50"
                    disabled>Signup</button>
            </form>
            <p class="text-center mt-3">
                Already have an account? <a href="{{ route('login') }}">Login</a>
            </p>
        </div>
    </div>


    @include('layouts.footer')
    <!-- Link to the downloaded Bootstrap JS -->
    <script src="{{ asset('assets/js/bootstrap.min.js') }}"></script>

    <script>
        // Initial states for field validity
        let uniquenessStatus = {
            username: false,
            email: false,
            mobile_number: false,
            passwordValid: false, // Explicitly add this
        };

        function validatePassword() {
            const password = document.getElementById("password").value;
            const requirementsDiv = document.getElementById("password-requirements");

            // Password validation criteria
            const criteria = {
                length: password.length >= 8,
                uppercase: /[A-Z]/.test(password),
                lowercase: /[a-z]/.test(password),
                number: /\d/.test(password),
                symbol: /[@$!%*?&#]/.test(password),
            };

            // Individual messages for each password requirement
            const messages = {
                length: "At least 8 characters.",
                uppercase: "At least 1 uppercase letter.",
                lowercase: "At least 1 lowercase letter.",
                number: "At least 1 number.",
                symbol: "At least 1 symbol (e.g., @$!%*?&#).",
            };

            // Check which criteria are met and update the message
            let messageHTML = '';
            let allCriteriaMet = true;

            for (let criterion in criteria) {
                if (criteria[criterion]) {
                    messageHTML += `<span style="color:green;">✔️ ${messages[criterion]}</span><br>`;
                } else {
                    messageHTML += `<span style="color:red;">❌ ${messages[criterion]}</span><br>`;
                    allCriteriaMet = false;
                }
            }

            // Update the requirements div
            requirementsDiv.innerHTML = messageHTML;

            // Update password validation status
            uniquenessStatus.passwordValid = allCriteriaMet;

            // Update submit button state
            updateSubmitButton();
        }

        function checkFieldUniqueness(field, value) {
            const errorDiv = document.getElementById(`${field}-error`);

            // If the value is empty, reset the status and return
            if (value.trim() === '') {
                errorDiv.style.display = 'none';
                uniquenessStatus[field] = false;
                updateSubmitButton();
                return;
            }

            // Add prefix +91 for mobile_number validation
            let formattedValue = value;
            if (field === 'mobile_number') {
                formattedValue = `+91${value.trim()}`;
            }

            // Perform AJAX request
            fetch('{{ route("check.uniqueness") }}', {
                method: 'POST',
                headers: {
                    'Content-Type': 'application/json',
                    'X-CSRF-TOKEN': '{{ csrf_token() }}',
                },
                body: JSON.stringify({ field: field, value: formattedValue }),
            })
                .then(response => response.json())
                .then(data => {
                    if (data.unique) {
                        errorDiv.style.display = 'none';
                        uniquenessStatus[field] = true; // Mark as unique
                    } else {
                        errorDiv.style.display = 'block';
                        errorDiv.textContent = `This ${field} is already taken.`; // Display appropriate error
                        uniquenessStatus[field] = false; // Mark as not unique
                    }
                    updateSubmitButton(); // Update the submit button's state
                })
                .catch(error => {
                    console.error('Error:', error);
                    uniquenessStatus[field] = false; // Disable submit button on error
                    updateSubmitButton();
                });
        }

        function checkPasswordMatch() {
            const password = document.getElementById("password").value;
            const confirmPassword = document.getElementById("password_confirmation").value;
            const matchMessageDiv = document.getElementById("password-match-message");

            if (confirmPassword === "") {
                matchMessageDiv.textContent = ""; // Clear message if confirm password is empty
                uniquenessStatus.passwordValid = false;
            } else if (password === confirmPassword) {
                matchMessageDiv.textContent = "Passwords match!";
                matchMessageDiv.style.color = "green"; // Success message in green
                uniquenessStatus.passwordValid = true;
            } else {
                matchMessageDiv.textContent = "Passwords do not match!";
                matchMessageDiv.style.color = "red"; // Error message in red
                uniquenessStatus.passwordValid = false;
            }
            updateSubmitButton();
        }

        function updateSubmitButton() {
            const submitButton = document.getElementById("submit-btn");

            // Ensure all conditions are met: uniqueness checks and password validity
            const allConditionsMet = Object.values(uniquenessStatus).every(status => status);

            // Log to debug which condition might be failing
            console.log('Uniqueness Status:', uniquenessStatus);
            console.log('All conditions met:', allConditionsMet);

            submitButton.disabled = !allConditionsMet;
        }
    </script>



</body>

</html>