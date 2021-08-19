{{-- @extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Register') }}</div>

                <div class="card-body">
                    <form method="POST" action="{{ route('register') }}">
                        @csrf

                        <div class="form-group row">
                            <label for="name" class="col-md-4 col-form-label text-md-right">{{ __('Name') }}</label>

                            <div class="col-md-6">
                                <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>

                                @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('E-Mail Address') }}</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="password" class="col-md-4 col-form-label text-md-right">{{ __('Password') }}</label>

                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="password-confirm" class="col-md-4 col-form-label text-md-right">{{ __('Confirm Password') }}</label>

                            <div class="col-md-6">
                                <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">
                            </div>
                        </div>

                        <div class="form-group row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Register') }}
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection --}}




@extends('auth.app')
@section('content')
    <main class="animate__animated animate__fadeIn">

        <div class="container mt-8 mb-3">
            <div class="d-flex justify-content-center">
                <a href="https://66analytics.com/demo/" class="text-decoration-none text-dark">
                    <img src="https://66analytics.com/demo/uploads/logo/logo.png" class="img-fluid navbar-logo"
                        alt="Website Logo" />
                </a>
            </div>
        </div>


        <div class="container">

            <div class="d-flex flex-column align-items-center">
                <div class="card border-0 col-xs-12 col-sm-10 col-md-7 col-lg-5">
                    <div class="card-body">

                        <h4 class="card-title">Register</h4>

                        <form method="POST" action="{{ route('register') }}" class="mt-4" role="form">
                            @csrf
                            <div class="form-group">
                                <input id="name" type="text" class="form-control @error('name') is-invalid @enderror"
                                    name="name" value="{{ old('name') }}" placeholder="Your Full Name" required
                                    autocomplete="name" autofocus>

                                @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>

                            <div class="form-group">
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror"
                                    name="email" value="{{ old('email') }}" placeholder="Email" required
                                    autocomplete="email">

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>

                            <div class="form-group">
                                <input id="password" type="password"
                                    class="form-control @error('password') is-invalid @enderror" name="password"
                                    placeholder="Password" required autocomplete="new-password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            <div class="form-group">
                                <input id="password-confirm" type="password" class="form-control"
                                    name="password_confirmation" placeholder="Confirm Password" required
                                    autocomplete="new-password">
                            </div>
                            {{-- <div class="form-group">

                                <img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAHgAAAAeBAMAAAAV58emAAAAGFBMVEX///8AAAA/Pz8/Pz8/Pz8/Pz8/Pz8/Pz8UHZJlAAAACXBIWXMAAA7EAAAOxAGVKw4bAAAA/UlEQVQ4y+1TsQ6CMBRsBZz7Et2NX2DSH8CkiSsMjasTs4lDf9/SvpbSAmplcPAGeNDeu7tHIWQV8NPnnFIprAqewdd0dff8DPmLcgZy5AkRChsUmXyBCbLs6wACE+TJa741UOTzjYG37IO9UQBg9gUwYQwoiXyKK8RtcaAwlAyvYAYozpr/6O0DKuBSIByThy47IeqrpnMWL8W2wwrcDUpRy0ZPn6e7x4++qQuGUSvZAsPpR5kTvZGyLfaydYdnRjlI4yfni0qb7w8Pn8kc9EzJlFXN1J8PyaiPPQ6B7YVPhQtHj2hgC4dEY2Mo5I+X2HYeX/XpJnD7BWMr4wmQojw1cmEbiwAAAABJRU5ErkJggg=="
                                    class="mb-2" id="captcha" alt="Captcha" />
                                <input type="text" name="captcha" class="form-control form-control-lg "
                                    placeholder="Captcha text" aria-label="Captcha Field" required="required"
                                    autocomplete="off" />

                            </div> --}}



                            <div class="custom-control custom-checkbox">
                                <input type="checkbox" name="accept" class="custom-control-input" id="accept"
                                    required="required">
                                <label class="custom-control-label" for="accept">
                                    <small class="text-muted">
                                        I confirm that I have read and understood the <a href="" target="_blank">Terms
                                            and Conditions</a> and <a href="" target="_blank">Privacy Policy</a> of the
                                        site.
                                    </small>
                                </label>
                            </div>
                            <div class="form-group mt-3">
                                <button type="submit" name="submit" class="btn btn-primary btn-lg btn-block">
                                    Register
                                </button>
                            </div>
                        </form>
                    </div>
                </div>

                <div class="mt-4">
                    <a href="login" class="text-muted">Already have an account?</a>
                </div>
            </div>
        </div>



    </main>
@endsection
