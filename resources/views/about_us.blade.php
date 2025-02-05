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
        .text-lime {
            color: #62CE3E;
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
                scale: 1.2 !important;
            }
        }

       {{-- @keyframes floatUpDown {
            0% {
                transform: translateY(0);
            }

            50% {
                transform: translateY(-10px);
            }

            100% {
                transform: translateY(0);
            }
        }
        --}}

        .floating-img {
            animation: floatUpDown 7s ease-in-out infinite;
        }
    </style>

</head>

<body>
    <!--Header Section-->
    @include('layouts.header')

    <div class="container mt-5">
        <h1 class="text-center text-lime ftr">About Us</h1>
        <div class="container px-5 pb-5">
            <div class="row gx-5 align-items-center">
                <div class="col-xxl-5">
                    <!-- Header text content-->
                    <div class="text-center text-xxl-start">
                        <div class="badge bg-gradient-primary-to-secondary text-white mb-2 px-0">
                            <div class="text-uppercase">Learn · Invest · Succeed</div>
                        </div>
                        <div class="fs-3 fw-light text-white">I can help you master the stock market</div>
                        <h1 class="display-3 fw-bolder mb-5 text-lime"><span class="text-gradient d-inline">Learn,
                                Invest, and
                                Grow Your Wealth</span></h1>
                        <p class="fs-5 text-white ">
                            Hi, I’m <strong>Mayank Kharwade</strong>, a full-time trader and trainer with 5+ years of
                            experience in the Indian stock market.
                            Trading is my passion and profession, and over the years, I’ve mastered market trends and
                            strategies.
                            My journey from a beginner to a professional trader has been full of learning and growth,
                            and now,
                            I’m here to help you do the same!
                        </p>
                    </div>
                </div>

                <div class="col-xxl-5 d-flex justify-content-xxl-end justify-content-center">
                    <!-- Profile Image Section -->
                    <img src="{{ asset('assets/img/mxstcks.png') }}" alt="Profile Image"
                        class="img-fluid shadow-lg floating-img" width="250" style=" scale:1.5">
                </div>
            </div>
        </div>
    </div>

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