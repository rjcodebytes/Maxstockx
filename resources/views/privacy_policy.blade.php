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

    <div class="container mt-5">
        <h1 class="text-center text-lime">Privacy Policy</h1>
        <p class="text-white">This privacy policy sets out how <strong class="text-lime">Maxstockx</strong> uses and
            protects any
            information that you give Maxstockx when you visit our website and/or agree to purchase from us.</p>

        <div class="alert alert-info text-center mb-5" style=" background:none; border-width: 2px;
  border-style: solid;
  border-image: linear-gradient(90deg, transparent, green, transparent) 1; color:white ">Maxstockx is committed to
            ensuring that your privacy is protected.</div>

        <h3 class="text-lime mt-4">Information We Collect</h3>
        <ul class="list-group text-center mb-5" style=" background:none; border-width: 2px;
  border-style: solid;
  border-image: linear-gradient(90deg, transparent, green, transparent) 1; color:white ">
            <li class="list-group-item" style=" background: none; border:none; color: white">Name</li>
            <li class="list-group-item" style=" background: none; border:none; color: white">Contact information
                including email address</li>
            <li class="list-group-item" style=" background: none; border:none; color: white">Demographic information
                such as postcode, preferences, and interests</li>
            <li class="list-group-item" style=" background: none; border:none; color: white">Other information relevant
                to customer surveys and/or offers</li>
        </ul>

        <h3 class="text-lime mt-4">How We Use This Information</h3>
        <ul class="list-group text-center" style=" background:none; border-width: 2px;
  border-style: solid;
  border-image: linear-gradient(90deg, transparent, green, transparent) 1; color:white ">
            <li class="list-group-item" style=" background: none; border:none; color: white">Internal record keeping
            </li>
            <li class="list-group-item" style=" background: none; border:none; color: white">Improving our products and
                services</li>
            <li class="list-group-item" style=" background: none; border:none; color: white">Sending promotional emails
                about new products, special offers, or other
                information</li>
            <li class="list-group-item" style=" background: none; border:none; color: white">Market research purposes
                (via email, phone, fax, or mail)</li>
            <li class="list-group-item" style=" background: none; border:none; color: white">Customizing the website
                according to your interests</li>
        </ul>

        <h3 class="text-lime mt-4 ">Security</h3>
        <div class="alert alert-info text-center mb-5" style=" background:none; border-width: 2px;
  border-style: solid;
  border-image: linear-gradient(90deg, transparent, green, transparent) 1; color:white ">We are committed to ensuring
            that your information is secure. Suitable measures have been implemented to
            prevent unauthorized access or disclosure.</div>

        <h3 class="text-lime mt-4">Cookies</h3>
        <div class="alert alert-info text-center mb-5" style=" background:none; border-width: 2px;
  border-style: solid;
  border-image: linear-gradient(90deg, transparent, green, transparent) 1; color:white ">Cookies allow web applications
            to respond to you as an individual by gathering
            and remembering information
            about your preferences. You can choose to accept or decline cookies. Most browsers accept cookies by
            default, but you can modify your settings to decline cookies.</div>

        <h3 class="text-lime mt-4">Controlling Your Personal Information</h3>
        <ul class="list-group text-center" style=" background:none; border-width: 2px;
  border-style: solid;
  border-image: linear-gradient(90deg, transparent, green, transparent) 1; color:white ">
            <li class="list-group-item" style=" background: none; border:none; color: white">You can opt out of direct
                marketing by selecting the appropriate options when
                filling out a form.</li>
            <li class="list-group-item" style=" background: none; border:none; color: white">You can change your
                preferences at any time by contacting us.</li>
            <li class="list-group-item" style=" background: none; border:none; color: white">We will not sell,
                distribute, or lease your personal information to third
                parties without your permission.</li>
        </ul>

        <footer class="mt-5 text-center text-lime ">&copy; 2025 MaxStockx. All rights reserved.</footer>
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