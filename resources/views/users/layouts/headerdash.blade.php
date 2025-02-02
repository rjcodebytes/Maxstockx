<style>
    @media (max-width: 767px) {
        .btn {
            width: 35px !important;
        }
    }

    /* Hamburger to cross transition */

    .cnvtg {
        background: none;
        padding: 0;
        position: relative;
        display: flex;
        flex-direction: column;
        justify-content: center;
        align-items: center;
        height: 35px;
        width: 35px;
        cursor: pointer;
        box-shadow: 0px 0px 5px 5px #62CE3E;
        transition: .3s
    }

    .cnvtg span {
        display: block;
        width: 24px;
        height: 2.5px;
        /* Adjust the height for better visibility */
        background-color: white;
        margin: 4px 0;
        transition: all 0.3s ease-in-out;
        position: relative;
        border-radius: 10px;
    }

    .cnvtg:hover {
        background-color: black;
    }
</style>

<nav class="navbar  navbar-expand-lg bg-none sticky-navbar">
    <div class="container-fluid">
        <a class="navbar-brand" href="{{url('landing')}}">
            <img src="{{ asset('assets/img/logo1.png') }}" width="150" height="100">
        </a>

        <!-- Sidebar Toggle Button -->
        <button class="btn cnvtg btn-outline-light me-3" type="button" data-bs-toggle="offcanvas"
            data-bs-target="#offcanvasSidebar" aria-controls="offcanvasSidebar">
            <span></span>
            <span></span>
            <span></span>
        </button>

    </div>
</nav>

<script>
    document.addEventListener("scroll", function () {
        const navbar = document.querySelector(".sticky-navbar");
        if (window.scrollY > 10) {
            navbar.classList.add("scrolled");
        } else {
            navbar.classList.remove("scrolled");
        }
    });


</script>