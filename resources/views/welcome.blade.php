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

    <style>
        @media (max-width: 767px) {
            .container-fluid {
                height: 250px !important;
            }
        }

        .container-fluid {
            display: flex;
            justify-content: center;
            flex-direction: column;

        }

        .container-fluid {
            flex-wrap: wrap;
            height: 450px;
            position: relative;
            overflow: hidden;
        }

        @keyframes move {
            100% {
                transform: translate3d(0, 0, 1px) rotate(360deg);
            }
        }

        .background {
            position: absolute;
            /* Ensures it stays inside the section */
            width: 100%;
            /* Matches the width of the section */
            height: 100%;
            /* Matches the height of the section */
            top: 0;
            left: 0;
            background: transparent;
            /* Keep background transparent */
            overflow: hidden;
            z-index: 1;
            /* Places it behind the content */
        }

        .background span {
            width: 27vmin;
            height: 27vmin;
            border-radius: 27vmin;
            backface-visibility: hidden;
            position: absolute;
            animation: move infinite linear;
            animation-duration: 45s;
        }

        .background span:nth-child(0) {
            color: #514601;
            top: 48%;
            left: 50%;
            animation-duration: 39s;
            animation-delay: -28s;
            transform-origin: -14vw -13vh;
            box-shadow: -54vmin 0 6.966887264740504vmin currentColor;
        }

        .background span:nth-child(1) {
            color: #514601;
            top: 94%;
            left: 95%;
            animation-duration: 37s;
            animation-delay: -50s;
            transform-origin: -23vw -15vh;
            box-shadow: 54vmin 0 7.24381414600091vmin currentColor;
        }

        .background span:nth-child(2) {
            color: #2b5502;
            top: 10%;
            left: 56%;
            animation-duration: 17s;
            animation-delay: -40s;
            transform-origin: -14vw 5vh;
            box-shadow: 54vmin 0 6.802088221970642vmin currentColor;
        }

        .background span:nth-child(3) {
            color: #2b5502;
            top: 48%;
            left: 89%;
            animation-duration: 17s;
            animation-delay: -39s;
            transform-origin: 23vw 4vh;
            box-shadow: 54vmin 0 7.257582769370635vmin currentColor;
        }

        .background span:nth-child(4) {
            color: #514601;
            top: 90%;
            left: 100%;
            animation-duration: 50s;
            animation-delay: -31s;
            transform-origin: -15vw 6vh;
            box-shadow: 54vmin 0 7.122838253008562vmin currentColor;
        }

        .background span:nth-child(5) {
            color: #2b5502;
            top: 39%;
            left: 75%;
            animation-duration: 53s;
            animation-delay: -27s;
            transform-origin: 11vw 18vh;
            box-shadow: 54vmin 0 7.73167975050189vmin currentColor;
        }

        .background span:nth-child(6) {
            color: #2b5502;
            top: 62%;
            left: 4%;
            animation-duration: 30s;
            animation-delay: -24s;
            transform-origin: -15vw -4vh;
            box-shadow: 54vmin 0 6.857558162687004vmin currentColor;
        }

        .background span:nth-child(7) {
            color: #514601;
            top: 54%;
            left: 77%;
            animation-duration: 13s;
            animation-delay: -5s;
            transform-origin: 0vw -4vh;
            box-shadow: -54vmin 0 7.527553178428596vmin currentColor;
        }

        .background span:nth-child(8) {
            color: #514601;
            top: 50%;
            left: 72%;
            animation-duration: 53s;
            animation-delay: -11s;
            transform-origin: 24vw 12vh
        }
    </style>

</head>

