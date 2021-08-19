@extends('auth.app')

@section('content')

    <main class="animate__animated animate__fadeIn">

        <div class="container mt-8 mb-3">
            <div class="d-flex justify-content-center">
                <a href="{{ url('/') }}" class="text-decoration-none text-dark">
                    <img src="{{ asset('images/default/favicon.png') }}" width="50px" class="img-fluid navbar-logo"
                        alt="Website Logo" />
                </a>
            </div>
        </div>


        <div class="container">

            <div class="d-flex flex-column align-items-center">
                <div class="card border-0 col-xs-12 col-sm-10 col-md-7 col-lg-5">
                    <div class="card-body">

                        <form method="POST" action="{{ route('login') }}" class="mt-4" role="form">
                            @csrf
                            <div class="form-group">
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror"
                                    name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                                {{-- <input type="text" name="email" class="form-control form-control-lg "
                                placeholder="Email Address" value="admin" aria-label="Email Address" required="required"
                                autofocus="autofocus" /> --}}
                            </div>

                            <div class="form-group">
                                <input id="password" type="password"
                                    class="form-control @error('password') is-invalid @enderror" name="password" required
                                    autocomplete="current-password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                                {{-- <input type="password" name="password" class="form-control form-control-lg "
                                placeholder="Password" aria-label="Password" value="admin" required="required" /> --}}
                            </div>



                            <div class="d-flex flex-column flex-md-row justify-content-between align-items-md-center">
                                <div class="custom-control custom-checkbox form-check">
                                    <input class="form-check-input" type="checkbox" name="remember" id="remember"
                                        {{ old('remember') ? 'checked' : '' }}>

                                    <label class="form-check-label" for="remember">
                                        {{ __('Remember Me') }}
                                    </label>
                                </div>

                                <small>
                                    <a href="{{ route('password.request') }}" class="text-muted">Lost Password</a>
                                    {{-- <a href="{{ route('password.request') }}" class="text-muted" role="button">
                                    Resend Activation
                                </a> --}}
                                </small>
                            </div>


                            <div class="form-group mt-3">
                                <button type="submit" name="submit"
                                    class="btn btn-primary btn-lg btn-block my-1">Login</button>
                            </div>

                            <div class="row">
                            </div>

                        </form>
                    </div>
                </div>

                <div class="mt-4">
                    Don't have an account? <a href="{{ url('register') }}" class="font-weight-bold">Register</a></a>
                </div>
            </div>
        </div>

    </main>
@endsection
