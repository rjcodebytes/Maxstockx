<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>MaxStockx</title>
    <!-- Link to the downloaded Bootstrap CSS -->
    <link href="{{ asset('assets/css/bootstrap.min.css') }}" rel="stylesheet">
</head>

<body>
    <div class="container mt-5">
        <h1 class="text-center">Welcome to MaxStockx</h1>
        <p class="text-muted text-center">This is a Laravel project with Bootstrap integration.</p>
    </div>

    <div class="container mt-5">
        <nav class="navbar navbar-expand-lg navbar-light bg-dark">
            <div class="container">
                <!-- Logo -->
                <a class="navbar-brand" href="#">
                    <img src="{{ asset('assets/img/logo.png') }}" alt="Logo" width="40" height="40">
                    MaxStockx
                </a>
                <!-- Toggler (for mobile view) -->
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
                    aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <!-- Navigation Links -->
                <div class="collapse navbar-collapse" id="navbarNav">
                    <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                        <li class="nav-item">
                            <a class="nav-link active" aria-current="page" href="#">Home</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">Courses</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">Features</a>
                        </li>
                    </ul>
                    <!-- Login and Signup Buttons -->
                    <div class="d-flex">
                        <a href="#" class="btn btn-outline-primary me-2">Login</a>
                        <a href="#" class="btn btn-primary">Signup</a>
                    </div>
                </div>
            </div>
        </nav>
    </div>
    <!-- Link to the downloaded Bootstrap JS -->
    <script src="{{ asset('assets/js/bootstrap.min.js') }}"></script>
</body>

</html>