<body>
    <!--Header Section-->
    @include('layouts.header')

    <!--Subheader and features Section-->
    <section class="container-fluid mb-2">

        <!-- Background Animation -->
        <div class="background">
            <span></span>
            <span></span>
            <span></span>
            <span></span>
            <span></span>
            <span></span>
            <span></span>
            <span></span>
            <span></span>
        </div>

        <div class=" d-flex justify-content-center align-items-center text-white"
            style="position: relative; z-index: 2;">
            <h1 class="h1 " data-aos="zoom-in" data-aos-duration="1000">Master</h1>
            <h1 class="h2 " data-aos="zoom-in" data-aos-duration="1000">&nbsp;the Stock Market</h1>
        </div>

        <div class=" d-flex justify-content-center align-items-center text-white "
            style="position: relative; z-index: 2;">
            <h2 class="h3" data-aos="fade-left" data-aos-duration="1000" data-aos-delay="300">Learn, Invest &
                Succeed!
            </h2>
        </div>

        <div class=" d-flex justify-content-center align-items-center text-white "
            style="position: relative; z-index: 2;">
            <h3 class="h4" data-aos="fade-right" data-aos-duration="1000" data-aos-delay="400">Comprehensive courses
                designed for beginners & experts alike !</h3>
        </div>

        <div class=" d-flex justify-content-center align-items-center text-white mt-3"
            style="position: relative; z-index: 2;">
            <a href="{{ url('register') }}" class="btn bg-transparent text-white cstm-btn me-4 p-2"
                style="font-size:.6em" data-aos="flip-up" data-aos-duration="1000" data-aos-delay="500">Get
                Started</a>
            <a href="{{ url('explore') }}" class="btn cstm-btn p-2" style="font-size:.6em" data-aos="flip-up"
                data-aos-duration="1000" data-aos-delay="500">Explore Courses</a>
        </div>

    </section>

    <!-- Features Section -->
    <section class="container features-section">
        <h2 class="text-center text-highlight  ftr" data-aos="zoom-in">Features</h2>

        <div class="d-flex justify-content-center align-items-start ftrs">
            <!-- Feature 1 -->
            <div class="d-flex align-items-center flex-column flex-md-column feature-group">
                <div class="numbers position-relative">
                    <h2 data-aos="zoom-in" data-aos-duration="1000" class="number-0">0</h2>
                    <h2 data-aos="zoom-in" data-aos-duration="2000" class="number-1">1</h2>
                </div>
                <h2 data-aos="zoom-in" data-aos-duration="2000" class="feature-text">
                    Empowering Learners with Knowledge that Works in the Real World.
                </h2>
            </div>

            <!-- Feature 2 -->
            <div class="d-flex align-items-center flex-column feature-group">
                <div class="numbers position-relative">
                    <h2 data-aos="zoom-in" data-aos-duration="1000" class="number-0">0</h2>
                    <h2 data-aos="zoom-in" data-aos-duration="2000" class="number-1">2</h2>
                </div>
                <h2 data-aos="zoom-in" data-aos-duration="2000" class="feature-text ">
                    Learn with Practical Knowledge, Backed by Expert Insights.
                </h2>
            </div>

            <!-- Feature 3 -->
            <div class="d-flex align-items-center flex-column feature-group">
                <div class="numbers position-relative">
                    <h2 data-aos="zoom-in" data-aos-duration="1000" class="number-0">0</h2>
                    <h2 data-aos="zoom-in" data-aos-duration="2000" class="number-1">3</h2>
                </div>
                <h2 data-aos="zoom-in" data-aos-duration="2000" class="feature-text">
                    Where Learning Meets Expertise and Real-World Impact.
                </h2>
            </div>
        </div>


    </section>


    <!-- Courses Section New-->
    {{--<section class="container courses-section py-5">
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

            <div class="col-md-4 mx-4 cc card course-card" data-aos="fade-up" style="transition:.6s">
                <img src="{{ asset('assets/img/course.png') }}" class="card-img-top" alt="Course">
                <div class="card-body">
                    <h5 class="card-title">Course Title 2</h5>
                    <p class="card-text">Some quick example text to build on the card title and content.</p>
                    <a href="#" class="btn btn-primary">Learn More</a>
                </div>
            </div>

            <div class="col-md-4 mx-4 cc card course-card" data-aos="fade-left" style="transition:.6s">
                <img src="{{ asset('assets/img/course.png') }}" class="card-img-top" alt="Course">
                <div class="card-body">
                    <h5 class="card-title">Course Title 3</h5>
                    <p class="card-text">Some quick example text to build on the card title and content.</p>
                    <a href="#" class="btn btn-primary">Learn More</a>
                </div>
            </div>
        </div>
    </section>--}}
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