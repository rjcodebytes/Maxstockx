<nav class="navbar navbar-expand-lg bg-none">
        <div class="container-fluid">
            <a class="navbar-brand" href="">
                <img src="{{ asset('assets/img/logo.png') }}" width="150" height="100" class="ms-5 mt-5">
            </a>
            <div class="cstnav ms-auto d-flex mt-5">
                <!-- Buttons aligned to the right -->
                <a href="{{ url('login') }}" class="btn cstm-btn me-5">Login</a>
                <a href="{{ url('register') }}" class="btn cstm-btn me-5">Sign Up</a>
            </div>
        </div>
</nav>