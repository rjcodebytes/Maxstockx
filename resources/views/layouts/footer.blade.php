<footer class="footer position-relative" style="z-index: 1; margin-top: 50px;">
    <div class="container">
        <div class="row">
            <!-- Logo Section -->
            <div class="col-md-3 mb-4">
                <a class="navbar-brand" href="">
                    <img src="{{ asset('assets/img/logo.png') }}" width="150" height="100" class="ms-5 mt-5">
                </a>
            </div>

            <!-- Maxstockx Section -->
            <div class="col-md-2 mb-4">
                <h5>Maxstockx</h5>
                <ul class="list-unstyled">
                    <li><a href="{{ url('login') }}" class="text-decoration-none text-white">About Us</a></li>
                    <li><a href="{{ url('blog') }}" class="text-decoration-none text-white">Blog</a></li>
                    <li><a href="{{ url('contact') }}" class="text-decoration-none text-white">Contact Us</a></li>
                </ul>
            </div>

            <!-- Quick Links Section -->
            <div class="col-md-2 mb-4">
                <h5>Quick Links</h5>
                <ul class="list-unstyled">
                    <li><a href="{{ url('courses') }}" class="text-decoration-none text-dark">Courses</a></li>
                    <li><a href="{{ url('pricing') }}" class="text-decoration-none text-dark">Pricing</a></li>
                    <li><a href="{{ url('testimonials') }}" class="text-decoration-none text-dark">Testimonials</a></li>
                    <li><a href="{{ url('resources') }}" class="text-decoration-none text-dark">Resources</a></li>
                </ul>
            </div>

            <!-- Support Section -->
            <div class="col-md-2 mb-4">
                <h5>Support</h5>
                <ul class="list-unstyled">
                    <li><a href="{{ url('faqs') }}" class="text-decoration-none text-dark">FAQs</a></li>
                    <li><a href="{{ url('help-center') }}" class="text-decoration-none text-dark">Help Center</a></li>
                    <li><a href="{{ url('privacy-policy') }}" class="text-decoration-none text-dark">Privacy Policy</a></li>
                    <li><a href="{{ url('terms-conditions') }}" class="text-decoration-none text-dark">Terms & Conditions</a></li>
                </ul>
            </div>

            <!-- Follow Us Section -->
            <div class="col-md-3 mb-4">
                <h5>Follow Us on</h5>
                <div class="d-flex">
                    <a href="https://facebook.com" target="_blank" class="me-3 text-dark">
                        <i class="fab fa-facebook fa-lg"></i>
                    </a>
                    <a href="https://instagram.com" target="_blank" class="me-3 text-dark">
                        <i class="fab fa-instagram fa-lg"></i>
                    </a>
                    <a href="https://youtube.com" target="_blank" class="me-3 text-dark">
                        <i class="fab fa-youtube fa-lg"></i>
                    </a>
                    <a href="https://twitter.com" target="_blank" class="text-dark">
                        <i class="fab fa-twitter fa-lg"></i>
                    </a>
                </div>
            </div>
        </div>

        <!-- Get in Touch Section -->
        <div class="row mt-4">
            <div class="col-md-12 text-center">
                <h5>Get in Touch</h5>
                <p>Email: <a href="mailto:support@maxstockx.com" class="text-decoration-none text-dark">support@maxstockx.com</a></p>
                <p>Phone: +1 (123) 456-7890</p>
            </div>
        </div>
    </div>
</footer>

<!-- Include Font Awesome -->
<link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" rel="stylesheet">
