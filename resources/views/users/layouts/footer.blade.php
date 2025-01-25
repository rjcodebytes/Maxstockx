<footer class="footer position-relative" style="z-index: 1; margin-top: 50px;">
    <div class="container">
        <div class="d-flex justify-content-around flex-wrap align-items-start mt-5">
            <!-- Logo Section -->
            <div class="col ftr-logo text-center mb-5 me-4">
                <a class="navbar-brand" href="">
                    <img src="{{ secure_asset('assets/img/logo.png') }}" width="150" height="100" class="ms-5 mt-5">
                </a>
            </div>

            <!-- Maxstockx Section -->
            <div class="col mb-3">
                <h5 class="h5">Maxstockx</h5>
                <ul class="list-unstyled pt-2">
                    <li><a href="{{ url('login') }}"
                            class="text-decoration-none ftr-lnks py-1 d-block">About Us</a></li>
                    <li><a href="{{ url('blog') }}"
                            class="text-decoration-none ftr-lnks py-1 d-block">Blog</a></li>
                    <li><a href="{{ url('contact') }}"
                            class="text-decoration-none ftr-lnks py-1 d-block">Contact Us</a></li>
                </ul>

            </div>

            <!-- Quick Links Section -->
            <div class="col mb-3">
                <h5 class="h5">Quick Links</h5>
                <ul class="list-unstyled pt-2">
                    <li><a href="{{ url('courses') }}" class="text-decoration-none  ftr-lnks py-1 d-block">Courses</a></li>
                    <li><a href="{{ url('pricing') }}" class="text-decoration-none k ftr-lnks py-1 d-block" >Pricing</a></li>
                    <li><a href="{{ url('testimonials') }}" class="text-decoration-none  ftr-lnks py-1 d-block">Testimonials</a></li>
                    <li><a href="{{ url('resources') }}" class="text-decoration-none  ftr-lnks py-1 d-block ">Resources</a></li>
                </ul>
            </div>

            <!-- Support Section -->
            <div class="col mb-3">
                <h5 class="h5">Support</h5>
                <ul class="list-unstyled pt-2">
                    <li><a href="{{ url('faqs') }}" class="text-decoration-none ftr-lnks py-1 d-block">FAQs</a></li>
                    <li><a href="{{ url('help-center') }}" class="text-decoration-none ftr-lnks py-1 d-block ">Help Center</a></li>
                    <li><a href="{{ url('privacy-policy') }}" class="text-decoration-none ftr-lnks py-1 d-block">Privacy Policy</a>
                    </li>
                    <li><a href="{{ url('terms-conditions') }}" class="text-decoration-none ftr-lnks py-1 d-block">Terms &
                            Conditions</a></li> 
                </ul>
            </div>

            <!-- Follow Us Section -->
            <div class="col mb-3">
                <h5 class="h5">Follow Us on</h5>
                <div class="d-flex social-cont pt-2">
                    <a href="https://facebook.com" target="_blank" class="me-3 ftr-lnks social">
                        <i class="fab fa-facebook fa-lg"></i>
                    </a>
                    <a href="https://instagram.com" target="_blank" class="me-3 ftr-lnks social">
                        <i class="fab fa-instagram fa-lg"></i>
                    </a>
                    <a href="https://youtube.com" target="_blank" class="me-3 ftr-lnks social">
                        <i class="fab fa-youtube fa-lg"></i>
                    </a>
                    <a href="https://twitter.com" target="_blank" class="ftr-lnks social">
                        <i class="fab fa-twitter fa-lg"></i>
                    </a>
                </div>
            </div>

            <!-- Get in Touch Section -->
            <div class="col text-center mb-3">
                <h5 class="h5">Get in Touch</h5>
                <p class="ftr-lnks">Email: <a href="mailto:support@maxstockx.com"
                        class="text-decoration-none ftr-lnks">support@maxstockx.com</a></p>
                <p class="ftr-lnks">Phone: +1 (123) 456-7890</p>
            </div>
        </div>
    </div>
</footer>

<!-- Include Font Awesome -->
<link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" rel="stylesheet">