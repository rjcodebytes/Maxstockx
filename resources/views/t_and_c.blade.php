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
            color: #84cc16;
        }
    </style>

</head>

<body>
    <!--Header Section-->
    @include('layouts.header')

    <div class="container mt-5" id="terms-conditions">
        <h1 class="text-center text-lime">Terms and Conditions</h1>
        <p class="text-white text-center">Last updated on Feb 1st, 2025</p>

        <div class="alert alert-info text-center mb-5" style=" background:none; border-width: 2px;
  border-style: solid;
  border-image: linear-gradient(90deg, transparent, green, transparent) 1; color:white ">For the purpose of these Terms
            and Conditions, The term <strong class="text-lime">“we”, “us”, “our”</strong> used anywhere on this page
            shall mean
            <strong class="text-lime">MAXSTOCKX</strong>. The terms <strong class="text-lime">“you”, “your”, “user”,
                “visitor”</strong> shall mean any
            natural or legal person who is visiting our website and/or agreed to purchase from us.
        </div>

        <h3 class="text-lime">General Terms</h3>
        <ul class="list-group text-center mb-5" style=" background:none; border-width: 2px;
  border-style: solid;
  border-image: linear-gradient(90deg, transparent, green, transparent) 1; color:white ">
            <li class="list-group-item" style=" background: none; border:none; color: white">The content of the pages of
                this website is subject to change without notice.
            </li>
            <li class="list-group-item" style=" background: none; border:none; color: white">Neither we nor any third
                parties provide any warranty or guarantee as to the
                accuracy, timeliness, performance, completeness or suitability of the information and materials found or
                offered on this website.</li>
            <li class="list-group-item" style=" background: none; border:none; color: white">Your use of any information
                or materials on our website and/or product pages is
                entirely at your own risk.</li>
        </ul>

        <h3 class="text-lime mt-4">Intellectual Property</h3>
        <ul class="list-group text-center mb-5" style=" background:none; border-width: 2px;
  border-style: solid;
  border-image: linear-gradient(90deg, transparent, green, transparent) 1; color:white ">
            <li class="list-group-item" style=" background: none; border:none; color: white">Our website contains
                material which is owned by or licensed to us. This includes
                design, layout, look, appearance, and graphics.</li>
            <li class="list-group-item" style=" background: none; border:none; color: white">Reproduction is prohibited
                other than in accordance with the copyright notice.
            </li>
            <li class="list-group-item" style=" background: none; border:none; color: white">All trademarks reproduced
                in our website which are not the property of, or
                licensed to, the operator are acknowledged on the website.</li>
        </ul>

        <h3 class="text-lime mt-4">Liability & Disclaimers</h3>
        <ul class="list-group text-center mb-5" style=" background:none; border-width: 2px;
  border-style: solid;
  border-image: linear-gradient(90deg, transparent, green, transparent) 1; color:white ">
            <li class="list-group-item" style=" background: none; border:none; color: white">Unauthorized use of
                information provided by us shall give rise to a claim for
                damages and/or be a criminal offense.</li>
            <li class="list-group-item" style=" background: none; border:none; color: white">We shall not be liable for
                any loss or damage arising directly or indirectly out
                of the decline of authorization for any transaction.</li>
            <li class="list-group-item" style=" background: none; border:none; color: white">Any dispute arising out of
                use of our website and/or purchase with us is subject
                to the laws of India.</li>
        </ul>

        <h3 class="text-lime mt-4">External Links</h3>
        <div class="alert alert-info text-center mb-5" style=" background:none; border-width: 2px;
  border-style: solid;
  border-image: linear-gradient(90deg, transparent, green, transparent) 1; color:white ">From time to time, our website
            may include links to other websites. These links are provided for your
            convenience. You may not create a link to our website from another website or document without MAXSTOCKX’s
            prior written
            consent.</div>

        <footer class="mt-5 text-center text-lime">&copy; 2025 MaxStockx. All rights reserved.</footer>
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