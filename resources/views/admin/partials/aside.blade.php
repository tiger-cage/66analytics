<section class="admin-sidebar">
    <div class="admin-sidebar-title">
        <a href="{{ url('owner') }}" class="text-decoration-none text-truncate">
            <img src="{{ asset('images/default/favicon.png') }}" class="img-fluid admin-navbar-logo"
                alt="Website Logo" />
        </a>
    </div>

    <ul class="admin-sidebar-links">
        <li class="active">
            <a class="nav-link d-flex flex-row" href="{{ url('owner') }}">
                <div class="col-1 d-flex align-items-center"><i class="fa fa-fw fa-sm fa-tv"></i></div>
                <div class="col">
                    <span class="d-inline">Dashboard</span>
                </div>
            </a>
        </li>

        <li class="">
            <a class="nav-link d-flex flex-row" href="{{ asset('admin/user') }}">
                <div class="col-1 d-flex align-items-center"><i class="fa fa-fw fa-sm fa-users"></i></div>
                <div class="col">
                    <span class="d-inline">Users</span>
                </div>
            </a>
        </li>

        <li class="">
            <a class="nav-link d-flex flex-row" href="{{ asset('admin/user-logs') }}">
                <div class="col-1 d-flex align-items-center"><i class="fa fa-fw fa-sm fa-scroll"></i></div>
                <div class="col">
                    <span class="d-inline">Users logs</span>
                </div>
            </a>
        </li>

        <li class="">
            <a class="nav-link d-flex flex-row" href="{{ asset('admin/websites') }}">
                <div class="col-1 d-flex align-items-center"><i class="fa fa-fw fa-sm fa-server"></i></div>
                <div class="col">
                    <span class="d-inline">Websites</span>
                </div>
            </a>
        </li>

        <li class="">
            <a class="nav-link d-flex flex-row" href="{{ asset('admin/pages') }}">
                <div class="col-1 d-flex align-items-center"><i class="fa fa-fw fa-sm fa-file-alt"></i></div>
                <div class="col">
                    <span class="d-inline">Pages</span>
                </div>
            </a>
        </li>

        <li class="">
            <a class="nav-link d-flex flex-row" href="{{ asset('admin/plans') }}">
                <div class="col-1 d-flex align-items-center"><i class="fa fa-fw fa-sm fa-box-open"></i></div>
                <div class="col">
                    <span class="d-inline">Plans</span>
                </div>
            </a>
        </li>

        <li class="">
            <a class="nav-link d-flex flex-row" href="{{ asset('admin/codes') }}">
                <div class="col-1 d-flex align-items-center"><i class="fa fa-fw fa-sm fa-tags"></i></div>
                <div class="col">
                    <span class="d-inline">Codes</span>
                </div>
            </a>
        </li>

        <li class="">
            <a class="nav-link d-flex flex-row" href="{{ asset('admin/taxes') }}">
                <div class="col-1 d-flex align-items-center"><i class="fa fa-fw fa-sm fa-receipt"></i></div>
                <div class="col">
                    <span class="d-inline">Taxes</span>
                </div>
            </a>
        </li>

        <li class="">
            <a class="nav-link d-flex flex-row" href="{{ asset('admin/payments') }}">
                <div class="col-1 d-flex align-items-center"><i class="fa fa-fw fa-sm fa-dollar-sign"></i></div>
                <div class="col">
                    <span class="d-inline">Payments</span>
                </div>
            </a>
        </li>


        <li class="">
            <a class="nav-link d-flex flex-row" href="{{ asset('admin/statistics') }}">
                <div class="col-1 d-flex align-items-center"><i class="fa fa-fw fa-sm fa-chart-line"></i></div>
                <div class="col">
                    <span class="d-inline">Statistics</span>
                </div>
            </a>
        </li>

        <li class="">
            <a class="nav-link d-flex flex-row" href="{{ asset('admin/api-docs') }}">
                <div class="col-1 d-flex align-items-center"><i class="fa fa-fw fa-sm fa-code"></i></div>
                <div class="col">
                    <span class="d-inline">API docs</span>
                </div>
            </a>
        </li>

        <li class="">
            <a class="nav-link d-flex flex-row" href="{{ asset('admin/plugins') }}">
                <div class="col-1 d-flex align-items-center"><i class="fa fa-fw fa-sm fa-puzzle-piece"></i>
                </div>
                <div class="col">
                    <span class="d-inline">Plugins</span>
                </div>
            </a>
        </li>

        <li class="">
            <a class="nav-link d-flex flex-row" href="{{ asset('admin/website-setting') }}">
                <div class="col-1 d-flex align-items-center"><i class="fa fa-fw fa-sm fa-wrench"></i></div>
                <div class="col">
                    <span class="d-inline">Website Settings</span>
                </div>
            </a>
        </li>
    </ul>

    <hr />

    <ul class="admin-sidebar-links">
        <li>
            <a class="nav-link d-flex flex-row" target="_blank" href="{{ asset('dashboard') }}">
                <div class="col-1 d-flex align-items-center"><i class="fa fa-fw fa-sm fa-home"></i></div>
                <div class="col">
                    <span class="d-inline">Visit website</span>
                </div>
            </a>
        </li>

        <li class="dropdown">
            <a class="nav-link d-flex flex-row dropdown-toggle dropdown-toggle-simple" data-toggle="dropdown" href="#"
                aria-haspopup="true" aria-expanded="false">
                <div class="col-1 d-flex align-items-center"><img
                        src="https://www.gravatar.com/avatar/21232f297a57a5a743894a0e4a801fc3?s=80&d=mp&r=g"
                        class="admin-avatar" /></div>
                <div class="col text-truncate">
                    <span class="d-inline">AltumCode</span>
                </div>
            </a>
            <div class="dropdown-menu dropdown-menu-right">
                <a class="dropdown-item" href="{{ url('users/accounts') }}">
                    <i class="fa fa-fw fa-sm fa-wrench mr-1"></i>
                    Account
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
</section>
