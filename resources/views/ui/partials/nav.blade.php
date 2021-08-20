<nav class="navbar navbar-main mb-8 navbar-expand-lg navbar-light bg-white">
    <div class="container">
        <a class="navbar-brand" href="{{ url('/') }}">
            <img src="{{ asset('images/default/favicon.png') }}" class="img-fluid navbar-logo" alt="Website Logo" />
        </a>
        <button class="btn navbar-custom-toggler d-lg-none" type="button" data-toggle="collapse"
            data-target="#main_navbar" aria-controls="main_navbar" aria-expanded="false" aria-label="Toggle navigation">
            <i class="fa fa-fw fa-bars"></i>
        </button>
        <div class="collapse navbar-collapse justify-content-end" id="main_navbar">
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link" href="http://localhost:8000/#pricing"> Pricing</a>
                </li>
                <li class="nav-item"><a class="nav-link" href="{{ url('help') }}"> Help</a></li>
                @guest
                    <li class="nav-item active">
                        <a class="nav-link" href="{{ url('login') }}">
                            <i class="fa fa-fw fa-sm fa-sign-in-alt"></i> Login
                        </a>
                    </li>
                    <li class="nav-item active">
                        <a class="nav-link" href="{{ url('register') }}">
                            <i class="fa fa-fw fa-sm fa-plus"></i> Register
                        </a>
                    </li>
                @else


                    <li class="nav-item"><a class="nav-link" href="{{ url('dashboard') }}">
                            Dashboard</a></li>

                @endguest


            </ul>
        </div>
    </div>
</nav>
