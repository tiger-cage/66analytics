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
                    <a class="nav-link" href="{{ url('pricing') }}"> Pricing</a>
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
                    <li class="dropdown">
                        <a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#" aria-haspopup="true"
                            aria-expanded="false">
                            <img src="https://www.gravatar.com/avatar/2843191880bc0018cdb526e39ffa5757?s=80&d=mp&r=g"
                                class="navbar-avatar mr-1" />
                            {{ auth()->user()->name }} <span class="caret"></span>
                        </a>

                        <div class="dropdown-menu dropdown-menu-right">
                            <a class="dropdown-item" href="{{ url('teams') }}"><i
                                    class="fa fa-fw fa-sm fa-user-shield mr-1"></i> Teams</a>
                            <a class="dropdown-item" href="{{ url('accounts') }}"><i
                                    class="fa fa-fw fa-sm fa-wrench fa-fw mr-1"></i> Account</a>
                            <a class="dropdown-item" href="{{ url('plans') }}-plan"><i
                                    class="fa fa-fw fa-sm fa-box-open fa-fw mr-1"></i> Plan</a>
                            <a class="dropdown-item" href="{{ url('payments') }}-payments"><i
                                    class="fa fa-fw fa-sm fa-dollar-sign mr-1"></i> Payments</a>

                            <a class="dropdown-item" href="{{ url('api') }}-api"><i
                                    class="fa fa-fw fa-sm fa-code mr-1"></i> API</a>
                            {{-- <a class="dropdown-item" href="http://localhost/project/product/logout"><i
                                    class="fa fa-fw fa-sm fa-sign-out-alt fa-fw mr-1"></i> Logout</a> --}}
                            <div>
                                <a class="dropdown-item" href="{{ route('logout') }}"
                                    onclick="event.preventDefault();
                                                                             document.getElementById('logout-form').submit();">
                                    <i class="fa fa-fw fa-sm fa-sign-out-alt fa-fw mr-1"></i> {{ __('Logout') }}
                                </a>

                                <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                    @csrf
                                </form>
                            </div>
                        </div>
                    </li>
                @endguest


            </ul>
        </div>
    </div>
</nav>
