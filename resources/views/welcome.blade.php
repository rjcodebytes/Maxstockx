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
    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.12.2/gsap.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.12.2/ScrollTrigger.min.js"></script>

    <link rel='stylesheet'
        href='https://cdn-uicons.flaticon.com/2.6.0/uicons-solid-straight/css/uicons-solid-straight.css'>
    <link rel='stylesheet'
        href='https://cdn-uicons.flaticon.com/2.6.0/uicons-solid-rounded/css/uicons-solid-rounded.css'>

    <link rel='stylesheet' href='https://cdn-uicons.flaticon.com/2.6.0/uicons-bold-rounded/css/uicons-bold-rounded.css'>

    <link
        href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap"
        rel="stylesheet">

    <link rel='stylesheet'
        href='https://cdn-uicons.flaticon.com/2.6.0/uicons-solid-rounded/css/uicons-solid-rounded.css'>
    <style>
        @media (max-width: 767px) {
            .container-fluid {
                height: 250px !important;
            }
        }

        @media (max-width: 767px) {
            .img-fluid {
                position: relative;
                top: 30px !important;
                scale: 1 !important
            }
        }

        @media (max-width: 1199px) {

            /* Tablets (iPad & similar screens) */
            .floating-img {
                scale: 1 !important;
            }
        }

        .text-lime {
            color: #62CE3E;
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
            width: 100%;
            height: 100%;
            top: 0;
            left: 0;
            background: transparent;
            overflow: hidden;
            z-index: 1;
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

        .grdnt-bx {
            height: 270px;
            background: none;
            border-radius: 25px;
            border: 2px solid transparent;
            /* Ensure there's a solid border */
            position: relative;
        }

        .grdnt-bx::before {
            content: "";
            position: absolute;
            top: 0;
            left: 0;
            right: 0;
            bottom: 0;
            border-radius: 25px;
            padding: 2px;
            background: linear-gradient(90deg, #2d2d2d99, green, #2d2d2d99);
            -webkit-mask: linear-gradient(#fff 0 0) content-box, linear-gradient(#fff 0 0);
            -webkit-mask-composite: destination-out;
            mask-composite: exclude;
        }

        .grdnt-bx .icon {
            font-size: 40px;
            position: relative;
            left: 30px;
            background: linear-gradient(0deg, rgba(45, 45, 45, 1) 0%, rgba(32, 189, 20, 1) 55%, rgba(45, 45, 45, 1) 100%);
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
        }
    </style>

</head>

<body>
    <!--Header Section-->
    @include('layouts.header')

    <!--Subheader and features Section-->
    <section class="container-fluid mb-2 mnhdrsctn">

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

        <div class=" d-flex justify-content-center align-items-center text-white mt-4 sbgt"
            style="position: relative; z-index: 2;">
            <a href="{{ url('register') }}" class="btn bg-transparent text-white cstm-btn me-4 p-2 gtstrd"
                data-aos="flip-up" data-aos-duration="1000" data-aos-delay="500">Get
                Started</a>
            <a href="{{ url('explore') }}" class="btn cstm-btn p-2 gtstrd" data-aos="flip-up" data-aos-duration="1000"
                data-aos-delay="500">Explore Courses</a>
        </div>

    </section>

    <section class=" container mt-5">
        <div class="container mt-2 mb-5">
            <div class="container">
                <div class="row gx-5 align-items-center">
                    <div class="col-xxl-5">
                        <!-- Header text content-->
                        <div class="text-center text-xxl-start">
                            <div class="badge bg-gradient-primary-to-secondary text-white mb-2 px-0">
                                <div class="text-uppercase" data-aos="fade-right" data-aos-duration="1000"
                                    data-aos-once="true">Learn · Invest · Succeed</div>
                            </div>
                            <div class="fs-3 fw-light text-white" data-aos="fade-right" data-aos-duration="1000"
                                data-aos-delay="400" data-aos-once="true" data-aos-anchor-placement="top-bottom">I can
                                help you master the stock market</div>
                            <h1 class="display-3 fw-bolder mt-2 mb-4 text-lime" data-aos="fade-right"
                                data-aos-duration="1000" data-aos-delay="500" data-aos-anchor-placement="top-bottom"
                                data-aos-once="true"><span class="text-gradient d-inline">Learn,
                                    Invest, and
                                    Grow Your Wealth</span></h1>
                            <p class="fs-5 text-white" data-aos-once="true" data-aos="fade-up" data-aos-duration="1200"
                                data-aos-delay="200" data-aos-anchor-placement="top-bottom">
                                Hi, I’m <strong>Mayank Kharwade</strong>, a full-time trader and trainer with 5+ years
                                of
                                experience in the Indian stock market.
                                Trading is my passion and profession, and over the years, I’ve mastered market trends
                                and
                                strategies.
                                My journey from a beginner to a professional trader has been full of learning and
                                growth,
                                and now,
                                I’m here to help you do the same!
                            </p>
                        </div>
                    </div>

                    <div class="col-xxl-5 d-flex justify-content-xxl-end justify-content-center" data-aos-once="true"
                        data-aos="zoom-in" data-aos-duration="1300" data-aos-anchor-placement="top-bottom">
                        <!-- Profile Image Section -->
                        <img src="{{ asset('assets/img/mxstcks.png') }}" alt="Profile Image"
                            class="img-fluid shadow-lg floating-img" width="250" style=" scale:1.5">
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Features Section -->
    <section class="container features-section mb-5">
        <h2 class="text-center text-highlight ftr">Features</h2>

        <div class="d-flex justify-content-center align-items-start ftrs">
            <!-- Feature 1 -->
            <div class="d-flex align-items-center flex-column flex-md-column feature-group">
                <div class="numbers position-relative">
                    <h2 class="number-0">0</h2>
                    <h2 class="number-1">1</h2>
                </div>
                <h2 class="feature-text">
                    Empowering Learners with Knowledge that Works in the Real World.
                </h2>
            </div>

            <!-- Feature 2 -->
            <div class="d-flex align-items-center flex-column feature-group">
                <div class="numbers position-relative">
                    <h2 class="number-0">0</h2>
                    <h2 class="number-1">2</h2>
                </div>
                <h2 class="feature-text ">
                    Learn with Practical Knowledge, Backed by Expert Insights.
                </h2>
            </div>

            <!-- Feature 3 -->
            <div class="d-flex align-items-center flex-column feature-group">
                <div class="numbers position-relative">
                    <h2 class="number-0">0</h2>
                    <h2 class="number-1">3</h2>
                </div>
                <h2 class="feature-text">
                    Where Learning Meets Expertise and Real-World Impact.
                </h2>
            </div>
        </div>

        <script>
            document.addEventListener("DOMContentLoaded", function () {
                gsap.registerPlugin(ScrollTrigger);

                gsap.from(".number-0", {
                    opacity: 0,
                    scale: 0,
                    y: -50,
                    duration: 1,
                    ease: "power2.out",
                    scrollTrigger: {
                        trigger: ".feature-group", // Starts animation when this section enters viewport
                        start: "top 80%", // Trigger when top of ".feature-group" reaches 80% of viewport height
                        toggleActions: "play none none none"
                    }
                });

                gsap.from(".number-1", {
                    opacity: 0,
                    scale: 0,
                    y: -50,
                    duration: 1.5,
                    delay: 0.5,
                    ease: "power2.out",
                    scrollTrigger: {
                        trigger: ".feature-group",
                        start: "top 80%",
                        toggleActions: "play none none none"
                    }
                });

                gsap.from(".feature-text", {
                    opacity: 0,
                    y: 20,
                    duration: 1.5,
                    delay: 1,
                    ease: "power2.out",
                    scrollTrigger: {
                        trigger: ".feature-group",
                        start: "top 85%",
                        toggleActions: "play none none none"
                    }
                });

                gsap.from(".ftr", {
                    opacity: 0,
                    y: -50,
                    duration: 1.5,
                    ease: "power2.out",
                    scrollTrigger: {
                        trigger: ".feature-group",
                        start: "top 85%",
                        toggleActions: "play none none none"
                    }
                });
            });

        </script>

    </section>

    <section class=" container mt-5">
        <div class="col-md-12 text-center mb-5 mt-5">
            <h2 class=" wftr" style=" font-size: 70px" data-aos="fade-down" data-aos-duration="1000"
                data-aos-once="true" data-aos-anchor-placement="top-bottom">Why choose us?</h2>
        </div>
        <div class="container d-flex justify-center align-items-center flex-col">
            <div class="row g-4">

                <div class="col-lg-4 col-md-6" data-aos="fade-down" data-aos-duration="1000" data-aos-once="true">
                    <div class="card px-4 py-4 grdnt-bx">
                        <div class="icon mb-2">
                            <i class="fi fi-ss-chess" style=" color: green"></i>
                        </div>
                        <h4 class=" text-white mb-3">Strategies</h4>
                        <p class=" text-white">Understandable and implementable strategies across: Equities, futures &
                            options, commodities.
                        </p>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6" data-aos="fade-down" data-aos-duration="1000" data-aos-once="true">
                    <div class="card px-4 py-4 grdnt-bx">
                        <div class="icon mb-2">
                            <i class="fi fi-ss-chart-line-up" style=" color:green"></i>
                        </div>
                        <h4 class=" text-white">Risk Reward</h4>
                        <p class=" text-white">Our commitment to disciplined trading aims to reduce your risk exposure
                            while maximizing
                            revenue potential.</p>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6" data-aos="fade-down" data-aos-duration="1000" data-aos-once="true">
                    <div class="card px-4 py-4 grdnt-bx">
                        <div class="icon mb-2">
                            <i class="fi fi-ss-chart-candlestick" style=" color: green"></i>
                        </div>
                        <h4 class=" text-white">Trading Concepts</h4>
                        <p class=" text-white">Master the art of utilizing diverse price action setups across markets in
                            live trading.</p>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6" data-aos="fade-down" data-aos-duration="1000" data-aos-once="true">
                    <div class="card px-4 py-4 grdnt-bx">
                        <div class="icon mb-2">
                            <i class="fi fi-br-chart-mixed-up-circle-dollar" style=" color: green"></i>
                        </div>
                        <h4 class="text-white ">Live Trading</h4>
                        <p class="text-white ">We conduct Live Trade & follow-up sessions and hold discussions about
                            trades.</p>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6" data-aos="fade-down" data-aos-duration="1000" data-aos-once="true">
                    <div class="card px-4 py-4 grdnt-bx">
                        <div class="icon mb-2">
                            <i class="fi fi-ss-team-check-alt" style=" color: green"></i>
                        </div>
                        <h4 class="text-white">Expert Support</h4>
                        <p class="text-white">Connect with our team for doubt clarification.</p>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6" data-aos="fade-down" data-aos-duration="1000" data-aos-once="true">
                    <div class="card px-4 py-4 grdnt-bx">
                        <div class="icon mb-2">
                            <i class="fi fi-ss-lightbulb-on" style=" color: green"></i>
                        </div>
                        <h4 class=" text-white">Smart Trading</h4>
                        <p class=" text-white">Learn creating Algorithmic trading strategies and get Specialized Wealth
                            Management
                            Solutions.</p>
                    </div>
                </div>

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

    <section class="container my-5" id="wlcmfaq">
        <h2 class="text-center text-highlight ftr mb-2">FAQs</h2>
        <h2 class="fs-3 text-center text-gray mb-4" data-aos="fade-down" data-aos-duration="1500" data-aos-once="true"
            data-aos-anchor-placement="top-bottom">Curious minds, we’ve got you covered </h2>
        <div class="row justify-content-center">
            <div class="col-12 col-md-8 col-lg-6 px-3">
                <div class="accordion" id="accordionExample">

                    <!-- FAQ 1 -->
                    <div class="accordion-item mb-4" data-aos="fade-down" data-aos-duration="1500" data-aos-once="true"
                        data-aos-anchor-placement="top-bottom">
                        <h2 class="accordion-header" id="headingOne">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                data-bs-target="#collapseOne" aria-expanded="false" aria-controls="collapseOne">
                                What is MaxStockx, and how can it help me?
                            </button>
                        </h2>
                        <div id="collapseOne" class="accordion-collapse collapse" aria-labelledby="headingOne"
                            data-bs-parent="#accordionExample" style=" transition: 0.3s">
                            <div class="accordion-body text-gray">
                                <strong class=" text-lime">MaxStockx</strong> is a platform where users can learn about
                                the stock market
                                and how to earn money through smart investments. We offer courses, resources, and expert
                                insights to help beginners and experienced traders make informed financial decisions.
                            </div>
                        </div>
                    </div>

                    <!-- FAQ 2 -->
                    <div class="accordion-item mb-4" data-aos="fade-down" data-aos-duration="1500" data-aos-once="true"
                        data-aos-anchor-placement="top-bottom" data-aos-delay="400">
                        <h2 class="accordion-header" id="headingTwo">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                Do I need prior experience to start learning?
                            </button>
                        </h2>
                        <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo"
                            data-bs-parent="#accordionExample" style=" transition: 0.3s">
                            <div class="accordion-body text-gray">
                                No, you don't need any prior experience! MaxStockx provides beginner-friendly courses
                                along with advanced materials for seasoned investors. Our step-by-step approach makes
                                learning easy for everyone.
                            </div>
                        </div>
                    </div>

                    <!-- FAQ 3 -->
                    <div class="accordion-item mb-4" data-aos="fade-down" data-aos-duration="1500" data-aos-once="true"
                        data-aos-anchor-placement="top-bottom" data-aos-delay="700">
                        <h2 class="accordion-header" id="headingThree">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree"
                                style=" transition: 0.3s">
                                Is the payment process secure?
                            </button>
                        </h2>
                        <div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="headingThree"
                            data-bs-parent="#accordionExample" style=" transition: 0.3s">
                            <div class="accordion-body text-gray">
                                Yes, absolutely! We use <strong class="text-lime">Razorpay</strong> for processing
                                payments, ensuring a
                                secure and encrypted transaction experience. Your personal and financial information
                                remains protected at all times.
                            </div>
                        </div>
                    </div>

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
        once: true
    </script>

</body>

</html>