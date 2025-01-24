<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>MaxStockx-Dashboard</title>
    <link href="{{ asset('assets/css/bootstrap.min.css') }}" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('assets/css/custom/cstyle.css') }}">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-icons/1.10.5/font/bootstrap-icons.min.css"
        rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link rel="icon" type="image/png" href="{{ asset('assets/img/flogo.png') }}" sizes="16x16">
    <!-- AOS CSS -->
    <link href="https://cdn.jsdelivr.net/npm/aos@2.3.4/dist/aos.css" rel="stylesheet">

    <link
        href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap"
        rel="stylesheet">

    <style>
        /* Responsive adjustments */
        @media (max-width: 768px) {
            #sidebar {
                max-width: 0;
                /* Sidebar hidden in mobile view */
            }

            #main {
                margin-left: 0;
                /* Main takes full width in mobile view */
            }
        }

        @media (min-width: 769px) {
            #sidebar {
                max-width: 250px;
                /* Sidebar visible in desktop view */
            }

            #main {
                margin-left: 0px;
                /* Main starts next to the sidebar */
            }


        }

        #preloader {
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background: #000;
            /* Background color */
            display: flex;
            justify-content: center;
            align-items: center;
            z-index: 9999;
        }

        #preloader img {
            width: 120px;
            animation: blink 1s infinite;
        }

        /* Smooth blinking animation */
        @keyframes blink {

            0%,
            100% {
                opacity: 1;
            }

            50% {
                opacity: 0.2;
            }
        }

        /* Hide the main content initially */
        body.content-hidden {
            overflow: hidden;
        }

        body.content-hidden #layout-container {
            display: none;
        }

        #preloader .brand-name {
            font-family: 'Poppins', sans-serif;
            font-size: 24px;
            color: #fff;
            opacity: 0;
            transform: translateY(100px); /* Start off-screen */
            transition: opacity 0.5s ease, transform 0.5s ease;
        }
    </style>
    @yield('style')
</head>

<body>
    <!-- Preloader -->
    <div id="preloader">
        <img src="{{ asset('assets/img/flogo.png') }}" alt="MaxStockx Logo">
    </div>

    @include("users.layouts.headerdash")


    <div id="layout-container" class="d-flex" style="height: 100vh;">

        @include("users.layouts.sidebar")

        <main id="main" style="
        flex-grow:1;
        padding: 20px 40px;
        height: 100vh;
        transition: margin-left 0.3s ease, width 0.3s ease;
        float: left; ;
    " class="main">

            @yield('content')

        </main>
    </div>


    @include("users.layouts.footer")

    @yield('script')

    <script>
        const toggleButton = document.getElementById('toggle-sidebar-btn');
        const sidebar = document.getElementById('sidebar');
        const main = document.getElementById('main');

        toggleButton.addEventListener('click', () => {
            if (sidebar.style.maxWidth === '0px' || sidebar.style.maxWidth === '') {
                // Show sidebar
                sidebar.style.maxWidth = '250px';
                main.style.marginLeft = '0px';
            } else {
                // Hide sidebar
                sidebar.style.maxWidth = '0px';
                main.style.marginLeft = '0';
            }
        });

        // Ensure correct layout when resizing the window
        window.addEventListener('resize', () => {
            if (window.innerWidth >= 769) {
                sidebar.style.maxWidth = '250px'; // Ensure sidebar is visible in desktop view
                main.style.marginLeft = '0px';
            } else {
                sidebar.style.maxWidth = '0px'; // Ensure sidebar is hidden in mobile view
                main.style.marginLeft = '0';
            }
        });

        window.addEventListener('load', () => {
            setTimeout(() => {
                // Hide the preloader
                document.getElementById('preloader').style.display = 'none';

                // Show the main content
                document.body.classList.remove('content-hidden');
            }, 2000); // Preloader duration: 6 seconds
        });
    </script>

</body>

</html>