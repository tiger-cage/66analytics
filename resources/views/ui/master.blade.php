<!DOCTYPE html>
<html lang="en" dir="ltr">

<head>
    <title>User session analytics - 66Analytics Demo</title>
    <base href="https://66analytics.com/demo/">
    <meta http-equiv="content-type" content="text/html; charset=UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta http-equiv="content-language" content="en" />
    <meta name="robots" content="noindex">
    {{-- <link rel="alternate" href="https://66analytics.com/demo/" hreflang="x-default" /> --}}
    <link href="{{ asset('images/default/favicon.png') }}" rel="shortcut icon" />
    <link href="{{ asset('ui/css/bootstrap.min.css?v=710') }}" id="css_theme_style" rel="stylesheet"
        media="screen,print">
    <link href="{{ asset('ui/css/custom.css?v=710') }}" rel="stylesheet" media="screen,print">
    <link href="{{ asset('ui/css/animate.min.css?v=710') }}" rel="stylesheet" media="screen,print">
    <link href="{{ asset('ui/css/media.css') }}" rel="stylesheet">
    <script defer src="https://66analytics.com/demo/pixel/tSxQbH9Bngbtrzjl"></script>
</head>

<body class=" bg-white" data-theme-style="light">

    <script>
        if (window.location !== window.parent.location) {
            window.top.location.href = "https:\/\/66analytics.com\/demo\/";
        }
    </script>


    {{-- <div class="ac-wrapper">
        <a href="https://altumcode.com/" target="_blank" class="ac-altumcode-link">
            <img src="https://altumcode.com/themes/altum/assets/images/altumcode.svg" alt="AltumCode logo"
                class="ac-altumcode-image" />
            <span>66Analytics by AltumCode</span>
        </a>

        <div>
            <a href="https://altumcode.com/contact" target="_blank" class="ac-secondary">Any questions? ✉️</a>
            <a href="https://altumco.de/66analytics-buy" class="ac-primary">Buy 66Analytics</a>
        </div>
    </div> --}}

    @include('ui.partials.nav')
    @yield('content')
    @include('ui.partials.footer')


    <input type="hidden" name="global_url" value="https://66analytics.com/demo/" />
    <input type="hidden" name="global_token" value="36b3f8efb686ed63f4aef4909413df38" />
    <input type="hidden" name="global_number_decimal_point" value="." />
    <input type="hidden" name="global_number_thousands_separator" value="," />

    <script>
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

    <script>
        'use strict';

        let payment_frequency_handler = (event = null) => {

            let payment_frequency = null;

            if (event) {
                payment_frequency = $(event.currentTarget).data('payment-frequency');
            } else {
                payment_frequency = $('[name="payment_frequency"]:checked').closest('label').data('payment-frequency');
            }

            switch (payment_frequency) {
                case 'monthly':
                    $(`[data-plan-payment-frequency="annual"]`).removeClass('d-inline-block').addClass('d-none');
                    $(`[data-plan-payment-frequency="lifetime"]`).removeClass('d-inline-block').addClass('d-none');

                    break;

                case 'annual':
                    $(`[data-plan-payment-frequency="monthly"]`).removeClass('d-inline-block').addClass('d-none');
                    $(`[data-plan-payment-frequency="lifetime"]`).removeClass('d-inline-block').addClass('d-none');

                    break

                case 'lifetime':
                    $(`[data-plan-payment-frequency="monthly"]`).removeClass('d-inline-block').addClass('d-none');
                    $(`[data-plan-payment-frequency="annual"]`).removeClass('d-inline-block').addClass('d-none');

                    break
            }

            $(`[data-plan-payment-frequency="${payment_frequency}"]`).addClass('d-inline-block');

            $(`[data-plan-${payment_frequency}="true"]`).removeClass('d-none').addClass('');
            $(`[data-plan-${payment_frequency}="false"]`).addClass('d-none').removeClass('');

        };

        $('[data-payment-frequency]').on('click', payment_frequency_handler);

        payment_frequency_handler();
    </script>
    <script>
        document.querySelectorAll('[data-choose-theme-style]').forEach(theme => {

            theme.addEventListener('click', event => {

                let chosen_theme_style = event.currentTarget.getAttribute('data-choose-theme-style');

                /* Set a cookie with the new theme style */
                set_cookie('theme_style', chosen_theme_style, 30, "\/demo\/");

                /* Change the css and button on the page */
                let css = document.querySelector(`#css_theme_style`);

                document.querySelector(`[data-theme-style]`).setAttribute('data-theme-style',
                    chosen_theme_style);

                switch (chosen_theme_style) {
                    case 'dark':
                        css.setAttribute('href',
                            "https:\/\/66analytics.com\/demo\/themes\/altum\/assets\/css\/bootstrap-dark.min.css?v=710"
                        );
                        document.querySelector(`[data-choose-theme-style="dark"]`).classList.add('d-none');
                        document.querySelector(`[data-choose-theme-style="light"]`).classList.remove(
                            'd-none');
                        break;

                    case 'light':
                        css.setAttribute('href',
                            "https:\/\/66analytics.com\/demo\/themes\/altum\/assets\/css\/bootstrap.min.css?v=710"
                        );
                        document.querySelector(`[data-choose-theme-style="dark"]`).classList.remove(
                            'd-none');
                        document.querySelector(`[data-choose-theme-style="light"]`).classList.add('d-none');
                        break;
                }

                event.preventDefault();
            });

        })
    </script>
</body>

</html>
