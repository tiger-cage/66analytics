<nav class="navbar app-navbar navbar-expand-lg navbar-light bg-white">
    <div class="container-fluid">
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#main_navbar"
            aria-controls="main_navbar" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse justify-content-end" id="main_navbar">
            <ul class="navbar-nav align-items-lg-center">
                <li class="ml-lg-3 dropdown">
                    <a class="nav-link dropdown-toggle dropdown-toggle-simple" data-toggle="dropdown" href="#"
                        aria-haspopup="true" aria-expanded="false">
                        <div class="d-flex align-items-center">
                            <img src="https://www.gravatar.com/avatar/21a393b4dc948271a5142d2e898bc39e?s=80&d=mp&r=g"
                                class="app-navbar-avatar mr-3" />
                            <div class="d-flex flex-column mr-3">
                                <span class="text-gray-700">Rakibul Islam</span>
                                <small class="text-muted">kuyashaafrim18@gmail.com</small>
                            </div>
                            <i class="fa fa-fw fa-caret-down"></i>
                        </div>
                    </a>
                    <div class="dropdown-menu dropdown-menu-right">
                        <a class="dropdown-item" href="{{ url('admin') }}">
                            <i class="fa fa-fw fa-sm fa-user-shield mr-1"></i>Admin
                        </a>
                        <a class="dropdown-item" href="{{ url('users/teams') }}">
                            <i class="fa fa-fw fa-sm fa-user-shield mr-1"></i>Teams
                        </a>
                        <a class="dropdown-item" href="{{ url('users/accounts') }}">
                            <i class="fa fa-fw fa-sm fa-wrench mr-1"></i>Account
                        </a>
                        <a class="dropdown-item" href="{{ url('users/plans') }}">
                            <i class="fa fa-fw fa-sm fa-box-open mr-1"></i> Plan
                        </a>
                        <a class="dropdown-item" href="{{ url('users/payments') }}">
                            <i class="fa fa-fw fa-sm fa-dollar-sign mr-1"></i>Payments
                        </a>
                        <a class="dropdown-item" href="{{ url('users/api') }}">
                            <i class="fa fa-fw fa-sm fa-code mr-1"></i>API
                        </a>
                        <form method="POST" action="{{ route('logout') }}"> @csrf <x-jet-responsive-nav-link
                                href="{{ route('logout') }}" onclick="event.preventDefault();
                                                    this.closest('form').submit();">
                                <i class="fa fa-fw fa-sm fa-sign-out-alt mr-1"></i>
                                {{ __('Log Out') }}
                            </x-jet-responsive-nav-link>
                        </form>
                    </div>
                </li>
            </ul>
        </div>
    </div>
</nav>
