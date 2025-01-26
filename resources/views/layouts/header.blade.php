<nav class="navbar navbar-expand-lg bg-none sticky-navbar">
    <a class="navbar-brand" href="{{url('landing')}}">
        <img src="{{ asset('assets/img/logo.png') }}" width="120" height="80" alt="Logo">
    </a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
        aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span></span>
        <span></span>
        <span></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
        <div class="cstnav ms-auto d-flex">
            <!-- Buttons aligned to the right -->
            <a href="{{ url('login') }}" class="btn cstm-btn me-3">Login</a>
            <a href="{{ url('register') }}" class="btn cstm-btn me-2">Sign Up</a>
        </div>
    </div>
</nav>


<script>
    document.addEventListener("scroll", function () {
        const navbar = document.querySelector(".sticky-navbar");
        if (window.scrollY > 20) {
            navbar.classList.add("scrolled");
        } else {
            navbar.classList.remove("scrolled");
        }
    });
</script>