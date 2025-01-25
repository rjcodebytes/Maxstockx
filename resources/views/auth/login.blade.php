<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>MaxStockx-Login</title>
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

        .py {
            padding-top: 5rem;
            padding-bottom: 3rem;
        }

        .cstm-btn-login {
            scale: .75;
        }
    </style>
</head>

<body>
    @include('layouts.header')

    <div class="d-flex justify-content-center align-items-center py">
        <div class="card py-2 px-4 pt-4 shadow-lg" style="max-width: 400px; width: 100%; border-radius: 12px;">
            <!-- Display Errors -->
            @if($errors->any())
                @foreach($errors->all() as $error)
                    
                        <div class="alert alert-danger alert-dismissible fade show d-flex align-items-center" role="alert">
                            <script src="https://unpkg.com/@dotlottie/player-component@2.7.12/dist/dotlottie-player.mjs"
                                type="module"></script>
                            <dotlottie-player src="https://lottie.host/a5d00a6a-4638-487a-8022-763b9b283696/UChkocIXej.lottie"
                                background="transparent" speed="1" style="width: 40px; height: 40px;" loop
                                autoplay></dotlottie-player>
                            <p class="mb-0 ms-2">{{ $error}}</p>
                            <button type="button" class="btn-close ms-auto" data-bs-dismiss="alert" aria-label="Close"></button>
                        </div>
                    
                @endforeach
            @endif

            <!-- Display Success Message -->
            @if(session('success'))

                <div class="alert alert-success alert-dismissible fade show d-flex align-items-center" role="alert">
                    <script src="https://unpkg.com/@dotlottie/player-component@2.7.12/dist/dotlottie-player.mjs"
                        type="module"></script>
                    <dotlottie-player src="https://lottie.host/b2106acb-574f-4c45-a88c-acb567b9368d/vdlbBHQQKF.lottie"
                        background="transparent" speed="1" style="width: 40px; height: 40px" loop
                        autoplay></dotlottie-player>
                    <p class="mb-0 ms-2">{{ session('success') }}</p>
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                </div>

            @endif

            <!-- Login Form -->
            <h3 class="text-center mb-4 mt-2">Login</h3>
            <form action="{{ route('login.perform') }}" method="POST">
                @csrf
                <div class="form-group mb-3">
                    <label for="username" class="form-label">Username</label>
                    <input style="transition: 0.3s" type="text" id="username" name="username" class="form-control"
                        required placeholder="Enter your username">
                </div>
                <div class="form-group mb-3">
                    <label for="password" class="form-label">Password</label>
                    <input style="transition: 0.3s" type="password" id="password" name="password" class="form-control"
                        required placeholder="Enter your password">
                </div>
                <div class="form-check mb-3">
                    <input style="transition: 0.3s" type="checkbox" id="remember" name="remember"
                        class="form-check-input">
                    <label for="remember" class="form-check-label">Remember Me</label>
                </div>
                <button type="submit" class="btn cstm-btn cstm-btn-login w-100">Login</button>
            </form>
            <p class="text-center mt-2">
                Don't have an account? <a href="{{ route('register') }}">Sign up</a>
            </p>
        </div>
    </div>


    @include('layouts.footer')
    <!-- Link to the downloaded Bootstrap JS -->
    <script src="{{ asset('assets/js/bootstrap.min.js') }}"></script>
</body>

</html>