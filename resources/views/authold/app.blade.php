<!DOCTYPE html>
<html lang="en" dir="ltr">

<head>
    <title>User session analytics - 66Analytics Demo</title>
    <base href="https://66analytics.com/demo/">
    <meta http-equiv="content-type" content="text/html; charset=UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta http-equiv="content-language" content="en" />
    <meta name="robots" content="noindex">
    {{-- <link rel="alternate" href="https://66analytics.com/demo/login" hreflang="x-default" /> --}}
    <link href="{{ asset('images/default/favicon.png') }}" rel="shortcut icon" />
    <link href="{{ asset('ui/css/bootstrap.min.css?v=710') }}" id="css_theme_style" rel="stylesheet"
        media="screen,print">
    <link href="{{ asset('ui/css/custom.css?v=710') }}" rel="stylesheet" media="screen,print">
    <link href="{{ asset('ui/css/animate.min.css?v=710') }}" rel="stylesheet" media="screen,print">
    <link href="{{ asset('ui/css/media.css') }}" rel="stylesheet">
    <script defer src="https://66analytics.com/demo/pixel/tSxQbH9Bngbtrzjl"></script>
</head>

<body class=" bg-white" data-theme-style="light">
    @yield('content')
    <input type="hidden" name="global_url" value="https://66analytics.com/demo/" />
    <input type="hidden" name="global_token" value="36b3f8efb686ed63f4aef4909413df38" />
    <input type="hidden" name="global_number_decimal_point" value="." />
    <input type="hidden" name="global_number_thousands_separator" value="," />
    <script>
        /* Some global variables */
        window.altum = {};
        let global_token = document.querySelector('input[name="global_token"]').value;
        let url = document.querySelector('input[name="global_url"]').value;
        let decimal_point = document.querySelector('[name="global_number_decimal_point"]').value;
        let thousands_separator = document.querySelector('[name="global_number_thousands_separator"]').value;
    </script>
    <script src="{{ asset('ui/js/jquery.min.js?v=710') }}"></script>
    <script src="{{ asset('ui/js/popper.min.js?v=710') }}"></script>
    <script src="{{ asset('ui/js/bootstrap.min.js?v=710') }}"></script>
    <script src="{{ asset('ui/js/main.js?v=710') }}"></script>
    <script src="{{ asset('ui/js/functions.js?v=710') }}"></script>
    <script src="{{ asset('ui/js/fontawesome.min.js?v=710') }}"></script>
    <script src="{{ asset('ui/js/fontawesome-solid.min.js?v=710') }}"></script>
    <script src="{{ asset('ui/js/fontawesome-brands.modified.js?v=710') }}"></script>

</body>

</html>
