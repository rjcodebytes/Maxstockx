<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>MaxStockx</title>
    <link href="{{ asset('assets/css/bootstrap.min.css') }}" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('assets/css/custom/cstyle.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/custom/landing.css') }}">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link rel="icon" type="image/png" href="{{ asset('assets/img/flogo.png') }}" sizes="16x16">
    <link href="https://cdn.jsdelivr.net/npm/aos@2.3.4/dist/aos.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@100;400;600;800&display=swap" rel="stylesheet">
</head>

<body>
    <!-- Header Section -->
    <nav class="navbar navbar-expand-lg bg-none py-3">
        <div class="container">
            <a class="navbar-brand" href="#">
                <img src="{{ asset('assets/img/logo.png') }}" alt="Logo" width="120" height="auto">
            </a>
            <div class="ms-auto d-flex">
                <a href="{{ url('login') }}" class="btn cstm-btn mx-2">Login</a>
                <a href="{{ url('register') }}" class="btn cstm-btn mx-2">Sign Up</a>
            </div>
        </div>
    </nav>

    <!-- Subheader Section -->
    <div class="container-fluid position-relative d-flex justify-content-center align-items-center subheader">
        <img src="{{asset('assets/img/l2.png')}}" class="subheader-img-left">
        <img src="{{asset('assets/img/l1.png')}}" class="subheader-img-right">
        <div class="text-center text-white subheader-text">
            <div class="d-flex">
                <h1 class="h1 me-3" data-aos="zoom-in" data-aos-duration="1000">Master</h1>
                <h1 class="h2 me-3" data-aos="zoom-in" data-aos-duration="1000">the Stock Market</h1>
            </div>
            <h2 class="h3" data-aos="fade-left" data-aos-duration="1000" data-aos-delay="300">Learn, Invest & Succeed!
            </h2>
            <h3 class="h4" data-aos="fade-right" data-aos-duration="1000" data-aos-delay="400">Comprehensive courses
                designed for beginners & experts alike !</h3>
            <a href="{{ url('register') }}" class="btn bg-transparent text-white cstm-btn me-4 p-2" style="width:180px;"
                data-aos="flip-up" data-aos-duration="1000" data-aos-delay="500">Get Started</a>
            <a href="{{ url('explore') }}" class="btn cstm-btn p-2" style="width:230px;" data-aos="flip-up"
                data-aos-duration="1000" data-aos-delay="500">Explore Courses</a>
        </div>
    </div>

    <!-- Features Section -->
    <section class="container features-section py-5">
        <h2 class="text-center text-highlight mb-5" data-aos="zoom-in">Features</h2>

        <div class="d-flex justify-content-center flex-column align-items-center">
            <div class="d-flex">
                <div class="numbers position-relative me-3">
                    <h2 data-aos="fade-left" data-aos-duration="1000" class="number-0">0</h2>
                    <h2 data-aos="fade-left" data-aos-duration="2000" class="number-1">1</h2>
                </div>
                <h2 data-aos="fade-left" data-aos-duration="3000" class="feature-text ms-5">
                    Empowering Learners with Knowledge that Works in the Real World.
                </h2>
            </div>

            <div class="d-flex">
                <div class="numbers position-relative me-3">
                    <h2 data-aos="fade-left" data-aos-duration="1000" class="number-0">0</h2>
                    <h2 data-aos="fade-left" data-aos-duration="2000" class="number-1">2</h2>
                </div>
                <h2 data-aos="fade-left" data-aos-duration="3000" class="feature-text ms-5">
                    Learn with Practical Knowledge, Backed by Expert Insights.
                </h2>
            </div>

            <div class="d-flex">
                <div class="numbers position-relative me-3">
                    <h2 data-aos="fade-left" data-aos-duration="1000" class="number-0">0</h2>
                    <h2 data-aos="fade-left" data-aos-duration="2000" class="number-1">3</h2>
                </div>
                <h2 data-aos="fade-left" data-aos-duration="3000" class="feature-text ms-5">
                    Where Learning Meets Expertise and Real-World Impact.
                </h2>
            </div>


        </div>

    </section>

    <!-- Courses Section -->
    <section class="container courses-section py-5">
        <h2 class="text-center text-highlight mb-5" data-aos="zoom-in">Our Courses</h2>
        <div class="row justify-content-center">
            <div class="cc col-md-4 mb-4" data-aos="fade-up" data-aos-delay="200">
                <div class="card course-card">
                    <img src="{{ asset('assets/img/course.png') }}" class="card-img-top" alt="Course">
                    <div class="card-body">
                        <h5 class="card-title">Course Title 1</h5>
                        <p class="card-text">Some quick example text to build on the card title and content.</p>
                        <a href="#" class="btn btn-primary">Learn More</a>
                    </div>
                </div>
            </div>
            <div class="col-md-4 mb-4" data-aos="fade-up" data-aos-delay="400">
                <div class="card course-card">
                    <img src="{{ asset('assets/img/course.png') }}" class="card-img-top" alt="Course">
                    <div class="card-body">
                        <h5 class="card-title">Course Title 2</h5>
                        <p class="card-text">Some quick example text to build on the card title and content.</p>
                        <a href="#" class="btn btn-primary">Learn More</a>
                    </div>
                </div>
            </div>
            <div class="col-md-4 mb-4" data-aos="fade-up" data-aos-delay="600">
                <div class="card course-card">
                    <img src="{{ asset('assets/img/course.png') }}" class="card-img-top" alt="Course">
                    <div class="card-body">
                        <h5 class="card-title">Course Title 3</h5>
                        <p class="card-text">Some quick example text to build on the card title and content.</p>
                        <a href="#" class="btn btn-primary">Learn More</a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Footer -->
    @include('layouts.footer')

    <script src="{{ asset('assets/js/bootstrap.min.js') }}"></script>
    <script src="https://cdn.jsdelivr.net/npm/aos@2.3.4/dist/aos.js"></script>
    <script>AOS.init();</script>
</body>

</html>