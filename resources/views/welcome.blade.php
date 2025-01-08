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
    <nav class="navbar navbar-expand-lg bg-none">
        <div class="container-fluid">
            <a class="navbar-brand" href="">
                <img src="{{ asset('assets/img/logo.png') }}" width="150" height="100" class="ms-5 mt-5">
            </a>
            <div class="cstnav ms-auto d-flex mt-5">
                <!-- Buttons aligned to the right -->
                <a href="{{ url('login') }}" class="btn cstm-btn me-5">Login</a>
                <a href="{{ url('register') }}" class="btn cstm-btn me-5">Sign Up</a>
            </div>
        </div>
    </nav>

    <div class="container-fluid position-relative d-flex justify-content-center align-items-center mt-5"
        style="height: 500px;">
        <!-- First Image on the left -->
        <img src="{{asset('assets/img/l2.png')}}" class=" l1 position-absolute start-0" style="">

        <!-- Second Image on the right -->
        <img src="{{asset('assets/img/l1.png')}}" class="l2 position-absolute end-0" style="">

        <!-- Headlines overlapping the images -->
        <div class="position-absolute d-flex justify-content-center align-items-center text-white"
            style="z-index: 1; top: 4%; left: 50%; transform: translateX(-50%); width:700px">
            <h1 class="h1 me-3" data-aos="zoom-in" data-aos-duration="1000">Master</h1>
            <h1 class="h2 me-3" data-aos="zoom-in" data-aos-duration="1000">the Stock Market</h1>
        </div>

        <div class="position-absolute d-flex justify-content-center align-items-center text-white mt-4"
            style="z-index: 1; top: 14%; left: 50%; transform: translateX(-50%); width:700px">
            <h2 class="h3" data-aos="fade-left" data-aos-duration="1000" data-aos-delay="300">Learn, Invest & Succeed!
            </h2>
        </div>

        <div class="position-absolute d-flex justify-content-center align-items-center text-white mt-4"
            style="z-index: 1; top: 24.8%; left: 50%; transform: translateX(-50%); width:800px">
            <h3 class="h4" data-aos="fade-right" data-aos-duration="1000" data-aos-delay="400">Comprehensive courses
                designed for beginners & experts alike !</h3>
        </div>

        <div class="position-absolute d-flex justify-content-center align-items-center text-white mt-4"
            style="z-index: 1; top: 40%; left: 50%; transform: translateX(-50%); width:800px">
            <a href="{{ url('register') }}" class="btn bg-transparent text-white cstm-btn me-4 p-2" style="width:180px;"
                data-aos="flip-up" data-aos-duration="1000" data-aos-delay="500">Get Started</a>
            <a href="{{ url('explore') }}" class="btn cstm-btn p-2" style="width:230px;" data-aos="flip-up"
                data-aos-duration="1000" data-aos-delay="500">Explore Courses</a>
        </div>

        <div class="position-absolute mt-4"
            style="z-index: 1; top: 70%; left: 50%; transform: translateX(-50%); width:800px">
            <!-- Features Title -->
            <h1 class="ftr text-center" data-aos="zoom-in" data-aos-duration="1000">Features</h1>

            <!-- Features Section -->
            <section class="features">
                <!-- Feature 1 -->
                <div class="feature-group d-flex align-items-center justify-content-center mt-4">
                    <div class="numbers position-relative me-3">
                        <h2 data-aos="fade-left" data-aos-duration="1000" class="number-0">0</h2>
                        <h2 data-aos="fade-left" data-aos-duration="2000" class="number-1">1</h2>
                    </div>
                    <h2 data-aos="fade-left" data-aos-duration="3000" class="feature-text ms-5">
                        Empowering Learners with Knowledge that Works in the Real World.
                    </h2>
                </div>

                <div class="feature-group d-flex align-items-center justify-content-center">
                    <div class="numbers position-relative me-3">
                        <h2 data-aos="fade-right" data-aos-duration="3000" class="number-0">0</h2>
                        <h2 data-aos="fade-right" data-aos-duration="2000" class="number-1">2</h2>
                    </div>
                    <h2 data-aos="fade-right" data-aos-duration="1000" class="feature-text ms-5">
                        Learn with Practical Knowledge, Backed by Expert Insights.
                    </h2>
                </div>

                <div class="feature-group d-flex align-items-center justify-content-center">
                    <div class="numbers position-relative me-3">
                        <h2 data-aos="fade-left" data-aos-duration="1000" class="number-0">0</h2>
                        <h2 data-aos="fade-left" data-aos-duration="2000" class="number-1">3</h2>
                    </div>
                    <h2 data-aos="fade-left" data-aos-duration="3000" class="feature-text ms-5">
                        Where Learning Meets Expertise and Real-World Impact.
                    </h2>
                </div>
            </section>
        </div>
    </div>

    <div class="container-fluid position-relative d-flex justify-content-center align-items-center mt-5"
        style="height: 500px;">

        <!-- Our Courses Section Title -->
        <div class="oc position-absolute"
            style="z-index: 1; top: 70%; left: 50%; transform: translateX(-50%); width:800px;">
            <h1 class="ftr text-center" data-aos="zoom-in" data-aos-duration="1000">Our Courses</h1>
        </div>

        <section class="courses position-relative mt-5" style="margin-top: 200px; top: 70%">
            <!-- Added margin to push cards below -->
            <div class="d-flex justify-content-center flex-wrap" id="courses-container" style="top:250px; position:relative">
                <!-- Course Card 1 -->
                <div class="card mx-3 mb-4" style="width: 18rem;" data-aos="fade-up" data-aos-delay="500" data-aos-duration="1000">
                    <img src="https://via.placeholder.com/150" class="card-img-top" alt="Course 1">
                    <div class="card-body">
                        <h5 class="card-title">Course Title 1</h5>
                        <p class="card-text">Some quick example text to build on the card title and make up the bulk of
                            the card's content.</p>
                        <a href="#" class="btn btn-primary">Learn More</a>
                    </div>
                </div>

                <!-- Course Card 2 -->
                <div class="card mx-3 mb-4" style="width: 18rem;" data-aos="fade-down" data-aos-delay="500" data-aos-duration="1000">
                    <img src="https://via.placeholder.com/150" class="card-img-top" alt="Course 2">
                    <div class="card-body">
                        <h5 class="card-title">Course Title 2</h5>
                        <p class="card-text">Some quick example text to build on the card title and make up the bulk of
                            the card's content.</p>
                        <a href="#" class="btn btn-primary">Learn More</a>
                    </div>
                </div>

                <!-- Course Card 3 -->
                <div class="card mx-3 mb-4" style="width: 18rem;" data-aos="fade-up" data-aos-delay="500" data-aos-duration="1000">
                    <img src="https://via.placeholder.com/150" class="card-img-top" alt="Course 3">
                    <div class="card-body">
                        <h5 class="card-title">Course Title 3</h5>
                        <p class="card-text">Some quick example text to build on the card title and make up the bulk of
                            the card's content.</p>
                        <a href="#" class="btn btn-primary">Learn More</a>
                    </div>
                </div>
            </div>
        </section>
        

    </div>




    <!-- Link to the downloaded Bootstrap JS -->
    <script src="{{ asset('assets/js/bootstrap.min.js') }}"></script>
    <!-- AOS JS -->
    <script src="https://cdn.jsdelivr.net/npm/aos@2.3.4/dist/aos.js"></script>
    <script>
        AOS.init();
    </script>

</body>

</html>