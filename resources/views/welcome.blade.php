<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>MaxStockx</title>
    <link href="{{ asset('assets/css/bootstrap.min.css') }}" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('assets/css/custom/cstyle.css') }}">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link rel="icon" type="image/png" href="{{ asset('assets/img/flogo.png') }}" sizes="16x16">
    <!-- AOS CSS -->
    <link href="https://cdn.jsdelivr.net/npm/aos@2.3.4/dist/aos.css" rel="stylesheet">

    <link
        href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap"
        rel="stylesheet">

</head>

<body>
    <!--Header Section-->
    <nav class="navbar navbar-expand-lg bg-none">
        <div class="container-fluid">
            <a class="navbar-brand" href="">
                <img src="{{ asset('assets/img/logo.png') }}" width="150" height="100" class="ms-5 mt-5">
            </a>
            <div class="cstnav ms-auto d-flex mt-5">
                <!-- Buttons aligned to the right -->
                <a href="{{ url('login') }}" class="btn cstm-btn me-5">Login</a>
                <a href="{{ url('landing') }}" class="btn cstm-btn me-5">Sign Up</a>
            </div>
        </div>
    </nav>


    <!--Subheader and features Section-->
    <div class="container-fluid position-relative d-flex justify-content-center align-items-center mt-5"
        style="height: 500px; border:2px soid red">
        <!-- First Image on the left -->
        <img src="{{asset('assets/img/l2.png')}}" class="subheader-img-left">
        <img src="{{asset('assets/img/l1.png')}}" class="subheader-img-right">

        <!-- Headlines overlapping the images -->

        <div class="position-absolute d-flex justify-content-center align-items-center text-white"
            style="z-index: 1; top: 14%; left: 50%; transform: translateX(-50%); width:700px">
            <h1 class="h1 me-3" data-aos="zoom-in" data-aos-duration="1000">Master</h1>
            <h1 class="h2 me-3" data-aos="zoom-in" data-aos-duration="1000">the Stock Market</h1>
        </div>

        <div class="position-absolute d-flex justify-content-center align-items-center text-white mt-4"
            style="z-index: 1; top: 24%; left: 50%; transform: translateX(-50%); width:700px">
            <h2 class="h3" data-aos="fade-left" data-aos-duration="1000" data-aos-delay="300">Learn, Invest &
                Succeed!
            </h2>
        </div>

        <div class="position-absolute d-flex justify-content-center align-items-center text-white mt-4"
            style="z-index: 1; top: 35%; left: 50%; transform: translateX(-50%); width:800px">
            <h3 class="h4" data-aos="fade-right" data-aos-duration="1000" data-aos-delay="400">Comprehensive courses
                designed for beginners & experts alike !</h3>
        </div>

        <div class="position-absolute d-flex justify-content-center align-items-center text-white mt-4"
            style="z-index: 1; top: 50%; left: 50%; transform: translateX(-50%); width:800px">
            <a href="{{ url('register') }}" class="btn bg-transparent text-white cstm-btn me-4 p-2" style="width:180px;"
                data-aos="flip-up" data-aos-duration="1000" data-aos-delay="500">Get
                Started</a>
            <a href="{{ url('explore') }}" class="btn cstm-btn p-2" style="width:230px;" data-aos="flip-up"
                data-aos-duration="1000" data-aos-delay="500">Explore Courses</a>
        </div>

    </div>

    <!-- Features Section -->
    <section class="container features-section  d-flex flex-column justify-content-center align-items-center">
        <h2 class="text-center text-highlight  ftr" data-aos="zoom-in">Features</h2>

        <div class="d-flex justify-content-center flex-column align-items-start">
            <!-- Feature 1 -->
            <div class="d-flex align-items-center feature-group">
                <div class="numbers position-relative">
                    <h2 data-aos="fade-left" data-aos-duration="1000" class="number-0">0</h2>
                    <h2 data-aos="fade-left" data-aos-duration="2000" class="number-1">1</h2>
                </div>
                <h2 data-aos="zoom-in" data-aos-duration="2000" class="feature-text">
                    Empowering Learners with Knowledge that Works in the Real World.
                </h2>
            </div>

            <!-- Feature 2 -->
            <div class="d-flex align-items-center feature-group">
                <div class="numbers position-relative">
                    <h2 data-aos="fade-left" data-aos-duration="1000" class="number-0">0</h2>
                    <h2 data-aos="fade-left" data-aos-duration="2000" class="number-1">2</h2>
                </div>
                <h2 data-aos="zoom-in" data-aos-duration="2000" class="feature-text ">
                    Learn with Practical Knowledge, Backed by Expert Insights.
                </h2>
            </div>

            <!-- Feature 3 -->
            <div class="d-flex align-items-center feature-group">
                <div class="numbers position-relative">
                    <h2 data-aos="fade-left" data-aos-duration="1000" class="number-0">0</h2>
                    <h2 data-aos="fade-left" data-aos-duration="2000" class="number-1">3</h2>
                </div>
                <h2 data-aos="zoom-in" data-aos-duration="2000" class="feature-text">
                    Where Learning Meets Expertise and Real-World Impact.
                </h2>
            </div>
        </div>


    </section>


    <!-- Courses Section New-->
    <section class="container courses-section py-5">
        <h2 class="text-center text-highlight mb-5 ftr" data-aos="zoom-in">Our Courses</h2>
        <div class="row justify-content-center">

            <div class="col-md-4 mx-4 cc card course-card" data-aos="fade-right" style="transition:.6s">
                <img src="{{ asset('assets/img/course.png') }}" class="card-img-top" alt="Course">
                <div class="card-body">
                    <h5 class="card-title">Course Title 1</h5>
                    <p class="card-text">Some quick example text to build on the card title and content.</p>
                    <a href="#" class="btn btn-primary">Learn More</a>
                </div>
            </div>

            <div class="col-md-4 mx-4 cc card course-card" data-aos="fade-up"  style="transition:.6s">
                <img src="{{ asset('assets/img/course.png') }}" class="card-img-top" alt="Course">
                <div class="card-body">
                    <h5 class="card-title">Course Title 2</h5>
                    <p class="card-text">Some quick example text to build on the card title and content.</p>
                    <a href="#" class="btn btn-primary">Learn More</a>
                </div>
            </div>

            <div class="col-md-4 mx-4 cc card course-card" data-aos="fade-left"  style="transition:.6s">
                <img src="{{ asset('assets/img/course.png') }}" class="card-img-top" alt="Course">
                <div class="card-body">
                    <h5 class="card-title">Course Title 3</h5>
                    <p class="card-text">Some quick example text to build on the card title and content.</p>
                    <a href="#" class="btn btn-primary">Learn More</a>
                </div>
            </div>
        </div>
    </section>
    @include('layouts.footer')

    <!-- Link to the downloaded Bootstrap JS -->
    <script src="{{ asset('assets/js/bootstrap.min.js') }}"></script>
    <!-- AOS JS -->
    <script src="https://cdn.jsdelivr.net/npm/aos@2.3.4/dist/aos.js"></script>
    <script>
        AOS.init();
    </script>

</body>

</html>