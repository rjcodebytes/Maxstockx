<style>
    .lgn-btn,
    .sgn-btn {
        width: 100px;
    }
</style>

<nav class="navbar navbar-expand-lg bg-none sticky-navbar" data-aos="flip-up" data-aos-duartion="1000" data-aos-once="true">
    <a class="navbar-brand" href="{{url('landing')}}">
        <img src="{{ asset('assets/img/logo1.png') }}" width="120" height="80" alt="Logo">
    </a>
    <button class="navbar-toggler me-3" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
        aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span></span>
        <span></span>
        <span></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav" style=" transition:.3s">
        <div class="cstnav ms-auto d-flex">
            @if(Auth::check())
                <!-- If user is logged in, show Dashboard button -->
                <a href="{{ route('users.dashboard') }}" class="btn cstm-btn me-3 lgn-btn" style="font-size: 10px">Go to Dashboard</a>
                <form action="{{ route('logout.perform') }}" method="POST" class="d-inline">
                    @csrf
                    <button type="submit" class="btn cstm-btn me-5 lgn-btn">Logout</button>
                </form>
            @else
                <!-- Buttons aligned to the right -->
                <a href="{{ url('login') }}" class="btn cstm-btn me-3 lgn-btn">Login</a>
                <a href="{{ url('register') }}" class="btn cstm-btn me-2 sgn-btn">Sign Up</a>
            @endif
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

    document.addEventListener("DOMContentLoaded", function () {
        const navbarToggler = document.querySelector(".navbar-toggler");

        // Ensure the default state is hamburger
        if (!navbarToggler.classList.contains('collapsed')) {
            navbarToggler.classList.add('collapsed');
        }
    });

</script>