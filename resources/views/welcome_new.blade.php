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
    @include('layouts.header')

    <!--Subheader and features Section-->
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


    <!--Subheader and features Section-->
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