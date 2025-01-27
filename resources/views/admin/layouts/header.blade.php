<style>
    .sticky-navbar {
        position: sticky;
        top: 0;
        z-index: 1030;
        /* Ensure it's above other content */
        background: rgba(0, 0, 0, .5);
        backdrop-filter: blur(5px);
        /* Add slight transparency */
        transition: all 0.3s ease-in-out;
        /* Smooth transition */
        /* Optional shadow for effect */
    }

    /* Shrink logo on scroll */
    .sticky-navbar.scrolled .navbar-brand img {
        width: 120px;
        height: 80px;
        transition: all 0.3s ease-in-out;
    }

    .sticky-navbar.scrolled {
        /* Adjust padding on scroll */
        box-shadow: 0px 5px 5px rgba(98, 206, 62, .3);
        padding-bottom: 30px;

    }

    .container-fluid {
        padding-left: 50px;
        padding-right: 50px;
        padding-top: 30px;
    }

    /* Hamburger to cross transition */
    .navbar-toggler:not(.collapsed) span:nth-child(1) {
        transform: rotate(45deg);
        top: 10px;
        /* Adjusted to place properly when toggled */
    }

    .navbar-toggler:not(.collapsed) span:nth-child(2) {
        opacity: 0;
        /* Hide the middle span */
    }

    .navbar-toggler:not(.collapsed) span:nth-child(3) {
        transform: rotate(-45deg);
        bottom: 11px;
        /* Adjusted to place properly when toggled */
    }
</style>

<nav class="navbar pos navbar-expand-lg bg-none sticky-navbar">
    <div class="container-fluid">
        <a class="navbar-brand" href="{{url('landing')}}">
            <img src="{{ asset('assets/img/logo.png') }}" width="150" height="100">
        </a>

        <div class="cstnav ms-auto d-flex">
            <!-- Buttons aligned to the right -->
            <form action="{{ route('logout.perform') }}" method="POST" class="d-inline">
                @csrf
                <button type="submit" class="btn cstm-btn me-5">Logout</button>
            </form>
        </div>

        <button class="navbar-toggler me-3" id="toggle-sidebar-btn" type="button" 
            data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false"
            aria-label="Toggle navigation">
            <span></span>
            <span></span>
            <span></span>
        </button>

    </div>
</nav>

<script>
    document.addEventListener("scroll", function () {
        const navbar = document.querySelector(".sticky-navbar");
        if (window.scrollY > 50) {
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