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
</style>

<nav class="navbar pos navbar-expand-lg bg-none sticky-navbar">
        <div class="container-fluid">
            <a class="navbar-brand" href="{{url('landing')}}">
                <img src="{{ asset('assets/img/logo1.png') }}" width="150" height="100">
            </a>

            <div class="cstnav ms-auto d-flex">
                <!-- Buttons aligned to the right -->
                <button id="toggle-sidebar-btn" class="btn cstm-btn navbar-toggler d-lg-none" type="button" onclick="toggleSidebar()"
                    aria-label="Toggle navigation">
                    <i class="fa-solid fa-bars"></i>
                </button>
            </div>
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

        
</script>