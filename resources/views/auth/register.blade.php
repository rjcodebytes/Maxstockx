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
    </style>
</head>

<body>

    @include('layouts.header')
    @include('_message')
    <div class="container mt-5">
        <div class="row justify-content-center">
            <div class="col-md-6">
                @if ($errors->any())
                    <div class="alert alert-danger">
                        <ul>
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif

                <h2 class="text-center mb-4">Signup</h2>
                <form action="{{ route('register.store') }}" method="POST">
                    @csrf
                    <div class="mb-3">
                        <label for="name" class="form-label">Name</label>
                        <input type="text" class="form-control" id="name" name="name" required>
                    </div>
                    <div class="mb-3">
                        <label for="username" class="form-label">Username</label>
                        <input type="text" class="form-control" id="username" name="username" required>
                    </div>
                    <div class="mb-3">
                        <label for="email" class="form-label">Email address</label>
                        <input type="email" class="form-control" id="email" name="email" required>
                    </div>
                    <div class="mb-3">
                        <label for="password" class="form-label">Password</label>
                        <input type="password" class="form-control" id="password" name="password" required
                            onkeyup="validatePassword(); checkPasswordMatch();">
                        <div id="password-requirements" class="mb-2 mt-2" style="transition: 0.3s"></div>
                    </div>
                    <div class="mb-3">
                        <label for="password_confirmation" class="form-label">Confirm Password</label>
                        <input type="password" class="form-control" id="password_confirmation"
                            name="password_confirmation" required onkeyup="checkPasswordMatch()">
                    </div>
                    <div id="password-match-message" class="mb-2" style="transition: 0.3s"></div>
                    <button type="submit" id="submit-btn" class="btn btn-primary w-100" disabled>Signup</button>
                </form>

            </div>
        </div>
    </div>

    @include('layouts.footer')
    <!-- Link to the downloaded Bootstrap JS -->
    <script src="{{ asset('assets/js/bootstrap.min.js') }}"></script>

    <script>
        function validatePassword() {
            const password = document.getElementById("password").value;
            const requirementsDiv = document.getElementById("password-requirements");
            const submitButton = document.getElementById("submit-btn");

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
                symbol: "At least 1 symbol (e.g., @$!%*?&#)."
            };

            // Check which criteria are met and update the message
            let messageHTML = '';
            let allCriteriaMet = true;

            // Loop through each criterion and update accordingly
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

            // Enable/Disable submit button based on password validity
            submitButton.disabled = !allCriteriaMet;
        }

        function checkPasswordMatch() {
            const password = document.getElementById("password").value;
            const confirmPassword = document.getElementById("password_confirmation").value;
            const matchMessageDiv = document.getElementById("password-match-message");

            if (confirmPassword === "") {
                matchMessageDiv.textContent = ""; // Clear message if confirm password is empty
            } else if (password === confirmPassword) {
                matchMessageDiv.textContent = "Passwords match!";
                matchMessageDiv.style.color = "green"; // Success message in green
            } else {
                matchMessageDiv.textContent = "Passwords do not match!";
                matchMessageDiv.style.color = "red"; // Error message in red
            }
        }
    </script>



</body>

</html>